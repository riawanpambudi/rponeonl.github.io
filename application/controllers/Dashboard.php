<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['tiket_wait'] = $this->M_tiket->tiket_wite();
        $data['tiket_proses'] = $this->M_tiket->tiket_proses();
        $data['tiket_close'] = $this->M_tiket->tiket_close();
        $data['user'] = $this->M_karyawan->jumlah_user();
        $this->template->load('back/template', 'back/dashboard', $data);
    }
}
