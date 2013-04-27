<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Subject
 *
 * @Flow\Entity
 */
class Subject {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Subject's name
	 *
	 * @return string The Subject's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Subject's name
	 *
	 * @param string $name The Subject's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>