<?php

require_once '../conexion/conexion.php';
require_once '../dto/OrdersDTO.php';
require_once '../dto/EmployeeDTO.php';

class OrdersDAO extends conexion {
    
   public function __construct()
    {
        parent::__construct();
    } 
    
    public function getOrders($EmployeeID){
        $users = array();
        $resultado = $this->conex->query("SELECT OrderID,EmployeeID,ShipName,ShippedDate,CompanyName,Phone FROM orders JOIN shippers WHERE EmployeeID='$EmployeeID'");
    
        while($filas = $resultado->fetch_array()){
          $OrdersDTO = new OrdersDTO();
            $OrdersDTO->setOrderID($filas["OrderID"]);
            $OrdersDTO->setEmployeeID($filas["EmployeeID"]);
            $OrdersDTO->setShipName($filas["ShipName"]);
            $OrdersDTO->setShippedDate($filas["ShippedDate"]);
            $OrdersDTO->setCompanyName($filas["CompanyName"]);
            $OrdersDTO->setPhone($filas["Phone"]);
            array_push($users, $OrdersDTO);
            
        }
        return $users; 
        
    }
    public function setModificar($ID_empleado,$fecha){
        $users = array();
        $resultado = $this->conex->query('UPDATE ');
    }
    public function getempleado($id){
        $users = array();
        $resultado = $this->conex->query("SELECT FirstName, LastName FROM Employees WHERE EmployeeID='$id'");
        
        while ($filas = $resultado->fetch_array()) {
            $employeeDTO = new EmployeeDTO();
            $employeeDTO->setFirstName($filas["FirstName"]);
            $employeeDTO->setLastName($filas["LastName"]);
            array_push($users, $employeeDTO);
            
        }
        return $users;
    }
}

