<?php 
require_once("DBInterface.php");
class BudgetDao implements Dao
{

	function insert($budget)
	{
		$sql="INSERT INTO  budgets (created , modified) VALUES ('".  $budget->getDataCriacao()."','". $budget->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function getbudget($id='')
	{
		$interface = new DBInterface();
		if($id!=''){
			$sql = "SELECT * FROM  budgets WHERE id = $id";
		}else{
			$sql = "SELECT * FROM  budgets";
		}
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	
	function updatebudget($budget)
	{
		$interface = new DBInterface();
		$sql = "UPDATE budgets SET created = '".$budget->getDataCriacao()."' =modified='".$budget->getDataEdicao()."' WHERE id =".$budget->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function removeObj($budget){
		$interface = new DBInterface();
		$sql =   "DELETE FROM budgets WHERE id =".$budget->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>