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

    //!! 2016-01-20 12:20 by liuwei
    /*****批量删除*****/
    public function delete_by_ids($messageIds){//$messageIds = 1,2,3,4,5
        //查找多条 where_in 数组
        //$this -> db -> where_in('message_id',$messageIds);
        //$this -> db -> delete('t_message');
        $this -> db -> query('delete from t_message where message_id in('.$messageIds.')');
        if($this -> db -> affected_rows() > 0){
            return TRUE;
        }
            return FALSE;
    }
    /*****批量删除*****/



}

