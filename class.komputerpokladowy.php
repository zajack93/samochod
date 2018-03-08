<?php 


/**
* 
*/
abstract class KomputerPokladowy {

	private $_nazwa;
	protected $_cena;
	protected $_id;

	/*
	* konstruktor klasy
	*/

	public function __construct($nazwa, $cena, $id)
	{
		$this->_nazwa = $nazwa;
		$this->_cena = $cena;
		$this->_id = $id;

		// echo "Tworzę instancję obiektu... <br>";
	}
	/*
	* Destruktor - nie przyjmuje parametrów, do zniszczenia obiektu, bardzo sporadycznie używany bo wywołanie konstruktora kończy się wraz z działaniem skryptu
	*/

	public function __destruct()
	{

	}
	/*
	* abstrakcyjna metoda wymusza deifinicjee funkcji generujKod w każdej nieabstrakcyjnej klasie pochodnej klasy KP
	**/
	abstract function wyswietlTabelkaDane(); 

	public function getNazwa() {
		return $this->_nazwa;
	}

	public function setNazwa($nazwa){
		$this->_nazwa = $nazwa;
	}

	public function getCenaJednejSztuki() {
		return $this->_cena;
	} 
	
	public function setCenaJednejSztuki($cena) {
		$this->_cena = $cena;
	}

	public function getId () {
		return $this->_id;
	}

	public function setId($id) {
		$this->_id = $id;

	}
	
}

?>