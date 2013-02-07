<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="groups")
 */
class E_Groups{
 	/**
* @Id
* @Column(name="groupID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $groupID;
/**
* @Column(name="groupNumber", type="string",length=45, nullable=true)
* */
private $groupNumber;
/**
* @Column(name="startTime", type="string",length=45, nullable=true)
* */
private $startTime;
/**
* @Column(name="endTime", type="string",length=45, nullable=true)
* */
private $endTime;
/**
* @Column(name="moneyAllocated", type="string",length=45, nullable=true)
* */
private $moneyAllocated;
/**
* @Column(name="trainerID", type="integer",length=11, nullable=true)
* */
private $trainerID;
/**
* @Column(name="projectID", type="integer",length=20, nullable=true)
* */
private $projectID;

public function getGroupID() {
		return $this -> groupID;
}

public function setGroupID($groupID) { $this -> groupID = $groupID;
}
public function getGroupNumber() {
		return $this -> groupNumber;
}

public function setGroupNumber($groupNumber) { $this -> groupNumber = $groupNumber;
}
public function getStartTime() {
		return $this -> startTime;
}

public function setStartTime($startTime) { $this -> startTime = $startTime;
}
public function getEndTime() {
		return $this -> endTime;
}

public function setEndTime($endTime) { $this -> endTime = $endTime;
}
public function getMoneyAllocated() {
		return $this -> moneyAllocated;
}

public function setMoneyAllocated($moneyAllocated) { $this -> moneyAllocated = $moneyAllocated;
}
public function getTrainerID() {
		return $this -> trainerID;
}

public function setTrainerID($trainerID) { $this -> trainerID = $trainerID;
}

public function getProjectID() {
		return $this -> projectID;
}

public function setProjectID($projectID) { $this -> projectID = $projectID;
}
}
?>