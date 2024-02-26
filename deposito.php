<?php
 include "config.php";

 if(!isset($_SESSION['user'])){
    header('Location: index.php');
}

include "header.php";

include('modal_depositos/modal_agre_dep.php'); 
?>

<div class="body">   
    <center><h1>MANTENIMIENTO DE DEPOSITO</H1></center>
    
    <a href="#addnew" class="btn btn-primary" data-toggle="modal">
    <span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>

    <!-- Listar -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo de Deposito </th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
            <tbody>

        <?php

            $sql = "select * from depositos";
            $can_regis=0;
            if ($result = mysqli_query($con,$sql)) {
                while ($row = $result->fetch_assoc()) {
                    $can_regis++;
        ?>
                <tr>
                    <td> <?php echo $row["cod_dep"];  ?> </td>
                    <td> <?php echo $row["fecha"];  ?> </td>
                    <td> <?php echo $row["monto"];  ?> </td>
                    <td> <?php echo $row["cliente"];  ?> </td>
                    <td> 
                        <a href="#edit_<?php echo $row['cod_dep']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="#delete_<?php echo $row['cod_dep']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar</a>

                    </td>
                    <?php include('modal_depositos/modal_edi_eli_dep.php'); ?>
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


