<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index(){
        $this -> load -> view('admin/admin-index');
    }

    public function login(){
        $this -> load -> view('admin/login');
    }


    //检查用户
    public function check_login(){
        //1. 接收数据
        $admin_name = $this -> input -> post('admin_name');
        $admin_pwd = $this -> input -> post('admin_pwd');

        //2. 连接数据库  查数据
        $this -> load -> model('admin_model');
        $row = $this -> admin_model -> get_by_name_pwd($admin_name, $admin_pwd);

        //3. 跳转
        if($row){
            $this -> load -> view('admin/admin-index');
        }else{
            $this -> load -> view('admin/login');
        }
    }

    //用户管理
    public function admin_mgr(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all();
        if($result){
            $data = array(
              'admins' => $result
            );
            $this -> load -> view('admin/admin-mgr',$data);
        }
    }

    //文章管理
    public function admin_article_mgr(){
        $this -> load -> model('blog_model');
        $result = $this -> blog_model -> get_all();
        if($result){
            $data = array(
                'blogs' => $result
            );
            $this -> load -> view('admin/admin-article-mgr',$data);
        }
    }

    //评论管理
    public function admin_comment_mgr(){
        $this -> load -> model('comment_model');
        $result = $this -> comment_model -> get_all();
        if($result){
            $data = array(
                'comments' => $result
            );
            $this -> load -> view('admin/admin-comment-mgr',$data);
        }
    }

    //留言管理
    public function admin_message_mgr(){
        $this -> load -> model('message_model');
        $result = $this -> message_model -> get_all();
        if($result){
            $data = array(
                'messages' => $result
            );
            $this -> load -> view('admin/admin-message-mgr',$data);
        }
    }

    //!!  16-1-15  11:18 by liuwei
    //删除用户
    public function delete_admin(){
        $admin_id = $this -> input -> get('admin_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete($admin_id);
        //$this -> admin_mgr();
        redirect('admin/admin_mgr');
    }

    //!!  16-1-15  11:07 by liuwei
    //删除留言
    public function delete_message(){
        $message_id = $this -> input -> get('message_id');
        $this -> load -> model('message_model');
        $this -> message_model -> delete($message_id);
        //$this -> admin_message_mgr();
        redirect('admin/admin_message_mgr');
    }

    //!!  16-1-15  11:07 by liuwei
    //删除文章
    public function delete_blog(){
        $blog_id = $this -> input -> get('blog_id');
        $this -> load -> model('blog_model');
        $this -> blog_model -> delete($blog_id);
        //$this -> admin_article_mgr();
        redirect('admin/admin_article_mgr');
    }

    //!!  16-1-15  11:22 by liuwei
    //删除评论
    public function delete_comment(){
        $comment_id = $this -> input -> get('comment_id');
        $this -> load -> model('comment_model');
        $this -> comment_model -> delete($comment_id);
        //$this -> admin_comment_mgr();
        redirect('admin/admin_comment_mgr');

    }


    //!! 2016-01-16 09:21 by liuwei
    //新增管理
    public function admin_add_mgr(){
        $this -> load -> view('admin/admin-add-mgr');
    }

    //!! 2016-01-16 09:21 by liuwei
    //新增用户
    public function save_admin(){
        $name = $this -> input -> post('name');
        $pwd = $this -> input -> post('pwd');
        $photo = $this -> input -> post('photo');

        $this -> load -> model('admin_model');
        $this -> admin_model -> save_admin_by_name_pwd_photo($name,$pwd,$photo);

        echo "<script>alert('提交成功!')</script>";
        //$this -> admin_mgr();
        redirect('admin/admin_mgr');
    }

    //!! 2016-01-16 11:46 by liuwei
    //新增文章
    public function save_article(){
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $author = $this -> input -> post('author');
        $photo = $this -> input -> post('photo');
        $type = $this -> input -> post('type');


        $this -> load -> model('blog_model');
        $this -> blog_model -> save_articles($title,$content,$author,$photo,$type);
        echo "<script>alert('提交成功!')</script>";
        //$this -> admin_article_mgr();
        redirect('admin/admin_article_mgr');
    }



    //!! 2016-01-16 09:21 by liuwei
    //新增管理
    public function admin_updata_mgr(){
        $this -> load -> view('admin/admin-updata-mgr');
    }


    //!! 2016-01-17 20:39 by liuwei
    public function get_admin(){
        $admin_id = $this -> input -> get('admin_id');
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_admin_by_id($admin_id);

        if($result){
            $data = array(
                'admin' => $result
            );
            $this -> load -> view('admin/admin-updata-mgr',$data);
        }

    }

    //?? 2016-01-17
    public function updata_admin(){
        $admin_id = $this -> input -> post('admin_id');
        $name = $this -> input -> post('admin_name');
        $pwd = $this -> input -> post('admin_pwd');

        $this -> load -> model('admin_model');
        $this -> admin_model -> updata_admin($admin_id,$name,$pwd);
        echo "<script>alert('提交成功!')</script>";
        //$this -> admin_mgr();
        redirect('admin/admin_mgr');
        //redirect('admin/get_admin?admin_id='.$admin_id);
    }

    //?? 2016-01-17 21:39 by liuwei
    public function get_blog(){
        $blog_id = $this -> input -> get('blog_id');
        $this -> load -> model('blog_model');
        $result = $this -> blog_model -> get_by_id($blog_id);

        if($result){
            $data = array(
                'blog' => $result
            );
            $this -> load -> view('admin/admin-updata-article',$data);
        }

    }

//?? 2016-01-19
    public function updata_article()
    {
        $blog_id = $this -> input -> post('blog_id');
        $type = $this -> input -> post('type');
        $title = $this -> input -> post('title');
        $author = $this -> input -> post('author');
        $content = $this -> input -> post('content');
        $photo = $this -> input -> post('photo');

        $this -> load -> model('blog_model');
        $this -> blog_model -> updata_article($blog_id,$type,$title,$author,$content,$photo);

        redirect('admin/admin_article_mgr');

    }

    //!! 2016-01-20 12:47 by liuwei
    /*****批量删除*****/
    public function remove_checked_messages()
    {
        $messageIds = $this -> input -> get('Ids');

        $this -> load -> model('message_model');
        $result = $this -> message_model -> delete_by_ids($messageIds);

        if($result){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    /*****批量删除*****/




}

