<?php 
require_once("DBInterface.php");

class CategorieDao
{

	function insert($categorie)
	{
		$sql="INSERT INTO  categories ( name , created , modified) VALUES ('".$categorie->getNome."','".  $categorie->getDataCriacao()."','". $categorie->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function getCategorie($id='')
	{
		$interface = new DBInterface();
		if($id!=''){
			$sql = "SELECT * FROM  categories WHERE id = $id";
		}else{
			$sql = "SELECT * FROM  categories";
		}
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	
	function updateCategorie($categorie)
	{
		$interface = new DBInterface();
		$sql = "UPDATE categories SET name = '".$categorie->getNome."', created = '".$categorie->getDataCriacao()."' =modified='".$categorie->getDataEdicao()."' WHERE id =".$categorie->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function removeObj($categorie){
		$interface = new DBInterface();
		$sql =   "DELETE FROM categories WHERE id =".$categorie->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>