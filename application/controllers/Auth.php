<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
    }


    public function login()
    {
        $this->load->view('back/login');
    }

    public function register()
    {
        $this->load->view('back/register');
    }

    public function proses_register()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[user.email]|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|required');
        $this->form_validation->set_rules('confirm_password', 'Confrim Password', 'trim|matches[password]|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('valid_email', '{field} anda harus valid');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'status_user' => 1,
                'level_user' => 1,
            );

            //var_dump($data);
            $this->M_auth->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data berhasil Disimpan</div>');

            redirect('auth/login', 'refresh');
        } else {
            $this->load->view('back/register');
        }
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $user = $this->M_auth->get_email_user($this->input->post('email'));
            if (!$user) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Email tidak ditemukan</div>');
                redirect('auth/login', 'refresh');
            } else if ($user->status_users == '0') {
                $this->session->set_flashdata('message', '<div class="alert alert-info">User anda tidak Aktif, Silahkan Hubuni Admin</div>');
                redirect('auth/login', 'refresh');
            } else if (!password_verify($this->input->post('password'), $user->password)) {
                $this->session->set_flashdata('message', '<div class="alert alert-info">Password ada salah</div>');
                redirect('auth/login', 'refresh');
            } else {
                $session = array(
                    'id_user' => $user->id_user,
                    'username' => $user->username,
                    'email' => $user->email,
                    'level_user' => $user->level_user,
                );
                $this->session->set_userdata($session);
                redirect('dashboard');
            }
        } else {
            $data['title'] = 'Login Pages';
            $this->load->view('back/register', $data);
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-info">Anda berhasil Logout</div>');
        redirect('auth/login');
    }
}
