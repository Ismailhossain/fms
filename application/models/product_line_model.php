<?php
class Product_Line_Model extends CI_Model
{

    public function save($data)
    {
        if (empty($data)) return false;

        $productLineData = array(
            'product_id' => $data['product_id'],
            'quantity' => $data['quantity'],
            'status' => '1',
            'receive_date' => date('Y-m-d H:i:s'),
            'delivery_date' => $data['delivery_date']


        );
        //var_dump($productLineData);die();

        $this->db->insert('product_line', $productLineData);
        $this->save_product_rawinventory($data);
        $this->product_quantity_less($data);
        $this->rawInventory_quantity_less($data);
        $this->session->set_userdata('username', 'Congratulation! Product has been successfully insert.');


    }


    function product_name()
    {
        $this->db->select('product_id,product_name');
        $this->db->from('products');

        $resultSet = $this->db->get();
        return $resultSet->result();
    }


    function allInventory()
    {
        $this->db->select('*');
        $this->db->from('raw_inventory');
        $this->db->join('raw_materials', 'raw_materials.raw_material_id=raw_inventory.raw_material_id');
        $query = $this->db->get();
        return $query->result();
    }


    public function save_product_rawinventory($data)
    {

        foreach ($data['cou'] AS $key => $value) {
            $rawData = array(

//                'product_raw_inventory_id' => $data['product_raw_inventory_id'],
                'product_id' => $data['product_id'],
                'raw_inventory_id' => $data['cou'][$key],
                'inventory_quantity' => $data['qua'][$key],
                'delivery_date' => $data['delivery_date'],
            );

            $this->db->insert('product_raw_inventory', $rawData);


        }

    }

    function product_quantity_less($data)
    {

        $q = (int)$data['quantity'];
        $this->db->set('quantity', "quantity-$q", FALSE);
        $this->db->where('product_id', $data['product_id']);
        $this->db->update('products');

    }

    function rawInventory_quantity_less($data)
    {
        foreach ($data['cou'] AS $key => $value) {
            $q = (int)$data['qua'][$key];
            $this->db->set('quantity', "quantity-$q", FALSE);

            $this->db->where('raw_inventory_id', $data['cou'][$key]);
            $this->db->update('raw_inventory');
        }
    }

    function viewProducts()
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->where('status_id', 1);
        $resultSet = $this->db->get();
        return $resultSet->result();


    }


    function viewProducts_qc()
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->where('status_id', 2);
        $resultSet = $this->db->get();
        return $resultSet->result();
    }

    function viewProducts_finished()
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->where('status_id', 3);
        $resultSet = $this->db->get();
        return $resultSet->result();

    }

    function view_wastage_Products()
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->where('status_id', 4);
        $resultSet = $this->db->get();
        return $resultSet->result();

    }


    public function productline_report()
    {

        $this->db->select('product_line.product_id,products.product_name,sum(product_line.quantity) as quantity');
        $this->db->from('product_line');
        $this->db->join('products', 'products.product_id = product_line.product_id');
        // $this->db->where('product_id',1);
        $this->db->group_by('product_id');

        $query = $this->db->get();
        return $query->result();
    }


    function qc_report()
    {
        $this->db->select('product_line.product_id,products.product_name ,sum(product_line.quantity) as quantity');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->where('status_id', 2);
        $this->db->group_by('product_id');
        $resultSet = $this->db->get();
        return $resultSet->result();
    }


    function finished_report()
    {
        $this->db->select('product_line.product_id,products.product_name ,sum(product_line.quantity) as quantity');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->where('status_id', 3);
        $this->db->group_by('product_id');
        $resultSet = $this->db->get();
        return $resultSet->result();
    }

    function wastage_report()
    {
        $this->db->select('product_line.product_id,products.product_name ,sum(product_line.quantity) as quantity');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->where('status_id', 4);
        $this->db->group_by('product_id');
        $resultSet = $this->db->get();
        return $resultSet->result();
    }

    function total_report()
    {
        $this->db->select('product_line.product_id,products.product_name ,sum(product_line.quantity) as quantity,status.status_name');
        $this->db->from('products');
        $this->db->join('product_line', 'product_line.product_id=products.product_id');
        $this->db->join('status', 'status.status_id=product_line.status');
        $this->db->group_by('product_id');
        $this->db->group_by('status_id');
        $resultSet = $this->db->get();
        return $resultSet->result();

    }

}