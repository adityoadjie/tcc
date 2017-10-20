<!DOCTYPE html>
<html>
    <head>
        <title>Ini file PHP</title>
    </head>
    <body>
        <p>
            Halo~. Hari ini tanggal <?= date('l \t\h\e jS') ?>.
	    <?php 
		echo "Mencoba script PHP <br/>";
		for($i=0;$i<5;$i++){
		  echo "Baris $i <br/>";		
		} 	    	
	    ?>
        </p>
    </body>
</html>
