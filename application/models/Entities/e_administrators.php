<?php
namespace models\Entities;
/**
 * @Entity
 * @Table(name="administrators")
 */
class E_Administrators{
 	/**
* @Id
* @Column(name="administratorId", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $administratorId;
/**
* @Column(name="firstName", type="string",length=45, nullable=true)
* */
private $firstName;
/**
* @Column(name="lastName", type="string",length=45, nullable=true)
* */
private $lastName;
/**
* @Column(name="emailAddress", type="string",length=45, nullable=true)
* */
private $emailAddress;
/**
* @Column(name="phoneNumber", type="string",length=45, nullable=true)
* */
private $phoneNumber;

/**
* @Column(name="userId", type="integer",length=11, nullable=true)
* */
private $userId;

public function getAdministratorId() {
		return $this -> administratorId;
}

public function setAdministratorId($administratorId) { $this -> administratorId = $administratorId;
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
public function getEmailAddress() {
		return $this -> emailAddress;
}

public function setEmailAddress($emailAddress) { $this -> emailAddress = $emailAddress;
}
public function getPhoneNumber() {
		return $this -> phoneNumber;
}

public function setPhoneNumber($phoneNumber) { $this -> phoneNumber = $phoneNumber;
}
public function getUserId() {
		return $this -> userId;
}

public function setUserId($userId) { $this -> userId = $userId;
}
}
?>