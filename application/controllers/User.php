<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public $page_title = 'CI learning';

    public function __construct(){
        parent::__construct();
        // $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->library('session');
        $this->load->helper('MY_table_helper');
    }




    public function abc($id=NULL){
        $data = array(
            'msg'=>'This is home page', 
            'page_title'=>$this->page_title,
            'id'=>$id);
        $this->load->view('home.php', $data);
    }
    

    public function users($page_no=1, $row_limit=20){
        if($this->session->userdata('id')){
            $users = $this->UserModel->get_all('users');
            // echo '<pre>';
            // print_r($users);
            // die;
            $data = array(
                'msg'=>'This is users page', 
                'page_title'=>$this->page_title,
                'page'=>$page_no,
                'limit'=>$row_limit,
                'users'=>$users);
            $this->load->view('users', $data);
        } else {
            redirect('/user/sign_in');
        }
    }

    public function sign_in(){
        if($this->session->userdata('id')){ 
            redirect('/user/users');
        } else {

            $data = array(
                'msg'=>'This is sign in page', 
                'page_title'=>$this->page_title);
            if($this->input->method() === 'post'){
                // Your Email field is invalid
                // echo 'valid'; die;
                $this->form_validation->set_rules("email", "Email", "trim|required");
                $this->form_validation->set_rules("password", "Password", "trim|required");
                if($this->form_validation->run() == false){
                    
                    // echo 'form invalid';
                } else {
                    // echo 'form is valid';
                    $email = $this->input->post("email");
                    $password = $this->input->post("password");
                    $where_arr = array('email'=>$email);
                    $users = $this->UserModel->check_field('users', $where_arr, "Id, Email, Password");
                    // echo '<pre>';
                    // print_r($users);
                    // die;
                    if(count($users)>0){
                        $user = $users[0];
                        if($user['Password'] == $password){
                            // echo 'true'; die;
                            // email and password is correct
                            $this->session->set_userdata('id',$user['Id']);
                            $this->session->set_flashdata('sucess', 'Login success');
                            
                            redirect('/user/users');
                        } else {
                            $this->session->set_flashdata('error', 'Invalid Credentials!!!');
                        }
                    } else {
                        $this->session->set_flashdata('error', 'Invalid Credentials!!!');
                    }
                }
            }
            $this->load->view('sign_in.php', $data);
        }
    }

    public function error_404(){
        $this->load->view('404_error');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/user/sign_in');
    }

    public function profile(){
        if($this->session->userdata('id')){ 
            $user_id = $this->session->userdata('id');
            $where_arr = array('Id'=>$user_id);
            $users = $this->UserModel->check_field('users', $where_arr);
            if(count($users)>0){
                $user = $users[0];
                // echo '<pre>';
                // print_r($user);
                $data = array('user'=>$user, 'page_title'=>'Profile Page');
                $this->load->view('profile', $data);
            } else{
                redirect('/user/sign_in');
            }
        } else {
            redirect('/user/sign_in');
        }
    }

    public function register(){
        if($this->session->userdata('id')){ 
            redirect('/user/users');
        } else {
            $data['title']="register page";
            if($this->input->method() === 'post'){
                $this->form_validation->set_rules("firstName", "First Name", "trim|required|min_length[3]");
                $this->form_validation->set_rules("lastName", "Last Name", "trim|required");
                $this->form_validation->set_rules("email", "Email", "trim|required|is_unique[users.email]",
                    array(
                        'is_unique'=>'User with this %s already exists.'
                    )
                );
                $this->form_validation->set_rules("password", "Password", "trim|required");
                if($this->form_validation->run() == false){
                    // if form validation fails, do nothing.
                }
                else{
                    // if form is valid
                    $firstName = $this->input->post("firstName");
                    $lastName = $this->input->post("lastName");
                    $email = $this->input->post("email");
                    $password = $this->input->post("password");

                    $data_arr = array(
                        'FirstName'=>$firstName,
                        'LastName'=> $lastName,
                        'Email'=>$email,
                        'Password'=>$password
                    );

                    $this->UserModel->insert_record('users', $data_arr);
                    $this->session->set_flashdata('success', 'You are registered successfully');

                }
            }
            $this->load->view('register', $data);
        }
    }
}


?>