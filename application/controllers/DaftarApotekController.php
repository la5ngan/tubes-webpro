<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarApotekController extends CI_Controller {

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
    $data['judul'] = "Daftar Apoteker";
    $this->load->view('daftar', $data);
}

public function tambahDataAkunApotek() {
    $namaapotek = $this->input->post('namaLeng');
    $emailapotek = $this->input->post('Email');
    $usernameapotek = $this->input->post('username');
    $passwordapotek = $this->input->post('password');
    $cpasswordapotek = $this->input->post('conPass');
}
}
