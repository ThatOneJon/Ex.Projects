<head>
	<style>
	
	#table1 {
		border: solid black 2px;
		
	}
	
	td{
		border: solid black 2px;
		text-align: center;
		font-size: 20px;
	}
	
	th {
		text-decoration: underline;
		font-weight: bold;
		font-size: 20px;
		
	}
	
	#OG {
		margin-top: 1%;
		margin-left: 9%;
		padding: .5%;
	}
	
	input {
		margin-top: 5%;

	}
	
	#EX {
		margin-top:0px;
		width: 0;
		height: 0;
		color: white;
		border: none;
	}
	
	</style>

</head>

<body>

	<table id ="table1">
		<tr>
			<th>Waren-Name</th>
			<th>Verkaufspreis</th>
			<th>Einkaufspreis</th>
		<tr>
<?php


include('databaseCon.php');

	$WName = $_POST['WName'];
	$WID = $_POST['WID'];

	$fetchData = "SELECT Name, Einkaufspreis, Verkaufspreis FROM ware WHERE Name ='$WName' OR Waren_ID = '$WID'";
	$Data = mysqli_query($conn, $fetchData);



	while($row = $Data -> fetch_assoc()) {
	
		echo  "<tr><td>".$row['Name']."</td><td>". $row['Verkaufspreis']."</td><td>" .$row['Einkaufspreis']."</td></tr>";
		}
	echo "<form Method = 'POST' id ='myForm' name= 'myForm' action = 'eigenschaftÄndern.php'><input type = 'text' name = WName id ='EX' value = ".$WName."></input></form>'";
?>
	 <tr><td> <form  Method = "POST" id ="myForm" name= "myForm" action ="eigenschaftÄndern.php"> <input type ="text" name = "name" form = "myForm"> </form> </td> 
	<td> <form Method = "POST" id ="myForm" name= "myForm" action ="eigenschaftÄndern.php"> <input type ="number" name = "ekP" form = "myForm" method = "POST" id ="myForm" action ="/eigenschaftÄndern.php"></form></td>
	<td><form Method = "POST" id ="myForm" name= "myForm" action ="eigenschaftÄndern.php"> <input type ="number" name = "vkP" form = "myForm" method = "POST" id ="myForm"action = "/eigenschaftÄndern.php"> </form> </td></tr>
</table>


	<button id = "OG" onclick = "GO()"> Ändern </button>

<script>
	function GO() {
	document.getElementById("myForm").submit(); }
	
</script>		

</body>