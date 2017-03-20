<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class product_controller extends CI_Controller
{


    public function access_map()
    {
        return array(
            'addProduct' => 'view',
            'delete_checkbox_product' => 'delete',
            'saveProduct' => 'create',
//            'saveProduct' => 'view',
            'viewProduct' => 'view',
            'deleteProduct' => 'delete',
            'edit_Product' => 'view',
            'update_Product' => 'edit',
//            'update_Product' => 'view',
            'reportproductline' => 'view',
            'reportproduct' => 'view'

        );
    }

    public function addProduct()
    {
        $this->load->model('product_model');
        $data = array();
        $data['mainContent'] = $this->load->view('add_product', $data, true);
        $data['title'] = "Add product-info";
        $this->load->view('index', $data);
    }


    function saveProduct()
    {

        $this->load->helper('url');
        $data = array();

        $data['product_name'] = $this->input->post('product_name', true);
        $data['quantity'] = $this->input->post('quantity', true);

        $data['create_date'] = date('Y-m-d H:i:s');
        $data['description'] = $this->input->post('description', true);
        $this->load->model('product_model');

        $this->product_model->saveProduct($data);


        $this->session->set_userdata('username', 'Congratulation! Product has been successfully insert.');
//       $this->addProduct();
        redirect('product_controller/addProduct', 'refresh');

    }

    function viewProduct()
    {
        $data = array();
        $this->load->model('product_model');
        $data['result'] = $this->product_model->viewProducts();
        $data['title'] = "View Product";
        $data['mainContent'] = $this->load->view('view_product', $data, true);
        $this->load->view('index', $data);
    }

    function delete_checkbox_product()
    {
        $dat = $this->input->post('row_sel');
        for ($i = 0; $i < sizeof($dat); $i++) {
            $this->load->model('product_model');
            $this->product_model->deleteProduct($dat[$i]);
        }
        $this->viewProduct();
    }


    function deleteProduct($id)
    {
        $data = array();
        $this->load->model('product_model');
        $this->product_model->deleteProduct($id);
        $this->session->set_userdata('username', 'Delete has been  Successfully complited.');
        $this->viewProduct();

    }


    public function edit_Product($id)
    {
        $this->load->model('product_model');
        $data['title'] = "Update Product Information";
        $data['row'] = $this->product_model->select_product($id);
        $data['mainContent'] = $this->load->view('update_product', $data, true);

        $this->load->view('index', $data);

    }

    function update_Product()
    {

        $this->load->helper('url');
        $this->load->helper('security');
        $data['product_name'] = $this->input->post('product_name', true);
        $data['quantity'] = $this->input->post('quantity', true);
        $data['create_date'] = $this->input->post('create_date', true);
        $data['description'] = $this->input->post('description', true);
        $data['product_id'] = $this->input->post('product_id', true);


        $this->load->model('product_model');
        $this->product_model->update_Product($data);

        $this->session->set_userdata('username', 'Congraculation! Your request has been successful.');

        redirect('product_controller/viewProduct');


    }


}