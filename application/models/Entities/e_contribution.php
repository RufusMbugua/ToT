<?php
namespace models\Entities;
/**
 * @Entity
 * @Table(name="contribution")
 */
class E_Contribution{
 	/**
* @Id
* @Column(name="contributionID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $contributionID;
/**
* @Column(name="donorNumber", type="integer",length=11, nullable=true)
* */
private $donorNumber;

/**
* @Column(name="amount", type="integer",length=11, nullable=true)
* */
private $amount;

/**
* @Column(name="contributionDate", type="string",length=45)
* */
private $contributionDate;


public function getContributionID() {
		return $this -> contributionID;
}

public function setContributionID($contributionID) { $this -> contributionID = $contributionID;
}
public function getDonorNumber() {
		return $this -> donorNumber;
}

public function setDonorNumber($donorNumber) { $this -> donorNumber = $donorNumber;
}

public function getAmount() {
		return $this -> amount;
}

public function setAmount($amount) { $this -> amount = $amount;
}

public function getContributionDate() {
		return $this -> $contributionDate;
}

public function setContributionDate($contributionDate) { $this -> contributionDate = $contributionDate;
}
}
?>