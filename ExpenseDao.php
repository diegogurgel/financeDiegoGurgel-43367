<?php 
require_once("DBInterface.php");
require_once("Dao.php");
class ExpenseDao implements Dao
{

    function insert($expense)
    {
        $sql="INSERT INTO  expenses (sub_category_id, account_id, date, ammount, created , modified, description) VALUES ('".$expense->getSubCategoriaId()."','".$expense->getContaId()."','".  $expense->getData."','". $expense->getAmmount()."','".  $expense->getgetDataCriacao()."','". $expense->getDataEdicao()."','". $expense->descricao."')";
        $interface = new DBInterface();
        $result = $interface->executeSQL($sql);     
    }

    function select($id='')
    {
        $interface = new DBInterface();
        $sql = "SELECT * FROM  expenses WHERE id = $id";
        $result =  $interface->getObj($sql) ;
        return $result;
    }
    function selectAll(){
        $interface = new DBInterface();
        $sql = "SELECT * FROM  expenses";
        $result =  $interface->getObj($sql) ;
        return $result;
    }
    
    function update($expense)
    {
        $interface = new DBInterface();
        $sql = "UPDATE expenses SET name = '".$expense->getNome()."', created = '".$expense->getDataCriacao()."' =modified='".$expense->getDataEdicao()."' WHERE id =".$expense->getId().";";
        $result =  $interface->executeSQL($sql);
    }
    function delete($expense){
        $interface = new DBInterface();
        $sql =   "DELETE FROM expenses WHERE id =".$expense->getId().";";
        $result =  $interface->executeSQL($sql);

    }
}

?>