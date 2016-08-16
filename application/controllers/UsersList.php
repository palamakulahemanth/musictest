<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersList extends CI_Controller {

	/**
	 * This is TonalTest page controller.
	 * Develope on 21th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		if(isset($this->session->userdata['EmployeeID']))
		{
			$this->load->model('adminmodel');

			$arrData['Users'] = $this->adminmodel->FetchUsers();

			$this->load->view('userslist', $arrData);
		}else
		{
			redirect('/admin', 'refresh');
		}

	}

	public function getusers()
	{
		$search_query = $_GET['search_query'];

		$this->load->model('adminmodel');

		$arrData['Users'] = $this->adminmodel->FetchFilteredUsers();

		echo json_encode(array('Users' => $arrData['Users']));
	}
}
