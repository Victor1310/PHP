<?php

require_once '../conexion/conexion.php';
require_once '../dto/EmployeeDTO.php';

class EmployeeDAO extends conexion {
    
   public function __construct()
    {
        parent::__construct();
    } 
    
    public function getEmployee(){
        $users = array();
        $resultado = $this->conex->query('SELECT EmployeeID, FirstName, LastName FROM employees');
        
        while($filas = $resultado->fetch_array()){
          $EmployeDTO = new EmployeeDTO();
            $EmployeDTO->setEmployeeID($filas["EmployeeID"]);
            $EmployeDTO->setLastName($filas["LastName"]);
            $EmployeDTO->setFirstName($filas["FirstName"]);
            array_push($users, $EmployeDTO);
            
        }
//        parent::cerrarConexion();
        return $users; 
        
    }
    
}
