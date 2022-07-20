<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require APPPATH . '../assets/vendor/autoload.php';

class Sewa extends CI_Controller
{


    public function tambah_sewa($id)
    {

        $this->load->model('Kpr_model');
        $data['detail'] = $this->Kpr_model->detail($id);


        $this->load->view('navbar_user');
        $this->load->view('transaksi/tambah_sewa', $data);
        $this->load->view('footer');
        // $this->load->view('templates_user/footer');
    }
    public function tambah_sewa_aksi()
    {
        $id_user           = $this->session->userdata('id_user');
        $id_kos              = $this->input->post('id_kos');
        $tgl_sewa              = $this->input->post('tgl_sewa');
        $tanggal_selesai       = $this->input->post('tanggal_selesai');
        $harga                 = $this->input->post('harga');
        $denda                 = $this->input->post('denda');

        $data = array(
            'id_user'           => $id_user,
            'id_kos'              => $id_kos,
            'tgl_sewa'              => $tgl_sewa,
            'tanggal_selesai'       => $tanggal_selesai,
            'harga'                 => $harga,
            'tgl_pengembalian'      => '-',
            'status_pengembalian'   => 'belum_kembali',
            'status_sewa'           => 'belum_selesai'
        );
        $this->load->model('Kpr_model');
        $this->Kpr_model->insert_data($data, 'transaksi');

        $status = array(
            'status' => '0'
        );
        $id = array(
            'id_kos' => $id_kos
        );



        // $options = array(
        //     'cluster' => 'ap1',
        //     'useTLS' => true
        // );
        // $pusher = new Pusher\Pusher(
        //     'b27ae1d57367681044fc',
        //     '338aeacef8b0b8e91e42',
        //     '1066575',
        //     $options
        // );

        $data['message'] = 'hello world';
        // $pusher->trigger('my-channel', 'my-event', $data);


        $this->session->set_flashdata('flashh', '<div class="alert alert-info alert-dismissible fade show" role="alert"> Transaksi Sukses Silahkan Lakukan Pembayaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> 
                <span class="sr-only">Close</span>
            </button>
           
        </div> ');
        redirect('customer/Transaksi');
    }
}
