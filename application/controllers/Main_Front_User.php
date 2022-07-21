<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Front_User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');

	}

	public function index(){
		$data['sql'] = $this->User_model->info_semua_kos();
		$jumlahkos = $this->User_model->getJumlahKos()->num_rows();
		$jumlahuser = $this->User_model->getJumlahUser()->num_rows();
		$jumlahsewa = $this->User_model->getJumlahSewa()->num_rows();
		$jumlahrequest = $this->User_model->getJumlahRequest()->num_rows();

		$data2 = array(
			'jumlahkos' => $jumlahkos,
			'jumlahuser' => $jumlahuser,
			'jumlahsewa' => $jumlahsewa,
			'jumlahrequest' => $jumlahrequest
		);  

		  $this->load->view('navbar');
		  $this->load->view('user/header',$data2);
		  $this->load->view('footer');
		  // $this->load->view('user/index',$data);
  }

	public function semua_kos(){
		$data['sql'] = $this->User_model->info_semua_kos();

		  $this->load->view('navbar');
		  // $this->load->view('user/menu');
		  $this->load->view('user/kos',$data);
  }


	public function kos_putra(){
		  $data['sql'] = $this->User_model->info_kos_putra();

		    $this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/putra',$data);
	}

	public function kos_putri(){
		  $data['sql'] = $this->User_model->info_kos_putri();

		    $this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/putri',$data);
	}

	public function kos_campur(){
		  $data['sql'] = $this->User_model->info_kos_campur();

		    $this->load->view('user/header',$data);
		    $this->load->view('user/menu');
		    $this->load->view('footer');
			$this->load->view('user/campur',$data);
	}

	public function kos_jakarta(){
		  $data['sql'] = $this->User_model->info_kos_jakarta();

		    $this->load->view('navbar');
			$this->load->view('user/jakarta',$data);
	}

	public function kos_yogyakarta(){
		  $data['sql'] = $this->User_model->info_kos_yogyakarta();

		    $this->load->view('navbar');
			$this->load->view('user/yogyakarta',$data);
	}

	public function kos_surabaya(){
		  $data['sql'] = $this->User_model->info_kos_surabaya();

		    $this->load->view('navbar');
			$this->load->view('user/surabaya',$data);
	}

	public function view_konten_kos($slug = ''){
		$this->load->helper('text');
		date_default_timezone_set('Asia/Jakarta');
		$data_kos = $this->User_model->getKos("where slug = '$slug'")->result_array();

		$data = array(
			'nama'	=> strip_tags($data_kos[0]['nama']),
			'id_user'			=>$data_kos[0]['id_user'],
			'deskripsi'			=>$data_kos[0]['deskripsi'],
			'alamat'			=>$data_kos[0]['alamat'],
			'slug'				=>$data_kos[0]['slug'],
			'date'				=>$data_kos[0]['date'],
			'time'				=>$data_kos[0]['time'],
			'kota'				=>$data_kos[0]['kota'],
			'no_hp'				=>$data_kos[0]['no_hp'],
			'fullname'			=>$data_kos[0]['fullname'],
			'harga'				=>$data_kos[0]['harga'],
			'tipe'				=>$data_kos[0]['tipe'],
			'image_header'		=>$data_kos[0]['image_header']
		);

			// $this->load->view('user/header',$data);
		    $this->load->view('navbar');
			$this->load->view('user/detail_kos',$data);
			// $this->load->view('footer');
	}

	public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['sql'] = $this->User_model->get_keyword($keyword);
		$this->load->view('navbar',$data);
		// $this->load->view('user/menu');
		$this->load->view('user/kos',$data);
	  //   $this->load->view('footer');
    }


	public function filter()
	{
		$kota=$this->input->get('kota');
    $tipe=$this->input->get('tipe');
    $data['sql'] = $this->User_model->filter($kota,$tipe)->result_array();
	$this->load->view('navbar',$data);
    $this->load->view('user/kos',$data); 
	}

}