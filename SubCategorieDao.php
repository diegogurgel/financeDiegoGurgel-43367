<?php 
require_once("DBInterface.php");
require_once("Dao.php");
class SubCategorieDao implements Dao
{

	function insert($subCategorie)
	{
		$sql="INSERT INTO  sub_categories (category_id, name , created , modified) VALUES ('".$subCategorie->getCategoriaId()."','".$subCategorie->getNome()."','".  $subCategorie->getDataCriacao()."','". $subCategorie->getDataEdicao()."')";
		$interface = new DBInterface();
		$result = $interface->executeSQL($sql);		
	}

	function select($id='')
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
	function selectAll(){
		
	}
	
	function update($subCategorie)
	{
		$interface = new DBInterface();
		$sql = "UPDATE sub_categories SET name = '".$subCategorie->getNome()."', created = '".$subCategorie->getDataCriacao()."' =modified='".$subCategorie->getDataEdicao()."' WHERE id =".$subCategorie->getId().";";
		$result =  $interface->executeSQL($sql);
	}
	function delete($subCategorie){
		$interface = new DBInterface();
		$sql =   "DELETE FROM sub_categories WHERE id =".$subCategorie->getId().";";
		$result =  $interface->executeSQL($sql);

	}
}

?>