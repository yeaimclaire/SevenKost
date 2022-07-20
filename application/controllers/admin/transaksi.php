<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, tbl_kos kos, tb_user user WHERE tr.id_kos=kos.id_kos AND tr.id_user=user.id_user AND user.id_user")->result();
        $data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $this->load->view('admin/header',$data);
        
        $this->load->view('admin/data_transaksi', $data);
    }
    public function cek_pembayaran($id)
    {
        $where = array('id_booking' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_booking='$id'")->result();
        $data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $this->load->view('admin/header',$data);
        
        $this->load->view('admin/konfirmasi_pembayaran', $data);
    }
    public function dl_pembayaran()
    {
        $id                 = $this->input->post('id_booking');
        $status_pembayaran  = $this->input->post('status_pembayaran');
        $this->load->model('Kpr_model');

        $data = array('status_pembayaran' => $status_pembayaran);
        $where = array('id_booking' => $id);

        $this->Kpr_model->update_data('transaksi', $data, $where);
        // var_dump($this->Kpr_model->update_data('transaksi', $data, $where));
        // die();
        // $this->Kpr_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('flash', 'konfirmasi berhasil');
        redirect('admin/transaksi');
    }
    // public function download_pembayaran($id)
    // {
    //     $this->load->helper('download');
    //     $this->load->model('Kpr_model');
    //     $file_pembayaran = $this->Kpr_model->download_pembayaran($id);
    //     $file ='file/kos_image'. $file_pembayaran['bukti_pembayaran'];
    //     if(is_file($file)){
    //         force_download($file, null);
    //     }else{
    //         echo 'File tidak ditemukan';
        
    //     }
    // }

    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $this->load->model('Kpr_model');

        $file_pembayaran = $this->Kpr_model->download_pembayaran($id);
        $file            = realpath(FCPATH . './file/kos_image' . '/' . $file_pembayaran['bukti_pembayaran']);

        if (file_exists($file)) {
            force_download($file, null);
        } else {
            echo 'File tidak ditemukan';
        }
    }

    // function download_pembayaran($file = NULL) {
    //     // load download helder
    //     $this->load->helper('download');
    //     // read file contents
    //     $data = file_get_contents(base_url('file/kos_image/'.$file));
    //     force_download($file, $data);
    // }

    public function transaksi_selesai($id)
    {
        $where = array('id_booking' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_booking='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('templates_admin/footer');
    }
    public function transaksi_selesai_aksi()
    {
        $id                                 = $this->input->post('id_booking');
        $tgl_selesai                        = $this->input->post('tanggal_selesai');
        $denda                              = $this->input->post('denda');
        $tgl_pengembalian                   = $this->input->post('tgl_pengembalian');
        $status_pengembalian                = $this->input->post('status_pengembalian');
        $status_sewa                        = $this->input->post('status_sewa');
        $x = strtotime($tgl_pengembalian);
        $y = strtotime($tgl_selesai);

        // $selisih = abs($x - $y) / (60 * 60 * 24);

        $selisih = 6 - (date("m", $x) - date("m", $y));

        $total_denda = $selisih * $denda;

        // var_dump($selisih);
        // die();


        $data = array(
            'tgl_pengembalian'              => $tgl_pengembalian,
            'status_pengembalian'           => $status_pengembalian,
            'status_sewa'                   => $status_sewa,
            'total_denda'                   => $total_denda
        );
        $where = array(
            'id_booking' => $id
        );


        $this->Kpr_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('flash', 'Transaksi Sukses');
        redirect('admin/transaksi');
    }
    public function batal_transaksi($id)
    {
        $where = array('id_booking' => $id);
        $this->load->model('Kpr_model');
        $data = $this->Kpr_model->got_where($where, 'transaksi')->row();

        $where2 = array('id_kos'  => $data->id_kos);
        $data2 = array('status'     => '1');

        $this->Kpr_model->update_data('tbl_kos', $data2, $where2);
        $this->Kpr_model->hapus_kos($where, 'transaksi');
        $this->session->set_flashdata('flash', ' Di batalkan');
        redirect('admin/transaksi');
    }
}
