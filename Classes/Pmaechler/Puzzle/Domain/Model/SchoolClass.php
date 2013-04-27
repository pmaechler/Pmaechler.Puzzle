<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Timetable".   *
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
	 * The class name
	 * @var string
	 */
	protected $className;

	/**
	 * The class short name
	 * @var string
	 */
	protected $classShortName;

	/**
	 * The timetable
	 * @var \Pmaechler\Puzzle\Domain\Model\Timetable
	 * @ORM\OneToOne(inversedBy="schoolClass")
	 */
	protected $timetable;

	/**
	 * The class color
	 * @var string
	 */
	protected $classColor;


	/**
	 * Get the School class's class name
	 *
	 * @return string The School class's class name
	 */
	public function getClassName() {
		return $this->className;
	}

	/**
	 * Sets this School class's class name
	 *
	 * @param string $className The School class's class name
	 * @return void
	 */
	public function setClassName($className) {
		$this->className = $className;
	}

	/**
	 * Get the School class's class short name
	 *
	 * @return string The School class's class short name
	 */
	public function getClassShortName() {
		return $this->classShortName;
	}

	/**
	 * Sets this School class's class short name
	 *
	 * @param string $classShortName The School class's class short name
	 * @return void
	 */
	public function setClassShortName($classShortName) {
		$this->classShortName = $classShortName;
	}

	/**
	 * Get the School class's timetable
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\Timetable The School class's timetable
	 */
	public function getTimetable() {
		return $this->timetable;
	}

	/**
	 * Sets this School class's timetable
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Timetable $timetable The School class's timetable
	 * @return void
	 */
	public function setTimetable($timetable) {
		$this->timetable = $timetable;
	}

	/**
	 * Get the School class's class color
	 *
	 * @return string The School class's class color
	 */
	public function getClassColor() {
		return $this->classColor;
	}

	/**
	 * Sets this School class's class color
	 *
	 * @param string $classColor The School class's class color
	 * @return void
	 */
	public function setClassColor($classColor) {
		$this->classColor = $classColor;
	}

}
?>