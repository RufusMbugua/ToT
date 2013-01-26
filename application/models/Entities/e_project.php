<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="project")
 */
class E_Project{
 	/**
* @Id
* @Column(name="projectID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $projectID;
/**
* @Column(name="projectName", type="string",length=45, nullable=true)
* */
private $projectName;
/**
* @Column(name="projectType", type="string",length=45, nullable=true)
* */
private $projectType;
/**
* @Column(name="projectLocation", type="string",length=45, nullable=true)
* */
private $projectLocation;
/**
* @Column(name="totalInput", type="integer",length=20, nullable=true)
* */
private $totalInput;
/**
* @Column(name="totalProfit", type="integer",length=20, nullable=true)
* */
private $totalProfit;

public function getProjectID() {
		return $this -> projectID;
}

public function setProjectID($projectID) { $this -> projectID = $projectID;
}
public function getProjectName() {
		return $this -> projectName;
}

public function setProjectName($projectName) { $this -> projectName = $projectName;
}
public function getProjectType() {
		return $this -> projectType;
}

public function setProjectType($projectType) { $this -> projectType = $projectType;
}
public function getProjectLocation() {
		return $this -> projectLocation;
}

public function setProjectLocation($projectLocation) { $this -> projectLocation = $projectLocation;
}
public function getTotalInput() {
		return $this -> totalInput;
}

public function setTotalInput($totalInput) { $this -> totalInput = $totalInput;
}
public function getTotalProfit() {
		return $this -> totalProfit;
}

public function setTotalProfit($totalProfit) { $this -> totalProfit = $totalProfit;
}
}
?>