<?php

/**
 * Representa la clase de la entidad Usuario - DTO
 */

class Usuario
{
    //----------------------------
    //Atributos
    //----------------------------

    /**
     * Código del usuario al que pertenece
     *
     * @return int
     */

    private $cod_usuario;

    /**
     * Nombre de usuario
     *
     * @return String
     */

    private $nom_usuario;

    /**
     * Nombre completo de usuario
     *
     * @return String
     */

    private $nomCompleto;

    /**
     * Correo de usuario
     *
     * @return String
     */

    private $correo;

    /**
     * Clave de usuario
     *
     * @return String
     */

    private $clave;

    /**
     * Obtener el valor de cod_usuario
     */

    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    /**
     * Establecer el valor de cod_usuario
     *
     * @return  self
     */

    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }

    /**
     * Obtener el valor de nom_usuario
     */

    public function getNom_usuario()
    {
        return $this->nom_usuario;
    }

    /**
     * Establecer el valor de nom_usuario
     *
     * @return  self
     */

    public function setNom_usuario($nom_usuario)
    {
        $this->nom_usuario = $nom_usuario;

        return $this;
    }

    /**
     * Obtener el valor de nomCompleto
     */

    public function getNomCompleto()
    {
        return $this->nomCompleto;
    }

    /**
     * Establecer el valor de nomCompleto
     *
     * @return  self
     */

    public function setNom_completo($nomCompleto)
    {
        $this->nomCompleto = $nomCompleto;

        return $this;
    }

    /**
     * Obtener el valor de correo
     */

    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Establecer el valor de cod_producto
     *
     * @return  self
     */

    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Obtener el valor de cod_moneda
     */

    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Establecer el valor de cod_moneda
     *
     * @return  self
     */

    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }
}
