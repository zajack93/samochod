<?php 
class Nissan extends Samochod {

	  private $_iloscPieniedzyWlasciciela;
	  private $_koszt;
	  private $_kosztTankowania;
	 

	 function __construct($marka, $model, $rokProdukcji, $id, $pojemnoscBaku, $iloscPieniedzyWlasciciela, $kosztTankowania)
		{
			parent::__construct($marka, $model, $rokProdukcji, $id, $pojemnoscBaku);
			$this->_iloscPieniedzyWlasciciela = $iloscPieniedzyWlasciciela;
			$this->_kosztTankowania = $kosztTankowania;
			$this->_koszt = 4.25;  //za litr
		}

	  public function jedzNaWycieczke($odleglosc) {
	    $this->gdzieWycieczka($odleglosc);
	    
	  }

	  private function obliczKosztTankowania($odleglosc) {
	  	$odleglosc*=0.01;
	  	$this->_koszt*=$odleglosc;
	  }

	  private function gdzieWycieczka($odleglosc) {
	  	
	  	
	    if ($this->sprawdzPoziomPaliwa($poziomPaliwa) < 42) {
	        	$this->zatankuj($poziomPaliwa); // 
	        	$this->_kosztTankowania = $this->obliczKosztTankowania($odleglosc);
	     
		      if ($this->_kosztTankowania < 1000)
		       {
		    		Wycieczka::pojedz("Mauritius", "300","70");
			   } else {
			    	echo "W przyszłym roku się uda zarobić na paliwo";
			   }
	     }
	      	$this->_iloscPieniedzyWlasciciela *= (1 -$this->_kosztTankowania);
	  }
}

?>