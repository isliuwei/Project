<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    //查
    // 返回数据库中所有博客文章的结果
//    public function get_all(){
//        return $this -> db -> get('t_blog') -> result();
//    }


    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.blog_author=admin.admin_id');
        return $this -> db -> get() -> result();
    }

    public function get_by_page($page){
        //return $this->db->get('t_blog', 6, $page) -> result();
        $this -> db -> select("*");
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.blog_author=admin.admin_id');
        $this -> db -> limit(6, $page);
        return $this -> db -> get() -> result();
    }

    public function get_by_id($blog_id)
    {
        $this -> db -> select("*");
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.blog_author = admin.admin_id');
        $this -> db -> where('blog.blog_id',$blog_id);
        $query = $this -> db -> get();
        //返回一行查询结果
        return $query -> row();
    }

    //增
    public function save(){

    }

    //改
    public function updata(){

    }

    //删
    public function delete($blog_id){

    }

}