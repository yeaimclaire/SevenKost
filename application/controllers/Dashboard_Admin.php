<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
	}

	public function index()
	{
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
	      $this->load->view('admin/header',$data);
	      $this->load->view('index');
	    }
	      
	}

	public function dashboard()
	{
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
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

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
	      $this->load->view('admin/header',$data);

	      $this->load->view('dashboard_admin',$data2);
	    }
		
	}

	public function view_admin()
	{
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['user'] = $this->User_model->get_listuser();

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
			$this->load->view('view_admin',$data);
	    }		
	}

	public function data_kos($id){
		$this->load->helper('text');
		$data['sql'] = $this->User_model->info_kos($id);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));


	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
		    $this->load->view('admin/header',$data);

			$this->load->view('view_kos',$data);
	    }	
	}

	public function save_kos()
	{
		if($_POST){
			date_default_timezone_set('Asia/Jakarta');
			$this->load->helper('url');
			$this->load->library('Image_lib');
			$this->load->library('upload');

			$id_user 	= $this->session->userdata('id_user');
			$id_kos 	= $this->input->post('id_kos');
			$nama 		= $this->input->post('nama');
			$tipe		= $this->input->post('tipe');
			$deskripsi	= $this->input->post('deskripsi');
			$alamat		= $this->input->post('alamat');
			$kota		= $this->input->post('kota');
			$harga		= $this->input->post('harga');
			$sisa_kamar	= $this->input->post('sisa_kamar');
			$status		= $this->input->post('status');
			$stat		= $this->input->post('stat');

			$slug		= url_title($nama,'dash',TRUE);
			$date       = date('Y-m-d H:i:s');
      		$time       = date('H:i:s');

      		if($stat == 'new'){

      		if($_FILES['image_header']['name'] != ""){
	          	$config['upload_path'] = 'file/kos_image';
	          	$config['allowed_types'] = 'jpg|png|jpeg';
	          	$config['max_size'] = '2000';
	          	$config['remove_spaces'] = true;
	          	$config['overwrite'] = false;
	          	$config['encrypt_name'] = false;
	          	$config['max_width']  = '';
	          	$config['max_height']  = '';
	          	$this->load->library('upload','image_lib', $config);
	          	$this->upload->initialize($config);
	          	if (!$this->upload->do_upload('image_header'))
	         	 {
	            	  print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
	             	 exit();
	         	 }
	         	else
	         	 {
	          	   $image = $this->upload->data();
	          	  	
		          	if ($image['file_name']) 
		          	{
		          	 	$data['file1'] = $image['file_name'];
		            }
	           	 	$image_header = $data['file1'];
	         	 }
      		}

		        $data = array(
		          'date'		=> $date,
		          'time'		=> $time,
		          'image_header'=> $image_header,
			      'status'		=> $status,
			      'slug'		=> $slug,
			      'nama'		=> $nama,
			      'tipe'		=> $tipe,
			      'deskripsi' 	=> $deskripsi,
			      'alamat'		=> $alamat,
			      'kota'		=> $kota,
			      'harga'		=> $harga,
			      'sisa_kamar'	=> $sisa_kamar,
			      'id_user'		=> $id_user
		        );
		        $this->User_model->insertdata('tbl_kos',$data);
		        redirect('Dashboard_Admin');

		   }
		   else {
		   		$this->db->where('id_kos',$id_kos);
		        $query  = $this->db->get('tbl_kos');
		        $row  = $query->row();

		        unlink("./file/kos_image/$row->image_header");

		        if($_FILES['image_header']['name'] != ""){
		          $config['upload_path'] = 'file/kos_image';
		          $config['allowed_types'] = 'jpg|png|jpeg';
		          $config['max_size'] = '2000';
		          $config['remove_spaces'] = true;
		          $config['overwrite'] = false;
		          $config['encrypt_name'] = false;
		          $config['max_width']  = '';
		          $config['max_height']  = '';
		          $this->load->library('upload', $config);
		          $this->upload->initialize($config);
		          if (!$this->upload->do_upload('image_header'))
		          {
		              print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
		              exit();
		          }
		          else
		          {
		            $image = $this->upload->data();
		            if ($image['file_name'])
		            {
		                $data['file1'] = $image['file_name'];
		            }
		            $image_header = $data['file1'];
		          }
		        }

		        $data = array(
		          'date'		=> $date,
		          'time'		=> $time,
		          'image_header'		=> $image_header,
			      'status'		=> $status,
			      'id_user'		=> $id_user,
			      'slug'		=> $slug,
			      'nama'		=> $nama,
			      'tipe'		=> $tipe,
			      'deskripsi' 	=> $deskripsi,
			      'alamat'		=> $alamat,
			      'kota'		=> $kota,
			      'harga'		=> $harga,
			      'sisa_kamar'	=> $sisa_kamar,
		        );

		        $this->User_model->updatedata('tbl_kos',$data,array('id_kos' => $id_kos));
		        redirect('Dashboard_Admin');
      		}


		}
		else {
      		echo "Page Not Found";
    	}

	}

	public function tambah_kos(){
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $data2 = array(
	    	//'id_user'	=> '',
	    	'id_kos'	=> '',
	    	'status'	=> '',
	    	'slug'		=> '',
	    	'nama'		=> '',
	    	'image'		=> '',
	    	'tipe'		=> '',
	    	'deskripsi' => '',
	    	'alamat'	=> '',
	    	'kota'		=> '',
	    	'harga'		=> '',
	    	'sisa_kamar'=> '',
	    	'stat'		=>'new',

	    );

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
		    $this->load->view('admin/header',$data);
			$this->load->view('view_tambah_kos_admin',$data2);
	    }
	}

	function proses_update_kos(){
		date_default_timezone_set('Asia/Jakarta'); 
		$nama = $this->input->post('nama');
		$image = $this->input->post('image');
		$tipe = $this->input->post('tipe');
		$alamat = $this->input->post('alamat');
		$deskripsi = $this->input->post('deskripsi');
		$kota = $this->input->post('kota');
		$harga = $this->input->post('harga');
		$sisa_kamar = $this->input->post('sisa_kamar');
		$status = $this->input->post('status');
		$id = $this->input->post('id_kos');
		$date 			= date('Y-m-d H:i:s');
		$time 			= date('H:i:s');

		$data = array(
			'status' => $status,
			'date' => $date,
			'time' => $time,

	    	'nama'		=> $nama,
	    	'tipe'		=> $tipe,
	    	'deskripsi' => $deskripsi,
	    	'alamat'	=> $alamat,
	    	'kota'		=> $kota,
	    	'harga'		=> $harga,
	    	'sisa_kamar'=> $sisa_kamar
		);

		$where = array(
			'id_kos' => $id
		);

		$this->User_model->update_data_user($where,$data,'tbl_kos');
		redirect('Dashboard_Admin/view_kos');
	}

	function hapus_kos_admin($id){
		$where = array('id_kos' => $id);
		$this->User_model->hapus_data_user($where,'tbl_kos');
		redirect('Dashboard_Admin/view_kos');
	}

	function edit_kos_admin($id){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $where = array('id_kos' => $id);
		$data['kos'] = $this->User_model->edit_data_user($where,'tbl_kos')->result();

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {
		    $this->load->view('admin/header',$data);

			$this->load->view('v_edit_kos_admin');
	    }
	}

	public function view_kos()
	{
		$this->load->helper('text');
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['kos'] = $this->User_model->get_listkos();

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
			$this->load->view('admin/header',$data);
			$this->load->view('view_kos_admin',$data);
	    }		
	}

	public function view_profile(){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $data['jk'] = $this->session->userdata('jk');
	    $data['no_hp'] = $this->session->userdata('no_hp');
	    $data['alamat'] = $this->session->userdata('alamat');
	    $data['user'] = $this->User_model->get_listuser();
	    $data['user'] = $this->User_model->get_listrole();

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else {
	    	$this->load->view('admin/header',$data);

			$this->load->view('view_profile');
	    }

	}

	function edit_user($id){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $where = array('id_user' => $id);
		$data['user'] = $this->User_model->edit_data_user($where,'tb_user')->result();

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {
		    $this->load->view('admin/header',$data);

			$this->load->view('v_edit_user');
	    }
	}

	public function data_admin($id){
		$this->load->helper('text');
		$data['sql'] = $this->User_model->info_user($id);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));


	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
		    $this->load->view('admin/header',$data);

			$this->load->view('view_profile_admin',$data);
	    }	
	}

	function edit_admin($id){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $where = array('id_user' => $id);
		$data['user'] = $this->User_model->edit_data_user($where,'tb_user')->result();

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {
		    $this->load->view('admin/header',$data);
			$this->load->view('v_edit_admin');
	    }
	}

	function proses_update_admin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$id_role = $this->input->post('id_role');
		$id = $this->input->post('id_user');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $fullname,
			'jk' => $jk,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_role' => $id_role
		);

		$where = array(
			'id_user' => $id
		);

		$this->User_model->update_data_user($where,$data,'tb_user');
		redirect('Dashboard_Admin/data_admin/'.$this->session->userdata('id_user'));
	}



	function hapus_user($id){
		$where = array('id_user' => $id);
		$this->User_model->hapus_data_user($where,'tb_user');
		redirect('Dashboard_Admin/view_admin');
	}

	public function daftar_user(){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));


	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {

			$this->load->view('admin/header',$data);
		    $this->load->view('menu_admin');
		    $this->load->view('admin/footer');
			$this->load->view('v_tambah_user');
		}
	}

	public function proses_daftar_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$id_role = $this->input->post('id_role');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $fullname,
			'jk' => $jk,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_role' => $id_role
		);
		$this->User_model->input_data_user($data,'tb_user');
		redirect('Dashboard_Admin/view_admin');
	}

	function proses_update_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$id_role = $this->input->post('id_role');
		$id = $this->input->post('id_user');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $fullname,
			'jk' => $jk,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_role' => $id_role
		);

		$where = array(
			'id_user' => $id
		);

		$this->User_model->update_data_user($where,$data,'tb_user');
		redirect('Dashboard_Admin/view_admin');
	}


	public function semua_kos(){
		$data['sql'] = $this->User_model->info_semua_kos();
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));


	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {

		    $this->load->view('admin/header',$data);
		    $this->load->view('menu_admin');
		    $this->load->view('admin/footer');
			$this->load->view('kategorikos_admin/index',$data); 
		}
	}

	public function kos_putra(){
		$data['sql'] = $this->User_model->info_kos_putra();
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));


	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {

		    $this->load->view('admin/header',$data);
		    $this->load->view('menu_admin');
		    $this->load->view('admin/footer');
			$this->load->view('kategorikos_admin/putra',$data);
		}
	}

	public function kos_putri(){
		$data['sql'] = $this->User_model->info_kos_putri();
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));


	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {

		    $this->load->view('admin/header',$data);
		    $this->load->view('menu_admin');
		    $this->load->view('admin/footer');
			$this->load->view('kategorikos_admin/putri',$data); 
		}
	}

	public function kos_campur(){
		$data['sql'] = $this->User_model->info_kos_campur();
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));


	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {
		    $this->load->view('admin/header',$data);
		    $this->load->view('menu_admin');
		    $this->load->view('admin/footer');
			$this->load->view('kategorikos_admin/campur',$data);
		}
	}

	public function view_konten_kos($slug = ''){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));

		$this->load->helper('text');
		date_default_timezone_set('Asia/Jakarta');
		$data_kos = $this->User_model->getKos("where slug = '$slug'")->result_array();
		$data2 = array(
			'nama'	=> strip_tags($data_kos[0]['nama']),
			'id_user'			=>$data_kos[0]['id_user'],
			'deskripsi'			=>$data_kos[0]['deskripsi'],
			'alamat'			=>$data_kos[0]['alamat'],
			'slug'				=>$data_kos[0]['slug'],
			'date'				=>$data_kos[0]['date'],
			'time'				=>$data_kos[0]['time'],
			'kota'				=>$data_kos[0]['kota'],
			'harga'				=>$data_kos[0]['harga'],
			'sisa_kamar'		=>$data_kos[0]['sisa_kamar'],
			'status'			=>$data_kos[0]['status'],
			'tipe'				=>$data_kos[0]['tipe'],
			'no_hp'				=>$data_kos[0]['no_hp'],
			'fullname'			=>$data_kos[0]['fullname'],
			'image_header'		=>$data_kos[0]['image_header']
		);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else {
			$this->load->view('admin/header',$data,$data2);
			$this->load->view('user/detail_kos',$data2,$data);
		}
	}

}
