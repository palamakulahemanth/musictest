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

			foreach ($arrData['Users'] as $key => &$value) {
				$intScore = $this->adminmodel->FetchUserResult($value['id']);

				$value['score'] = $intScore;

				$value['certile'] = $this->adminmodel->FetchCertileWRT($intScore);
			}

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

	public function export()
	{
		$this->load->model('adminmodel');

		$arrData['Users'] = $this->adminmodel->FetchUsers();

		foreach ($arrData['Users'] as $key => &$value) {
			$intScore = $this->adminmodel->FetchUserResult($value['id']);

			$value['score'] = $intScore;

			$value['certile'] = $this->adminmodel->FetchCertileWRT($intScore);
		}

		// Enable to download this file
		$filename = "sampledata.csv";
		 
		header("Content-Disposition: attachment; filename=\"$filename\"");
		header("Content-Type: text/csv");
		 
		$display = fopen("php://output", 'w');
		 
		$arrHeaders = array('ID', 'First Name', 'Last Name', 'Age', 'Gender', 'File Number', 'Created Date', 'Active', 'Score', 'Certile');
		$flag = false;
		if(count($arrData['Users'])) {
		    if(!$flag) {
		      // display field/column names as first row
		      fputcsv($display, array_values($arrHeaders), ",", '"');
		      $flag = true;
		    }
		    foreach ($arrData['Users'] as $key => $value) {
			    fputcsv($display, array_values($value), ",", '"');
			}
		  }
		 
		fclose($display);
	}
}
