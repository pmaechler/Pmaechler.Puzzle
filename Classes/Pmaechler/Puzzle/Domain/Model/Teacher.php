<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Teacher
 *
 * @Flow\Entity
 */
class Teacher {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Teacher's name
	 *
	 * @return string The Teacher's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Teacher's name
	 *
	 * @param string $name The Teacher's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>