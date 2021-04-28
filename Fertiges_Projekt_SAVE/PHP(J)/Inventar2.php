
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
 
 #del {
	 background-color: white;
	 border: solid white 2px;
 }
 
 #Del2 {
	 padding: 10px 20px 10px 20px;
	 font-weight: bold;
	 border: solid black 1px;
	}
#Del2:hover {
	background-color:red;
	color: white;
	padding: 20px 30px 20px 30px;
	box-shadow: 10px 5px 5px black;
	cursor: pointer;

}
</style>

</head>

<body>

  <table>
    <tr>
      <th>Waren Name</th>
      <th>Waren - ID</th>
	  <th>Einkaufspreis</th>
	  <th id ="del"></th>
    </tr>



<?php

include('databaseCon.php');

	
	$fetchData = "SELECT * FROM ware";
	$result = mysqli_query($conn, $fetchData);
	
	
	while ($row = $result -> fetch_assoc()){
		echo "<tr><td>".$row['Name']."</td><td>".$row['Waren_ID']."</td><td>".$row['Einkaufspreis']."</td><td><a href ='../Fertiges_Projekt/PHP(J)/remove_INV.php?name=".$row['Name']."'><button id = 'Del2' >Delete?</button></a></td></tr>";
	}
		
	?>
	</table>
</body>