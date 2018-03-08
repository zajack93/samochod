<?php
require_once 'autoladowanie.php';

$samochod = new Samochod();



define('APLIKACJA', 'Samochód');

$rok = date('Y');
$copyright = APLIKACJA.'&copy;'.$rok;
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv="content-type" content="text/html" charset="utf-8">
 	<title>SAMOCHOD/title>
 </head>
 <body>
	<h1>SAMOCHOD</h1>
	
	<footer>
	<?php echo $copyright; ?>
	</footer>
 
 </body>
 </html>

