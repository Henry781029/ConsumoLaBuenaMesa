<?php include('encabezados/header.php')?>

<div class="container-p-4">
    <h1>BUSCAR PLATOS</h1>
    <br>
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <form action="find_plato.php" method = "POST">
                    <div class="form-group">
                        <input type="text" name = "idPlato" class = "form-control" placeholder = "IdPlato" autofocus>
                        <br>
                        <input type="submit" class = "btn btn-primary btn-block" name = "buscar_plato" value = "Buscar" >
                    </div>
                    <br>
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
                    <form action="editar_plato.php"  method = "POST">
                    <input type="submit" class = "btn btn-warning btn-block" name = "editar_plato" value = "Actualizar" >
                    </form>
                </form>
            </div>         

        </div>
    </div>
</div>

<?php include('encabezados/footer.php')?>