<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class main_controller extends CI_Controller
{


    public function index()
    {
        $data = array();
        //  $data['mainContent'] = $this->load->view('add_group', $data, true);
        $data['title'] = "Add group-info";
        $this->load->view('index', $data);
    }

    public function access_map()
    {
        return array(
            'home' => 'view',
            'add_author' => 'view',
            'add_client' => 'view',
            'view_client' => 'view',
            'delete_client' => 'delete',
            'delete_checkbox_user' => 'delete',
            'saveAuthor' => 'create',
//            'saveAuthor' => 'view',
            'saveclient' => 'create',
//            'saveclient' => 'view',
            'update_client' => 'edit',
            'edit_client' => 'view',
//            'update_client' => 'view',
            'index' => 'view',

        );

    }

    public function  home()
    {
        $data = array();
        $data['mainContent'] = $this->load->view('content', $data, true);
        $data['title'] = "Welcome";

        $this->load->view('index', $data);
    }


    public function add_author()
    {
        $this->load->model('main_model');

        $data = array();

        $data['result'] = $this->main_model->type_name();
        $data['mainContent'] = $this->load->view('add_author', $data, true);
        $data['title'] = "Add Employee-info";
        $this->load->view('index', $data);
    }

    public function add_client()
    {


        $this->load->model('main_model');
        $data = array();

        $data['result'] = $this->main_model->client_type_name();

        $data['mainContent'] = $this->load->view('add_client', $data, true);
        $data['title'] = "Add Client";

        $this->load->view('index', $data);

    }

    public function view_client()
    {
        $data = array();
        $this->load->model('main_model');
        $data['result'] = $this->main_model->view_client();
        $data['title'] = "View Client List";


        $data['mainContent'] = $this->load->view('view_client', $data, true);
        $this->load->view('index', $data);

    }

    public function delete_client($id)
    {

        $data = array();
        $this->load->model('main_model');
        $this->main_model->delete_client($id);
        $this->session->set_userdata('username', 'Delete has been successful.');
        $this->view_client();

    }


    function delete_checkbox_user()
    {
        $dat = $this->input->post('row_sel');
        for ($i = 0; $i < sizeof($dat); $i++) {

            $this->load->model('main_model');
            $this->main_model->delete_client($dat[$i]);
        }
        $this->session->set_userdata('username', 'Delete has been successful.');

        $this->view_client();
    }


    public function saveAuthor()
    {

        $this->load->library('session');
        $this->load->library('validation');
        $rules ['first_name'] = "trim|required";
        $rules ['last_name'] = "trim|required";
        $rules ['email_address'] = "trim|required|valid_email";
        $rules ['password'] = "trim|required|min_length[6]|matches[confirm_password]";
        $rules ['confirm_password'] = "trim|required|min_length[6]";
        $rules ['joining_date'] = "trim|required";

        $rules ['user_role_id'] = "trim|required";

        $this->validation->set_rules($rules);

        $fields ['first_name'] = "First name";
        $fields ['last_name'] = "Last name";
        $fields ['email_address'] = "E-mail";
        $fields ['joining_date'] = "Joining Date";
        $fields ['password'] = "Password";
        $fields ['confirm_password'] = "Confirm Password Mustbe Same as Password";
        $fields ['user_role_id'] = "Type";


        $this->validation->set_fields($fields);
        $vdata['first_name'] = $this->input->post('first_name', true);
        $vdata['last_name'] = $this->input->post('last_name', true);
        $vdata['email'] = $this->input->post('email_address', true);
        $vdata['joining_date'] = $this->input->post('joining_date', true);
        $vdata['type_id'] = $this->input->post('user_role_id', true);

        $this->validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->validation->run() == FALSE) {
            $this->session->set_userdata('error_msg', $this->validation->error_string);

            $this->load->model('main_model');


            $vdata['result'] = $this->main_model->type_name();
            $data['title'] = "Add author";
            $data['mainContent'] = $this->load->view('add_author', $vdata, true);

            $this->load->view('index', $data);
        } else {

            $data = array();

            $this->load->helper('security');
            $data['first_name'] = $this->input->post("first_name", true);
            $data['last_name'] = $this->input->post("last_name", true);
            $data['email'] = $this->input->post("email_address", true);
            $data['password'] = $this->input->post("password", true);
            $data['joining_date'] = $this->input->post("joining_date", true);

            $data['salt'] = uniqid('', TRUE);
            $data ['password'] = sha1($data['password'] . $data['salt']);
            $data['user_role_id'] = $this->input->post("user_role_id", true);
            $data['verification_status'] = 1;
            $this->load->model('main_model');
            if (!$this->main_model->checkDuplicateEmailAuthor($this->input->post('email_address', true))) {
                $this->main_model->saveAuthor($data);

                $this->session->set_userdata('username', 'Congratulation! Your request has been successful.');

                $this->add_author();

            } else {


                $this->session->set_userdata('error_msg', 'This user is already registered.');

//                $this->add_author();
                redirect('main_controller/add_author', 'refresh');

            }

        }


    }


    public function saveclient()
    {

        $this->load->library('session');
        $this->load->library('validation');
        $rules ['first_name'] = "trim|required";
        $rules ['last_name'] = "trim|required";
        $rules ['user_name'] = "trim|required";
        $rules ['email_address'] = "trim|required|valid_email";
        $rules ['password'] = "trim|required|min_length[6]|matches[confirm_password]";
        $rules ['confirm_password'] = "trim|required|min_length[6]";
        $rules ['designation'] = "trim|required";
        $rules ['joining_date'] = "trim|required";
        $rules ['type_id'] = "trim|required";

        $this->validation->set_rules($rules);
        $fields ['first_name'] = "First name";
        $fields ['last_name'] = "Last name";
        $fields ['user_name'] = "User name";
        $fields ['email_address'] = "E-mail";
        $fields ['password'] = "Password";
        $fields ['confirm_password'] = "Confirm Password Mustbe Same as Password";
        $fields ['designation'] = "Designation";
        $fields ['joining_date'] = "Joining Date";
        $fields ['type_id'] = "Type Name";

        $this->validation->set_fields($fields);
        $vdata['first_name'] = $this->input->post('first_name', true);
        $vdata['last_name'] = $this->input->post('last_name', true);
        $vdata['user_name'] = $this->input->post('user_name', true);
        $vdata['email_address'] = $this->input->post('email_address', true);

        $vdata['designation'] = $this->input->post('designation', true);
        $vdata['joining_date'] = $this->input->post('joining_date', true);
        $vdata['type_id'] = $this->input->post('type_id', true);


        $this->validation->set_error_delimiters('<div class="error">', '</div>');
        if ($this->validation->run() == FALSE) {
            $this->session->set_userdata('error_msg', $this->validation->error_string);

            $this->load->model('main_model');


            $data['title'] = "Add Client";
            $data['mainContent'] = $this->load->view('add_client', $vdata, true);

            $this->load->view('index', $data);
        } else {

            $data = array();

            $this->load->helper('security');
            $data['first_name'] = $this->input->post("first_name", true);
            $data['last_name'] = $this->input->post("last_name", true);
            $data['user_name'] = $this->input->post("user_name", true);
            $data['email_address'] = $this->input->post("email_address", true);
            $data['password'] = $this->input->post("password", true);
            $data ['password'] = do_hash($data['password'], 'md5');
            $data['designation'] = $this->input->post("designation", true);
            $data['joining_date'] = $this->input->post("joining_date", true);
            $data['type_id'] = $this->input->post("type_id", true);
            $this->load->model('main_model');
            if (!$this->main_model->checkDuplicateEmail($this->input->post('email_address', true))) {
                $this->main_model->saveclient($data);

                $this->session->set_userdata('username', 'Congratulation! Your request has been successful.');

                $this->add_client();

            } else {

                $this->session->set_userdata('error_msg', 'This user is already registered.');

                $this->add_client();
                redirect('main_controller/add_client');

            }
        }


    }


    public function edit_client($id)
    {
        $this->load->model('main_model');
        $data['result'] = $this->main_model->client_type_name();
        $data['title'] = "Update Client Information";
        $data['row'] = $this->main_model->select_client($id);
        $data['mainContent'] = $this->load->view('update_client', $data, true);
        $this->load->view('index', $data);

    }

    function update_client()
    {

        $this->load->helper('url');
        $this->load->helper('security');
//        $id = $this->input->post('user_id', true);
        $data['user_id'] = $this->input->post('user_id', true);
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['user_name'] = $this->input->post('user_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['designation'] = $this->input->post('designation', true);
        $data['joining_date'] = $this->input->post('joining_date', true);
        $data['type_id'] = $this->input->post('type_id', true);

        $this->load->model('main_model');
        $this->main_model->update_client($data);

        $this->session->set_userdata('username', 'Congraculation! Your request has been successful.');

        redirect('main_controller/view_client');


    }

}