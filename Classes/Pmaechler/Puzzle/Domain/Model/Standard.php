<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Standard
 *
 * @Flow\Entity
 */
class Standard {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Standard's name
	 *
	 * @return string The Standard's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Standard's name
	 *
	 * @param string $name The Standard's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>