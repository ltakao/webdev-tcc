<?php 

namespace Financeiro\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Usuario")
 */
class Usuario extends Entidade
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * 
	 * @var integer
	 */
	protected $idUsuario = null;	

	/**
	 * @ORM\Column(type="string", nullable=false)
	 *
	 * @var  string
	 */
	protected $nome;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 *
	 * @var string
	 */
	protected $login;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 *
	 * @var string
	 */
	protected $senha;

	/**
	 * @ORM\Column(type="integer", nullable=false)
	 *
	 * @var integer
	 */
	protected $administrador;

	
	public function __construct()
	{
		$this->dataCadastro(date("Y-m-d H:i:s"));
	}

	public function getIdUsuario()
	{
		return $this->idUsuario;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    $this->nome = $nome;
	}

	public function getLogin()
	{
	    return $this->login;
	}
	
	public function setLogin($login)
	{
	    $this->login = $login;
	}

	public function getSenha()
	{
		return $this->senha;
	}
				
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}	

	public function getAdministrador()
	{
		return $this->administrador;
	}
				
	public function setAdministrador($administrador)
	{
		$this->administrador = $administrador;
	}
}