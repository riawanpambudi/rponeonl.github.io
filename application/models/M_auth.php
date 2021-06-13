<?php
defined('BASEPATH') or exp('No direct script access allowed');

class M_auth extends CI_Model
{
    public $id = 'id_user';

    function insert($data)
    {
        $this->db->insert('user', $data);
    }

    function get_email_user($id)
    {
        $this->db->where('email', $id);
        return $this->db->get('user')->row();
    }
}
