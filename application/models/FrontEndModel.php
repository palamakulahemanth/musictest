<?php
/**
* This class is used to handle the customer related info.
* Develope on 19th July'2016 by Hemanth Kumar
*/
class FrontEndModel extends CI_Model
{
	function FrontEndModel() 
  	{
    	parent::__construct();
  	}

	function FetchQuestions()
	{
		$strQuery = 'SELECT * FROM aims_questions WHERE active = 1 AND optionscount = 3';

		$objQuery = $this->db->query($strQuery);

		if($objQuery->num_rows())
		{
			return $objQuery->result_array();
		}else
		{
			return array();
		}
	}

	function SaveUserAnswer()
	{
		$intQuestionID = $_POST['questionid'];

		$intSelectedOption = $_POST['selectedoption'];

		$arrData = array(
			'userid'  => $this->session->userdata('UserID'), 
			'questionid'  => $intQuestionID,
			'optionid' => $intSelectedOption,
			'addeddate'	    => date('Y-m-d H:m:s'),
		);

		$result = $this->db->insert('aims_user_answers', $arrData);

		return $result;

	}
}
?>