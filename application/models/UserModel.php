<?php
class UserModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert_record($table, $data){
        $lastInsertId = $this->db->insert($table, $data);
        return $lastInsertId;
    }


    public function get_all($table_name){
        $result = $this->db->get($table_name);
        // "select * from {$table_name}"
        // echo '<pre>';
        // print_r($result);
        // die;
        return $result->result_array();
    }

    public function check_field($table, $where_arr, $fields="*"){
        //  $where_arr = array('email' => $email, 'password' => $password);

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->where($where_arr);
        $result = $this->db->get();
        return $result->result_array();

        // $this->db->select('*');
        // $this->db->from('blogs');
        // $this->db->join('comments', 'comments.id = blogs.id');
        // $query = $this->db->get();

        // Produces:
        // SELECT * FROM {blogs} where {email} = {$email} and {password} = {$password}

    }
}



?>