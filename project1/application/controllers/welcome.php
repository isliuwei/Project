<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
//		$this->load->view('index');

		$this -> load -> model('blog_model');
		$result = $this -> blog_model -> get_all();
		if($result){
			$data = array(
					'articles' => $result
			);
			$this -> load -> view('index',$data);
		}
	}


	//??
//	public function single()
//	{
//		$this -> load -> model('blog_model');
//		$result = $this -> blog_model -> get_by_id($blog_id);
//		$data = array(
//			'blog_article' => $result
//		);
//		$this->load->view('single',$data);
//	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function single()
	{
		$this->load->view('single');
	}



//	public function welcome_message()
//	{
//		$this->load->view('welcome_message');
//	}

	public function message()
	{
		//1.接收数据
		$username = $this -> input -> post('username');
		$email = $this -> input -> post('email');
		$content = $this -> input -> post('content');

		//2.连接数据库
		if($username == '' || $email == '' || $content == ''){
//			$this->load->view('contact'); //与45行代码效果相同
//			$this->contact(); //调用方法
			echo 'fail';

		}else{
			$this -> load -> model('message_model');
			$this -> message_model -> save_message($username,$email,$content);

			//3.跳转
//			echo "<script>alert('感谢您的留言!');</script>";
//			$this->load->view('contact');
			echo 'success';
		}

	}

	public function check_name()
	{
		//1.接收数据
		$uname = $this -> input -> get('uname');

		//2.连接数据库
		$this -> load -> model('message_model');
		$row = $this -> message_model -> get_by_username($uname);
		if($row){
			echo 'fail';
		}else{
			echo 'success';
		}

	}

	public function comment()
	{
		//1.接收数据
		$name = $this -> input -> post('name');
		$email = $this -> input -> post('email');
		$website = $this -> input -> post('website');
		$subject = $this -> input -> post('subject');

		//2.连接数据库
		if($name == '' || $email == '' || $website == '' || $subject == ''){

			$this -> load -> view('single');
		}else{
			$this -> load -> model('comment_model');
			$this -> comment_model -> save_comment($name,$email,$website,$subject);

			//3.跳转
			echo "<script>alert('感谢您的评论!');</script>";
			$this->load->view('single');
		}
	}

	public function get_articles(){
		$page = $this -> input -> get('page');
		$this -> load -> model('blog_model');
		$all = $this -> blog_model -> get_all();
		$total = count($all);
		$total_page = ceil($total / 6);
		$result = $this -> blog_model -> get_by_page($page);
		$json = array(
				'data' => $result,
				'isEnd' => $page/6+1<$total_page?false:true
		);
		echo json_encode($json);
	}



	//博客文章操作
//	public function welcome_message()
//	{
//		$this -> load -> model('blog_model');
//		$result = $this -> blog_model -> get_all();
//		if($result){
//			$data = array(
//					'articles' => $result
//			);
//			$this -> load -> view('welcome_message',$data);
//		}
//	}




}

