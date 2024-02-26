<?php
 include "config.php";

 if(!isset($_SESSION['user'])){
    header('Location: index.php');
}

include "header.php";

include('modal_pago_servicio/modal_agre_pag.php'); 
?>

<div class="body">   
    <center><h1>MANTENIMIENTO DE SERVICIOS</H1></center>
    
    <a href="#addnew" class="btn b  tn-primary" data-toggle="modal">
    <span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>

    <!-- Listar -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo de Pago </th>
                    <th scope="col">Concepto</th>
                    <th scope="col">fecha</th>
                    <th scope="col">monto</th>
                    <th scope="col">cliente</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
            <tbody>

        <?php

            $sql = "select * from pago_servicios";
            $can_regis=0;
            if ($result = mysqli_query($con,$sql)) {
                while ($row = $result->fetch_assoc()) {
                    $can_regis++;
        ?>
                <tr>
                    <td> <?php echo $row["cod_pag"];  ?> </td>
                    <td> <?php echo $row["concepto"];  ?> </td>
                    <td> <?php echo $row["fecha"];  ?> </td>
                    <td> <?php echo $row["monto"];  ?> </td>
                    <td> <?php echo $row["cliente"];  ?> </td>
                    <td> 
                        <a href="#edit_<?php echo $row['cod_pag']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="#delete_<?php echo $row['cod_pag']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar</a>

                    </td>
                    <?php include('modal_pago_servicio/modal_edi_eli_pag.php'); ?>
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


