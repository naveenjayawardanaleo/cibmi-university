<?php
class Home extends CI_Controller
{
	function index()
	{
		if ($this->session->has_userdata('user')) {
			$this->load->view('dashboard');
		} else {
			redirect(base_url() . 'admin/login');
		}
	}
}
