<?php

/**
 * Representa la clase de la entidad Estado - DTO
 */

class Estado
{
    //----------------------------
    //Atributos
    //----------------------------

    /**
     * Código del estado al que pertenece
     *
     * @return int
     */

    private $cod_estado;

    /**
     * Objeto en la Información de básica de la oferta
     *
     * @return String
     */

    private $nom_estado;


    /**
     * Obtener el valor de cod_estado
     */

    public function getCod_estado()
    {
        return $this->cod_estado;
    }

    /**
     * Establecer el valor de cod_estado
     *
     * @return  self
     */

    public function setCod_estado($cod_estado)
    {
        $this->cod_estado = $cod_estado;

        return $this;
    }

    /**
     * Obtener el valor de nom_estado
     */

    public function getNom_estado()
    {
        return $this->nom_estado;
    }

    /**
     * Establecer el valor de nom_estado
     *
     * @return  self
     */

    public function setNom_estado($nom_estado)
    {
        $this->nom_estado = $nom_estado;

        return $this;
    }

}
