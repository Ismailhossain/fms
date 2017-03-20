<?php
class Product_Model extends CI_Model
{


    function saveProduct($data)
    {
        if (!empty($_POST)) {

            $this->db->insert('products', $data);
        }
    }


    function viewProducts()
    {
        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result();
    }


    function deleteProduct($id)
    {
        $this->db->where('product_id', $id);
        $this->db->delete('products');
    }

    function select_product($id)
    {

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('product_id', $id);
        $resultSet = $this->db->get();
        return $resultSet->row();
    }

    function update_Product($data, $id)
    {

        $this->db->set('product_name', $data['product_name']);
        $this->db->set('quantity', $data['quantity']);
        $this->db->set('create_date', $data['create_date']);
        $this->db->set('description', $data['description']);

        $id = $data['product_id'];
        $this->db->where('product_id', $data['product_id']);
        $this->db->update('products');
    }


}