<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Timetable".   *
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
	 * The room name
	 * @var string
	 */
	protected $roomName;

	/**
	 * The room short name
	 * @var string
	 */
	protected $roomShortName;

	/**
	 * The room color
	 * @var string
	 */
	protected $roomColor;

	/**
	 * The timetable entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Puzzle\Domain\Model\TimetableEntry>
	 * @ORM\OneToMany(mappedBy="room",cascade="persist")
	 * @ORM\OrderBy({"subject" = "ASC"})
	 */
	protected $timeTableEntries;

	public function __construct() {
		$this->timeTableEntries = new \Doctrine\Common\Collections\ArrayCollection();
	}


	/**
	 * Get the Room's room name
	 *
	 * @return string The Room's room name
	 */
	public function getRoomName() {
		return $this->roomName;
	}

	/**
	 * Sets this Room's room name
	 *
	 * @param string $roomName The Room's room name
	 * @return void
	 */
	public function setRoomName($roomName) {
		$this->roomName = $roomName;
	}

	/**
	 * Get the Room's room short name
	 *
	 * @return string The Room's room short name
	 */
	public function getRoomShortName() {
		return $this->roomShortName;
	}

	/**
	 * Sets this Room's room short name
	 *
	 * @param string $roomShortName The Room's room short name
	 * @return void
	 */
	public function setRoomShortName($roomShortName) {
		$this->roomShortName = $roomShortName;
	}

	/**
	 * Get the Room's room color
	 *
	 * @return string The Room's room color
	 */
	public function getRoomColor() {
		return $this->roomColor;
	}

	/**
	 * Sets this Room's room color
	 *
	 * @param string $roomColor The Room's room color
	 * @return void
	 */
	public function setRoomColor($roomColor) {
		$this->roomColor = $roomColor;
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