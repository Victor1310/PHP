<?php

class OrdersDTO {
    
    private $orderID;
    private $EmployeeID;
    private $shipName;
    private $shippedDate;
    private $companyName;
    private $phone;
    
    function __construct() {
        
    }
    function getOrderID() {
        return $this->orderID;
    }

    function getEmployeeID() {
        return $this->EmployeeID;
    }

    function getShipName() {
        return $this->shipName;
    }

    function getShippedDate() {
        return $this->shippedDate;
    }

    function getCompanyName() {
        return $this->companyName;
    }

    function getPhone() {
        return $this->phone;
    }

    function setOrderID($orderID) {
        $this->orderID = $orderID;
    }

    function setEmployeeID($EmployeeID) {
        $this->EmployeeID = $EmployeeID;
    }

    function setShipName($shipName) {
        $this->shipName = $shipName;
    }

    function setShippedDate($shippedDate) {
        $this->shippedDate = $shippedDate;
    }

    function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }


}
