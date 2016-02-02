<?php 

namespace Financeiro\Model;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\MappedSuperclass
 */
abstract class Entidade 
{
	/**
	 * @ORM\Column(type="datetime")
	 * @var  datetime
	 */
	protected $dataCadastro;

	/**
	 * @ORM\Column(type="datetime")
	 * @var  datetime
	 */
	protected $dataAlteracao;	

	/**
	 * @ORM\Column(type="integer")
	 * @var  integer
	 */
	protected $idUsuarioCadastro;

	/**
	 * @ORM\Column(type="integer")
	 * @var  integer
	 */
	protected $idUsuarioAlteracao;


	public function __construct()	
	{
		$this->setDataAlteracao(date('Y-m-d H:i:s'));
	}

	public function getDataCadastro()
	{
	    return $this->dataCadastro;
	}
	
	public function setDataCadastro($dataCadastro)
	{
	    $this->dataCadastro = \DateTime::createFromFormat('Y-m-d H:i:s', $dataCadastro);
	}

	public function getDataAlteracao()
	{
	    return $this->dataAlteracao;
	}
	
	public function setDataAlteracao($dataAlteracao)
	{
	    $this->dataAlteracao = \DateTime::createFromFormat('Y-m-d H:i:s', $dataAlteracao);
	}

	public function getIdUsuarioCadastro()
	{
	    return $this->idUsuarioCadastro;
	}
	
	public function setIdUsuarioCadastro($idUsuarioCadastro)
	{
	    $this->idUsuarioCadastro = $idUsuarioCadastro;
	}

	public function getIdUsuarioAlteracao()
	{
	    return $this->idUsuarioAlteracao;
	}
	
	public function setIdUsuarioAlteracao($idUsuarioAlteracao)
	{
	    $this->idUsuarioAlteracao = $idUsuarioAlteracao;
	}

}