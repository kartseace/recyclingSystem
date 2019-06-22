<?php
class Waste_model extends CI_Model{
    public function addwaste($data){
       $insertData= $this->db->insert('tbl_upload',$data);

    }



    public function getData(){
$this->db->select("file_name,price,description");
$this->db->from('tbl_upload');
$this->db->where('waste_type','paper');
return $query=$this->db->get();
    }

    public function getData2(){
        $this->db->select("file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','glass_plastic');
        return $query=$this->db->get();
    }

    public function getData3(){
        $this->db->select("file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','metal_steel');
        return $query=$this->db->get();
    }

    public function getData4(){
        $this->db->select("file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','ewaste');
        return $query=$this->db->get();
    }

    public function getData5(){
        $this->db->select("file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','other');
        return $query=$this->db->get();
    }

//    public function getData6(){
//        $this->db->select("file_name,price,description");
//        $this->db->from('tbl_upload');
//        $this->db->where('waste_type','general');
//        return $query=$this->db->get();
//    }

    public function getDataAction(){
        $this->db->select("image_id,file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','paper');
        return $query=$this->db->get();
    }

    public function getDataAction2(){
        $this->db->select("image_id,file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','glass_plastic');
        return $query=$this->db->get();
    }

    public function getDataAction3(){
        $this->db->select("image_id,file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','metal_steel');
        return $query=$this->db->get();
    }
    public function getDataAction4(){
        $this->db->select("image_id,file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','ewaste');
        return $query=$this->db->get();
    }
    public function getDataAction5(){
        $this->db->select("image_id,file_name,price,description");
        $this->db->from('tbl_upload');
        $this->db->where('waste_type','other');
        return $query=$this->db->get();
    }

    public function updateAction($id){
        $this->db->select('*');
        $this->db->from('tbl_upload');
    $this->db->where('image_id',$id);
        return $query=$this->db->get();
    }

    public function delData($id){
        $this->db->where("image_id",$id);
        $this->db->delete("tbl_upload");

    }

    public function updateData($wasteid,$data){
        $this->db->where('image_id',$wasteid);
        $this->db->update('tbl_upload',$data);

    }


}