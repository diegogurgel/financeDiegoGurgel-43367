<?php 
 	require_once("DBInterface.php");
	$report = new report();
	$report->totalPrevisto();


	class report{

		function totalPrevisto()
		{
			$interface = new DBInterface();
			$sql = "SELECT SUM(ammount) as 'TotalOrcado'  FROM budget_records";
			$result = $interface->executeSQL($sql);
			$resultArray = mysql_fetch_array($result);

			echo $resultArray["TotalOrcado"];
		}

	}




 ?>