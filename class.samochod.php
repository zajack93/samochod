<?php

class Samochod {

	private $_id;
	private $_pojemnoscBaku;
	public $marka;
	public $model;
	public $rokProdukcji;
	

	public function __construct($marka, $model, $rokProdukcji, $id)
	{
		$this->marka= $marka;
		$this->model= $model;
		$this->rokProdukcji = $rokProdukcji;
		$this->_id = $id;
		$this->_pojemnoscBaku = 42;

		// echo "Tworzę instancję obiektu... <br>";
	}

 	public function getId() {
		return $this->_id;
	}

	public function setId($id) {
		$this->_id = $id;

	}

	public function getMarka() {
		return $this->$marka;
	}

	public function setMarka($marka) {
		$this->$marka = $markay;

	}

	public function getModel() {
		return $this->$model;
	}

	public function setModel($model) {
		$this->$model = $model;

	}

	public function getRokProdukcji() {
		return $this->rokProdukcji;
	}

	public function setRokProdukcji($rokProdukcji){
		$this->rokProdukcji = $rokProdukcji;
	}

	public function getPojemnoscBaku() {
		return $this->_pojemnoscBaku;
	}

	public function setPojemnoscBaku($pojemnoscBaku){
		$this->_pojemnoscBaku = $pojemnoscBaku;
	}
 

	public function sprawdzPoziomPaliwa($poziomPaliwa) {
	    if ($poziomPaliwa < 1)
	      	$this->zatankuj($poziomPaliwa);
	}

	protected function zatankuj($poziomPaliwa) {
	    $this->pojemnoscBaku += $poziomPaliwa;
	    $count = $this->pojemnoscBaku - $poziomPaliwa;
	    $count+= $this->pojemnoscBaku;
	    $poziomPaliwa = $count;
	}

}

?>