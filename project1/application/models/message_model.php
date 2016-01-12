<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {


    public function save_message($username,$email,$content){
        $data = array(
            'username' => $username,
            'email' => $email,
            'content' => $content
        );
        $this -> db -> insert('t_message',$data);

    }

    public function get_by_username($username){
        return $this -> db -> get_where('t_message',array(
            'username' => $username
        )) -> row();
    }




}

