<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to SystemUser entity
 */
use application\models\Entities\E_Trainers;

class M_Trainers extends MY_Model {
	var $isUser, $email, $userRights, $affiliation;
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize, $trainers;

	function __construct() {
		parent::__construct();
		$this -> isUser = 'false';
		$this -> email = '';
		$this -> userRights = '';
		$this -> affiliation = '';
		$this -> trainers = '';
	}

	function getUser() {
		$s = microtime(true);
		/*mark the timestamp at the beginning of the transaction*/

		if ($this -> input -> post()) {//check if a post was made

			//Working with an object of the entity
			$user = $this -> em -> getRepository('models\Entities\E_Trainers') -> findOneBy(array('email' => $this -> input -> post('email'), 'password' => $this -> input -> post('password')));

			if ($user) {
				$this -> name = $user -> getFirstName();
				return $this -> isUser = 'true';
			}

			//test a device by user

		}//close the this->input->post
		$e = microtime(true);
		$this -> executionTime = round($e - $s, '4');
		//return $this -> isUser = 'true';
	}/*end of getUser()*/

	function addRecord() {
		$s = microtime(true);
		/*mark the timestamp at the beginning of the transaction*/

		if ($this -> input -> post()) {//check if a post was made

			$this -> elements = array();
			$this -> theIds = array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
				//print(($key." ".$val)).'<br \>';

				//check if posted value is among the cloned ones
				if (!strpos("_", $key)) {//useful to keep all the  non-cloned elements in the loop
					$key = $key . "_1";
				}
				//we separate the attribute name from the number

				$this -> frags = explode("_", $key);

				$this -> id = $this -> frags[1];
				// the id

				$this -> attr = $this -> frags[0];
				//the attribute name

				$this -> theIds[$this -> attr] = $this -> id;
				//print($this->attr."  ".$this->id."  ".$val).'<br />';

				if (!empty($val))
					//We then store the value of this attribute for this element.
					$this -> elements[$this -> id][$this -> attr] = htmlentities($val);

			}//close foreach($_POST)

			//exit;

			//get the highest value of the array that will control the number of inserts to be done
			$this -> noOfInsertsBatch = max($this -> theIds);

			//factory names are set since this is an external audit and hence the session variable:affiliation can't be used

			/*method defined in MY_Model*/

			for ($i = 1; $i <= $this -> noOfInsertsBatch; ++$i) {

				$this -> theForm = new \models\Entities\E_Trainers();
				//create an object of the model

				/*timestamp option*/
				//$this -> theForm -> setDates($this->elements[$i]['visitDate']);;/*entry option*/
				$this -> theForm -> setFirstName($this -> input -> post('firstName'));
				$this -> theForm -> setLastName($this -> input -> post('otherNames'));
				//$this -> theForm -> setDateOfBirth($this -> input -> post('dateofBirth'));
				$this -> theForm -> setEmail($this -> input -> post('email'));
				$this -> theForm -> setPhoneNumber($this -> input -> post('telephone'));
				//$this -> theForm -> setStartDate($this -> input -> post('startDate'));
				//$this -> theForm -> setFinishDate($this -> input -> post('finishDate'));
				$this -> theForm -> setNameOfSchool($this -> input -> post('nameOfSchool'));
				$this -> theForm -> setResidence($this -> input -> post('residence'));
				$this -> theForm -> setNameOfcourse($this -> input -> post('nameOfCourse'));
				//$this -> theForm -> setYearOfStudy($this -> input -> post('yearOfStudy'));

				$this -> em -> persist($this -> theForm);

				//now do a batched insert, default at 5
				$this -> batchSize = 5;
				if ($i % $this -> batchSize == 0) {
					try {

						$this -> em -> flush();
						$this -> em -> clear();
						//detaches all objects from doctrine
					} catch(Exception $ex) {
						die($ex -> getMessage());
						/*display user friendly message*/

					}//end of catch

				} else if ($i < $this -> batchSize || $i > $this -> batchSize || $i == $this -> noOfInsertsBatch && $this -> noOfInsertsBatch - $i < $this -> batchSize) {
					//total records less than a batch, insert all of them
					try {

						$this -> em -> flush();
						$this -> em -> clear();
						//detactes all objects from doctrine
					} catch(Exception $ex) {
						die($ex -> getMessage());
						/*display user friendly message*/

					}//end of catch

				}
				//end of batch condition

			} //end of innner loop
		}//close the this->input->post
		$e = microtime(true);
		$this -> executionTime = round($e - $s, '4');
		$this -> rowsInserted = $this -> noOfInsertsBatch;
		return $this -> response = 'ok';

	}

	function viewRecords() {
		try {
			$query = $this -> em -> createQuery('SELECT u FROM models\Entities\E_Trainers u');
			$this -> trainers = $query -> getResult();
			// array of User objects

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}
		return $this -> trainers;
	}

}//end of class M_SystemUser)
