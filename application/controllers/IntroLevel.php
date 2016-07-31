<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IntroLevel extends CI_Controller {

	/**
	 * This is NewExampleInfo page controller.
	 * Develope on 19th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		$arrData['Title'] = 'AIMs - Tonal Memory Registration Form';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);
		
			$this->load->view('intro_level', $arrData);
	}
}
