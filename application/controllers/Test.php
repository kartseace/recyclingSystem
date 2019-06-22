<?php
class Test extends CI_Controller
{
//    public function __construct(){
//        parent:: __construct();
//
//        $this->load->library('unit_test');
//
//    }
    public function userTest(){
        $this->load->library('unit_test');
        $this->load->model('user_model');
        $user=array(
            'user_name'=>'karma',//getting user input user name into user_name
            'user_email'=>'karma@gmail.com',
            'user_password'=>md5('1234567'),
            'gender'=>'male',
            'user_age'=>'22',
            'user_type'=>'standard user'
        );
        $result= $this->user_model->register_user($user);
        $anticipated_res=1;
        $testname='user test';
        $output=$this->unit->run($result,$anticipated_res,$testname);
        echo $output;
    }
//
//    public function loginTest(){
//        $this->load->model('user_model');
//       // $login=md5('admin123');
//
//        $res = $this->user_model->login_user('admin@gmail.com','1234567');
//        echo print_r($res);
//        $anticipated_res='boolean';
//        $testname='login test';
//        $output=$this->unit->run($res,$anticipated_res,$testname);
//        echo $output;
//
//    }

    public function addTest(){
        $this->load->library('unit_test');
        $this->load->model('waste_model');
        $data = array(
            'file_name' => 'http://localhost/recycling/uploads/paper.jpg',
            'waste_type'=>'paper',
            'price'=>'12',
            'description'=>'Newspaper per Kg 12',
        );
        $result= $this->waste_model->addwaste($data);
        $anticipated_res=1;
        $testname='Add test';
        $output=$this->unit->run($result,$anticipated_res,$testname);
        echo $output;
    }

    public function viewTest(){
        $this->load->library('unit_test');
        $this->load->model('waste_model');
        $result= $this->waste_model->getData();
        $anticipated_res=1;
        $testname='View test';
        $output=$this->unit->run($result,$anticipated_res,$testname);
        echo $output;

    }

    public function recordTest(){
        $this->load->library('unit_test');
        $this->load->model('schedule_model');
        $result=$this->schedule_model->getScheduledData();
        $anticipated_res=1;
        $testname='Record test';
        $output=$this->unit->run($result,$anticipated_res,$testname);
        echo $output;
    }

    public function updateTest(){
        $this->load->library('unit_test');
        $this->load->model('waste_model');

        $data1 = array(
          //  'file_name' => 'http://localhost/recycling/uploads/paper.jpg',
            'waste_type'=>'paper',
            'price'=>'15',
            'description'=>'Newspaper per Kg 12',
        );
        $result=$this->waste_model->updateData('45',$data1);
        $anticipated_res=1;
        $testname='Update test';
        $output=$this->unit->run($result,$anticipated_res,$testname);
        echo $output;
    }

    public function delTest(){
        $this->load->library('unit_test');
        $this->load->model('waste_model');

        $result=$this->waste_model->delData('79');
        $anticipated_res=1;
        $testname='Del test';
        $output=$this->unit->run($result,$anticipated_res,$testname);
        echo $output;
    }

    public function scheduleTest(){
        $this->load->library('unit_test');
        $this->load->model('schedule_model');
        $result=$this->schedule_model->getScheduledData();
        $anticipated_res=1;
        $testname='Schedule test';
        $output=$this->unit->run($result,$anticipated_res,$testname);
        echo $output;
    }

}
