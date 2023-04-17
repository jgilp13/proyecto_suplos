<?php

/**
 * Representa la clase de la entidad Actividad - DTO
 */

class Actividad
{
    //----------------------------
    //Atributos
    //----------------------------

    /**
     * Código del segmento al que pertenece
     *
     * @return int
     */

    private $cod_segmento;

    /**
     * Nombre del segmento
     *
     * @return String
     */

    private $nom_segmento;

    /**
     * Código de familia al que pertenece.
     *
     * @return int
     */

    private $cod_familia;

    /**
     * Nombre del familia
     *
     * @return String
     */

    private $nom_familia;

    /**
     * Código de clase al que pertenece.
     *
     * @return int
     */

    private $cod_clase;

    /**
     * Nombre del clase
     *
     * @return String
     */

    private $nom_clase;

    /**
     * Código de producto / actividad al que pertenece.
     *
     * @return int
     */

    private $cod_producto;

    /**
     * Nombre del producto / actividad
     *
     * @return String
     */

    private $nom_producto;

    /**
     * Obtener el valor de cod_segmento
     */

    public function getCod_segmento()
    {
        return $this->cod_segmento;
    }

    /**
     * Establecer el valor de cod_segmento
     *
     * @return  self
     */

    public function setCod_segmento($cod_segmento)
    {
        $this->cod_segmento = $cod_segmento;

        return $this;
    }

    /**
     * Obtener el valor de cod_segmento
     */

    public function getNom_segmento()
    {
        return $this->nom_segmento;
    }

    /**
     * Establecer el valor de cod_segmento
     *
     * @return  self
     */

    public function setNom_segmento($cod_segmento)
    {
        $this->cod_segmento = $cod_segmento;

        return $this;
    }
    /**
     * Obtener el valor de cod_Familia
     */

    public function getCod_familia()
    {
        return $this->cod_familia;
    }

    /**
     * Establecer el valor de cod_familia
     *
     * @return  self
     */

    public function setCod_familia($cod_familia)
    {
        $this->cod_familia = $cod_familia;

        return $this;
    }

    /**
     * Obtener el valor de nom_famiia
     */

    public function getNom_familia()
    {
        return $this->nom_familia;
    }

    /**
     * Establecer el valor de cod_segmento
     *
     * @return  self
     */

    public function setNom_familia($nom_familia)
    {
        $this->nom_familia = $nom_familia;

        return $this;
    }

    /**
     * Obtener el valor de cod_clase
     */

    public function getCod_clase()
    {
        return $this->cod_clase;
    }

    /**
     * Establecer el valor de cod_clase
     *
     * @return  self
     */

    public function setCod_clase($cod_clase)
    {
        $this->cod_clase = $cod_clase;

        return $this;
    }

    /**
     * Obtener el valor de nom_clase
     */

    public function getNom_clase()
    {
        return $this->nom_clase;
    }

    /**
     * Establecer el valor de nom_clase
     *
     * @return  self
     */

    public function setNom_clase($nom_clase)
    {
        $this->nom_clase = $nom_clase;

        return $this;
    }

    /**
     * Obtener el valor de cod_producto
     */

    public function getCod_producto()
    {
        return $this->cod_producto;
    }

    /**
     * Establecer el valor de cod_producto
     *
     * @return  self
     */

    public function setCod_producto($cod_producto)
    {
        $this->cod_producto = $cod_producto;

        return $this;
    }

    /**
     * Obtener el valor de nom_producto
     */

    public function getNom_producto()
    {
        return $this->nom_producto;
    }

    /**
     * Establecer el valor de nom_producto
     *
     * @return  self
     */

    public function setNom_producto($nom_producto)
    {
        $this->nom_producto = $nom_producto;

        return $this;
    }
}
