<?php
 require_once '../dao/EmployeeDAO.php';  
 require_once '../dto/EmployeeDTO.php';  
 
$employeeDAO = new EmployeeDAO();
$employee = $employeeDAO->getEmployee();
 ?>   
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Employers</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fisrt Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employee as $value) {?>
                <tr>
                    <td><?php echo($value->getEmployeeID()); ?></td>
                    <td><?php echo($value->getFirstName()); ?></td>
                    <td><?php echo($value->getLastName()); ?></td>
                    <td><a href="ordenes.php?EmployeeID=<?php echo($value->getEmployeeID());?>">Detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
