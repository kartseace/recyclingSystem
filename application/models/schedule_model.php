<?php
class schedule_model extends CI_Model
{
    public function scheduled(){
$data=array(
    'name'=>$this->input->post('name'),
    'location'=>$this->input->post('location'),
    'date'=>$this->input->post('date'),
   'area'=>$this->input->post('area'),
   // 'time'=>$this->input->post('time'),
    'street_address'=>$this->input->post('street'),

);
return $this->db->insert("tbl_schedule",$data);
    }

    public function getScheduledData(){
        $this->db->select('*');
        $this->db->from('tbl_schedule');
//        $this->db->select("location,date,timer,area,street_address");
//        $this->db->from('tbl_');
//        $this->db->where('waste_type','paper');
        return $query=$this->db->get();
    }


}