<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class raw_inventory_controller extends CI_Controller
{

    public function access_map()
    {
        return array(

            'addRawdata' => 'view',
//            'saveRawdata' => 'view',
            'saveRawdata' => 'create',
            'addInventory' => 'view',
//            'saveInventory' => 'view',
            'saveInventory' => 'create',
            'viewInventory' => 'view',
            'delete_checkbox_inventory' => 'delete',
            'deleteInventory' => 'delete',
            'edit_Inventory' => 'view',
            'update_Inventory' => 'edit',
//            'update_Inventory' => 'view'

        );
    }


    function addRawdata()
    {
        $data = array();
        $data['title'] = "Add Raw-Material";
        $data['mainContent'] = $this->load->view('add_material', $data, true);
        $this->load->view('index', $data);
    }


    function saveRawdata()
    {
        $this->load->helper('url');

        $data = array();
        $data['name'] = $this->input->post('name', true);
        $data['code'] = $this->input->post('code', true);
        $this->load->model('raw_inventory_model');
        $this->raw_inventory_model->saveRawdata($data);
        $this->session->set_userdata('username', 'Raw Material susseccfully insert');
        redirect("raw_inventory_controller/viewInventory", 'refresh');

    }

    function addInventory()
    {
        $this->load->model('raw_inventory_model');
        $data = array();
        $data['result'] = $this->raw_inventory_model->selectRawid();
        $data['title'] = "Add Inventory";
        $data['mainContent'] = $this->load->view('add_inventory', $data, true);
        $this->load->view('index', $data);

    }

    function saveInventory()
    {

        $this->load->helper('url');
        $data = array();
        $data['raw_material_id'] = $this->input->post('raw_material_id', true);
        $data['quantity'] = $this->input->post('quantity', true);
        $data['price'] = $this->input->post('price', true);
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['batch_no'] = $this->input->post('batch_no', true);
        $this->load->model('raw_inventory_model');
        $this->raw_inventory_model->saveInventory($data);

        $this->session->set_userdata('username', 'Raw Inventory susseccfully insert');
        redirect('raw_inventory_controller/addInventory', 'refresh');

    }


    function viewInventory()
    {
        $data = array();
        $this->load->model('raw_inventory_model');
        $data['result'] = $this->raw_inventory_model->allInventory();
        $data['title'] = "View Inventory List";
        $data['mainContent'] = $this->load->view('view_inventory', $data, true);
        $this->load->view('index', $data);
    }

    function delete_checkbox_inventory()
    {
        $dat = $this->input->post('row_sel');
        for ($i = 0; $i < sizeof($dat); $i++) {
            $this->load->model('raw_inventory_model');
            $this->raw_inventory_model->deleteInventory($dat[$i]);
        }
        $this->viewInventory();
    }

    function deleteInventory($id)
    {
        $data = array();
        $this->load->model('raw_inventory_model');
        $this->raw_inventory_model->deleteInventory($id);
        $this->session->set_userdata('username', 'Raw Inventory susseccfully Delete.');
        $this->viewInventory();

    }


    public function edit_Inventory($id)
    {
        $this->load->model('raw_inventory_model');
        $data['title'] = "Update Inventory Information";
        $data['result'] = $this->raw_inventory_model->selectRawid();
        $data['row'] = $this->raw_inventory_model->select_Inventory($id);
        $data['mainContent'] = $this->load->view('update_inventory', $data, true);

        $this->load->view('index', $data);

    }

    function update_Inventory()
    {

        $this->load->helper('url');
        $this->load->helper('security');
        $data['raw_inventory_id'] = $this->input->post('raw_inventory_id', true);
        $data['raw_material_id'] = $this->input->post('raw_material_id', true);
        $data['quantity'] = $this->input->post('quantity', true);
        $data['price'] = $this->input->post('price', true);
        $data['batch_no'] = $this->input->post('batch_no', true);


        $this->load->model('raw_inventory_model');
        $this->raw_inventory_model->update_Inventory($data);

        $this->session->set_userdata('username', 'Congraculation! Your request has been successful.');

        redirect('raw_inventory_controller/viewInventory');


    }

}