<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Timetable".   *
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
	 * The subject
	 * @var \Pmaechler\Puzzle\Domain\Model\Subject
	 * @ORM\ManyToOne(inversedBy="timetableEntries")
	 */
	protected $subject;

	/**
	 * The start time
	 * @var \DateTime
	 */
	protected $startTime;

	/**
	 * The end time
	 * @var \DateTime
	 */
	protected $endTime;

	/**
	 * The teacher
	 * @var \Pmaechler\Puzzle\Domain\Model\Teacher
	 * @ORM\ManyToOne(inversedBy="timetableEntries")
	 */
	protected $teacher;

	/**
	 * The room
	 * @var \Pmaechler\Puzzle\Domain\Model\Room
	 * @ORM\ManyToOne(inversedBy="timetableEntries")
	 */
	protected $room;

	/**
	 * The timetable
	 * @var \Pmaechler\Puzzle\Domain\Model\Timetable
	 * @ORM\ManyToOne(inversedBy="timetableEntries")
	 */
	protected $timetable;


	/**
	 * Get the Timetable entry's subject
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\Subject The Timetable entry's subject
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Sets this Timetable entry's subject
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject $subject The Timetable entry's subject
	 * @return void
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * Get the Timetable entry's start time
	 *
	 * @return \DateTime The Timetable entry's start time
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Sets this Timetable entry's start time
	 *
	 * @param \DateTime $startTime The Timetable entry's start time
	 * @return void
	 */
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
	}

	/**
	 * Get the Timetable entry's end time
	 *
	 * @return \DateTime The Timetable entry's end time
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Sets this Timetable entry's end time
	 *
	 * @param \DateTime $endTime The Timetable entry's end time
	 * @return void
	 */
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
	}

	/**
	 * Get the Timetable entry's teacher
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\Teacher The Timetable entry's teacher
	 */
	public function getTeacher() {
		return $this->teacher;
	}

	/**
	 * Sets this Timetable entry's teacher
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Teacher $teacher The Timetable entry's teacher
	 * @return void
	 */
	public function setTeacher($teacher) {
		$this->teacher = $teacher;
	}

	/**
	 * Get the Timetable entry's room
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\Room The Timetable entry's room
	 */
	public function getRoom() {
		return $this->room;
	}

	/**
	 * Sets this Timetable entry's room
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Room $room The Timetable entry's room
	 * @return void
	 */
	public function setRoom($room) {
		$this->room = $room;
	}

}
?>