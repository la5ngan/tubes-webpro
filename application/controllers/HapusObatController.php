<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HapusObatController extends CI_Controller {

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
		$this->load->model('ModelObat');
		$kode = $this->ModelObat->ambilData();
		foreach ($kode as $ko) :
			$data['barang'] = $this->ModelObat->ambilDataSpec();
			$username = $this->ModelAkunApotek->cekDataKode();
			foreach ($username as $user) :
				$data['usernameke'] = $user['username'];
				$data['nameke'] = $user['namaapotek'] ;
			endforeach;
		endforeach;
		$this->load->view('hapusObat', $data);
	}
	
    public function search() {
		$this->load->model('ModelObat');
		$kode = $this->ModelObat->ambilData();
		foreach ($kode as $ko) :
			$data['obat'] = $this->ModelObat->ambilDataSpec();
			$username = $this->ModelAkunApotek->cekDataKode();
			foreach ($username as $user) :
				$keyword = $this->input->post('cariObat');
				$data['usernameke'] = $user['username'];
				$data['nameke'] = $user['namaapotek'] ;
			endforeach;
		endforeach;
        $this->load->view('hapusObat2', $data);
	}
	
}
