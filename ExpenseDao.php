<?php 
require_once("DBInterface.php");

class ExpenseDao
{

	function insert($expense)
	{
		$sql="INSERT INTO  expenses (sub_category_id, account_id, date, ammount, created , modified, description) VALUES ('".$expense->getSubCategoriaId()."','".$expense->getContaId()."','".  $expense->getData."','". $expense->getAmmount()."','".  $expense->getgetDataCriacao()."','". $expense->getDataEdicao()."','". $expense->descricao."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function getExpense($id='')
	{
		$interface = new DBInterface();
		if($id!=''){
			$sql = "SELECT * FROM  expenses WHERE id = $id";
		}else{
			$sql = "SELECT * FROM  expenses";
		}
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	
	function updateExpense($expense)
	{
		$interface = new DBInterface();
		$sql = "UPDATE expenses SET name = '".$expense->getNome()."', created = '".$expense->getDataCriacao()."' =modified='".$expense->getDataEdicao()."' WHERE id =".$expense->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function removeObj($expense){
		$interface = new DBInterface();
		$sql =   "DELETE FROM expenses WHERE id =".$expense->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>