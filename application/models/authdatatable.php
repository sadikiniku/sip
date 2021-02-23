<?php
defined('BASEPATH') or exit('No direct script access allowed');
class authdatatable extends CI_Model
{
    public function auth($nip)
    {
        return $this->db->get_where('tbl_user', ['nip' => $nip])->row_array();
    }
}
