<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {




    public function save_user($username,$password,$age,$sex,$realname)
    {
        $data = array(
            'username' => $username,
            'password' => $password,
            'age' => $age,
            'sex' => $sex,
            'realname' => $realname
        );

        $this -> db -> insert('t_admin',$data);
    }



    public function get_by_name_pwd($name,$pwd)
    {
        $data = array(
            'username' => $name,
            'password' => $pwd
        );
        // select * from t_user where username = 'nce16220811' and password = '123456'
        $query = $this -> db -> get_where('t_user',$data);

        //返回一行查询结果
        return $query -> row();


    }
}

