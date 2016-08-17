<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserTestResult extends CI_Controller {

	/**
	 * This is NewExampleInfo page controller.
	 * Develope on 19th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		$this->load->model('adminmodel');

		$arrData['TestResults'] = $this->adminmodel->FetchTestResult();

		$arrData['Certiles'] = $this->adminmodel->FetchCertile();

		$this->load->view('user_test_result', $arrData);
	}
}
