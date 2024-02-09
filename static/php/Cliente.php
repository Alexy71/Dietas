<?php
class Cliente{
    private $id;
	private $nombre;
	private $apellido;
	private $celular;
	private $correo;
    private $contrasena;
    private $sexo;
    private $peso;
    private $altura;
    private $nivel;
    private $nombre_completo;
    private $fecha_creacion;
	
	
	function __construct($nombre, $apellido, $celular, $correo, $contrasena, $sexo, $peso, $altura){
		$this->nombre=$nombre;
	    $this->apellido=$apellido;
        $this->celular=$celular;
        $this->correo=$correo;
	    $this->contrasena=$contrasena;
        $this->sexo=$sexo;
	    $this->peso=$peso;
        $this->altura=$altura;

        $this->nivel='0';
        $this->nombre_completo = $nombre." ".$apellido;
        $this->fecha_creacion = "0";
	}
    public function getId(){ return $this->id; }
    public function getNombre(){ return $this->nombre; }
    public function getApellido(){ return $this->apellido; }
    public function getNombreCompleto(){ return $this->nombre_completo; }
    public function getCelular(){ return $this->celular; }
    public function getCorreo(){ return $this->correo; }
    public function getContrasena(){ return $this->contrasena; }
    public function getSexo(){ return $this->sexo; }
    public function getPeso(){ return $this->peso; }
    public function getAltura(){ return $this->altura; }
    public function getFecha(){ return $this->fecha_creacion; }
    public function getNivel(){ return $this->nivel; }

    public function setId($id){ $this->id = $id; }
    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function setApellido($apellido){ $this->apellido = $apellido; }
    public function setNombreCompleto($nombre, $apellido){ $this->nombre_completo = $nombre." ".$apellido; }
    public function setNombreCompleto1($nombre){ $this->nombre_completo = $nombre; }
    public function setCelular($celular){ $this->celular = $celular; }
    public function setCorreo($correo){ $this->correo = $correo; }
    public function setContrasena($contrasena){ $this->contrasena = $contrasena; }
    public function setSexo($sexo){ $this->sexo = $sexo; }
    public function setPeso($peso){ $this->peso = $peso; }
    public function setAltura($altura){ $this->altura = $altura; }
    public function setFecha($fecha){ $this->fecha_creacion = $fecha; }
    public function setNivel($nivel){ $this->nivel = $nivel; }
}
?>