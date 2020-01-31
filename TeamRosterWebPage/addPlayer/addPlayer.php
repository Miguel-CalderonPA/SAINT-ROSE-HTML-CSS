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

      $age = $_GET['age'];

      $yrsOnContract = $_GET['remain'];

      $yrsOnTeam = $_GET['team'];

      $contractType = $_GET['contract'];
	  if($contractType=='Rookie') {
		  $contractType=1;
	  }
	  else {
		  $contractType=2;
	  }
	 $money =$_GET['amount'];
	 
	 $return="";
	
	$sql_command = "SELECT * FROM PLAYERS WHERE JERSEY = $jersey";
	
	$result = mysqli_query($conn, $sql_command);
	
	if(mysqli_num_rows($result) > 0) {
		
		$sql_command = "UPDATE PLAYERS SET FIRSTNAME = '" . $first . "', LASTNAME = '" . $last . "', AGE = $age, YRS_ON_CONTRACT = $yrsOnContract, 
		YRS_ON_TEAM = $yrsOnTeam, CONTRACT = $contractType, MONEY_IN_MILLIONS = $money WHERE JERSEY = $jersey";
		$row = mysqli_fetch_array($result);
		$return=$row['FIRSTNAME'] ." ". $row['LASTNAME'] . " has been removed and updated with $first $last";
		 if (!mysqli_query($conn, $sql_command)) {
				echo("ERROR: " . $conn -> error);
				echo "<p>$first $last was not successfully entered </p>";
		  }
		  else {
				
				$money.="M";
				echo "WARNING: $return";
				echo "<p>$first $last has been Signed to a $yrsOnContract year $$money Contract </p>";
		  }
		
		
	}
	else 
	{
		  $sql_command =
		  "INSERT INTO PLAYERS (JERSEY, FIRSTNAME, LASTNAME, AGE, YRS_ON_CONTRACT, YRS_ON_TEAM, CONTRACT, MONEY_IN_MILLIONS) 
		  VALUES ($jersey,'$first','$last',$age, $yrsOnContract, $yrsOnTeam, $contractType, $money)" or mysqli_error();

		  if (!mysqli_query($conn, $sql_command)) {
				echo("ERROR: " . $conn -> error);
				echo "<p>$first $last was not successfully entered </p>";
		  }
		  else {
				
				$money.="M";
				echo "<p>$first $last has been Signed to a $yrsOnContract year $$money Contract </p>";
		  }
	}
      mysqli_close($conn);

?>