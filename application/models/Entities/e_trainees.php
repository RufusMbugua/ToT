<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="trainees")
 */
class E_Trainees{
 	/**
* @Id
* @Column(name="traineeNo", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $traineeNo;
/**
* @Column(name="nationalId", type="integer",length=11, nullable=true)
* */
private $nationalId;
/**
* @Column(name="firstName", type="string",length=45, nullable=true)
* */
private $firstName;
/**
* @Column(name="lastName", type="string",length=45, nullable=true)
* */
private $lastName;
/**
* @Column(name="age", type="string",length=45, nullable=true)
* */
private $age;
/**
* @Column(name="phoneNumber", type="string",length=45, nullable=true)
* */
private $phoneNumber;
/**
* @Column(name="residence", type="string",length=45, nullable=true)
* */
private $residence;
/**
* @Column(name="groupId", type="integer",length=11, nullable=true)
* */
private $groupId;
/**
* @Column(name="userId", type="integer",length=11, nullable=true)
* */
private $userId;

public function getTraineeNo() {
		return $this -> traineeNo;
}

public function setTraineeNo($traineeNo) { $this -> traineeNo = $traineeNo;
}
public function getNationalId() {
		return $this -> nationalId;
}

public function setNationalId($nationalId) { $this -> nationalId = $nationalId;
}
public function getFirstName() {
		return $this -> firstName;
}

public function setFirstName($firstName) { $this -> firstName = $firstName;
}
public function getLastName() {
		return $this -> lastName;
}

public function setLastName($lastName) { $this -> lastName = $lastName;
}
public function getAge() {
		return $this -> age;
}

public function setAge($age) { $this -> age = $age;
}
public function getPhoneNumber() {
		return $this -> phoneNumber;
}

public function setPhoneNumber($phoneNumber) { $this -> phoneNumber = $phoneNumber;
}
public function getResidence() {
		return $this -> residence;
}

public function setResidence($residence) { $this -> residence = $residence;
}
public function getGroupId() {
		return $this -> groupId;
}

public function setGroupId($groupId) { $this -> groupId = $groupId;
}
public function getUserId() {
		return $this -> userId;
}

public function setUserId($userId) { $this -> userId = $userId;
}
}
?>