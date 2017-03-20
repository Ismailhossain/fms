<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class salary_controller extends CI_Controller
{



    public function access_map(){
        return array(

            'add_salary'=>'view',
            'saveSalary'=>'create',
//            'saveSalary'=>'view',
            'view_salary_list' => 'view',
            'delete_checkbox_salary_list' => 'delete',
            'delete_salary_list' => 'delete',
//            'delete_salary_list' => 'view',
//            'edit_salary_list' => 'edit',
           'edit_salary_list' => 'view',
            'updatesalary' => 'edit',
//            'updatesalary' => 'view',





        );

    }


    public function add_salary(){

        $this->load->model('salary_model');

        $data = array();

        $data['result'] = $this->salary_model->employee_name();

        $data['mainContent'] = $this->load->view('add_salary', $data, true);
        $data['title'] = "Add Salary";
        $this->load->view('index', $data);


    }

public function saveSalary() {

    $this->load->helper('url');
    $data = array();
    $data['employee_id'] = $this->input->post('employee_id', true);
    $data['salary'] = $this->input->post('salary', true);
    $this->load->model('salary_model');
    $this->salary_model->saveSalary($data);


    $this->session->set_userdata('username','Salary Add susseccfully ');
    redirect('salary_controller/add_salary', 'refresh');

}

    function view_salary_list()
    {
        $data = array();
        $this->load->model('salary_model');
        $data['result'] = $this->salary_model->all_employee();
        $data['title'] = "View Salary List";
        $data['mainContent'] = $this->load->view('view_salary_list', $data, true);
        $this->load->view('index', $data);
    }

    function delete_checkbox_salary_list(){
        $dat=$this->input->post('row_sel');
        for($i=0; $i<sizeof($dat);$i++){
            $this->load->model('salary_model');
            $this->salary_model->delete_salary_list($dat[$i]);
        }
        $this->view_salary_list();
    }

    function delete_salary_list($id)
    {
        $data = array();
        $this->load->model('salary_model');
        $this->salary_model->delete_salary_list($id);
        $this->session->set_userdata('username','Data susseccfully Delete.');
        redirect('salary_controller/view_salary_list', 'refresh');

//        $this->view_salary_list();

    }




    public function edit_salary_list($id)
    {
        $data = array();
        $this->load->model('salary_model');
        $data['row'] = $this->salary_model->selectMemberById($id);
       $this->load->view('update_salary_list', $data);
        //$this->load->view('index', $data);
    }



      public function updatesalary()
      {

          $this->load->helper('url');
          $data = array();
         // $id = $this->input->post('salary_id', true);
          $data['salary_id']= $this->input->post('salary_id', true);
          $data['employee_id'] = $this->input->post('employee_id', true);
          $data['salary'] = $this->input->post('salary', true);
          $data['advance_paid'] = $this->input->post('advance_paid', true);
          $data['due_salary'] = $this->input->post('due_salary', true);
          $data['full_paid'] = $this->input->post('full_paid', true);
          $data['paid_month'] = $this->input->post('paid_month', true);

          $this->load->model('salary_model');

          $this->salary_model->editsalary($data);


          $this->salary_model->salaryhistory($data);

          $this->session->set_userdata('username','Congraculation! Your request has been successful.');
          redirect('salary_controller/view_salary_list', 'refresh');

//          $this->view_salary_list();


      }






















}