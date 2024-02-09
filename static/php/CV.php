<?php
class CV{
    private $id;
    private $perfil_profesional;
	private $nombre;
	private $apellido;
    private $nombre_completo;
    private $universidad;    
    private $titulo;
	private $ci;
	private $edad;
    private $correo;
    private $contrasena;
 
	function __construct($perfil_profesional, $correo, $contrasena, $nombre, $apellido, $universidad, $titulo, $ci, $edad){
		$this->perfil_profesional=$perfil_profesional;
        $this->nombre=$nombre;
	    $this->apellido=$apellido;
        $this->nombre_completo = $nombre." ".$apellido;
        $this->universidad=$universidad;
        $this->titulo=$titulo;
        $this->ci=$ci;
        $this->edad=$edad;
	    $this->correo=$correo;
        $this->contrasena=$contrasena;
	}
    public function getId(){ return $this->id; }
    public function getPerfil_Profesional(){ return $this->perfil_profesional; }
    public function getNombre(){ return $this->nombre; }
    public function getApellido(){ return $this->apellido; }
    public function getNombreCompleto(){ return $this->nombre_completo; }
    public function getUniversidad(){ return $this->universidad; }
    public function getTitulo(){ return $this->titulo; }
    public function getCi(){ return $this->ci; }
    public function getEdad(){ return $this->edad; }
    public function getCorreo(){ return $this->correo; }
    public function getcontrasena(){ return $this->contrasena; }
  

    public function setId($id){ $this->id = $id; }
    public function setPerfil_Profesional($perfil_profesional){ $this->perfil_profesional = $perfil_profesional; }
    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function setApellido($apellido){ $this->apellido = $apellido; }
    public function setNombreCompleto($nombre, $apellido){ $this->nombre_completo = $nombre." ".$apellido; }
    public function setNombreCompleto1($nombre){ $this->nombre_completo = $nombre; }
    public function setUniversidad($universidad){ $this->universidad = $universidad; }
    public function setTitulo($titulo){ $this->titulo = $titulo; }
    public function setCi($ci){ $this->ci = $ci; }
    public function setEdad($edad){ $this->edad = $edad; }
    public function setCorreo($correo){ $this->correo = $correo; }
    public function setcontrasena($contrasena){ $this->contrasena = $contrasena; }
}
?>