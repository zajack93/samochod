<?php 

/**
* Klasa danie w menu
* 
* implementuje interfejs MozeWyswietac
* wiec jej pelna definicja musi sie znaleźć w klasie DanieMenu
*/
class DetaleKomputera extends KomputerPokladowy implements Pokaz
{
	/* wlasciwosci klasy*/ 
	private $_lektor;

/*konstruktor klasy */

	function __construct($nazwa, $cena, $id)
	{
		parent::__construct($nazwa, $cena, $id);
	}
	

	public function wyswietlTabelkaDane(){
	//
	}
}
?>