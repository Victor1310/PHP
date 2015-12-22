<?php
require_once '../dao/OrdersDAO.php';  
 require_once '../dto/OrdersDTO.php';  
$fecha = $_POST['txtFecha'];
$ID = $_POST['txtID'];

$orden = new OrdersDAO();
$orden->setModificar($ID_empleado, $fecha);

header('Location: index.php');
