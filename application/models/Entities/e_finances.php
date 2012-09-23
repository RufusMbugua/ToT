<?php
namespace models\Entities;
/**
 * @Entity
 * @Table(name="finances")
 */
class E_Finances{
 	/**
* @Id
* @Column(name="financeID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $financeID;
/**
* @Column(name="donorNumber", type="integer",length=11, nullable=true)
* */
private $donorNumber;
/**
* @Column(name="trainerID", type="integer",length=11, nullable=true)
* */
private $trainerID;
/**
* @Column(name="groupID", type="integer",length=11, nullable=true)
* */
private $groupID;

public function getFinanceID() {
		return $this -> financeID;
}

public function setFinanceID($financeID) { $this -> financeID = $financeID;
}
public function getDonorNumber() {
		return $this -> donorNumber;
}

public function setDonorNumber($donorNumber) { $this -> donorNumber = $donorNumber;
}
public function getTrainerID() {
		return $this -> trainerID;
}

public function setTrainerID($trainerID) { $this -> trainerID = $trainerID;
}
public function getGroupID() {
		return $this -> groupID;
}

public function setGroupID($groupID) { $this -> groupID = $groupID;
}
}
?>