<?php

class EmployeeDTO{
    private $employeeID;
    private $lastName;
    private $firstName;
    
    function __construct() {
        
    }
    function getFirstName() {
        return $this->firstName;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

        function getEmployeeID() {
        return $this->employeeID;
    }

    function getLastName() {
        return $this->lastName;
    }

    function setEmployeeID($employeeID) {
        $this->employeeID = $employeeID;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }


}
