<?php
class Account{
	private $id;
	private $nomeConta;
	private $dataCriacao;
	private $dataEdicao;


	  function getId()
    {
    	return $this->id;
    }
        function setId($id)
    {
    	$this->id = $id;

    	return $this;
    }


    function getNomeConta()
    {
    	return $this->nomeConta;
    }

    function setNomeConta($nomeConta)
    {
    	$this->nomeConta = $nomeConta;

    	return $this;
    }

    function getDataCriacao()
    {
    	return $this->dataCriacao;
    }

    function setDataCriacao($dataCriacao)
    {
    	$this->dataCriacao = $dataCriacao;

    	return $this;
    }


    function getDataEdicao()
    {
    	return $this->dataEdicao;
    }

    function setDataEdicao($dataEdicao)
    {
    	$this->dataEdicao = $dataEdicao;

    	return $this;
    }
}
?>