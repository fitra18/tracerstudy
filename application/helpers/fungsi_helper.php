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