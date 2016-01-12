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

    //增
    public function save($admin_name, $admin_pwd){

    }

    //改
    public function updata(){

    }

    //删
    //?? 16-1-12 12:00 by liuwei
    public function delete($admin_id){
        $this -> db -> delete('t_admin', array('admin_id' => $admin_id));
    }
}