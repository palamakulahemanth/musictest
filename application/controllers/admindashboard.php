<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

	/**
	 * This is TonalTest page controller.
	 * Develope on 21th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		if(isset($this->session->userdata['EmployeeID']))
		{
			//$this->load->view('admindashboard');
			redirect('/userslist', 'refresh');
		}else
		{
			redirect('/admin', 'refresh');
		}

	}
}
