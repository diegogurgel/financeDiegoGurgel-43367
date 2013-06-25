<?php 
require_once("DBInterface.php");
require_once("Dao.php");

class AccountDao implements Dao
{
	function insert($account)
	{
		$sql="INSERT INTO  accounts ( name , created , modified) VALUES ('".$account->getNomeConta()."','".  $account->getDataCriacao()."','". $account->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}
	function select($id='')
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
	function selectAll(){
		
	}
	function update($account)
	{
		$interface = new DBInterface();
		$sql = "UPDATE accounts SET name = '".$account->getNomeConta()."', created = '".$account->getDataCriacao()."' =modified='".$account->getDataEdicao()."' WHERE id =".$account->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function delete($account){
		$interface = new DBInterface();
		$sql =   "DELETE FROM accounts WHERE id =".$account->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>