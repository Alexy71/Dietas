<?php
class Pagos{
    private $id;
	private $quincenal;
	private $mensual;
	private $anual;
    private $precio;
    private $duracion;
    private $descripcion;

	
	function __construct($quincenal, $mensual, $anual, $precio, $duracion, $descripcion){
		$this->quincenal=$quincenal;
	    $this->mensual=$mensual;
        $this->anual=$anual;
        $this->precio=$precio;
        $this->duracion=$duracion;
        $this->descripcion=$descripcion;
	}
    public function getid(){ return $this->id; }
    public function getquincenal(){ return $this->quincenal; }
    public function getmensual(){ return $this->mensual; }
    public function getanual(){ return $this->anual; }
    public function getprecio(){ return $this->precio; }
    public function getduracion(){ return $this->duracion; }
    public function getdescripcion(){ return $this->descripcion; }

    public function setid($id){ $this->id = $id; }
    public function setquincenal($quincenal){ $this->quincenal = $quincenal; }
    public function setmensual($mensual){ $this->mensual = $mensual; }
    public function setanual($anual){ $this->anual = $anual; }
    public function setprecio($precio){ $this->precio = $precio; }
    public function setduracion($duracion){$this->duracion = $duracion; }
    public function setdescripcion($descripcion){$this->descripcion = $descripcion; }
}
?>