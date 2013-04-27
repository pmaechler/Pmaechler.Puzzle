<?php
namespace Pmaechler\Puzzle\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Timetable".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Teacher
 *
 * @Flow\Entity
 */
class Teacher {

	/**
	 * The firstname
	 * @var string
	 */
	protected $firstname;

	/**
	 * The lastname
	 * @var string
	 */
	protected $lastname;

	/**
	 * The email
	 * @var string
	 */
	protected $email;

	/**
	 * The username
	 * @var string
	 */
	protected $username;

	/**
	 * The password
	 * @var string
	 */
	protected $password;

	/**
	 * The role
	 * @var string
	 */
	protected $role;

	/**
	 * The subjects
	 * @ORM\ManyToMany(inversedBy="subjects")
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Puzzle\Domain\Model\Subject>
	 */
	protected $subjects;

	/**
	 * The teacher color
	 * @var string
	 */
	protected $teacherColor;

	/**
	 * The timetable entries
	 * @var \Doctrine\Common\Collections\Collection<\Pmaechler\Puzzle\Domain\Model\TimetableEntry>
	 * @ORM\OneToMany(mappedBy="teacher",cascade="persist")
	 * @ORM\OrderBy({"subject" = "ASC"})
	 */
	protected $timeTableEntries;

	public function __construct() {
		$this->subjects = new \Doctrine\Common\Collections\ArrayCollection();
		$this->timeTableEntries = new \Doctrine\Common\Collections\ArrayCollection();
	}


	/**
	 * Get the Teacher's firstname
	 *
	 * @return string The Teacher's firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets this Teacher's firstname
	 *
	 * @param string $firstname The Teacher's firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Get the Teacher's lastname
	 *
	 * @return string The Teacher's lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets this Teacher's lastname
	 *
	 * @param string $lastname The Teacher's lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Get the Teacher's email
	 *
	 * @return string The Teacher's email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets this Teacher's email
	 *
	 * @param string $email The Teacher's email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Get the Teacher's username
	 *
	 * @return string The Teacher's username
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Sets this Teacher's username
	 *
	 * @param string $username The Teacher's username
	 * @return void
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * Get the Teacher's password
	 *
	 * @return string The Teacher's password
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Sets this Teacher's password
	 *
	 * @param string $password The Teacher's password
	 * @return void
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * Get the Teacher's role
	 *
	 * @return string The Teacher's role
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets this Teacher's role
	 *
	 * @param string $role The Teacher's role
	 * @return void
	 */
	public function setRole($role) {
		$this->role = $role;
	}

	/**
	 * Get the Teacher's subjects
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\Subject The Teacher's subjects
	 */
	public function getSubjects() {
		return $this->subjects;
	}

	/**
	 * Sets this Teacher's subjects
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject $subjects The Teacher's subjects
	 * @return void
	 */
	public function setSubjects($subjects) {
		$this->subjects = $subjects;
	}

	/**
	 * Adds an additional subject to this teacher
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject The subject
	 * @return void
	 */
	public function addSubject(\Pmaechler\Puzzle\Domain\Model\Subject $subject) {
		$subject->addTeacher($this);
		$this->subjects->add($subject);
	}

	/**
	 * Get the Teacher's teacher color
	 *
	 * @return string The Teacher's teacher color
	 */
	public function getTeacherColor() {
		return $this->teacherColor;
	}

	/**
	 * Sets this Teacher's teacher color
	 *
	 * @param string $teacherColor The Teacher's teacher color
	 * @return void
	 */
	public function setTeacherColor($teacherColor) {
		$this->teacherColor = $teacherColor;
	}

	/**
	 * Get the Teacher's timetableEntries
	 *
	 * @return \Pmaechler\Puzzle\Domain\Model\TimetableEntry The Teacher's timetable entries
	 */
	public function getTimetableEntries() {
		return $this->timetableEntries;
	}

	/**
	 * Sets this Teacher's timetableEntries
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry $timetableEntries The Teacher's timetable entries
	 * @return void
	 */
	public function setTimetableEntries($timetableEntries) {
		$this->timetableEntries = $timetableEntries;
	}

	/**
	 * Adds an additional timetableEntry to this teacher
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