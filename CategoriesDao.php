<?php 
require_once("DBInterface.php");

class CategorieDao
{

	function insert($categories)
	{
		$sql="INSERT INTO  categoriess ( name , created , modified) VALUES ('".$categories->getNome."','".  $categories->getDataCriacao()."','". $categories->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function getCategories($id='')
	{
		$interface = new DBInterface();
		if($id!=''){
			$sql = "SELECT * FROM  categoriess WHERE id = $id";
		}else{
			$sql = "SELECT * FROM  categoriess";
		}
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	
	function updateCategories($categories)
	{
		$interface = new DBInterface();
		$sql = "UPDATE categoriess SET name = '".$categories->getNome."', created = '".$categories->getDataCriacao()."' =modified='".$categories->getDataEdicao()."' WHERE id =".$categories->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function removeObj($categories){
		$interface = new DBInterface();
		$sql =   "DELETE FROM categoriess WHERE id =".$categories->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>