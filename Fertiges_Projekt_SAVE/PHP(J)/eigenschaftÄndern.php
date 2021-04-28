<?php

include('databaseCon.php');

$Name = $_POST['name'];
$eKP = $_POST['ekP'];
$vKP = $_POST['vkP'];
$WName =$_POST['WName'];


//Keine gute Konstruktion, aber es funktioniert --- aktuell nur eine Änderung nacheinander --- wegen ifs

	if(!empty($_POST['name'])) {

		$result = "UPDATE ware SET Name ='$Name' WHERE Name = '$WName'";
		mysqli_query($conn, $result);
		
		echo "<script>alert('Änderung erfolgreich!');
			window.location.href = '../Home(J).php';
			</script>!";
	
			
	}elseif(!empty($eKP)){
	
		$result2 = "UPDATE ware SET Einkaufspreis = '$eKP' WHERE Name = '$WName' ";
		
		mysqli_query($conn, $result2);
		
		echo "<script>alert('Änderung erfolgreich!');
			window.location.href = '../Home(J).php';
			</script>!";
	
		
	}elseif(!empty($vKP)){
		
		$result3 = "UPDATE ware SET Verkaufspreis = '$vKP' WHERE Name = '$WName' ";
		mysqli_query($conn, $result3);
		
		echo "<script>alert('Änderung erfolgreich!');
			window.location.href = '../Home(J).php';
			</script>!";
	
					
		
	}else{
		
		echo "Error 404"; }
		
		$conn ->close();