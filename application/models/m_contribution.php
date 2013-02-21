<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to SystemUser entity
 */
use application\models\Entities\E_Contribution;

class M_Contribution extends MY_Model {
	var $isUser, $email, $userRights, $affiliation;
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize, $contribution, $projectName;

	function __construct() {
		parent::__construct();
		$this -> isUser = 'false';
		$this -> email = '';
		$this -> userRights = '';
		$this -> affiliation = '';
		$this -> contribution = '';
	}

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

				$this -> theForm = new \models\Entities\E_Contribution();
				//create an object of the model

				/*timestamp option*/
				//$this -> theForm -> setDates($this->elements[$i]['visitDate']);;/*entry option*/
				$this -> theForm -> setAmount($this -> input -> post('contribution'));
				$this -> theForm -> setDonorNumber($this -> session -> userdata('currentId'));
				$this -> theForm -> setContributionDate(date("l F d, Y"));
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
			$query = $this -> em -> createQuery('SELECT u FROM models\Entities\E_contribution u WHERE u.donorNumber=' . $this -> session -> userdata('currentId'));
			$this -> contribution = $query -> getArrayResult();
			// array of User objects

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}
		return $this -> contribution;
	}
	
	function viewAllContributions() {
		try {
			$query = $this -> em -> createQuery('SELECT u FROM models\Entities\E_contribution u');
			$this -> contribution = $query -> getArrayResult();
			// array of User objects

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}
		return $this -> contribution;
	}

	function viewSpecificRecord($value) {
		try {
			$query = $this -> em -> createQuery('SELECT u FROM models\Entities\E_Contribution u WHERE u.contributionID = ' . $value);
			$this -> contribution = $query -> getArrayResult();

			$this -> project = $this -> em -> getRepository('models\Entities\E_Project') -> findOneBy(array('financeID' => $value));
			$this -> projectName = $this -> project -> getProjectName();

			// array of User objects

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}

		return $this -> contribution;
	}

	function editRecord($value) {

		$this -> contribution = $this -> em -> getRepository('models\Entities\E_Contribution') -> findOneBy(array('contributionID' => $value));

		$this -> project = $this -> em -> getRepository('models\Entities\E_Project') -> findOneBy(array('projectName' => $this->input->post('projectList')));
		$financeID = $this->project->getFinanceID();
		
		if (!$this -> contribution) {
			//throw $this -> createNotFoundException('No product found for id ');
		}
		
		
		$this -> contribution -> setAmount($this -> input -> post('contribution'));
		$this -> em -> flush();

		//return $this->redirect($this->generateUrl('homepage'));

	}

	function deleteRecord($value) {

		$this -> contribution = $this -> em -> getRepository('models\Entities\E_Contribution') -> findOneBy(array('contributionID' => $value));

		if (!$this -> contribution) {
			//throw $this -> createNotFoundException('No product found for id ');
		}
		$this -> em -> remove($this -> contribution);
		$this -> em -> flush();

		//return $this->redirect($this->generateUrl('homepage'));

	}

}//end of class M_SystemUser)
