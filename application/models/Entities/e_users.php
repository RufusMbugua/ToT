<?php
namespace models\Entities;
/**
 * @Entity
 * @Table(name="users")
 */
class E_Donors{
 	/**
* @Id
* @Column(name="userId", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $userId;
/**
* @Column(name="username", type="string",length=45, nullable=true)
* */
private $username;
/**
* @Column(name="password", type="string",length=45, nullable=true)
* */
private $password;


public function getUserId() {
		return $this -> userId;
}

public function setUserId($userId) { $this -> userId = $userId;
}
public function getUsername() {
		return $this -> username;
}

public function setUsername($username) { $this -> username = $username;
}
public function getPassword() {
		return $this -> password;
}
public function setPassword($password) { $this -> password = $password;
}
}
?>