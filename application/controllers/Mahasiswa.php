<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model("mahasiswa_model");
        $this->load->library("form_validation");
        
    }

	public function index()
	{
		$this->load->view("template/header");
        $this->load->view("template/sidebar");
        $data["mahasiswa"] = $this->mahasiswa_model->tampil_data();
		$this->load->view("mahasiswa/list",$data);
		$this->load->view("template/footer");
    }
    
    function tambah()
    {

        $this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('mahasiswa');
        } else {
            $data = array(
                "nim" => $_POST['nim'],
                "nama_mahasiswa" => $_POST['nama_mahasiswa'],
                "jenis_kelamin" => $_POST['jenis_kelamin'],
                "alamat" => $_POST['alamat'],
                "no_hp" => $_POST['no_hp']

            );
            $this->mahasiswa_model->tambah($data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('mahasiswa');
        }
    }

    public function edit($id = null)
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('mahasiswa');
        }else{
            $data=array(
                "nim" => $_POST['nim'],
                "nama_mahasiswa" => $_POST['nama_mahasiswa'],
                "jenis_kelamin" => $_POST['jenis_kelamin'],
                "alamat" => $_POST['alamat'],
                "no_hp" => $_POST['no_hp']
            );
            $this->mahasiswa_model->update($data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('mahasiswa');
		}else{
			$this->mahasiswa_model->hapus($id);
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('mahasiswa');
		}
    }

}