<?php 

namespace Financeiro\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Clifor")
 */
class Clifor extends Entidade
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * 
	 * @var integer
	 */
	protected $idCliFor;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 *
	 * @var string
	 */
	protected $nome;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $razaoSocial;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 *
	 * @var string
	 */
	protected $tipo;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 *
	 * @var string
	 */	
	protected $pessoa;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */	
	protected $cpf;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */	
	protected $rg;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	 protected $cnpj;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	 protected $ie;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $telefone1;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $telefone2;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $observacao;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $site;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $logradouro;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $numero;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $complemento;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $bairro;

	/**
	 * @ORM\Column(type="string", length=8)
	 *
	 * @var string
	 */							
	protected $cep;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $cidade;

	/**
	 * @ORM\Column(type="string", length=2)
	 *
	 * @var string
	 */
	protected $uf;	

	/**
	 * @ORM\Column(type="integer")
	 *
	 * @var integer
	 */				
	protected $ativo;


	public function __construct()
	{
		$this->dataCadastro(date("Y-m-d H:i:s"));
	}	 

	public function getIdCliFor()
	{
	    return $this->idCliFor;
	}
	
	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    $this->nome = $nome;
	}

	public function getRazaoSocial()
	{
	    return $this->razaoSocial;
	}
	
	public function setRazaoSocial($razaoSocial)
	{
	    $this->razaoSocial = $razaoSocial;
	}

	public function getTipo()
	{
	    return $this->tipo;
	}
	
	public function setTipo($tipo)
	{
	    $this->tipo = $tipo;
	}

	public function getPessoa()
	{
	    return $this->pessoa;
	}
	
	public function setPessoa($pessoa)
	{
	    $this->pessoa = $pessoa;
	}

	public function getCpf()
	{
	    return $this->cpf;
	}
	
	public function setCpf($cpf)
	{
	    $this->cpf = $cpf;
	}

	public function getRg()
	{
	    return $this->rg;
	}
	
	public function setRg($rg)
	{
	    $this->rg = $rg;
	}

	public function getCnpj()
	{
	    return $this->cnpj;
	}
	
	public function setCnpj($cnpj)
	{
	    $this->cnpj = $cnpj;
	}

	public function getIe()
	{
	    return $this->ie;
	}
	
	public function setIe($ie)
	{
	    $this->ie = $ie;
	}

	public function getTel()
	{
	    return $this->telefone1;
	}
	
	public function setTel($telefone1)
	{
	    $this->telefone1 = $telefone1;
	}

	public function getTelefone2()
	{
	    return $this->telefone2;
	}
	
	public function setTelefone2($telefone2)
	{
	    $this->telefone2 = $telefone2;
	}

	public function getObservacao()
	{
	    return $this->observacao;
	}
	
	public function setObservacao($observacao)
	{
	    $this->observacao = $observacao;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    $this->email = $email;
	}

	public function getSite()
	{
	    return $this->site;
	}
	
	public function setSite($site)
	{
	    $this->site = $site;
	}

	public function getLogradouro()
	{
	    return $this->logradouro;
	}
	
	public function setLogradouro($logradouro)
	{
	    $this->logradouro = $logradouro;
	}

	public function getNumero()
	{
	    return $this->numero;
	}
	
	public function setNumero($numero)
	{
	    $this->numero = $numero;
	}

	public function getComplemento()
	{
	    return $this->complemento;
	}
	
	public function setComplemento($complemento)
	{
	    $this->complemento = $complemento;
	}

	public function getBairro()
	{
	    return $this->bairro;
	}
	
	public function setBairro($bairro)
	{
	    $this->bairro = $bairro;
	}

	public function getCep()
	{
	    return $this->cep;
	}
	
	public function setCep($cep)
	{
	    $this->cep = $cep;
	}

	public function getCidade()
	{
	    return $this->cidade;
	}
	
	public function setCidade($cidade)
	{
	    $this->cidade = $cidade;
	}

	public function getUf()
	{
	    return $this->uf;
	}
	
	public function setUf($uf)
	{
	    $this->uf = $uf;
	}

	public function getAtivo()
	{
	    return $this->ativo;
	}
	
	public function setAtivo($ativo)
	{
	    $this->ativo = $ativo;
	}
}