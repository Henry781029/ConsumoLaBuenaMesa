<?php include('encabezados/header.php')?>

<?php
$leer = json_decode(file_get_contents('http://localhost/LaBuenaMesa/api/read.php'), true);

?>

<div class="container p-4">
    <h1>LISTADO DE PLATOS</h1>
    <br>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">idPlato</th>
                        <th scope="col">nombre</th>
                        <th scope="col">descripcion</th>
                        <th scope="col">precio</th>
                        <th scope="col">created</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        foreach($leer['cuerpo'] as $row){ ?>

                        <tr>
                            
                            <td><?php echo $row['idPlato']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['precio']?></td>
                            <td><?php echo $row['created']?></td>
                            <td>

                                <a href="editar_plato.php?id=<?php echo $row['id']?>" class= "btn btn-success">
                                <i class="fas fa-marker"></i>
                                </a>
                                <a href="borrar_plato.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            
                            </td>
                        </tr>

                    <?php }  ?>
                    
                </tbody>

            </table>   
            
        </div>
    </div>
</div>

<?php include('encabezados/footer.php')?>