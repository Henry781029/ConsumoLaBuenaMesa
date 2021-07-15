<?php

    session_start();

    $datos_post = http_build_query(
        array(
            'idPlato' => $_POST['idPlato']
        )
    );

    $opciones = array('http' => 
        array(
            'method' => 'GET',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $datos_post
        )
    );

    $contexto = stream_context_create($opciones);
    $data = json_decode(file_get_contents('http://localhost/LaBuenaMesa/api/single_read.php?'.$datos_post, true, $contexto));

    $_SESSION['idPlato'] = $data->idplato;
    $_SESSION['nombre'] = $data->nombre;
    $_SESSION['descripcion'] = $data->descripcion;
    $_SESSION['precio'] = $data->precio;

    header('location:buscar_plato.php');

?>