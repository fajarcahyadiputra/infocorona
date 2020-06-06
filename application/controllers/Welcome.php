<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('kawalcorona');
	}

	public function index()
	{
		$this->load->model('Statistic_model' , 'stats');
		// $this->kawalcorona->setParams('indonesia/provinsi');
		$static['indonesia'] 	= $this->stats->getProvinsiAll()->result_array();
		$static['media']		= $this->stats->tampil_media('media');

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

		// $indonesia = $this->db->select('SUM(positif) as pos,SUM(meninggal) as men,SUM(sembuh) as sem,SUM(odp) as do,SUM(pdp) as pd')
		// ->from('provinsi')
		// ->get()
		// ->row();

		// $static['indonesia'] = $indonesia;

		$this->load->model('Berita_model' , 'berita');
		$this->load->helper('auth');

		$static['berita'] = $this->berita->getAll()->result();

		$this->load->view('welcome_message' , $static);
	}

	public function detail_berita($slug)
	{
		$this->load->helper('auth');
		$this->load->model('Berita_model');

		$getBerita = $this->Berita_model->get(['slug' => $slug])->row();
		$AllBerita = $this->Berita_model->getAll()->result();

		$data['berita'] 	= $getBerita;
		$data['allBerita']	= $AllBerita;
		$this->load->view('berita_detail', $data);
	}
}
