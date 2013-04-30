<?php
namespace Pmaechler\Puzzle\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Puzzle\Domain\Model\Teacher;

/**
 * Teacher controller for the Pmaechler.Puzzle package 
 *
 * @Flow\Scope("singleton")
 */
class TeacherController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\TeacherRepository
	 */
	protected $teacherRepository;

	/**
	 * Shows a list of teachers
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('teachers', $this->teacherRepository->findAll());
	}

	/**
	 * Shows a single teacher object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Teacher $teacher The teacher to show
	 * @return void
	 */
	public function showAction(Teacher $teacher) {
		$this->view->assign('teacher', $teacher);
	}

	/**
	 * Shows a form for creating a new teacher object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new teacher object to the teacher repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Teacher $newTeacher A new teacher to add
	 * @return void
	 */
	public function createAction(Teacher $newTeacher) {
		$this->teacherRepository->add($newTeacher);
		$this->addFlashMessage('Created a new teacher.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing teacher object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Teacher $teacher The teacher to edit
	 * @return void
	 */
	public function editAction(Teacher $teacher) {
		$this->view->assign('teacher', $teacher);
	}

	/**
	 * Updates the given teacher object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Teacher $teacher The teacher to update
	 * @return void
	 */
	public function updateAction(Teacher $teacher) {
		$this->teacherRepository->update($teacher);
		$this->addFlashMessage('Updated the teacher.');
		$this->redirect('index');
	}

	/**
	 * Removes the given teacher object from the teacher repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Teacher $teacher The teacher to delete
	 * @return void
	 */
	public function deleteAction(Teacher $teacher) {
		$this->teacherRepository->remove($teacher);
		$this->addFlashMessage('Deleted a teacher.');
		$this->redirect('index');
	}

}

?>