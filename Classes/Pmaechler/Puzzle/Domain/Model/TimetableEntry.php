<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Timetable entry
 *
 * @Flow\Entity
 */
class TimetableEntry {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Timetable entry's name
	 *
	 * @return string The Timetable entry's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Timetable entry's name
	 *
	 * @param string $name The Timetable entry's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>