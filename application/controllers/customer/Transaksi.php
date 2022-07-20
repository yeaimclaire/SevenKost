<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('id_user') == '') {
            $this->session->set_flashdata('flashhh', '<div class="alert alert-primary alert-dismissible fade show" role="alert"> Login dulu biar Jongjons
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>

        </div> ');
            redirect('auth/login');
        }

        $user = $this->session->userdata('id_user');
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, tbl_kos kos, tb_user user WHERE tr.id_kos=kos.id_kos AND tr.id_user=user.id_user AND user.id_user='$user' ORDER BY id_booking DESC")->result();

        $data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $this->load->view('navbar_user',$data);
        $this->load->view('customer/data_transaksi', $data);
    }

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, tbl_kos kos, tb_user user WHERE tr.id_kos=kos.id_kos AND tr.id_user=user.id_user AND tr.id_booking='$id' ORDER BY id_booking DESC")->result();
        $this->load->view('navbar_user',$data);
        $this->load->view('customer/pembayaran', $data);

    }
    public function pembayaran_aksi()
    {
        $id_booking =  $this->input->post('id_booking');
        $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];

        if ($bukti_pembayaran)
        $config['upload_path'] = 'file/kos_image';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '100000000';
        $config['min_size'] = '0';


        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('bukti_pembayaran')) {
            var_dump($this->upload->display_errors());
            $bukti_pembayaran =  $this->upload->data('file_name');
            $this->db->set('bukti_pembayaran', $bukti_pembayaran);
        } else {
            echo "Gagal upload";
        }
        $data   =   array('bukti_pembayaran' => $bukti_pembayaran);
        $where  =   array('id_booking' => $id_booking);

        $this->load->model('Kpr_model');
        $this->Kpr_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('flash', ' <div class="alert alert-info alert-dismissible fade show" role="alert"> Transaksi Telah di update Mohon tunggu konfikosasi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

            <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>

        </div> ');
        redirect('customer/transaksi');
    }

    public function print_invoice($id)
    {
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, tbl_kos kos, tb_user user WHERE tr.id_kos=kos.id_kos AND tr.id_user=user.id_user AND tr.id_booking='$id'")->result();

        $this->load->view('customer/cetak_invoice', $data);
    }

    public function batal_transaksi($id)
    {
        $where = array('id_booking' => $id);
        $this->load->model('Kpr_model');
        $data = $this->Kpr_model->got_where($where, 'transaksi')->row();

        $where2 = array('id_kos'  => $data->id_kos);
        $data2 = array('status'     => '1');

        $this->load->model('Kpr_model');
        $this->Kpr_model->update_data('tbl_kos', $data2, $where2);
        $this->Kpr_model->hapus_kos($where, 'transaksi');
        $this->session->set_flashdata('flash', ' <div class="alert alert-info alert-dismissible fade show" role="alert"> Transaksi Telah di Batalkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>

    </div> ');
        redirect('customer/transaksi');
    }
}
