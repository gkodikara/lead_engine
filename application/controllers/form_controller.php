<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Form_controller extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->view('form');
	}

	function set_user_data() {
		$form_data = $this->input->post();
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_URL, "http://gkodikara:adm1n123!@#@http://54.252.155.211:5984/lead_engine");
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($form_data));
		curl_setopt($ch, CURLOPT_POST, 1);
		$tuData = curl_exec($ch); 
		curl_close($ch);
	}

	function get_user_data($user_id = null) {

		if (!isset($user_id)) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_URL, "http://gkodikara:gregory55jB@217.199.160.116:5585/facebook_app_users/_design/fb_users/_view/has_email/");
			curl_setopt($ch, CURLOPT_HTTPGET, 1);
			$data = curl_exec($ch); 
			curl_close($ch);

			echo json_encode($data);	
		}

	}


}