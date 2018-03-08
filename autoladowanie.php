<?php 
//argumentem funkcji spl_autoload jest anonimowa funkcją - czli funckja bez nazwy, która można zapisać w zmiennej
//zostanie wykonana za kazdym razem, gdy interpreter napotka nieznana nazwe klasy lub interfejsu i bedzie przechowywana przez zmienna klasa

spl_autoload_register(
	function($klasa) {
		//echo "Import $klasa <br>";

		$ladujKlase = 'class.'.strtolower($klasa).'.php';
		$ladujInterfejs = 'interface.'.strtolower($klasa).'.php';
		$wyswietl = 'wyswietlanie.php';
		$wycieczka = 'wycieczka.php'

		// require_once $klasaPlik;
		// require_once $interfejsPlik;

		//warunek sprawdzajacy, czy klasa lub interfejs istnieje, w przeciwnym razie stworzy 2 pliki [klasy i interfejsu] o nazwie napotkanej klasy i wywali błąd bo nie wczyta sie klasy/interfejsu, ktory nie istnieje

		if (file_exists($ladujKlase)) {
			require_once $ladujKlase;
		} elseif (file_exists($ladujInterfejs)) {
			require_once $ladujInterfejs;
		} elseif (file_exists($wyswietl)) {
			require_once $wyswietl;
		}elseif (file_exists($wycieczka)) {
			require_once $wycieczka;
		}


	}

	);

 ?>