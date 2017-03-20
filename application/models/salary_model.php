<?php


class salary_model extends CI_Model
{



    function employee_name()
    {

        $this->db->select ( 'type_name,first_name,employee_id' );
        $this->db->from ( 'types' );
        $this->db->join('system_users', 'types.type_id=system_users.user_role_id');

        $resultSet = $this->db->get ();
        return $resultSet->result();
    }



    function saveSalary($data) {

    $this->db->insert('salary',$data );
    }

    function all_employee(){
        $this->db->select('*');
        $this->db->from('system_users');
        $this->db->join('salary','salary.employee_id=system_users.employee_id');
        $this->db->join('types','types.type_id=system_users.user_role_id');
        $query=$this->db->get();
        return $query->result();
    }


    function delete_salary_list($id)
    {
        $this->db->where('salary_id',$id);
        $this->db->delete('salary');
    }


    function selectMemberById($id)
    {
        $this->db->select ( '*' );
        $this->db->from ( 'salary' );
        $this->db->where ( 'salary_id',$id);
        $resultSet = $this->db->get ();
        return $resultSet->row ();
    }



    function editsalary($data)
    {

        $this->db->set('salary_id', $data['salary_id']);

        $this->db->set('employee_id', $data['employee_id']);
        $this->db->set('salary', $data['salary']);
        $this->db->set('advance_paid', $data['advance_paid']);
        $this->db->set('due_salary', $data['due_salary']);
        $this->db->set('full_paid', $data['full_paid']);
        $this->db->set('paid_month', $data['paid_month']);

        $this->db->where('salary_id', $data['salary_id']);

        $this->db->update('salary');

    }


    function salaryhistory($data)
    {

        unset($data['salary_id']);

        $this->db->insert('salary_history',$data );


//        $this->db->set('salary_id', $data['salary_id']);
//
//        $this->db->set('employee_id', $data['employee_id']);
//        $this->db->set('salary', $data['salary']);
//        $this->db->set('advance_paid', $data['advance_paid']);
//        $this->db->set('due_salary', $data['due_salary']);
//        $this->db->set('full_paid', $data['full_paid']);
//        $this->db->set('paid_month', $data['paid_month']);
//
//        $this->db->where('salary_id', $data['salary_id']);
//
//        $this->db->update('salary,salary_history');

    }




}