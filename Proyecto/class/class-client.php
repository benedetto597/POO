<?php 
include_once('class/class-user-abstract.php');
include_once('class/class-database.php');

class Cliente extends Usuario{
 
    public function getToken()
    {
        return $this->token;
    }
 
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
 
    public function getNombre()
    {
        return $this->nombre;
    }
 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
 
    public function getApellido()
    {
        return $this->apellido;
    }
 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
 
    public function getGenero()
    {
        return $this->genero;
    }
 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }
 
    public function getPais()
    {
        return $this->pais;
    }
 
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }
 
    public function getMoneda()
    {
        return $this->moneda;
    }
 
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }
 
    public function getCorreo()
    {
        return $this->correo;
    }
 
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }
 
    public function getContraseña()
    {
        return $this->contraseña;
    }
 
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    
?>