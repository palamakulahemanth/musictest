<?php
/**
* This class is used to handle the customer related info.
* Develope on 19th July'2016 by Hemanth Kumar
*/
class AdminModel extends CI_Model
{
	function AdminModel() 
  	{
    	parent::__construct();
  	}
	
	function Login()
	{
		if(sizeof($_POST) > 0)
		{
			
			$strUserName = $_POST['userame'];

			$strPassword = md5($_POST['password']);

			$strQuery = 'SELECT * FROM aims_employees WHERE username LIKE "'.$strUserName.'"';

			$objQuery = $this->db->query($strQuery);

			if($objQuery->num_rows() > 0)
			{
				$arrResult = $objQuery->result_array();

				$arrEmployee = $arrResult[0];

				if($arrEmployee['passwd'] == $strPassword && $arrEmployee['active'] == 1)
				{
					$this->session->set_userdata('EmployeeID', $arrEmployee['id']);

					$this->session->set_userdata('EmployeeFName', $arrEmployee['firstname']);

					$this->session->set_userdata('EmployeeLName', $arrEmployee['lastname']);

					return 1;
				}elseif($arrEmployee['passwd'] != $strPassword)
				{
					$this->session->set_flashdata('Errors', 'Password is not matching with the records.');
					return 0;
				}elseif($arrEmployee['active'] !== 1)
				{
					$this->session->set_flashdata('Errors', 'User is not active.');
					return 0;
				}
			}else
			{
				$this->session->set_flashdata('Errors', 'User is not registered with us. Please check username entered.');
				return 0;
			}

		}
	}

	function FetchQuestions()
	{
		$strQuery = 'SELECT * FROM aims_questions WHERE active = 1';

		$objQuery = $this->db->query($strQuery);

		if($objQuery->num_rows())
		{
			return $objQuery->result_array();
		}else
		{
			return array();
		}
	}

	function UploadQuestion()
	{
		if(sizeof($_POST))
		{
			$strQuestionCode = $_POST['questioncode'];

			$strOptionsCount = $_POST['optionscount'];

			$strQuestionLevel = $_POST['questionlevel'];

			$strOptionColor = $_POST['optioncolor'];

			$target_file1 = false;

			$strNewFileName = false;

			if($strQuestionCode)
			{
				$fileName = '';

				if($_FILES && $_POST['id'] == -1)
				{
					$target_dir = "uploads/";

			        $path = $target_dir.date('Ymd');
			        
			        if(!file_exists($path)) 
			        {
			        	$oldmask = umask(0);
			        	mkdir($path, 0777);
			        	umask($oldmask);
			        }

			        $fileInfo = pathinfo($_FILES["audioname"]["name"]);
			        
			        $strNewFileName = date('YmdHis').'.'.$fileInfo['extension'];
					
					$target_file = $path ."/". basename($_FILES["audioname"]["name"]);
				
			        $target_file1 = $path."/".$strNewFileName;
				
					if(!move_uploaded_file($_FILES["audioname"]["tmp_name"], $target_file1))
			        {
			    		return 0;
			        }
				}

				if($_POST['id'] == -1)
				{
					$arrData = array(
						'questioncode'  => $strQuestionCode, 
						'optionscount'  => $strOptionsCount,
						'optioncolor' 	=> $strOptionColor,
						'questionlevel' => $strQuestionLevel,
						'addeddate'	    => date('Y-m-d H:m:s'),
						'audiopath'		=> $target_file1,
						'audiofilename' => $strNewFileName,
						'answer' 		=> $_POST['answer']
					);
				}else
				{
					$arrData = array(
						'questioncode'  => $strQuestionCode, 
						'optionscount'  => $strOptionsCount,
						'optioncolor' 	=> $strOptionColor,
						'questionlevel' => $strQuestionLevel,
						'answer' 		=> $_POST['answer']
					);
				}

				if($_POST['id'] == -1)
				{
					$result = $this->db->insert('aims_questions', $arrData);
				}
				else
				{
					$this->db->where('id', $_POST['id']);

					$result = $this->db->update('aims_questions', $arrData);
				}

				if($result)
				{
					return $result;
				}else
				{
					return 0;
				}
			}
		}
	}

	function FetchUsers()
	{
		$strQuery = 'SELECT * FROM aims_users ORDER BY id DESC';

		$objQuery = $this->db->query($strQuery);

		return $objQuery->result_array();
	}

	function _userResults($id_user)
	{
		$strQuery = 'SELECT ua.`questionid`, ua.`optionid`, q.`answer` FROM aims_user_answers ua INNER JOIN aims_questions q ON q.id = ua.`questionid` WHERE userid = '.$id_user;

		$objQuery = $this->db->query($strQuery);

		return $objQuery->result_array();
	}

	function FetchTestResult()
	{
		$arrUsers = $this->FetchUsers();
		foreach ($arrUsers as $key => &$value) {
			$value['test_result'] = $this->_userResults($value['id']);
		}
		
		return $arrUsers;
	}

	function DeleteQuestion()
	{
		$id = $_POST['questionid'];

		if($id)
		{
			$arrData = array(
                'active' => 0
            );

	 		$this->db->where('id', $id);

			$this->db->update('aims_questions', $arrData);
		}else
		{
			return false;
		}
	}
}
?>