<?php 
require_once("DBInterface.php");

class AccountDao
{

	function insert($account)
	{
		$sql="INSERT INTO  accounts ( name , created , modified) VALUES ('".$account->getNomeConta()."','".  $account->getDataCriacao()."','". $account->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function getAccount($id='')
	{
		$interface = new DBInterface();
		if($id!=''){
			$sql = "SELECT * FROM  accounts WHERE id = $id";
		}else{
			$sql = "SELECT * FROM  accounts";
		}
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	
	function updateAccount($account)
	{
		$interface = new DBInterface();
		$sql = "UPDATE accounts SET name = '".$account->getNomeConta()."', created = '".$account->getDataCriacao()."' =modified='".$account->getDataEdicao()."' WHERE id =".$account->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function removeObj($account){
		$interface = new DBInterface();
		$sql =   "DELETE FROM accounts WHERE id =".$account->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>