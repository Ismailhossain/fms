<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class product_line_controller extends CI_Controller
{


    public function access_map()
    {
        return array(

            'addProductLine' => 'view',
            'view_product_status_qc' => 'view',
            'view_product_status' => 'view',
            'view_wastage_status' => 'view',
            'view_product_status_finished' => 'view',
            'change_product_status_finished' => 'edit',
            'change_product_status' => 'edit',
            'change_product_status_qc' => 'edit',
            'change_wastage_product_status' => 'edit',
            'saveProductLine' => 'create',
//            'saveProductLine' => 'view',
            'productline_report' => 'view',
            'qc_report' => 'view',
            'finished_report' => 'view',
            'wastage_report' => 'view',
            'total_report' => 'view'
        );
    }

    public function addProductLine()
    {
        $this->load->model('product_line_model');

        $data = array();


        $data['results'] = $this->product_line_model->product_name();
        $data['result'] = $this->product_line_model->allInventory();

        $data['mainContent'] = $this->load->view('product_line', $data, true);
        $data['title'] = "Add Product line-info";
        $this->load->view('index', $data);

    }

    function saveProductLine()
    {

        $this->load->helper('url');

        if (!empty($_POST)) {
            $this->load->model('product_line_model');

            if ($this->product_line_model->save($_POST)) {
                $this->session->set_userdata('username', 'Congratulation! Product has been successfully insert.');

//                $this->view_product_status();
//              redirect('product_line_controller/addProductLine','refresh');
            }
//            else           {
//                $this->session->set_userdata('username','Product Line has not been successfully insert.');
//
//               redirect('product_line_controller/addProductLine');
//            }
        }

        redirect('product_line_controller/addProductLine', 'refresh');

    }

    function view_product_status()
    {
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->viewProducts();
        $data['title'] = "View Product Line";
        $data['mainContent'] = $this->load->view('view_product_status', $data, true);
        $this->load->view('index', $data);
    }

    function view_product_status_qc()
    {
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->viewProducts_qc();

        $data['title'] = "QC Product";
        $data['mainContent'] = $this->load->view('view_product_status_qc', $data, true);
        $this->load->view('index', $data);
    }

    function view_product_status_finished()
    {
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->viewProducts_finished();

        $data['title'] = "Finished Product";
        $data['mainContent'] = $this->load->view('view_product_status_finished', $data, true);
        $this->load->view('index', $data);
    }


    function view_wastage_status()
    { //echo "hi"; exit;
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->view_wastage_Products();
//var_dump($data);exit;
        $data['title'] = "Wastage Product";
        $data['mainContent'] = $this->load->view('view_wastage_product', $data, true);
        $this->load->view('index', $data);
    }

    function change_product_status()
    {

        $product_id = $this->uri->segment(3, 0);
        $status = $this->uri->segment(4, 0);
        $this->db->where('product_line_id', $product_id);
        $this->db->set(array('status' => $status));
        $this->db->update('product_line');
        $this->session->set_userdata('username', 'Status changed has been completed.');
        redirect('product_line_controller/view_product_status');

    }

    function change_product_status_qc()
    {

        $product_id = $this->uri->segment(3, 0);
        $status = $this->uri->segment(4, 0);
        $this->db->where('product_line_id', $product_id);
        $this->db->set(array('status' => $status));
        $this->db->update('product_line');
        $this->session->set_userdata('username', 'Status changed has been completed.');
        redirect('product_line_controller/view_product_status_qc');

    }

    function change_product_status_finished()
    {

        $product_id = $this->uri->segment(3, 0);
        $status = $this->uri->segment(4, 0);
        $this->db->where('product_line_id', $product_id);
        $this->db->set(array('status' => $status));
        $this->db->update('product_line');
        $this->session->set_userdata('username', 'Status changed has been completed.');
        redirect('product_line_controller/view_product_status_finished');

    }


    function change_wastage_product_status()
    {

        $product_id = $this->uri->segment(3, 0);
        $status = $this->uri->segment(4, 0);
        $this->db->where('product_line_id', $product_id);
        $this->db->set(array('status' => $status));
        $this->db->update('product_line');
        $this->session->set_userdata('username', 'Status changed has been completed.');
        redirect('product_line_controller/view_wastage_status');

    }


    public function productline_report()
    {
        $data = array();
        $this->load->model('product_line_model');

        $data['result'] = $this->product_line_model->productline_report();
        $data['title'] = "Product Line report";
//        $data['mainContent'] = $this->load->view('report_productline', $data, true);
        $this->load->view('productline_report', $data);


    }


    function qc_report()
    {
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->qc_report();
        $data['title'] = "Quality Control Report";
//        $data['mainContent'] = $this->load->view('report_qc', $data, true);
        $this->load->view('qc_report', $data);
    }


    function finished_report()
    {
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->finished_report();

        $data['title'] = "Finished Product Report";
//        $data['mainContent'] = $this->load->view('view_product_status_finished_report', $data, true);
        $this->load->view('finished_report', $data);
    }

    function wastage_report()
    {
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->wastage_report();

        $data['title'] = "Wastage Product Report";
//        $data['mainContent'] = $this->load->view('view_product_status_finished_report', $data, true);
        $this->load->view('wastage_report', $data);
    }

    function total_report()
    {
        $data = array();
        $this->load->model('product_line_model');
        $data['results'] = $this->product_line_model->total_report();

        $data['title'] = "Total Report";
//        $data['mainContent'] = $this->load->view('total_report', $data, true);
        $this->load->view('total_report', $data);
    }


}