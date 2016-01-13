<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {


    public function save_comment($name,$email,$website,$subject){
        $data = array(
            'username' => $name,
            'email' => $email,
            'website' => $website,
            'subject' => $subject
        );
        $this -> db -> insert('t_comment',$data);

    }

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_comment comment');
        $this -> db -> order_by('add_time','desc' ); //按照时间降序排列评论信息
        return $this -> db -> get() -> result();
    }

    //?? 2016-01-13 11:06
    public function get_all_by_blog_id($blog_id){
        $this -> db -> select("comment.*, comment.add_time as comment_time");
        $this -> db -> from('t_comment comment');
        $this -> db -> join('t_blog blog', 'comment.blog_id=blog.blog_id');
        $this -> db -> where('blog.blog_id',$blog_id);
        $this -> db -> order_by('comment_time','desc' ); //按照评论时间降序排列评论信息
        return $this -> db -> get() -> result();
    }


}