<?php

class Usuario
{
    private $nombre, $apellidos, $id;
    private $email, $pwd;
    private $rol, $imagen;
    private $db;

    public function __construct()
    {
        $this->db = Database::conexionDB();
    }    

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setApellido($apellidos)
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    public function setPassword($pwd)
    {
        $this->pwd = password_hash($this->db->real_escape_string($pwd), PASSWORD_BCRYPT, ['cost'=>4]);
    }

    protected function setRol()
    {
        $this->rol = 'usuario';
    }

    public function setImagen($imagen = false)
    {
        $this->imagen = ($imagen) ? $imagen : NULL;
    }

    protected function getId()
    {
        return $this->id;
    }

    protected function getNombre()
    {
        return $this->nombre;
    }

    protected function getApellido()
    {
        return $this->apellidos;
    }

    protected function getEmail()
    {
        return $this->email;
    }

    protected function getPassword()
    {
        return $this->pwd;
    }

    protected function getRol()
    {
        $this->setRol();
        return $this->rol;
    }

    protected function getImagen()
    {
        $this->setImagen();
        return $this->imagen;
    }

    public function guardar()
    {
        $sql = "INSERT INTO usuarios VALUES (NULL, '{$this->getNombre()}', '{$this->getApellido()}','{$this->getEmail()}', '{$this->getPassword()}', '{$this->getRol()}', '{$this->getImagen()}')";
        $guardar = $this->db->query($sql);

        return (!$guardar) ? false : true;
    }
}
