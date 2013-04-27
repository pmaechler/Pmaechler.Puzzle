<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Timetable".   *
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
	 * The subject name
	 * @var string
	 */
	protected $subjectName;

	/**
	 * The subject short name
	 * @var string
	 */
	protected $subjectShortName;

	/**
	 * The subject color
	 * @var string
	 */
	protected $subjectColor;

	/**
	 * The teachers
	 * @ORM\ManyToMany(mappedBy="teachers")
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Puzzle\Domain\Model\Teacher>
	 */
	protected $teachers;

	/**
	 * The timetable entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Puzzle\Domain\Model\TimetableEntry>
	 * @ORM\OneToMany(mappedBy="subject",cascade="persist")
	 * @ORM\OrderBy({"subject" = "ASC"})
	 */
	protected $timeTableEntries;

	public function __construct() {
		$this->teachers = new \Doctrine\Common\Collections\ArrayCollection();
		$this->timeTableEntries = new \Doctrine\Common\Collections\ArrayCollection();
	}


	/**
	 * Get the Subject's subject name
	 *
	 * @return string The Subject's subject name
	 */
	public function getSubjectName() {
		return $this->subjectName;
	}

	/**
	 * Sets this Subject's subject name
	 *
	 * @param string $subjectName The Subject's subject name
	 * @return void
	 */
	public function setSubjectName($subjectName) {
		$this->subjectName = $subjectName;
	}

	/**
	 * Get the Subject's subject short name
	 *
	 * @return string The Subject's subject short name
	 */
	public function getSubjectShortName() {
		return $this->subjectShortName;
	}

	/**
	 * Sets this Subject's subject short name
	 *
	 * @param string $subjectShortName The Subject's subject short name
	 * @return void
	 */
	public function setSubjectShortName($subjectShortName) {
		$this->subjectShortName = $subjectShortName;
	}

	/**
	 * Get the Subject's subject color
	 *
	 * @return string The Subject's subject color
	 */
	public function getSubjectColor() {
		return $this->subjectColor;
	}

	/**
	 * Sets this Subject's subject color
	 *
	 * @param string $subjectColor The Subject's subject color
	 * @return void
	 */
	public function setSubjectColor($subjectColor) {
		$this->subjectColor = $subjectColor;
	}

	/**
	 * Adds an additional teacher to this subject
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Teacher The teacher
	 * @return void
	 */
	public function addTeacher(\Pmaechler\Puzzle\Domain\Model\Teacher $teacher) {
		$teacher->addSubject($this);
		$this->teachers->add($teacher);
	}

	/**
	 * Get the Subject's timetableEntries
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\TimetableEntry The Subject's timetable entries
	 */
	public function getTimetableEntries() {
		return $this->timetableEntries;
	}

	/**
	 * Sets this Subject's timetableEntries
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry $timetableEntries The Subject's timetable entries
	 * @return void
	 */
	public function setTimetableEntries($timetableEntries) {
		$this->timetableEntries = $timetableEntries;
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

}
?>