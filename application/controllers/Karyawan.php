<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

    public function index()
    {
        $data['karyawan'] = $this->M_karyawan->get_karyawan();
        $this->template->load('back/template', 'back/karyawan/data_karyawan', $data);
    }

    function add_karyawan()
    {
        $data['jabatan'] = $this->M_jabatan->get_jabatan();
        $data['divisi'] = $this->M_divisi->get_divisi();
        $this->template->load('back/template', 'back/karyawan/form_karyawan', $data);
    }

    function save_karyawan()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'trim|is_unique[user.nik]|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[user.email]|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|required');
        $this->form_validation->set_rules('confirm_password', 'Confrim Password', 'trim|matches[password]|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('valid_email', '{field} anda harus valid');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nik' => $this->input->post('nik'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'jabatan_id' => $this->input->post('jabatan_id'),
                'divisi_id' => $this->input->post('divisi_id'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'status_user' => 1,
                'level_user' => 1,
            );

            //var_dump($data);
            $this->M_karyawan->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data berhasil Disimpan</div>');

            redirect('karyawan', 'refresh');
        } else {
            $this->add_karyawan();
        }
    }

    function edit_karyawan($id)
    {
        $data['user'] = $this->M_karyawan->get_id_user($id);
        if ($data['user']) {
            $data['jabatan'] = $this->M_jabatan->get_jabatan();
            $data['divisi'] = $this->M_divisi->get_divisi();
            $this->template->load('back/template', 'back/karyawan/edit_karyawan', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data tidak ada</div>');
            redirect('karyawan', 'refresh');
        }
    }

    function update_karyawan()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('valid_email', '{field} anda harus valid');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nik' => $this->input->post('nik'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'jabatan_id' => $this->input->post('jabatan_id'),
                'divisi_id' => $this->input->post('divisi_id'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'status_user' => $this->input->post('status_user'),
                'level_user' => $this->input->post('level_user'),
            );

            //var_dump($data);
            $this->M_karyawan->update($this->input->post('id_user'), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data berhasil Disimpan</div>');

            redirect('karyawan', 'refresh');
        } else {
            $this->add_karyawan();
        }
    }
    function delete_karyawan($id)
    {
        $delete = $this->M_karyawan->get_id_user($id);
        if ($delete) {
            $this->M_karyawan->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus</div>');
            redirect('karyawan', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data tidak ada</div>');
            redirect('karyawan', 'refresh');
        }
    }

    function profile($id)
    {
        $data['karyawan'] = $this->M_karyawan->get_id_karyawan($id);
        if ($data['karyawan']) {
            $data['title'] = 'Profile user';
            $data['jabatan'] = $this->M_jabatan->get_jabatan();
            $data['divisi'] = $this->M_divisi->get_divisi();
            $this->template->load('back/template', 'back/profile', $data);
        } else {
            redirect('dashboard', 'refresh');
        }
    }
}
