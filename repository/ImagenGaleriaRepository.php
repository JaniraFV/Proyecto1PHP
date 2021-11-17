<?php

require_once __DIR__ . '/../entity/ImagenGaleria.php';

require_once __DIR__ . '/../database/QueryBuilder.php';

class ImagenGaleriaRepository extends QueryBuilder

{

    public function __construct(){

        parent::__construct('imagenes', 'ImagenGaleria');

    }



public function getCategoria(ImagenGaleria $imagenGaleria): Categoria{
    $repositorioCategoria = new CategoriaRepository();
    return $repositorioCategoria->findById($imagenGaleria->getCategoria());
}


/**
 * @param Categoria $categoria
 * @throws QueryException
 */


public function nuevaImagen(Categoria $categoria){
    $categoria->setNumImagenes($categoria->getNumImagenes()+1);
    $this->update($categoria);
}


}