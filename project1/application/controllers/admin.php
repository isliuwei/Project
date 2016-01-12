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

    //??  16-1-12  12:01 by liuwei
    public function delete_admin(){
        $admin_id = $this -> input -> post('data-id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete($admin_id);
        $this -> load -> view('admin/admin-mgr');
    }

}

