
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Red-Hammer</title>
		        <meta name="keywords" contents="Hammer, Quality, Made in Ussr">
		        <meta charseit="UTF-8">
		        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
				
  table, th, td {
          border: 2px solid black;
          border-collapse: collapse;
                                    }
  th, td {
          padding: 20px;
          font-size: 25px;
                                }
 table {
          text-align: center;
          margin-left: auto;
          margin-right: auto;
          width:50%;
		  background-color: lightgrey;
		  margin-top: 5%;
		  margin-bottom: 5%;
 }
</style>

	
</head>


<body>

  <table>
    <tr>
      <th>Waren Name</th>
      <th>Waren - ID</th>
      <th>Lagerbestand</th>
	  <th>Preis</th>
	  <th>Warenwert</th>
	  <th style = 'color: white; background-color: white; border: solid white 2px;'></th>
    </tr>

<?php 

	include('databaseCon.php');
	$fetchData = "SELECT Bestell_ID, SUM(Menge), Waren_ID FROM bestellung GROUP BY Waren_ID";
	$fetchName = "SELECT Name FROM ware WHERE Waren_ID IN (SELECT Waren_ID FROM bestellung)GROUP BY Waren_ID";
	$fetchPreis = "SELECT Einkaufspreis FROM ware WHERE Waren_ID IN (SELECT Waren_ID FROM bestellung )GROUP BY Waren_ID";
	
	$result3 = mysqli_query($conn, $fetchPreis);
	$result2 = mysqli_query($conn, $fetchName );
	$result = mysqli_query($conn, $fetchData);
	
	$total = 0;
	
	while ($row = $result -> fetch_assoc() AND $row2 = $result2 ->fetch_assoc() AND $row3 = $result3 -> fetch_assoc()) {
		
		$total2 = $total += abs($row3['Einkaufspreis'] * $row['SUM(Menge)']);
		
	//Sicherheitsbestand = 10 Stück 	
	
		if($row['SUM(Menge)'] < 10 AND $row['SUM(Menge)'] > 0) {
		
			echo "<tr><td style='background-color:red; font-weight: bold;'>".$row2['Name']."</td><td>".$row['Waren_ID']."</td><td style='background-color:red; font-weight:bold;'>".$row['SUM(Menge)']."</td><td>".$row3['Einkaufspreis']."</td><td>".$row3['Einkaufspreis']*$row['SUM(Menge)']."</td><td style = 'background-color: white; border: solid white 2px;'></td></tr>";		

		}elseif($row['SUM(Menge)'] == 0) {
			
			
			echo "<tr><td style='background-color:red; font-weight: bold;'>".$row2['Name']."</td><td>".$row['Waren_ID']."</td><td style='background-color:red; font-weight:bold;'>".$row['SUM(Menge)']."</td><td>".$row3['Einkaufspreis']."</td><td>".$row3['Einkaufspreis']*$row['SUM(Menge)']."</td><td style = 'background-color: red; border: solid white 2px;'><a href ='../Fertiges_Projekt/PHP(J)/remove.php?name=".$row2['Name']."'><button id = 'Del' style = 'font-weight: bold; padding: 5px 13px 5px 13px;'>Delete?</button></a></td></tr>";		
				
		}else {
			
			echo "<tr><td>".$row2['Name']."</td><td>".$row['Waren_ID']."</td><td>".$row['SUM(Menge)']."</td><td>".$row3['Einkaufspreis']."</td><td>".$row3['Einkaufspreis']*$row['SUM(Menge)']."</td><td style = 'background-color: white; border: solid white 2px;'></td></tr>";
		}
	}
	if (!empty($total2)) {
		echo "<h3>Gesamtwert Lagerbestand: ".$total2." $</h3>";			
	}else{
		echo "<h3>Gesamtwert Lagerbestand: 0,- $</h3>";			

	}
	
	$conn -> close();			
?>

</table>

	


 </body>
