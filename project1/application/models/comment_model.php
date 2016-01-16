<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {


    public function save_comment($name,$email,$website,$subject,$blog_id){
        $data = array(
            'username' => $name,
            'email' => $email,
            'website' => $website,
            'subject' => $subject,
            'blog_id' => $blog_id
        );
        $this -> db -> insert('t_comment',$data);

    }

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_comment comment');
        $this -> db -> order_by('add_time','desc' ); //按照时间降序排列评论信息
        return $this -> db -> get() -> result();
    }

    //!! 2016-01-13 11:06 by liuwei
//    public function get_all_by_blog_id($blog_id){
//        $this -> db -> select("comment.*, comment.add_time as comment_time"); //解决  add_time  同名问题
//        $this -> db -> from('t_comment comment');
//        $this -> db -> join('t_blog blog', 'comment.blog_id=blog.blog_id');
//        $this -> db -> where('blog.blog_id',$blog_id);
//        $this -> db -> order_by('comment_time','desc' ); //按照评论时间降序排列评论信息
//        return $this -> db -> get() -> result();
//    }

    //!!  2016-01-15 13:06 by liuwei(关联表的简化语法)
    public function get_all_by_blog_id($blog_id){
        $data = array(
            'blog_id' => $blog_id
        );
        $this -> db -> order_by('add_time','desc' ); //按照评论时间降序排列评论信息
        return $this -> db -> get_where('t_comment',$data) -> result();
    }

    //删
    //!! 16-1-15 11:25 by liuwei
    public function delete($comment_id){
        $this -> db -> delete('t_comment', array('comment_id' => $comment_id));
    }


}



// ?? 2016-01-14 14:20 by liuwei
//        $this -> db -> select("comment.*");
//        $this -> db -> from('t_comment comment');
//        $this -> db -> join('t_blog blog', 'blog.blog_id = comment.blog_id');