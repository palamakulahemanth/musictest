<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NextBranchInfo extends CI_Controller {

	/**
	 * This is NextBranchInfo page controller.
	 * Develope on 19th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		$this->load->view('next_branch_info');
	}
}
