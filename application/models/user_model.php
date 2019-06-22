<?php
class User_model extends CI_Model{
    public function register_user($user){
        $this->db->insert('user',$user);
    }
    public function login_user($email,$pass){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email',$email);
        $this->db->where('user_password',$pass);
        $query=$this->db->get();
        $result=$query->result();
        if($query->num_rows()>0){
//           $this->session->set_userdata('user_id',$result);
            foreach ($result as $user_data)
            {

            }
           if($query->row('user_type')=='admin'){
               return 'admin';
           }
           elseif($query->row('user_type')=='standard user'){
               return 'standard user';
           }
            }

        else{
            return 'false';
        }

    }

}