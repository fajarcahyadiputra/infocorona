<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cek_login()
{
	$CI =& get_instance();
	$CI->load->library('session');
	if (empty($CI->session->userdata('id_user'))) {
		redirect('login');
	} 
}

function sudah_login()
{
	$CI =& get_instance();
	$CI->load->library('session');
	if (!empty($CI->session->userdata('id_user'))) {
		redirect('admin/dashboard_admin');
	} 
}
function base_content($file)
{	
	$CI =& get_instance();
	$CI->load->helper('url');
	return base_url('content/'.$file);
}