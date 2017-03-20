<?php


class Main_Model extends CI_Model
{


    function type_name()
    {
        $this->db->select('type_id,type_name');
        $this->db->from('types');
        $resultSet = $this->db->get();
        return $resultSet->result();
    }

    function client_type_name()
    {
        $this->db->select('type_id,type_name');
        $this->db->from('client_type');
        $resultSet = $this->db->get();
        return $resultSet->result();
    }


    function saveclient($data)
    {
        if (!empty($_POST)) {
            $this->db->insert('user', $data);
        }

    }

    function checkDuplicateEmail($email_address)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email_address', $email_address);
        $query_result = $this->db->get();
        if (count($query_result->result()) > 0) {
            return true;
        } else {
            return false;
        }
    }

    function checkDuplicateEmailAuthor($email_address)
    {
        $this->db->select('*');
        $this->db->from('system_users');
        $this->db->where('email', $email_address);
        $query_result = $this->db->get();
        if (count($query_result->result()) > 0) {
            return true;
        } else {
            return false;
        }
    }


    function saveAuthor($data)
    {
        if (!empty($_POST)) {
            $this->db->insert('system_users', $data);
        }

    }

    function view_client()
    {
        $this->load->helper('inflector');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('client_type', 'client_type.type_id = user.type_id');

        //   $this->db->order_by("user_id", "asc");
        $query = $this->db->get();
        return $query->result();

    }


    function delete_client($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    function select_client($id)
    {

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $id);
        $resultSet = $this->db->get();
        return $resultSet->row();
    }


    function update_client($data, $id)
    {

//        $this->db->set('user_id', $data['user_id']);
        $this->db->set('first_name', $data['first_name']);
        $this->db->set('last_name', $data['last_name']);
        $this->db->set('user_name', $data['user_name']);
        $this->db->set('email_address', $data['email_address']);
        $this->db->set('designation', $data['designation']);
        $this->db->set('joining_date', $data['joining_date']);
        $this->db->set('type_id', $data['type_id']);
        $id = $data['user_id'];
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('user');
//        $this->db->update('user');
    }


}