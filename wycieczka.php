 <?php


/**
* Klasa zawiera funkcje, ktore  ulatwiaja 
* wyswietlanie ceny za zamoiwone komputery pokladowe
*/
class Wycieczka {

	function pojedz ($miejsce, $cenaDzien, $liczbaDni) {
		$cenaCalosc = $cenaDzien*$liczbaDni;

		echo "Jedziesz do: ".$miejsce.PHP_EOL;
		echo "Na  ".$liczbaDni." dni".PHP_EOL;
		echo "Cena za dzien: ".$cenaDzien.PHP_EOL;
		echo "Cena za całośc: ".$cenaCalosc.PHP_EOL;

	}
}

?>