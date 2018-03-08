 <?php


/**
* Klasa zawiera funkcje, ktore  ulatwiaja 
* wyswietlanie ceny za zamoiwone komputery pokladowe
*/
class Wyswietl {

	function zapisz ($nazwa, $cena, $liczba) {

		echo "Komputer pokładowy: ".$nazwa.PHP_EOL;
		echo "Ilosc zamowionych sztuk: ".$liczba.PHP_EOL;
		echo "Cena jednej sztuki: ".$cena.PHP_EOL;

	}
}

?>