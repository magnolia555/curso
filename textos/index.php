<?php 
	$cont = 0;
	$comida = ['bebida' => 'coca-cola','pasta' => 'fideos','dulces' => 'chocolates','lacteos' => 'yogurt de fresa'];
	
	while($cont < 10){
		echo $cont ."<br/>";
		$cont++;
	}

	echo "<h2>Prueba terminada</h2>";
	
	echo "h2>Blucle for</h2>";
	for($i = 0;$i < 10;$i++){
		echo $i . "<br/>;
	}
	 
	 foreach($comida as $clave => $valor){
		 echo $clave . " = " .$valor . "<br/>";
	 }
	 
	 for($i = 0;$i <=10;$i++){
			echo "<p>".$i."</p>";
	 }
	 
	 echo "Holaaaa";

?>
