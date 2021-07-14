<?php

$guardar_post = http_build_query(
    array(
        'nombre' => $_POST['nombre'],
        'descripcion' => $_POST['descripcion'],
        'precio' => $_POST['precio'],
    )
    );

    $opciones = array('http' =>
        array(
            'method' => 'GET',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $guardar_post
        )
        );

    $contexto = stream_context_create($opciones);
    $resultados = file_get_contents('http://localhost/LaBuenaMesa/api/create.php?'. $guardar_post, false, $contexto);

    header('location:Listaplatos.php');
?>