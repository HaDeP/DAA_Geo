<html>
	<head>
		<title>Geometrie</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<h1>Berechnen von Umfang und Fläche eines Rechtecks </h1>
			<h2>Eingaben: </h2>
			<input type="text" name="l1" value="Kantenlänge 1">
			<input type="text"name="l2" value="Kantenlänge 2" >
			<input type="submit" name="berechne" value="Berechnen">
		</form>
		<?php
			if(isset($_POST["berechne"]))
			{
				$umfang = 2*$_POST["l1"] + 2*$_POST["l2"];
				$flaeche = $_POST["l1"] * $_POST["l2"];
				echo "<br> Der Umfang beträgt: ".$umfang."<br> Die Fläche beträgt: ".$flaeche;
			}
		?>
	</body>
</html>
