<?php
class Raw_Inventory_Model extends CI_Model
{


    function saveRawdata($data)
    {


        $this->db->insert('raw_materials', $data);
    }


    function selectRawid()
    {
        $this->db->select('raw_material_id,name');
        $this->db->from('raw_materials');
        $resultSet = $this->db->get();
        return $resultSet->result();
    }

    function saveInventory($data)
    {


        $this->db->insert('raw_inventory', $data);
    }


    function allInventory()
    {
        $this->db->select('*');
        $this->db->from('raw_inventory');
        $this->db->join('raw_materials', 'raw_materials.raw_material_id=raw_inventory.raw_material_id');
        $query = $this->db->get();
        return $query->result();
    }


    function deleteInventory($id)
    {
        $this->db->where('raw_inventory_id', $id);
        $this->db->delete('raw_inventory');
    }

    function select_Inventory($id)
    {
        $this->db->select('*');
        $this->db->from('raw_inventory');
        $this->db->where('raw_inventory_id', $id);
        $resultSet = $this->db->get();
        return $resultSet->row();

    }

    function update_Inventory($data, $id)
    {

        $this->db->set('raw_material_id', $data['raw_material_id']);
        $this->db->set('quantity', $data['quantity']);
        $this->db->set('price', $data['price']);
        $this->db->set('batch_no', $data['batch_no']);
        $id = $data['raw_inventory_id'];

        $this->db->where('raw_inventory_id', $data['raw_inventory_id']);
        $this->db->update('raw_inventory');
    }


}