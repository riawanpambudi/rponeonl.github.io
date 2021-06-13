<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
        $data['title'] = 'Laporan';
        $this->template->load('back/template', 'back/laporan/laporan', $data);
    }

    function print_laporan()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data['get_laporan'] = $this->M_laporan->get_periode_laporan($tgl_awal, $tgl_akhir)->result();

        $this->load->view('back/laporan/print_laporan', $data);
    }
}
