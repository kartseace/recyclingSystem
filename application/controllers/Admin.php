<?php
class Admin extends CI_Controller{
                   
    public function __construct(){
        parent:: __construct();
        $this->load->helper('url','form','file');
        $this->load->library('session');

    }

    public function admin_paper(){
//        $this->load->view('add_paper',array('error'=>''));
        $paper['title']="errors";
        $this->load->view('add_paper',$paper);
    }
    public function add_waste(){
        $this->load->view('add_waste');
    }
    public function admin_glass(){
        $this->load->view('add_glass');
    }
    public function admin_metal(){
        $this->load->view('add_metal');
    }
    public function admin_ewaste(){
        $this->load->view('add_ewaste');
    }
    public function admin_other(){
        $this->load->view('add_other');
    }
    public function admin_general(){
        $this->load->view('general');
    }
    public function admin_update(){
        $this->load->view('update');
    }


    public function uploading()
    {
        $config = array(
           'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|png|jpeg',
            'max_size' =>'100',
            'max_width' =>'1024',
           'max_height' =>'768',
            'filename'=>url_title($this->input->post('file'))

        );
        $this->load->library('upload', $config);
        $this->load->library('form_validation');

      //  $this->form_validation->set_rules('file', 'Picture', 'required');
        $this->form_validation->set_rules('waste_type', 'WasteType', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() && $this->upload->do_upload('file')) {
            $value = $this->upload->data();//when we upload  we get some value having the array of information of upload file
            $path = base_url("uploads/" . $value['raw_name'] . $value['file_ext']);//to display image we need a path
            //print_r($path);
            $this->load->model('waste_model');
            //prepare array of user data
            $data = array(
                'file_name' => $path,
                'waste_type'=>$this->input->post('waste_type'),
                'price'=>$this->input->post('price'),
                'description'=>$this->input->post('description'),
            );

            //pass userdata to model
            $insertUfilserData=$this->waste_model->addwaste($data);



           $this->session->set_flashdata('msg', 'Success!!!');
            redirect('admin/admin_paper');


        }
       else{
          echo $this->upload->display_errors();
          $this->admin_paper();

        }


        }
        public function getData(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getData();
        $this->load->view("paper",$data);
        }


    public function getData2(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getData2();
        $this->load->view("glass_plastic",$data);
    }

    public function getData3(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getData3();
        $this->load->view("metal_steel",$data);
    }

    public function getData4(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getData4();
        $this->load->view("ewaste",$data);
    }

    public function getData5(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getData5();
        $this->load->view("other_service",$data);
    }


    public function getDataAction(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getDataAction();
        $this->load->view("action",$data);
    }

    public function getDataAction2(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getDataAction2();
        $this->load->view("action",$data);
    }

    public function getDataAction3(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getDataAction3();
        $this->load->view("action",$data);
    }
    public function getDataAction4(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getDataAction4();
        $this->load->view("action",$data);
    }
    public function getDataAction5(){
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->getDataAction5();
        $this->load->view("action",$data);
    }


    public function updateAction(){
        $id=$this->uri->segment(3);
        $this->load->model('waste_model');
        $data['retData']=$this->waste_model->updateAction($id);

        $this->load->view("update",$data);
       // echo print_r($data);
    }

    public function delData(){
        $id=$this->uri->segment(3);
       // echo $id;
        $this->load-> model('waste_model');
        $this->waste_model->delData($id);
        redirect('admin/getDataAction');
    }

    public function updateData(){
        $wasteid=$this->input->post('hidden');
       // echo $wasteid;
            $data = array(
                //'file_name' => $path,
                'waste_type'=>$this->input->post('waste_type'),
                'price'=>$this->input->post('price'),
                'description'=>$this->input->post('description'),
            );

            //pass userdata to model

        $this->load->model('waste_model');
            $this->waste_model->updateData($wasteid,$data);



            $this->session->set_flashdata('msg', 'Success!!!');
            redirect('admin/getDataAction');




    }


}
?>