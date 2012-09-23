<?php
namespace models\Entities;
/**
 * @Entity
 * @Table(name="donors")
 */
class E_Donors{
 	/**
* @Id
* @Column(name="donorNumber", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $donorNumber;
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
* @Column(name="phoneNumbeer", type="string",length=45, nullable=true)
* */
private $phoneNumber;
/**
* @Column(name="address", type="string",length=45, nullable=true)
* */
private $address;
/**
* @Column(name="amountDonated", type="string",length=45, nullable=true)
* */
private $amountDonated;

public function getDonorNumber() {
		return $this -> donorNumber;
}

public function setDonorNumber($donorNumber) { $this -> donorNumber = $donorNumber;
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
public function getAddress() {
		return $this -> address;
}

public function setAddress($address) { $this -> address = $address;
}
public function getAmountDonated() {
		return $this -> amountDonated;
}

public function setAmountDonated($amountDonated) { $this -> amountDonated = $amountDonated;
}
}
?>