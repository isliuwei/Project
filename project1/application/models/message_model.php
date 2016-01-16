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

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_message message');
        $this -> db -> order_by('add_time','desc' ); //按照时间降序排列留言信息
        return $this -> db -> get() -> result();
    }

    public function delete($message_id){
        $this -> db -> delete('t_message', array('message_id' => $message_id));
    }



}

