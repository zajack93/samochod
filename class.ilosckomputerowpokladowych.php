<?php 
/*
* Klasa pozycji zamowienia
*/

//require 'funkcje.php';

class IloscKomputerowPokladowych extends KomputerPokladowy
{
	/* własciwosci klasy */
	private $_liczba;

	/* konstruktor klasy */

	function __construct($nazwa, $cena, $liczba, $id)
	{
		parent::__construct($nazwa, $cena, $id);
		$this->_liczba = $liczba;
	}

	/*
	* generuje informacje
	*
	*/

	public function wyswietlTabelkaDane() {
		$komp = Wyswietl::zapisz(
			$this->getNazwa(), 
			$this->getCenaJednejSztuki(),
			$this->getLiczba(),

			);
		return $komp;
	}
	/* 
	* oblicza cenę za komputery pokladowe
	*/

	public function getCenaJednejSztuki() {
		return $this->_cena * $this->_liczba;

		//return $this->_cena * $this->_liczba; 
	}
}

 ?>