<?php include('encabezados/header.php')?>

<div class="container-p-4">
    <h1>REGISTRAR PLATOS</h1>
    <br>
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <form action="guardar_platos.php" method = "POST">
                    <div class="form-group">
                        <input type="text" name = "nombre" class = "form-control" placeholder = "Nombre Plato" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name = "descripcion" class = "form-control" placeholder = "descripcion">
                    </div>
                    <div class="form-group">
                        <input type="text" name = "precio" class = "form-control" placeholder = "precio">
                    </div>
                     <br>  
                    <input type="submit" class = "btn btn-success btn-block" name = "guardar_platos" value = "Guardar Plato" >
                
                </form>
            </div> 

            <?php if(isset($_SESSION['message'])) { ?>

                    <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden = "true">&times;</span>
                    </button>
                    
                    </div>

            <?php  session_unset(); } ?>           

        </div>
    </div>
</div>

<?php include('encabezados/footer.php')?>