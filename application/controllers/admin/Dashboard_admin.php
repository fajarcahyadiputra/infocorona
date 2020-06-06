<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('auth');
		$this->load->database();
		$this->load->library('kawalcorona');
		cek_login();
	}
	public function index()
	{	
		// $data['dunia'] = $this->kawalcorona->getData();
		$this->load->model('Statistic_model' , 'stats');
		// $this->kawalcorona->setParams('indonesia/provinsi');
		$data['indonesia'] = $this->stats->getProvinsiAll()->result_array();

		$this->kawalcorona->setParams('positif');

		$positif = $this->kawalcorona->getData();
		
		$this->kawalcorona->setParams('sembuh');
		$sembuh = $this->kawalcorona->getData();

		$this->kawalcorona->setParams('meninggal');
		$meninggal = $this->kawalcorona->getData();

		$static['statistic'] = array(
			'positif' 	=> $positif['value'],
			'sembuh'	=> $sembuh['value'],
			'meninggal' => $meninggal['value']
		);

		$indonesia = $this->db->select('SUM(positif) as pos,SUM(meninggal) as men,SUM(sembuh) as sem,SUM(odp) as do,SUM(pdp) as pd')
		->from('provinsi')
		->get()
		->row();

		$static['indonesia'] = $indonesia;

		$this->load->view('admin/layout/head');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/layout/footer', $static);
	}

	public function Berita()
	{
		$this->load->model('Berita_model' , 'berita');
		$data['berita'] = $this->berita->getAll()->result();

		$this->load->view('admin/layout/head');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/list_berita', $data);
		$this->load->view('admin/layout/footer');
	}

	public function EditBerita($slug){

		$this->load->model('Berita_model' , 'berita');
		$data['berita'] = $this->berita->get(['slug' => $slug])->row();

		$this->load->view('admin/layout/head');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/edit_berita', $data);
		$this->load->view('admin/layout/footer');
	}

	public function hapus($slug)
	{
		$this->load->model('Berita_model' , 'berita');

		$where = array('slug' => $slug);

		if ($this->berita->hapus($where)) {
			echo "<script>alert('Sukses Hapus');window.location.href='".base_url('admin/dashboard_admin/Berita')."'</script>";
		} else {
			echo "<script>alert('Gagal Hapus');window.location.href='".base_url('admin/dashboard_admin/Berita')."'</script>";

		}
	}

	public function AddBerita()
	{
		$this->load->view('admin/layout/head');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/add_berita');
		$this->load->view('admin/layout/footer');
	}
	public function updateBerita()
	{
		$this->form_validation->set_rules('id_berita', 'ID Wajib', 'required|trim');
		$this->form_validation->set_rules('judul', 'Judul Wajib', 'required|trim');
		$this->form_validation->set_rules('type', 'Tipe Wajib', 'required|trim');
		$this->form_validation->set_rules('content', 'Content Wajib', 'required|trim');

		if ($this->form_validation->run() == false) {
			
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin/dashboard_admin/AddBerita');

		}

		$config['upload_path'] = './content/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name']  = TRUE;
		
		$this->load->library('upload');

		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('gambar')){

			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect('admin/dashboard_admin/AddBerita');

		} else {
			$file_name = $this->upload->data('file_name');
		}

		$dataInsert = array(
			'slug' 		=> url_title($this->input->post('judul'), 'dash', true) . '-' . date("Ymd"),
			'judul'		=> $this->input->post('judul'),
			'type'		=> $this->input->post('type'),
			'content'	=> $this->input->post('content'),
			'gambar'	=> $file_name
		);

		$this->load->model('Berita_model' , 'berita');

		$insert = $this->berita->update(['id_berita' => $this->input->post('id_berita')], $dataInsert);

		if ($insert) {
			
			$this->session->set_flashdata('success', 'Data Berhasil Di Update');
			redirect('admin/dashboard_admin/AddBerita');

		} else {

			$this->session->set_flashdata('error', 'Data Gagal Di Update');
			redirect('admin/dashboard_admin/AddBerita');
		}
	}
	public function saveBerita()
	{
		$this->form_validation->set_rules('judul', 'Judul Wajib', 'required|trim');
		$this->form_validation->set_rules('type', 'Tipe Wajib', 'required|trim');
		$this->form_validation->set_rules('content', 'Content Wajib', 'required|trim');

		if ($this->form_validation->run() == false) {
			
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin/dashboard_admin/AddBerita');

		}

		$config['upload_path'] = './content';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name']  = TRUE;
		
		$this->load->library('upload');

		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('gambar')){

			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect('admin/dashboard_admin/AddBerita');

		} else {
			$file_name = $this->upload->data('file_name');
		}

		$dataInsert = array(
			'slug' 		=> url_title($this->input->post('judul'), 'dash', true) . '-' . date("Ymd"),
			'judul'		=> $this->input->post('judul'),
			'type'		=> $this->input->post('type'),
			'content'	=> $this->input->post('content'),
			'gambar'	=> $file_name,
			'dibuat_oleh'	=> $this->session->userdata('username')
		);

		$this->load->model('Berita_model' , 'berita');

		$insert = $this->berita->insert($dataInsert);

		if ($insert) {
			
			$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
			redirect('admin/dashboard_admin/AddBerita');

		} else {

			$this->session->set_flashdata('error', 'Data Gagal Di Tambahkan');
			redirect('admin/dashboard_admin/AddBerita');
		}
	}
	public function StatisticKab()
	{
		$this->load->model('Statistic_model' , 'stats');
		$data['kabupaten'] = $this->stats->get_data_kabupaten('kabupaten');
		$this->load->view('admin/layout/head');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/statistic_kab',$data);
		$this->load->view('admin/layout/footer');
	}
	public function addstatistickab(){
		$this->load->model('Statistic_model' , 'stats');

		$pesan 		   		= array();
		$nama_kab 			= $this->input->post('nama_kab');
		$positif 		   	= $this->input->post('positif');
		$odp		   		= $this->input->post('odp');
		$pdp	   			= $this->input->post('pdp');
		$meninggal	   		= $this->input->post('meninggal');
		$sembuh	   			= $this->input->post('sembuh');
		$update_at	   		= date('Y-m-d h:i:s');
		$data = array(
			'nama_kab' 	=>  $nama_kab,
			'positif'	=>  $positif,
			'odp'		=>  $odp,
			'pdp' 		=>  $pdp,
			'meninggal'	=>  $meninggal,
			'sembuh' 	=>  $sembuh,
			'update_at'	=> $update_at,
		);

		$query = $this->stats->insertstatistickab('kabupaten',$data);

		if($query){
			$pesan['insert'] = true;
		}else{
			$pesan['insert'] = false;
		}

		echo json_encode($pesan);
	}
	public function deletestatistickab($id){
		$this->load->model('Statistic_model' , 'stats');

		$pesan = array();
		$where = array('id_kab' => $id);

		$delete = $this->stats->deletedatakab($where,'kabupaten');

		if($delete){
			$pesan['delete'] = true;
		}else{
			$pesan['delete'] = false;
		}

		echo json_encode($pesan);
	}
	public function editstatistickab($id){
		$this->load->model('Statistic_model' , 'stats');

		$where = array('id_kab' => $id);
		$result = array();
		$data = $this->stats->show_edit_data($where,'kabupaten');

		foreach ($data as $isi) {
			$result['id_kab'] 		= $isi->id_kab;
			$result['nama_kab'] 	= $isi->nama_kab;
			$result['positif'] 		= $isi->positif;
			$result['odp'] 			= $isi->odp;
			$result['pdp'] 			= $isi->pdp;
			$result['meninggal']	= $isi->meninggal;
			$result['sembuh'] 		= $isi->sembuh;
		}
		echo json_encode($result);

	}
	public function editdatakab(){
		$this->load->model('Statistic_model' , 'stats');

		$pesan 		   		= array();
		$id_kab				= $this->input->post('id_kab');
		$nama_kab 			= $this->input->post('nama_kab');
		$positif 		   	= $this->input->post('positif');
		$odp		   		= $this->input->post('odp');
		$pdp	   			= $this->input->post('pdp');
		$meninggal	   		= $this->input->post('meninggal');
		$sembuh	   			= $this->input->post('sembuh');
		$update_at	   		= date('Y-m-d h:i:s');
		$data = array(
			'nama_kab' 		=>  $nama_kab,
			'positif'		=>  $positif,
			'odp'			=>  $odp,
			'pdp' 			=>  $pdp,
			'meninggal'		=>  $meninggal,
			'sembuh' 		=>  $sembuh,
			'update_at' 	=> $update_at,
		);

		$where = array('id_kab' => $id_kab);

		$query = $this->stats->updatedatakab($where,$data,'kabupaten');

		if($query){
			$pesan['edit'] = true;
		}else{
			$pesan['edit'] = false;
		}
		echo json_encode($pesan);
	}
	public function Statisticprov()
	{
		$this->load->model('Statistic_model' , 'stats');
		$data['provinsi'] = $this->stats->get_data_provinsi('provinsi');

		$this->load->view('admin/layout/head');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/statistic_provinsi',$data);
		$this->load->view('admin/layout/footer');
	}
	public function editdataprov($id){

		$this->load->model('Statistic_model' , 'stats');

		$where 	= array('id_provinsi' => $id);
		$result = array();
		$query 	= $this->stats->tampil_data_edit_prov($where,'provinsi');

		foreach ($query as $dt) {
			$result['kode_provinsi'] 	= $dt->kode_provinsi;
			$result['provinsi_name'] 	= $dt->provinsi_name;
			$result['odp'] 				= $dt->odp;
			$result['pdp'] 				= $dt->pdp;
			$result['positif'] 			= $dt->positif;
			$result['meninggal'] 		= $dt->meninggal;
			$result['sembuh'] 			= $dt->sembuh;
			$result['id_provinsi'] 		= $dt->id_provinsi;
		}

		echo json_encode($result);
	}
	public function editprovinsi(){

		$this->load->model('Statistic_model' , 'stats');

		$pesan 		 	= array();
		$id_provinsi 	= $this->input->post('id_provinsi');
		$provinsi_name 	= $this->input->post('nama_prov');
		$kode_provinsi 	= $this->input->post('kode_provinsi');
		$odp		   	= $this->input->post('odp');
		$pdp	   		= $this->input->post('pdp');
		$meninggal	   	= $this->input->post('meninggal');
		$sembuh	   		= $this->input->post('sembuh');
		$positif	   	= $this->input->post('positif');
		$update_at	   	= date('Y-m-d h:i:s');

		$data = array(
			'provinsi_name' =>  $provinsi_name,
			'kode_provinsi'	=>  $kode_provinsi,
			'odp'			=>  $odp,
			'pdp' 			=>  $pdp,
			'meninggal'		=>  $meninggal,
			'sembuh' 		=>  $sembuh,
			'update_at' 	=> $update_at,
			'positif'  		=>   $positif
		);

		$where = array('id_provinsi' => $id_provinsi);

		$query = $this->stats->updateprovinsi($data,$where,'provinsi');

		if($query){
			$pesan['edit'] = true;
		}else{
			$pesan['edit'] = false;
		}
		
		echo json_encode($pesan);

	}
	public function info_grafis(){
		$this->load->model('Statistic_model' , 'stats');
		$data['media'] = $this->stats->tampil_media('media');
		$this->load->view('admin/layout/head');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/info_grafis',$data);
		$this->load->view('admin/layout/footer');

	}

	public function tambah_media(){
		$this->load->model('Statistic_model' , 'stats');

		$pesan = array();
		$config['upload_path'] = './media';
		$config['allowed_types'] = 'pdf|jpeg|png|gift|jpg';
		$config['encrypt_name'] = true;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('nama_file')){
			$pesan = $this->upload->display_errors();
			$file = '';
		}else{
			$file = $this->upload->data('file_name');
		}

		$url = $this->input->post('url');
		$tampil = $this->input->post('tampil');



		$data = [
			'file_name' => $file,
			'url' =>  $url,
			'tampil' => $tampil
		];

		$query = $this->stats->tambah_data_media($data,'media');

		if($query){
			$pesan['insert'] = true;
		}else{
			$pesan['insert'] = false;
		}

		echo json_encode($pesan);
	}
	public function hapus_media($id,$file){
		$this->load->model('Statistic_model' , 'stats');

		$where = ['id_media' =>  $id];
		$pesan = array();
		$query = $this->stats->hapus_data_media($where, 'media');

		if($query){
			$pesan['delete'] = true;
			unlink(FCPATH.'media/' . $file);
		}else{
			$pesan['delete'] = false;
		}

		echo json_encode($pesan);
	}

	public function tampil_form_editmedia($id){
		$this->load->model('Statistic_model' , 'stats');

		$where = array('id_media' => $id);
		$result = array();
		$data = $this->stats->show_data_media($where,'media');

		foreach ($data as $isi) {
			$result['id_media'] = $isi->id_media;
			$result['file_name'] 		= $isi->file_name;
			$result['url'] 	= $isi->url;
			$result['tampil'] 		= $isi->tampil;
		}
		echo json_encode($result);
	}
	public function edit_media(){
		$this->load->model('Statistic_model' , 'stats');

		$pesan = array();
		$id = $this->input->post('id_media');
		$url = $this->input->post('url');
		$tampil = $this->input->post('tampil');
		$file_lama = $this->input->post('file_lama');

		$config['upload_path'] = './media';
		$config['allowed_types'] = 'jpeg|jpg|png|gift';
		$config['encrypt_name'] = true;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('nama_file')){
			$file = $file_lama;
		}else{
			$file = $this->upload->data('file_name');
			unlink(FCPATH. 'media/' . $file_lama);
		}

		$where = ['id_media' => $id];

		$data = [
			'url' => $url,
			'tampil' => $tampil,
			'file_name' => $file
		];

		$query = $this->stats->edit_data_media($data,$where,'media');
		if($query){
			$pesan['edit'] = true;
		}else{
			$pesan['edit'] = false;
		}
		echo json_encode($pesan);

	}
}
