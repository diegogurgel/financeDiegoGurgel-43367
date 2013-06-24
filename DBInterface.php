<?php
class DBInterface{
	private $conexao="";
	private $database="";

	private function connect()
	{
		$this->conexao = mysql_connect("localhost","root","usbw");
		if(!$this->conexao)
		{
			die ("Falha na conexao com o Banco de Dados!");
		}else
		{
			$this->dataBase =  mysql_select_db("trabalhofinance");
		}
	}

	private function close(){
		mysql_close($this->conexao);
	}


	function getObj($sql)
	{
		$this->connect();
		$result = mysql_query($sql, $this->conexao);
		$this->close();
		return $result;


	}

	function executeSQL($sql)
	{
		$this->connect();
		$result = mysql_query($sql, $this->conexao);
		$this->close();
		return $result;
	}
}
?>
