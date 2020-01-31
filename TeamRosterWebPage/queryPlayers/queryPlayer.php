<?php
	$user = ""; // for database
	$conn = mysqli_connect("localhost",$user,"",$user) or
		die("Failed to connect to database " . mysqli_error());

	$lastName = $_GET["lastname"];
	$returnValue = "<table border='1'><thead><th>Jersey</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Years Remaining</th><th>Years on Team</th><th>Contract</th><th>Money (in Millions)</thead><tbody>";
	if($lastName!="") {
		$sql_command = "SELECT * FROM CUSTOMERS WHERE JERSEY = '" . $JERSEY . "%';"; // query
		$result = mysqli_query($conn, $sql_command);

		while($row = mysqli_fetch_array($result)) {

            $returnValue .= "<tr>";
            $returnValue .= "<td>" . $row['JERSEY'] . "</td>" ;
            $returnValue .= "<td>" . $row['FIRSTNAME'] . "</td>" ;
            $returnValue .= "<td>" . $row['LASTNAME'] . "</td>" ;
			$returnValue .= "<td>" . $row['AGE'] . "</td>" ;
            $returnValue .= "<td>" . $row['YRS_ON_CONTRACT'] . "</td>" ;
			$returnValue .= "<td>" . $row['YRS_ON_TEAM'] . "</td>" ;
			$returnValue .= "<td>" . $row['CONTRACT'] . "</td>" ;
			$returnValue .= "<td>" . $row['MONEY_IN_MILLIONS'] . "</td>" ;
            $returnValue .= "</tr>";
		}
	}
    $returnValue .= "</tbody></table>";
	echo $returnValue;
	mysqli_close($conn);
?>