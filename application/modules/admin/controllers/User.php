<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class User extends CI_Controller
//class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'model');		
	}
}