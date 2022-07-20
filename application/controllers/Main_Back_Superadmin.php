<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Back_Superadmin extends CI_Controller {

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
	      $this->load->view('superadmin/header',$data);
	      $this->load->view('superadmin/menu_superadmin');
	      $this->load->view('superadmin/footer');
	      $this->load->view('superadmin/index');
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

	    $data2 = array(
	    	'jumlahkos' => $jumlahkos,
	    	'jumlahuser' => $jumlahuser,
	    	'jumlahsewa' => $jumlahsewa
	    );

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
	      $this->load->view('superadmin/header',$data);
	      $this->load->view('superadmin/menu_superadmin');
	      $this->load->view('superadmin/footer');
	      $this->load->view('superadmin/dashboard_superadmin',$data2);
	    }
		
	}

	public function view_superadmin()
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
			$this->load->view('superadmin/view_superadmin',$data);
	    }		
	}

	function proses_update_kos(){
		date_default_timezone_set('Asia/Jakarta'); 
		$status = $this->input->post('status');
		$id = $this->input->post('id_kos');
		$date 			= date('Y-m-d H:i:s');
		$time 			= date('H:i:s');

		$data = array(
			'status' => $status,
			'date' => $date,
			'time' => $time
		);

		$where = array(
			'id_kos' => $id
		);

		$this->User_model->update_data_user($where,$data,'tbl_kos');
		redirect('Main_Back_Superadmin/view_kos');
	}

	function hapus_kos_admin($id){
		$where = array('id_kos' => $id);
		$this->User_model->hapus_data_user($where,'tbl_kos');
		redirect('Main_Back_Superadmin/view_kos');
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
		    $this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/menu_superadmin');
			$this->load->view('superadmin/footer');
			$this->load->view('superadmin/v_edit_kos_admin');
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
			$this->load->view('superadmin/view_kos_superadmin',$data);
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
	    	$this->load->view('superadmin/header',$data);
		    $this->load->view('superadmin/menu_superadmin');
		    $this->load->view('superadmin/footer');
			$this->load->view('superadmin/view_profile');
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
		    $this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/menu_superadmin');
			$this->load->view('superadmin/footer');
			$this->load->view('superadmin/v_edit_user');
	    }
	}

	public function data_superadmin($id){
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
		    $this->load->view('superadmin/header',$data);
		    $this->load->view('superadmin/menu_superadmin',$data);
		    $this->load->view('superadmin/footer');
			$this->load->view('superadmin/view_profile_superadmin',$data);
	    }	
	}

	function edit_superadmin($id){
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
		    $this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/menu_superadmin');
			$this->load->view('superadmin/footer');
			$this->load->view('superadmin/v_edit_superadmin');
	    }
	}

	function proses_update_superadmin(){
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
		redirect('Main_Back_Superadmin/data_superadmin/'.$this->session->userdata('id_user'));
	}



	function hapus_user($id){
		$where = array('id_user' => $id);
		$this->User_model->hapus_data_user($where,'tb_user');
		redirect('Main_Back_Superadmin/view_superadmin');
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

			$this->load->view('superadmin/header',$data);
		    $this->load->view('superadmin/menu_superadmin');
		    $this->load->view('superadmin/footer');
			$this->load->view('superadmin/v_tambah_user');
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
		redirect('Main_Back_Superadmin/view_superadmin');
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
		redirect('Main_Back_Superadmin/view_superadmin');
	}

	public function sewa()
    {
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, tbl_kos kos, tb_user user WHERE tr.id_kos=kos.id_kos AND tr.id_user=user.id_user AND user.id_user")->result();
        $data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $this->load->view('superadmin/header',$data);
		    $this->load->view('superadmin/menu_superadmin',$data);
		    $this->load->view('superadmin/footer');
			$this->load->view('superadmin/view_sewa',$data);
    }

}
