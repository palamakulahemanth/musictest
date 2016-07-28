<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TonalTest extends CI_Controller {

	/**
	 * This is TonalTest page controller.
	 * Develope on 21th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		$this->load->model('adminmodel');

		$arrQuestions = array('Questions' => $this->adminmodel->FetchQuestions());

		$this->load->view('tonal_test', $arrQuestions);
	}
}
