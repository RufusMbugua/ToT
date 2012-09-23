<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="projectDonor")
 */
class E_ProjectDonor{
 	/**
* @Id
* @Column(name="projectDonorID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $projectDonorID;
/**
* @Column(name="projectID", type="integer",length=11, nullable=true)
* */
private $projectID;
/**
* @Column(name="donorID", type="integer",length=11, nullable=true)
* */
private $donorID;

public function getProjectDonorID() {
		return $this -> projectDonorID;
}

public function setProjectDonorID($projectDonorID) { $this -> projectDonorID = $projectDonorID;
}
public function getProjectID() {
		return $this -> projectID;
}

public function setProjectID($projectID) { $this -> projectID = $projectID;
}
public function getDonorID() {
		return $this -> donorID;
}

public function setDonorID($donorID) { $this -> donorID = $donorID;
}
}
?>