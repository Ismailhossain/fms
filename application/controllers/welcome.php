<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function access_map(){
        return array(

            'index'=>'view',
            'AboutFMS'=>'view',

        );
    }

	public function index()
	{
        $data = array();
        $data['mainContent'] =$this->load->view('content',$data, true);
        $data['title'] = "Welcome";

        $this->load->view('index',$data);
	}
    public function AboutFMS(){
        $data=array();
        $data['mainContent']=$this->load->view('AboutFMS',$data,true);
        $data['title'] = "About FMS";
        $this->load->view('index',$data);
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */





