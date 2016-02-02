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
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	protected $tipo;

	
}