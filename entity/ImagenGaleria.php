<?php

class ImagenGaleria
{
    
const RUTA_IMAGENES_PORTFOLIO = 'images/index/portfolio/';
const RUTA_IMAGENES_GALLERY = 'images/index/gallery/';

//....  

/**

 * Devuelve el path a las imágenes del portfolio

 *

 * @return string

 */

public function getUrlPortfolio() : string

{

    return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();

}

/**

 * Devuelve el path a las imágenes de la galería

 *

 * @return string

 */

public function getUrlGallery() : string

{

    return self::RUTA_IMAGENES_GALLERY . $this->getNombre();

}




    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var int
     */
    private $numViews;

    /**
     * @var int
     */
    private $numLikes;

    /**
     * @var int
     */
    private $numDownloads;

    public function __construct(string $nombre, string $descripcion, int $numViews = 0,
                                int $numLikes = 0, int $numDownloads = 0 )
    {
$this->nombre = $nombre;
$this->descripcion = $descripcion;
$this->numViews = $numViews;
$this->numLikes = $numLikes;
$this->numDownloads = $numDownloads;
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     *
     * @return  string
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @param  string  $descripcion
     *
     * @return  self
     */ 
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of numViews
     *
     * @return  int
     */ 
    public function getNumViews()
    {
        return $this->numViews;
    }

    /**
     * Set the value of numViews
     *
     * @param  int  $numViews
     *
     * @return  self
     */ 
    public function setNumViews(int $numViews)
    {
        $this->numViews = $numViews;

        return $this;
    }

    /**
     * Get the value of numLikes
     *
     * @return  int
     */ 
    public function getNumLikes()
    {
        return $this->numLikes;
    }

    /**
     * Set the value of numLikes
     *
     * @param  int  $numLikes
     *
     * @return  self
     */ 
    public function setNumLikes(int $numLikes)
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    /**
     * Get the value of numDownloads
     *
     * @return  int
     */ 
    public function getNumDownloads()
    {
        return $this->numDownloads;
    }

    /**
     * Set the value of numDownloads
     *
     * @param  int  $numDownloads
     *
     * @return  self
     */ 
    public function setNumDownloads(int $numDownloads)
    {
        $this->numDownloads = $numDownloads;

        return $this;
    }
}