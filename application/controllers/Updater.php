<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Updater extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('kawalcorona');
		$this->load->database();
	}

	public function index()
	{
		$this->load->model('Statistic_model' , 'stats');

		$this->kawalcorona->setParams('indonesia/provinsi');

		$data = $this->kawalcorona->getData();

		foreach ($data as $key) {
			
			$cek = $this->stats->getProvinsi(['kode_provinsi' => $key['attributes']['Kode_Provi']]);

			if ($cek->num_rows() > 0) {
				
				$dataUpdate = array(
					'positif'		=> $key['attributes']['Kasus_Posi'],
					'meninggal'		=> $key['attributes']['Kasus_Meni'],
					'sembuh'		=> $key['attributes']['Kasus_Semb'],
					'provinsi_name' => $key['attributes']['Provinsi'],
					'update_at' => date("Y-m-d h:i:s")
				);

				$kode = $key['attributes']['Kode_Provi'];

				$this->stats->update_Provinsi(['kode_provinsi' => $kode] , $dataUpdate);

				echo "Update ".$key['attributes']['Provinsi']." \n";

			} else {

				$dataInsert = array(
					'kode_provinsi'	=> $key['attributes']['Kode_Provi'],
					'positif'		=> $key['attributes']['Kasus_Posi'],
					'meninggal'		=> $key['attributes']['Kasus_Meni'],
					'sembuh'		=> $key['attributes']['Kasus_Semb'],
					'provinsi_name' => $key['attributes']['Provinsi']
				);

				$this->stats->insertProvinsi($dataInsert);

				echo "Insert ".$key['attributes']['Provinsi']." \n";
			}
		}
	}

}

/* End of file Updater.php */
/* Location: ./application/controllers/Updater.php */