<?php include('encabezados/header.php')?>

<?php session_start();

    if(isset($_SESSION['idPlato'])){
        $idplato = $_SESSION['idPlato'];
    }else{
        $idplato = '';
    }
    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
    }else{
        $nombre = '';
    }
    if(isset($_SESSION['descripcion'])){
        $descripcion = $_SESSION['descripcion'];
    }else{
        $descripcion = '';
    }
    if(isset($_SESSION['precio'])){
        $precio = $_SESSION['precio'];
    }else{
        $precio = '';
    }

?>

<div class="container-p-4">
    <h1>BUSCAR Y ACTUALIZAR PLATOS</h1>
    <br>
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <form action="find_plato.php" method = "POST">
                    <div class="form-group">
                        <input type="text" name = "idPlato" value="<?php echo $idplato;?>"  class = "form-control" placeholder = "IdPlato" autofocus>
                        <br>
                        <span>
                            <?php 
                            if ($idplato == '')
                            {
                                echo "id del plato NO existe!!";
                            }
                            else{
                                echo '';
                            } 
                            ?>
                        </span>
                        <br>
                        <br>
                        <input type="submit" class = "btn btn-primary btn-block" name = "buscar_plato" value = "Buscar" >  
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name = "nombre" value="<?php echo $nombre;?>"  class = "form-control" placeholder = "Nombre Plato" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name = "descripcion" value="<?php echo $descripcion;?>"  class = "form-control" placeholder = "descripcion">
                    </div>
                    <div class="form-group">
                        <input type="text" name = "precio" value="<?php echo $precio;?>"  class = "form-control" placeholder = "precio">
                    </div>
                     <br>  
                    
                </form>
                <form action="editar_plato.php"  method = "POST">
                    <input type="submit" class = "btn btn-warning" style ="float:left" name = "editar_plato" value = "Actualizar" >
                    <i class="fas fa-marker"></i>
                </form>
                    <br>
                <form action="borrar_plato.php"  method = "POST">
                    <input type="submit" class = "btn btn-danger" style = "float:left" name = "borrar_plato" value = "Eliminar" >
                    <i class="fas fa-trash-alt"></i>
                </form>
            </div>         

        </div>
    </div>
</div>

<?php include('encabezados/footer.php')?>