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
        $this -> db -> join('t_blog blog', 'comment.blog_id=blog.blog_id');
        return $this -> db -> get() -> result();
    }


}