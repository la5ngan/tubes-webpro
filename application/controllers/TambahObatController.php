<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahObatController extends CI_Controller {

	public function index()
	{   
		
			$username = $this->ModelAkunObat->cekDataKode();
			foreach ($username as $user) :
				$data['usernameke'] = $user['username'];
				$data['nameke'] = $user['namaapotek'] ;
			endforeach;
        $this->load->model('ModelObat');
		$data['judul'] = "Tambah Obat";
		$this->load->view('tambahObat', $data);
	}
	
	public function tambahBarang(){
		$namaobat = $this->input->post('namaOb');
        $stok = $this->input->post('stokOb');
		$deskripsi = $this->input->post('deskripsiOb');

		$kode = $this->ModelObat->ambilData();
		foreach ($kode as $ko) :
			$username = $this->ModelAkunApotek->cekDataKode();
			foreach ($username as $user) :
				$kodeakun = $user['kodeapotek'];
				$data['usernameke'] = $user['username'];
				$data['nameke'] = $user['namaapotek'] ;
			endforeach;
		endforeach;
	}
}
