<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A School class
 *
 * @Flow\Entity
 */
class SchoolClass {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the School class's name
	 *
	 * @return string The School class's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this School class's name
	 *
	 * @param string $name The School class's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>