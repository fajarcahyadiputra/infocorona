<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cek_login()
{
	$CI =& get_instance();
	$CI->load->library('session');
	if (empty($CI->session->userdata('id_user'))) {
		redirect('login','refresh');
	} else {
		redirect('admin/dashboard_admin','refresh')
	}
}