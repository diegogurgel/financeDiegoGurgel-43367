<?php 
require_once("DBInterface.php");
require_once("Dao.php");
class BudgetDao implements Dao
{

	function insert($budget)
	{
		$sql="INSERT INTO  budgets (created , modified) VALUES (".  $budget->getDataCriacao().",". $budget->getDataEdicao().",)";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function select($id='')
	{
		$interface = new DBInterface();
		$sql = "SELECT * FROM  budgets WHERE id = $id";
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	function selectAll()
	{
		$interface = new DBInterface();
		$sql = "SELECT * FROM  budgets";
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	
	function update($budget)
	{
		$interface = new DBInterface();
		$sql = "UPDATE budgets SET created = '".$budget->getDataCriacao()."' =modified='".$budget->getDataEdicao()."' WHERE id =".$budget->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function delete($budget){
		$interface = new DBInterface();
		$sql =   "DELETE FROM budgets WHERE id =".$budget->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>