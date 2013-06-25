<?php 
require_once("DBInterface.php");
require_once("Dao.php");
class CategorieDao implements Dao
{

	function insert($categorie)
	{
		$sql="INSERT INTO  categories ( name , created , modified) VALUES ('".$categorie->getNome."','".  $categorie->getDataCriacao()."','". $categorie->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function select($id='')
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
	function selectAll(){

	}
	
	function update($categorie)
	{
		$interface = new DBInterface();
		$sql = "UPDATE categories SET name = '".$categorie->getNome."', created = '".$categorie->getDataCriacao()."' =modified='".$categorie->getDataEdicao()."' WHERE id =".$categorie->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function delete($categorie){
		$interface = new DBInterface();
		$sql =   "DELETE FROM categories WHERE id =".$categorie->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>