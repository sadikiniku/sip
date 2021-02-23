<?php
defined('BASEPATH') or exit('No direct script access allowed');
class datatable extends CI_Model
{
    public function news()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_user', 'tbl_news.nip = tbl_user.nip');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function jobavailable()
    {
        $this->db->select('*');
        $this->db->from('tbl_job_available');
        $this->db->join('tbl_user', 'tbl_job_available.nip = tbl_user.nip');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function jobemploye()
    {
        $this->db->select('*');
        $this->db->from('tbl_job_available');
        $this->db->join('tbl_user', 'tbl_job_available.employe = tbl_user.nip');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function message()
    {
        $this->db->select('*');
        $this->db->from('tbl_message');
        $this->db->order_by('ID DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function user()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_user_role', 'tbl_user.role_id = tbl_user_role.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function userrole()
    {
        $this->db->select('*');
        $this->db->from('tbl_user_role');
        //$this->db->order_by('ID DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function myjob()
    {
        $this->db->select('*');
        $this->db->from('tbl_myjob');
        //$this->db->order_by('ID DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function deletejob($id)
    {
        $this->db->where('id_job', $id);
        $this->db->delete('tbl_job_available');
    }
    public function updatejob($id, $data)
    {
        $this->db->where('id_job', $id);
        $this->db->update('tbl_job_available', $data);
    }
}
