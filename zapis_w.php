<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>pliki</title>
</head>
<body>
    <?php
	//w - Otwiera plik do zapisu. Ustawia wskaźnik na początek pliku. Usuwa dotychczasową zawartość pliku. Jeżeli brakuje pliku to go tworzy.
	$nazwa="testowy.txt";
		
		$uchwyt=fopen($nazwa,"w");
		fwrite($uchwyt,"New York");
		echo "Pomyślnie zapisano do pliku.";
	?>
</body>
</html>
