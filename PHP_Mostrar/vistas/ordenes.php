
<?php
 require_once '../dao/OrdersDAO.php';  
 require_once '../dto/OrdersDTO.php';  
 $ID = $_GET['EmployeeID'];
$orderDAO = new OrdersDAO();
$orden = $orderDAO->getOrders($ID);
 ?>   
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ordenes</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ORDER ID</th>
                    <th>Employee ID</th>
                    <th>Ship Name</th>
                    <th>Shipped Date</th>
                    <th>Company Name</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orden as $value) {?>
                <tr>
                    <td><?php echo($value->getOrderID()); ?></td>
                    <td><?php echo($value->getEmployeeID()); ?></td>
                    <td><?php echo($value->getShipName()); ?></td>
                    <td><?php echo($value->getShippedDate()); ?></td>
                    <td><?php echo($value->getCompanyName()); ?></td>
                    <td><?php echo($value->getPhone()); ?></td>
                    <td><a href="modificar.php?EpleadoID=<?php echo($value->getEmployeeID());?>&fecha=<?php echo($value->getShippedDate());?>&N_orden=<?php echo($value->getOrderID());?>
                          &company=<?php echo($value->getCompanyName()); ?>">Modificar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>