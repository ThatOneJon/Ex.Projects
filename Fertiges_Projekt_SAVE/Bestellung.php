
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../Fertiges_Projekt/vorlageCSS.css"/>
		<title>Red-Hammer</title>
		        <meta name="keywords" contents="Hammer, Quality, Made in Ussr">
		        <meta charseit="UTF-8">
		        <meta name="viewport" content="width=device-width, initial-sca-le=1.0">
				<?php
				include('PHP(J)/Login3.php');
				?>
	</head>

	<body>
		<div id="wrapper">
			<div id="header">
				Webstore - GmbH Inc.
			</div>

			<div id='ueberschrift'>
				<h1>Bestellungen</h1>
					</div>

						<div id="menu_left">
							<p id="Nav">Navigation</p>
			 				<ul>
								<li><a href="Home(J).php" class="Link01">Home</a></li>
								<li><a href="bestandAnzeigen(J).php" class="Link01">Bestand</a></li>
								<li><a href="neueWaren(J).php" class="Link01">Neuanlage</a></li>
								<li><a href="neuKunde.php" class="Link01">Neukunden</a></li>
								<li><a href="Warenbewegung(J).php"class="Link01">Bewegung</a></li>
								<li><a href="About(J).php"class="Link01">About</a></li>
								<li><a href="Logout.php"class="Link01">Logout</a></li>
								<li><a href="Bestellung.php"class="Link01">Bestellungen</a></li>

			 					</ul>
									</div>

			<div id="content">
			<?php
			include("../Fertiges_Projekt/PHP(J)/BestellungenAnzeigen.php");
			  ?>
			</div>
			<div class="clear">
			</div>
			<div id="footer">
				&copy; Lehrstuhl Wirtschaftsinformatik Uni Mainz - JSt/029™
			</div>
		</div>
	</body>

</html>
