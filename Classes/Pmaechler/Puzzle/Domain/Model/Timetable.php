<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Timetable".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Timetable
 *
 * @Flow\Entity
 */
class Timetable {

	/**
	 * The timetable name
	 * @var string
	 */
	protected $timetableName;

	/**
	 * The timetable short name
	 * @var string
	 */
	protected $timetableShortName;

	/**
	 * The timetable entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Puzzle\Domain\Model\TimetableEntry>
	 * @ORM\OneToMany(mappedBy="subject",cascade="persist")
	 * @ORM\OrderBy({"subject" = "ASC"})
	 */
	protected $timeTableEntries;

	/**
	 * The schoolClass
	 * @var \Pmaechler\Puzzle\Domain\Model\SchoolClass
	 * @ORM\OneToOne(inversedBy="timetable")
	 */
	protected $schoolClass;


	/**
	 * Get the Timetable's timetable name
	 *
	 * @return string The Timetable's timetable name
	 */
	public function getTimetableName() {
		return $this->timetableName;
	}

	/**
	 * Sets this Timetable's timetable name
	 *
	 * @param string $timetableName The Timetable's timetable name
	 * @return void
	 */
	public function setTimetableName($timetableName) {
		$this->timetableName = $timetableName;
	}

	/**
	 * Get the Timetable's timetable short name
	 *
	 * @return string The Timetable's timetable short name
	 */
	public function getTimetableShortName() {
		return $this->timetableShortName;
	}

	/**
	 * Sets this Timetable's timetable short name
	 *
	 * @param string $timetableShortName The Timetable's timetable short name
	 * @return void
	 */
	public function setTimetableShortName($timetableShortName) {
		$this->timetableShortName = $timetableShortName;
	}

	/**
	 * Get the Timetable's timetable entries
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\TimetableEntries The Timetable's timetable entries
	 */
	public function getTimetableEntries() {
		return $this->timetableEntries;
	}

	/**
	 * Adds an additional timetableEntry to this Subject
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry The timetable entry
	 * @return void
	 */
	public function addTimetableEntry(\Pmaechler\Puzzle\Domain\Model\TimetableEntry $timetableEntry) {
		$timetableEntry->setTaskgroup($this);
		$this->timetableEntries->add($timetableEntry);
	}

	/**
	 * Sets this Timetable's timetable entries
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntries $timetableEntries The Timetable's timetable entries
	 * @return void
	 */
	public function setTimetableEntries($timetableEntries) {
		$this->timetableEntries = $timetableEntries;
	}


	/**
	 * Get the Timetable's school class
	 *
	 * @return string The School class's class name
	 */
	public function getSchoolClass() {
		return $this->schoolClass;
	}

	/**
	 * Sets this Timetable's school class
	 *
	 * @param string $schoolClass The Timetable's school class
	 * @return void
	 */
	public function setSchoolClass($schoolClass) {
		$this->schoolClass = $schoolClass;
	}

}
?>