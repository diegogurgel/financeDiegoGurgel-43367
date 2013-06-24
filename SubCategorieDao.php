<?php 
require_once("DBInterface.php");

class SubCategorieDao
{

	function insert($subCategorie)
	{
		$sql="INSERT INTO  sub_categories (category_id, name , created , modified) VALUES ('".$subCategorie->getCategoriaId()."','".$subCategorie->getNome()."','".  $subCategorie->getDataCriacao()."','". $subCategorie->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function getSubCategorie($id='')
	{
		$interface = new DBInterface();
		if($id!=''){
			$sql = "SELECT * FROM  sub_categories WHERE id = $id";
		}else{
			$sql = "SELECT * FROM  sub_categories";
		}
		$result =  $interface->getObj($sql) ;
		return $result;
	}
	
	function updateSubCategorie($subCategorie)
	{
		$interface = new DBInterface();
		$sql = "UPDATE sub_categories SET name = '".$subCategorie->getNome()."', created = '".$subCategorie->getDataCriacao()."' =modified='".$subCategorie->getDataEdicao()."' WHERE id =".$subCategorie->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function removeObj($subCategorie){
		$interface = new DBInterface();
		$sql =   "DELETE FROM sub_categories WHERE id =".$subCategorie->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>