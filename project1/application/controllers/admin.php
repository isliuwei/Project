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
        $this -> admin_mgr();
    }

    //!!  16-1-15  11:07 by liuwei
    //删除留言
    public function delete_message(){
        $message_id = $this -> input -> get('message_id');
        $this -> load -> model('message_model');
        $this -> message_model -> delete($message_id);
        $this -> admin_message_mgr();
    }

    //!!  16-1-15  11:07 by liuwei
    //删除文章
    public function delete_blog(){
        $blog_id = $this -> input -> get('blog_id');
        $this -> load -> model('blog_model');
        $this -> blog_model -> delete($blog_id);
        $this -> admin_article_mgr();
    }

    //!!  16-1-15  11:22 by liuwei
    //删除评论
    public function delete_comment(){
        $comment_id = $this -> input -> get('comment_id');
        $this -> load -> model('comment_model');
        $this -> comment_model -> delete($comment_id);
        $this -> admin_comment_mgr();
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
        $this -> admin_mgr();
    }

    //!! 2016-01-16 11:46 by liuwei
    //新增文章
    public function save_article(){
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $author = $this -> input -> post('author');
        $photo = $this -> input -> post('photo');


        $this -> load -> model('blog_model');
        $this -> blog_model -> save_articles($title,$content,$author,$photo);
        echo "<script>alert('提交成功!')</script>";
        $this -> admin_article_mgr();
    }





}

