<?php 
 	require_once("DBInterface.php");
	$report = new report();
	echo $report->getTotalPrevisto();
	echo $report->getTotalGastosMes("2013-06");
	echo $report->getSaldoTotalMes("2013-06");



	class report{

		function getTotalPrevisto()
		{
			$interface = new DBInterface();
			$sql = "SELECT SUM(ammount) as 'TotalOrcado'  FROM budget_records";
			$result = $interface->executeSQL($sql);
			$resultArray = mysql_fetch_array($result);

			return $resultArray;
		}
		function getTotalGastosMes($mes)
		{
			$interface = new DBInterface();
			$sql = "SELECT SUM( ammount ) as 'totalMes' FROM  expenses WHERE DATE LIKE  '".$mes."%'";

			$result = $interface->executeSQL($sql);
			$resultArray = mysql_fetch_array($result);
			return $resultArray;
		}
		function getSaldoTotalMes($mes)
		{
			$interface = new DBInterface();
			$sql =  "SELECT SUM( budget_records.ammount ) - (SELECT SUM( expenses.ammount )FROM expenses WHERE date LIKE'".$mes."%') total FROM budget_records";
			$result = $interface->executeSQL($sql);
			$resultArray = mysql_fetch_array($result);
			return $resultArray;
		}


	}




 ?>