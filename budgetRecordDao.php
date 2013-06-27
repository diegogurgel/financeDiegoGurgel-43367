<?php 
require_once("DBInterface.php");
require_once("Dao.php");

class budgetRecordDao implements Dao{

	function select($id){
		$interface = new DBInterface();
		$sql = "SELECT * FROM  budget_records WHERE id = $id";
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	function selectAll(){
		
		$interface = new DBInterface();
		$sql = "SELECT * FROM  budget_records";
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	function insert($budgetRecord){
		$sql="INSERT INTO  budget_records (budget_id, ammount, sub_category_id, created , modified) VALUES (".$budgetRecord->getBudgetID().",".$budgetRecord->getAmmount().",".$budgetRecord->getSubCategoryId().",".$budgetRecord->getDataCriacao().",". $budgetRecord->getDataEdicao().",)";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);	
	}
	function update($budgetRecord){
		$interface = new DBInterface();
		$sql = "UPDATE budget_records SET budget_id = '".$budgetRecord->getBudgetID()."'ammount='".$budgetRecord->getAmmount()."'sub_category_id='".$budgetRecord->getSubCategoryId()."' created='".$budgetRecord->getDataCriacao()."' =modified='".$budgetRecord->getDataEdicao()."' WHERE id =".$budgetRecord->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function delete($budgetRecord){
		$interface = new DBInterface();
		$sql =   "DELETE FROM budget_records WHERE id =".$budgetRecord->getId().";";
		$result =  $interface->executeSQL($sql);
	}
}



?>