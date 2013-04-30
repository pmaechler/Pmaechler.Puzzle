<?php
namespace Pmaechler\Puzzle\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Puzzle\Domain\Model\SchoolClass;

/**
 * SchoolClass controller for the Pmaechler.Puzzle package 
 *
 * @Flow\Scope("singleton")
 */
class SchoolClassController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\SchoolClassRepository
	 */
	protected $schoolClassRepository;

	/**
	 * Shows a list of school classes
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('schoolClasses', $this->schoolClassRepository->findAll());
	}

	/**
	 * Shows a single school class object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\SchoolClass $schoolClass The school class to show
	 * @return void
	 */
	public function showAction(SchoolClass $schoolClass) {
		$this->view->assign('schoolClass', $schoolClass);
	}

	/**
	 * Shows a form for creating a new school class object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new school class object to the school class repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\SchoolClass $newSchoolClass A new school class to add
	 * @return void
	 */
	public function createAction(SchoolClass $newSchoolClass) {
		$this->schoolClassRepository->add($newSchoolClass);
		$this->addFlashMessage('Created a new school class.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing school class object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\SchoolClass $schoolClass The school class to edit
	 * @return void
	 */
	public function editAction(SchoolClass $schoolClass) {
		$this->view->assign('schoolClass', $schoolClass);
	}

	/**
	 * Updates the given school class object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\SchoolClass $schoolClass The school class to update
	 * @return void
	 */
	public function updateAction(SchoolClass $schoolClass) {
		$this->schoolClassRepository->update($schoolClass);
		$this->addFlashMessage('Updated the school class.');
		$this->redirect('index');
	}

	/**
	 * Removes the given school class object from the school class repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\SchoolClass $schoolClass The school class to delete
	 * @return void
	 */
	public function deleteAction(SchoolClass $schoolClass) {
		$this->schoolClassRepository->remove($schoolClass);
		$this->addFlashMessage('Deleted a school class.');
		$this->redirect('index');
	}

}

?>