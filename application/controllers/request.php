<?php 

class Request extends CI_Controller{
    function __construct()
    {
         parent::__construct();
    }
    public function index() 
    {        $this->load->model('model_request');
        $sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $data['request'] = $this->model_request->tampil_data()->result();
        $this->load->view('admin/header',$data);
	      

        $this->load->view('request', $data);


    }
    public function tambah_aksi() 
    {
        // $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required', ['required' => "Nama Depan Wajib diisi"]);
        // $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required', ['required' => "Nama Belakang Wajib diisi"]);
        // $this->form_validation->set_rules('info_hub', 'Info Hubungin', 'required', ['required' => "Wajib diisi"]);
        // $this->form_validation->set_rules('no_hp', 'No HP', 'required', ['required' => "No HP Wajib diisi"]);
        // $this->form_validation->set_rules('nama_properti', 'Nama Properti', 'required', ['required' => "Nama Properti Wajib diisi"]);
        // $this->form_validation->set_rules('url_properti', 'Url Properti', 'required', ['required' => "URL Properti Wajib diisi"]);
        // $this->form_validation->set_rules('pesan', 'Pesan', 'required', ['required' => "Wajib diisi"]);

        // if ($this->form_validation->run() == true)
        // {
           // $this-> _validation();
            $nama_depan = $this->input->post('nama_depan');
            $nama_belakang = $this->input->post('nama_belakang');
            $info_hub = $this->input->post('info_hub');
            $no_hp = $this->input->post('no_hp');
            $tipe_kos = $this->input->post('tipe_kos');
            $nama_properti = $this->input->post('nama_properti');
            $url_properti = $this->input->post('url_properti');
            $harga = $this->input->post('harga');
            $provinsi = $this->input->post('provinsi');
            $kabupaten_kota = $this->input->post('kabupaten_kota');
            $kecamatan = $this->input->post('kecamatan');
            $kelurahan = $this->input->post('kelurahan');
            $alamat = $this->input->post('alamat');
            $jumlah_kamar = $this->input->post('jumlah_kamar');
            $data = array(
                'nama_depan' => $nama_depan, 
                'nama_belakang' => $nama_belakang, 
                'info_hub' => $info_hub, 
                'no_hp' => $no_hp,
                'tipe_kos' => $tipe_kos,
                'nama_properti' => $nama_properti,
                'url_properti' => $url_properti, 
                'harga' => $harga,
                'provinsi' => $provinsi,
                'kabupaten_kota' => $kabupaten_kota,
                'kecamatan' => $kecamatan,
                'kelurahan' => $kelurahan,
                'alamat' => $alamat,
                'jumlah_kamar' => $jumlah_kamar
            );
            $this->model_request->input_data($data, 'tb_request');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data berhasil ditambahkan </div>');
            redirect('request/index');
        // }



    }
    public function hapus($id_request)
    {
        $where = array('id' => $id_request);
        $this->model_request->hapus_data($where, 'tb_request');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data berhasil dihapus </div>');
        redirect ('request/index');
    }
    public function edit($id_request)
    {
        $where = array('id_request' => $id_request);
        $data['request'] = $this->model_request->edit_data($where, 'tb_request')->result();
        $this->load->model('model_request');
        $sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $data['request'] = $this->model_request->tampil_data()->result();
        $this->load->view('admin/admin/header',$data);
	      
        $this->load->view('edit', $data);

    }
    public function update()
    {
        $id_request = $this->input->post('id_request');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $info_hub = $this->input->post('info_hub');
        $no_hp = $this->input->post('no_hp');
        $tipe_kos = $this->input->post('tipe_kos');
        $nama_properti = $this->input->post('nama_properti');
        $url_properti = $this->input->post('url_properti');
        $harga = $this->input->post('harga');
        $provinsi = $this->input->post('provinsi');
        $kabupaten_kota = $this->input->post('kabupaten_kota');
        $kecamatan = $this->input->post('kecamatan');
        $kelurahan = $this->input->post('kelurahan');
        $alamat = $this->input->post('alamat');
        $jumlah_kamar = $this->input->post('jumlah_kamar');

        $data = array (
                'nama_depan' => $nama_depan, 
                'nama_belakang' => $nama_belakang, 
                'info_hub' => $info_hub, 
                'no_hp' => $no_hp,
                'tipe_kos' => $tipe_kos,
                'nama_properti' => $nama_properti,
                'url_properti' => $url_properti, 
                'harga' => $harga,
                'provinsi' => $provinsi,
                'kabupaten_kota' => $kabupaten_kota,
                'kecamatan' => $kecamatan,
                'kelurahan' => $kelurahan,
                'alamat' => $alamat,
                'jumlah_kamar' => $jumlah_kamar
        );
        $where = array(
            'id_request' => $id_request
        );
        $this->model_request->update_data($where, $data, 'tb_request');
        $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data berhasil diupdate </div>');
        redirect('request/index');
    }
    public function detail($id_request)
    {
        $this->load->model('model_request');
        $detail = $this->model_request->detail_data($id_request);
        $data['detail'] = $detail;
        $this->load->model('model_request');
        $sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $data['request'] = $this->model_request->tampil_data()->result();
        $this->load->view('admin/header',$data);
	      
        $this->load->view('detail', $data);


    }
    public function print() 
    {
        $data['request'] = $this->model_request->tampil_data("tb_request")->result();
        $this->load->view('print_request', $data);
    } 
    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['request'] = $this->model_request->tampil_data("tb_request")->result();
        $this->load->view('laporan_pdf', $data);

