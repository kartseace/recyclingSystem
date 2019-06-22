<?php
class User extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->helper('url','form');
        $this->load->library('session');

    }
    public function loadhome(){
        $this->load->view('home');
    }
    public function register_view(){
        $this->load->view('register');
    }
    public function login_view(){
        $logindata['title']="errors";
        $this->load->view('login',$logindata);
    }
    public function userHelp(){
        $this->load->view('userhelp');
    }

    public function register_user(){
        $usertype='standard user';//creating a variable usertype
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Name', 'required|min_length[5]');
        $this->form_validation->set_rules('user_email', 'E-mail', 'required|valid_email|is_unique[user.user_email]');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        $this->form_validation->set_rules('re_password', 'confirmpassword', 'required|matches[user_password]');
        if($this->form_validation->run()==true){
            $this->load->model('user_model');
            $user=array(
              'user_name'=>$this->input->post('user_name'),//getting user input user name into user_name
                'user_email'=>$this->input->post('user_email'),
                'user_password'=>md5($this->input->post('user_password')),
                'gender'=>$this->input->post('gender'),
                'user_age'=>$this->input->post('user_age'),
                'user_type'=>$usertype
            );
            $this->user_model->register_user($user);
            $this->session->set_flashdata('success_msg','Registered successfully.Now Login to your account.');
            redirect('user/login_view');
        }
        else{
            $this->session->set_flashdata('error_msg','Error occured, Try again.');
         //   redirect('user/register_view');
            echo validation_errors();
        }
    }
     public function login_user(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules("user_email","Email", 'required');
        $this->form_validation->set_rules("user_password","Password",'required');
        if($this->form_validation->run()==true){
            $email=$this->input->post('user_email');
            $pass=md5($this->input->post('user_password'));
            $this->load->model('user_model');
            $checkuser=$this->user_model->login_user($email,$pass);
          //  echo $checkuser;
            if($checkuser=='admin'){
               // echo 'check';
                $session_data=array(
                  'user_email'=>$email,
                );
                $this->session->set_userdata($session_data);
                echo 'admin';
              redirect('user/admin_panel');
            }
            else if($checkuser=='standard user'){
                $session_datauser=array(
                    'user_email'=>$email,
                );
                $this->session->set_userdata($session_datauser);
                echo 'standard';
               redirect('user/user_panel');
            }
            else if($checkuser=='false'){
                $this->session->set_flashdata('errors','Invalid username or password');
            redirect('user/login_view');
            }


        }

        else{
          //  echo validation_errors();
            $this->login_view();
        }

     }

    public function admin_panel(){
        $this->load->view('admin_panel');
    }
    public function user_panel(){

        $book['title']='book';
            $this->load->view('user_panel',$book);

    }
}
