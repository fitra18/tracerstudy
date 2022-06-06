<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function cek_login()
{
    $CI = &get_instance();
    $username = $CI->session->username;

    if ($username == NULL) {
        $CI->session->set_flashdata('pesan', 'Silahkan Login Dahulu !!!');
        redirect('login');
    }
}

function check_admin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login');
    } else {
        $role = $ci->session->userdata('role');

        $userAccess = $ci->db->get_where('user', [
            'role' => $role
        ]);

        if ($userAccess->num_rows() == 1) {
            redirect('login/blocked');
        }
    }
}