        //untuk menentukan ukuran size
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        //convert ke pdf
        $this->dompdf->load_html($html);
        //render
        $this->dompdf->render();
        //menentukan nama file export nya
        $this->dompdf->stream("laporan_request.pdf", array('Attachment' =>0));
    }
    public function excel()
    {
        $data['request'] = $this->model_request->tampil_data("tb_request")->result();
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Framework Indonesia");
        $object->getProperties()->setLastModifiedBy("Framework Indonesia");
        $object->getProperties()->setTitle("Daftar Request");

        //menentukan posisi sheet yang akan kita gunakan
        $object->setActiveSheetIndex(0);

        //koversikan data yang telah kita miliki di dalam tb_mahasiswa ke dalam format excel
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NAMA DEPAN');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA BELAKANG');
        $object->getActiveSheet()->setCellValue('D1', 'INFO HUBUNGIN');
        $object->getActiveSheet()->setCellValue('E1', 'NO HP');
        $object->getActiveSheet()->setCellValue('F1', 'TIPE KOST');
        $object->getActiveSheet()->setCellValue('G1', 'NAMA PROPERTI');
        $object->getActiveSheet()->setCellValue('H1', 'URL PROPERTI');
        $object->getActiveSheet()->setCellValue('I1', 'HARGA');
        $object->getActiveSheet()->setCellValue('J1', 'PROVINSI');
        $object->getActiveSheet()->setCellValue('K1', 'KABUPATEN/KOTA');
        $object->getActiveSheet()->setCellValue('L1', 'KECAMATAN');
        $object->getActiveSheet()->setCellValue('M1', 'KELURAHAN');
        $object->getActiveSheet()->setCellValue('N1', 'ALAMAT');
        $object->getActiveSheet()->setCellValue('O1', 'JUMLAH KAMAR');

        $baris = 2;
        $no = 1;

        //untuk isi data setiap kolomnya
        foreach ($data['request'] as $rqst) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $rqst->nama_depan);
            $object->getActiveSheet()->setCellValue('C'.$baris, $rqst->nama_belakang);
            $object->getActiveSheet()->setCellValue('D'.$baris, $rqst->info_hubungin);
            $object->getActiveSheet()->setCellValue('E'.$baris, $rqst->no_hp);
            $object->getActiveSheet()->setCellValue('F'.$baris, $rqst->tipe_kos);
            $object->getActiveSheet()->setCellValue('G'.$baris, $rqst->nama_properti);
            $object->getActiveSheet()->setCellValue('H'.$baris, $rqst->url_properti);
            $object->getActiveSheet()->setCellValue('I'.$baris, $rqst->harga);
            $object->getActiveSheet()->setCellValue('J'.$baris, $rqst->provinsi);
            $object->getActiveSheet()->setCellValue('K'.$baris, $rqst->kabupaten_kota);
            $object->getActiveSheet()->setCellValue('L'.$baris, $rqst->kecamatan);
            $object->getActiveSheet()->setCellValue('M'.$baris, $rqst->kelurahan);
            $object->getActiveSheet()->setCellValue('N'.$baris, $rqst->alamat);
            $object->getActiveSheet()->setCellValue('O'.$baris, $rqst->jumlah_kamar);

            $baris++;
        }
        //extention atau tipe data
        $filename="Data_Request".'.xlsx';

        $object->getActiveSheet()->setTitle("Data Request");
        admin/header('Content->Type: application/vnd.openxmlformats-officedocument.spreadsheetml/.sheet');
        admin/header('Contebt-Disposition: attachment;filename="'.$filename. '"');
        admin/header('Cache-Control: max-age=0');
        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['request'] = $this->model_request->get_keyword($keyword);
        $this->load->model('model_request');
        $sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
        $data['request'] = $this->model_request->tampil_data()->result();
        $this->load->view('admin/header',$data);
	      
        $this->load->view('request', $data);

    }


    // private function _validation(){
    //     $data = array();
    //     $data ['error_string'] = array();
    //     $data ['inputerror'] = array();
    //     $data ['status'] = true;

    //     if ($this->input->post('nama_depan') == ''){
    //         $data['inputerror'][] = 'nama_depan';
    //         $data['error_string'][] = 'Nama Depan Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('nama_belakang') == ''){
    //         $data['inputerror'][] = 'nama_belakang';
    //         $data['error_string'][] = 'Nama Belakang Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('info_hub') == ''){
    //         $data['inputerror'][] = 'info_hub';
    //         $data['error_string'][] = 'Ini Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('no_hp') == ''){
    //         $data['inputerror'][] = 'no_hp';
    //         $data['error_string'][] = 'No HP Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('tipe_kos') == ''){
    //         $data['inputerror'][] = 'tipe_kos';
    //         $data['error_string'][] = 'Tipe Kost Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('nama_properti') == ''){
    //         $data['inputerror'][] = 'nama_properti';
    //         $data['error_string'][] = 'Nama Properti Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('url_properti') == ''){
    //         $data['inputerror'][] = 'url_properti';
    //         $data['error_string'][] = 'Url Properti Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('harga') == ''){
    //         $data['inputerror'][] = 'harga';
    //         $data['error_string'][] = 'Harga Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('provinsi') == ''){
    //         $data['inputerror'][] = 'provinsi';
    //         $data['error_string'][] = 'Provinsi Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('kabupaten_kota') == ''){
    //         $data['inputerror'][] = 'kabupaten_kota';
    //         $data['error_string'][] = 'Kabupaten/Kota Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('kecamatan') == ''){
    //         $data['inputerror'][] = 'kecamatan';
    //         $data['error_string'][] = 'Kecamatan Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($this->input->post('kelurahan') == ''){
    //         $data['inputerror'][] = 'kelurahan';
    //         $data['error_string'][] = 'Kelurahan Wajib diisi';
    //         $data['status'] = false;
    //     }
    //     if ($this->input->post('alamat') == ''){
    //         $data['inputerror'][] = 'alamat';
    //         $data['error_string'][] = 'Alamat Wajib diisi';
    //         $data['status'] = false;
    //     }
        
    //     if ($this->input->post('jumlah_kamar') == ''){
    //         $data['inputerror'][] = 'jumlah_kamar';
    //         $data['error_string'][] = 'Jumlah Kamar Wajib diisi';
    //         $data['status'] = false;
    //     }

    //     if ($data['status'] == false ){
    //         echo json_encode($data);
    //         exit();
    //     }
    // }
}
