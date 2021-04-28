<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../Fertiges_Projekt/vorlageCSS.css"/>
		        <meta name="keywords" contents="Hammer, Quality, Made in Ussr">
		        <meta charseit="UTF-8">
				<meta name="viewport" content="width=device-width, initial-sca-le=1.0">
			
		<style>
			#back{
				background: linear-gradient(90deg, rgba(50,6,6,1) 3%, rgba(156,35,35,1) 52%, rgba(79,12,23,1) 95%);
				height: 50%;
				width: 100%;
				margin-top: 0;
				padding-top: 3px;
			}
			
			#Form {
				display: block;
				margin-left: 25%;				
				background-color: lightgrey;
				width: 30%;
				height: 40%;
				border: solid black 3px;
				text-align: center;
				margin-top: 0;

			}
			
			.L{
				
				display: inline-block;
				width: 40%;
				margin-left: 0;
				margin-right: 0;
				text-align: left;
				font-size: 20px;
			}
			
			input[type = "text"]{
				display: inline-block;
				align-items: right;
				text-align: center;
				padding-bottom: 2%;
			}
			
			input[type="submit"] {
				padding: 1.5%;
				font-size: 20px;
				font-weight: bold;
				
			}
			
			label {
				font-size: 20px;
			}
			
			form{
				margin-top: 5%;
			}
			
		</style>
</head>

<body>
	<div id = "back">
		<div id="Form">
			<div id = "adresse">
				<form action = "https://bob.rewi.uni-mainz.de/ebusiness029/Fertiges_Projekt/PHP(J)/neuKunde3.php" method = "POST">
					<label class = "L" name = "Name">Vor- und Nachname: </label>
					<input type = "text"  name = "Name" Placeholder = "Max Mustermann" Required><br><br>
					<label class = "L" name = "Anschrift">Anschrift: </label>
					<input type = "text" name = "Anschrift" placeholder = "(Optional)"><br><br>				
					<label for "KL">Kunde </label>
					<input type = "radio" name ="KL" value = "0">
					<label for ="KL">Lieferant</label>
					<input type = "radio" name = "KL" value = "1"><br><br>
					<input type = "submit"  value = "Anlegen">
				</form>
			</div>
		</div>
	</div>




</body>