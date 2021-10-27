<?php
$title = "Home";
require_once "./utils/utils.php";
require_once "./entity/ImagenGaleria.php";

$galeria[]=new ImagenGaleria("1.jpg", "Descripcion img 1", 1, 5, 6);
$galeria[]=new ImagenGaleria("2.jpg", "Descripcion img 2", 3, 4, 5);
$galeria[]=new ImagenGaleria("3.jpg", "Descripcion img 3", 1, 5, 6);
$galeria[]=new ImagenGaleria("4.jpg", "Descripcion img 4", 10, 5, 6);
$galeria[]=new ImagenGaleria("5.jpg", "Descripcion img 5", 1, 5, 61);
$galeria[]=new ImagenGaleria("6.jpg", "Descripcion img 6", 1, 50, 6);
$galeria[]=new ImagenGaleria("7.jpg", "Descripcion img 7", 15, 5, 60);
$galeria[]=new ImagenGaleria("8.jpg", "Descripcion img 8", 11, 5, 6);
$galeria[]=new ImagenGaleria("9.jpg", "Descripcion img 9", 1, 55, 6);
$galeria[]=new ImagenGaleria("10.jpg", "Descripcion img 10", 16, 56, 6);
$galeria[]=new ImagenGaleria("11.jpg", "Descripcion img 11", 14, 5, 68);
$galeria[]=new ImagenGaleria("12.jpg", "Descripcion img 12", 1, 55, 6);

require_once "./entity/Asociado.php";

$asociados[]=new Asociado("Asociado1", "Descripcion 1", "./images/clients/client1.jpg");
$asociados[]=new Asociado("Asociado2", "Descripcion 2", "./images/clients/client2.jpg");
$asociados[]=new Asociado("Asociado3", "Descripcion 3", "./images/clients/client3.jpg");
$asociados[]=new Asociado("Asociado4", "Descripcion 4", "./images/clients/client4.jpg");

$asociados = getAsociados($asociados);
print_r($asociados);
include("./views/index.view.php");