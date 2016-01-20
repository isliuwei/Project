<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    //查 登录
    public function get_by_name_pwd($name,$pwd)
    {
        $data = array(
            'admin_name' => $name,
            'admin_pwd' => $pwd
        );
        // select * from t_user where username = 'nce16220811' and password = '123456'
        $query = $this -> db -> get_where('t_admin',$data);

        //返回一行查询结果
        return $query -> row();
    }

    public function get_all(){
        return $this -> db -> get('t_admin') -> result();
    }

    //增 新增  ?? 2016-01-13 14:59
//    public function save_admin($admin_name, $admin_pwd){
//        $data = array(
//            'admin_name' => $admin_name,
//            'admin_pwd' => $admin_pwd
//        );
//        $this -> db -> insert('t_admin',$data);
//    }

    //改 ?? 2016-01-13 14:59
//    public function updata($admin_id){
//
//        $data = array(
//            'admin_name' => $admin_name,
//            'admin_pwd' => $admin_pwd
//        );
//        $this -> db -> where('admin_id',$admin_id);
//        $this -> db -> updata('t_admin', $data);
//    }

    //删
    //!! 16-1-15 11:19 by liuwei
    public function delete($admin_id){
        $this -> db -> delete('t_admin', array('admin_id' => $admin_id));
    }

//    增 新增  ?? 2016-01-16 11:03
    public function save_admin_by_name_pwd_photo($name, $pwd,$photo){
        $data = array(
            'admin_name' => $name,
            'admin_pwd' => $pwd,
            'admin_photo' => $photo
        );
        $this -> db -> insert('t_admin',$data);
    }

//查 !! 2016-01-17 19:57
    public function get_admin_by_id($admin_id)
    {
        $data = array(
            'admin_id' => $admin_id
        );
        $query = $this -> db -> get_where('t_admin',$data);
        //返回一行查询结果
        return $query -> row();
    }

    public function updata_admin($admin_id,$name,$pwd){
        $data = array(
            'admin_name' => $name,
            'admin_pwd' => $pwd
        );

        $this->db->where('admin_id', $admin_id);
        $this->db->update('t_admin', $data);
    }




}