<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Room
 *
 * @Flow\Entity
 */
class Room {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Room's name
	 *
	 * @return string The Room's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Room's name
	 *
	 * @param string $name The Room's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>