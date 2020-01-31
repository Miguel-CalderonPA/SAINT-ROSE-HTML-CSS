<?php
$user="";
      $conn = mysqli_connect("localhost",$user,"",$user)

            or die("Failed to connect to database");
			
		//	var_dump($_GET);

      $first = $_GET['first'];
	$first = str_replace("'","`", $first);
      $last = $_GET['last'];
$last = str_replace("'","`", $last);
      $jersey = $_GET['number'];

	 $return="";
	
	$sql_command = "SELECT * FROM PLAYERS WHERE JERSEY = $jersey";
	
	$result = mysqli_query($conn, $sql_command);
	
	if(mysqli_num_rows($result) > 0) {
		
		$sql_command = "DELETE FROM PLAYERS WHERE JERSEY = $jersey AND FIRSTNAME = '$first' AND LASTNAME = '$last'";
		$row = mysqli_fetch_array($result);
		$return=$row['FIRSTNAME'] ." ". $row['LASTNAME'] . " has been removed";
		 if (!mysqli_query($conn, $sql_command)) {
				echo("ERROR: " . $conn -> error);
				echo "<p>$first $last was not successfully released </p>";
		  }
		  else {
				$money = round(((float)$row['MONEY_IN_MILLIONS']  / (float)$row['YRS_ON_CONTRACT']),2);
				$money.="M";
				$yearsLeft =  $row['YRS_ON_CONTRACT'];
				echo "<p>$first $last has been release with	$yearsLeft years left saving $$money off the contract </p>";
		  }
		
		
	}
	else 
	{
		 echo "<p>$first $last with Jersey #$jersey wasn't found</p>";
	}
      mysqli_close($conn);

?>