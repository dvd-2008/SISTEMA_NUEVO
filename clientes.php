<?php
 include "config.php";

 if(!isset($_SESSION['user'])){
    header('Location: index.php');
}

include "header.php";

include('modal_cliente/modal_agre_cli.php'); 
?>

<div class="body">   
    <center><h1>MANTENIMIENTO DE CLIENTES</H1></center>
    
    <a href="#addnew" class="btn btn-primary" data-toggle="modal">
    <span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>

    <!-- Listar -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nª CUENTA </th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">DNI</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
            <tbody>

        <?php

            $sql = "select * from cliente";
            $can_regis=0;
            if ($result = mysqli_query($con,$sql)) {
                while ($row = $result->fetch_assoc()) {
                    $can_regis++;
        ?>
                <tr>
                    <td> <?php echo $row["n_cuenta"];  ?> </td>
                    <td> <?php echo $row["nombre"];  ?> </td>
                    <td> <?php echo $row["apellido"];  ?> </td>
                    <td> <?php echo $row["dni"];  ?> </td>
                    <td> 
                        <a href="#edit_<?php echo $row['n_cuenta']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="#delete_<?php echo $row['n_cuenta']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar</a>

                    </td>
                    <?php include('modal_cliente/modal_edi_eli_cli.php'); ?>
                </tr>
            </tbody>
        <?php
                    }
                    $result->free();
                } 
        ?>
            <tfoot>
                <tr>
                    <td colspan="5">
                    <strong>Nº DE REGISTROS = </strong>
                    <strong><?php echo $can_regis;  ?></strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>



<?php
 include "footer.php";
 ?>


