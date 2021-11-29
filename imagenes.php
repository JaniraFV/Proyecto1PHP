<?php
session_start();
require_once "./entity/ImagenGaleria.php";
require_once "./database/Connection.php";
require_once "./database/QueryBuilder.php";
require_once "./core/App.php";

    $config = require_once "app/config.php";
    App::bind("config", $config);
    App::bind("connection", Connection::make($config["database"]));



$queryBuilder = new QueryBuilder($connection);

try{
    $imagenes = $queryBuilder->findAll('imagenes', 'imagenGaleria');
    print_r($imagenes);
    foreach($imagenes as $imagen){
        echo 'id: ' . $imagen->getId() . '<br>';
        echo 'Imagen: ' . $imagen->getUrlGallery() . '<br>';
        echo 'Descripcion: ' . $imagen->getDescripcion() . '<br>';
    }
}catch(QueryException $qe){
    die($qe->getMessage());
}