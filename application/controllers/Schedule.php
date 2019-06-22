<?php
class Schedule extends CI_Controller
{
public function schedulepickup(){

    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('location', 'Location', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('area', 'Area', 'required');
    $this->form_validation->set_rules('street', 'Street', 'required');
    if($this->form_validation->run()==true) {
        $name=$this->input->post("name");
        $location = $this->input->post("location");
        $date = $this->input->post("date");

        $area = $this->input->post("area");
        $street = $this->input->post("street");
        $this->load->model("schedule_model");
        $this->schedule_model->scheduled($name,$location, $date, $area, $street);
        $this->session->set_flashdata('success_msg', 'Success!!!');
        $this->load->view('user_panel');
    }
    else {
        $this->session->set_flashdata('error_msg','Error occured, Try again.');
        $this->load->view('user_panel');
    }


}
public function getScheduledData(){
    $this->load->model('schedule_model');
    $data['retData']=$this->schedule_model->getScheduledData();
    $this->load->view('schedule',$data);

}


}