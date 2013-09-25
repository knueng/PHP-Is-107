
<?php

	$tall = $_POST['tall'];
	$grense = $_POST['grense'];
	$teller = 1;

	while ($teller<=$grense)
	{
	$produkt=$tall*$teller;
	echo "$tall ganger $teller = $produkt<br>";
	$teller++;
	}
	
	

	
	
	
	?>
