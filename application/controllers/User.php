<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('datatable');
        $this->load->model('authdatatable');
    }
    public function index()
    {
        $this->form_validation->set_rules('news', 'News', 'required');
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $data['datams'] = $this->datatable->message();
        $data['userdt'] = $this->datatable->user();
        $data['title'] = 'Berita';
        $data['news'] = $this->datatable->news();

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar', $data);
            $this->load->view('user/news', $data);
            $this->load->view('template/footer');
        } else {
            date_default_timezone_set('Asia/Makassar');
            $data = [
                'nip' => $data['user']['nip'],
                'berita' => $this->input->post('news'),
                'time_berita' => date('d-m-Y . h:i')
            ];
            $this->db->insert('tbl_news', $data);
            redirect('User');
        }
    }
    public function myjob()
    {
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $data['jobavailable'] = $this->datatable->jobavailable();

        $data['title'] = 'Tugas Saya';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('user/myjob', $data);
        $this->load->view('template/footer');
    }
    public function dashboard()
    {
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $data['jobavailable'] = $this->datatable->jobavailable();
        $data['jobDeadline'] = $this->datatable->

        $data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('template/footer');
    }
    public function myprofile()
    {
        $data['title'] = 'Profil Saya';

        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $data['datams'] = $this->datatable->message();
        $data['userdt'] = $this->datatable->user();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user/myprofile', $data);
        $this->load->view('template/footer');
    }
    public function jobavailable()
    {
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $data['jobavailable'] = $this->datatable->jobavailable();
        $data['datams'] = $this->datatable->message();
        $data['userdt'] = $this->datatable->user();

        $data['title'] = 'Tugas Tersedia';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar', $data);
        $this->load->view('user/jobavailable', $data);
        $this->load->view('template/footer');
    }
    public function jobprogress()
    {
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $data['datams'] = $this->datatable->message();
        $data['userdt'] = $this->datatable->user();
        $data['jobemploye'] = $this->datatable->jobemploye();

        $data['title'] = 'Progres Tugas';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user/jobprogress', $data);
        $this->load->view('template/footer');
    }
    public function mystaff()
    {
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $data['datams'] = $this->datatable->message();
        $data['userdt'] = $this->datatable->user();

        $data['title'] = 'Daftar Anggota';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user/mystaff', $data);
        $this->load->view('template/footer');
    }
    public function inputjob()
    {
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $this->form_validation->set_rules('job', 'Job', 'required');
        $this->form_validation->set_rules('_deadline', 'Deadline', 'required');
        $this->form_validation->set_rules('info', 'Info', 'required');
        $data['userList'] = $this->datatable->getUserWithRole(1);

//        var_dump($this->input->post('employee'));


        if ($this->form_validation->run() == false) {
            $data['inputjob'] = $this->datatable->jobavailable();
            $data['title'] = 'Tambahkan Tugas';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('user/inputjob', $data);
            $this->load->view('template/footer');
        } else {
            date_default_timezone_set('Asia/Makassar');
            $data = [
                'job' => $this->input->post('job'),
                'date_created' => date('d-m-Y'),
                'deadline' => $this->input->post('_deadline'),
                'info' => $this->input->post('info'),
                'nip' => $data['user']['nip'],
//                'employe' => $this->input->post('employee')
            ];
            $this->db->insert('tbl_job_available', $data);
            $insert_id = $this->db->insert_id();

            $employees = $this->input->post('employee');
            var_dump($employees);

            foreach($employees as $emp){
                $datas = [
                    'user_id' => $emp,
                    'job_available_id' => $insert_id
                ];
                $this->db->insert('tbl_user_jobAvailable', $datas);
            }

            redirect('User/inputjob');
        }
    }
    public function editjob($id)
    {
        $data['user'] = $this->authdatatable->auth($this->session->userdata('nip'));
        $this->form_validation->set_rules('job', 'Job', 'required');
        $this->form_validation->set_rules('__deadline', 'Deadline', 'required');
        $this->form_validation->set_rules('info', 'Info', 'required');

        if ($this->form_validation->run() == false) {
            $data['inputjob'] = $this->datatable->jobavailable();
            $data['title'] = 'Tambahkan Tugas';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('user/inputjob', $data);
            $this->load->view('template/footer');
        } else {
            date_default_timezone_set('Asia/Makassar');
            $data = [
                'job' => $this->input->post('job'),
                'deadline' => $this->input->post('__deadline'),
                'info' => $this->input->post('info'),
                'nip' => $data['user']['nip'],
//                'employe' => $this->input->post('employee')
            ];
            $this->datatable->updatejob($id, $data);
            redirect('User/inputjob');
        }
    }

    public function deljob($id)
    {
        $this->datatable->deletejob($id);
        redirect('User/inputjob');
    }
    public function accept_job($id, $nip)
    {
        $this->db->set('employe', $nip);
        $this->db->where('id_job', $id);
        $this->db->update('tbl_job_available');
        redirect('User/jobavailable');
    }
    public function update_status($id, $status)
    {
        $this->db->set('status', $status);
        $this->db->where('id_job', $id);
        $this->db->update('tbl_job_available');
        redirect('User/myjob');
    }
    public function update_progress($id)
    {
        $this->db->set('progress', $this->input->post('progress'));
        $this->db->where('id_job', $id);
        $this->db->update('tbl_job_available');
        redirect('User/myjob');
    }
    public function update_is_active($nip, $active)
    {
        $this->db->set('is_active', $active);
        $this->db->where('nip', $nip);
        $this->db->update('tbl_user');
        redirect('User/mystaff');
    }

    public function getUserJob(){
        $jobId = $this->input->job_id;
        $data['user_job'] = $this->datatable->getUserJobAvaliable($jobId);
        return $data;
    }
}
