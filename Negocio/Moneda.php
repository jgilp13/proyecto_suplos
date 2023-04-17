<?php

/**
 * Representa la clase de la entidad Moneda - DTO
 */

class Moneda
{
    //----------------------------
    //Atributos
    //----------------------------

    /**
     * Código del moneda al que pertenece
     *
     * @return int
     */

    private $cod_moneda;

    /**
     * Objeto en la Información de básica de la oferta
     *
     * @return String
     */

    private $nom_moneda;


    /**
     * Obtener el valor de cod_moneda
     */

    public function getCod_moneda()
    {
        return $this->cod_moneda;
    }

    /**
     * Establecer el valor de cod_moneda
     *
     * @return  self
     */

    public function setCod_moneda($cod_moneda)
    {
        $this->cod_moneda = $cod_moneda;

        return $this;
    }

    /**
     * Obtener el valor de nom_moneda
     */

    public function getNom_moneda()
    {
        return $this->nom_moneda;
    }

    /**
     * Establecer el valor de cod_familia
     *
     * @return  self
     */

    public function setNom_moneda($nom_moneda)
    {
        $this->nom_moneda = $nom_moneda;

        return $this;
    }

}
