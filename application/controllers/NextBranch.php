<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NextBranch extends CI_Controller {

	/**
	 * This is NextBranch page controller.
	 * Develope on 19th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		if(!isset($this->session->userdata['UserID']))
		{
			redirect('/', 'refresh');
		}else
		{
			$this->load->view('next_branch');
		}
	}
}
