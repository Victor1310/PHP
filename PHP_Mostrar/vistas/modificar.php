<?php
 require_once '../dao/OrdersDAO.php';  
 require_once '../dto/OrdersDTO.php'; 
 
 $id = $_GET['EpleadoID'];
 $fecha= $_GET['fecha'];
 $orden= $_GET['N_orden'];
 $despach= $_GET['company'];
 
 $orden_empleado = new OrdersDAO();
 $empleado=$orden_empleado->getempleado($id);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Modificar Orden</h1>
        <form action="validar.php" method="POST">
        <table border="1">
            <tbody>
                <tr>
                    <?php 
                    foreach ($empleado as $value){  
                    ?>
                    <td>Nombre</td>
                    <td><input type="text" name="txtnombre" value="<?php echo($value->getFirstName()); echo(' '. $value->getLastName());}?>" disabled="" /></td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="txtID" value="<?php echo $id ?>" /></td>
                </tr>
                <tr>
                    <td>Orden Nro.</td>
                    <td><input type="text" name="txtordennuemero" value="<?php echo $orden ?>" disabled="" /></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><input type="text" name="txtFecha" value="<?php echo $fecha ?>" /></td>
                </tr>
                <tr>
                    <td>Despachador</td>
                    <td><select name="cmbDespachador">
                            <option><?php echo $despach ?></option>
                            <option></option>
                        </select></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enviar" /></td>
                </tr>
            </tbody>
        </table>
        </form>
    </body>
</html>
