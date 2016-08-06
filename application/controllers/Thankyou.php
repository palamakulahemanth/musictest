<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends CI_Controller {

	/**
	 * This is NewExample page controller.
	 * Develope on 19th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
	
			$arrData['Title'] = 'AIMS - Test';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);

			$this->load->model('frontendmodel');

			$arrResult = $this->frontendmodel->FetchResult();

			$strCounter = 0;

			foreach ($arrResult as $key => $value) {
				if($value['result'])
				{
					$strCounter = $strCounter + 1;
				}
			}

			$arrData['NoOfQtsAttempted'] = sizeof($arrResult);

			$arrData['CorrectAns'] = $strCounter;

			$this->load->view('thankyou', $arrData);  
		
	}
}
