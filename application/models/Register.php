<?php
/**
* This class is used to handle the customer related info.
* Develope on 19th July'2016 by Hemanth Kumar
*/
class Register extends CI_Model
{
	function Register() 
  	{
    	parent::__construct();
  	}
	
	function RegisterUser()
	{
		if(sizeof($_POST) > 0)
		{
			$arrUserData = array
			(
				'firstname'  	=> $_POST['firstname'],
				'lastname' 		=> $_POST['lastname'],
				'age'			=> $_POST['age'],
				'gender'		=> $_POST['gender'],
				'filenumber'	=> $_POST['filenumber'],
				'addeddate'		=> date('Y-m-d H:m:s'),
				'active'		=> 1,
			);

			$result = $this->db->insert('aims_users', $arrUserData);

			if($result)
			{
				return $this->db->insert_id();
			}else
			{
				return array('OOPS...! We are not able to register you now. Please try again later.');
			}
		}
	}
}
?>