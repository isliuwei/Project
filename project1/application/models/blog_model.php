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
        //$this -> db -> join('t_comment comment', 'blog.blog_id=comment.comment_id');
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
//    public function updata_article(){
//
//
//    }

    //删
    public function delete($blog_id){
        $this -> db -> delete('t_blog', array('blog_id' => $blog_id));

    }

//    增 新增  ?? 2016-01-16 11:51
    public function save_articles($title,$content,$author,$photo,$type){
        $data = array(
            'blog_title' => $title,
            'blog_content' => $content,
            'blog_author' => $author,
            'blog_photo' => $photo,
            'blog_type' => $type
        );

        $this -> db -> insert('t_blog',$data);

    }

//    更新  新增  ?? 2016-01-19 15:04
    public function updata_article($blog_id,$type,$title,$author,$content,$photo){

        $data = array(
            'blog_type' => $type,
            'blog_title' => $title,
            'blog_author' => $author,
            'blog_content' => $content,
            'blog_photo' => $photo
        );

        $this -> db -> where('blog_id', $blog_id);
        $this -> db -> update('t_blog', $data);

    }






}