<?php
namespace Pmaechler\Puzzle\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Puzzle\Domain\Model\Subject;

/**
 * Subject controller for the Pmaechler.Puzzle package 
 *
 * @Flow\Scope("singleton")
 */
class SubjectController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\SubjectRepository
	 */
	protected $subjectRepository;

	/**
	 * Shows a list of subjects
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('subjects', $this->subjectRepository->findAll());
	}

	/**
	 * Shows a single subject object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject $subject The subject to show
	 * @return void
	 */
	public function showAction(Subject $subject) {
		$this->view->assign('subject', $subject);
	}

	/**
	 * Shows a form for creating a new subject object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new subject object to the subject repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject $newSubject A new subject to add
	 * @return void
	 */
	public function createAction(Subject $newSubject) {
		$this->subjectRepository->add($newSubject);
		$this->addFlashMessage('Created a new subject.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing subject object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject $subject The subject to edit
	 * @return void
	 */
	public function editAction(Subject $subject) {
		$this->view->assign('subject', $subject);
	}

	/**
	 * Updates the given subject object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject $subject The subject to update
	 * @return void
	 */
	public function updateAction(Subject $subject) {
		$this->subjectRepository->update($subject);
		$this->addFlashMessage('Updated the subject.');
		$this->redirect('index');
	}

	/**
	 * Removes the given subject object from the subject repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Subject $subject The subject to delete
	 * @return void
	 */
	public function deleteAction(Subject $subject) {
		$this->subjectRepository->remove($subject);
		$this->addFlashMessage('Deleted a subject.');
		$this->redirect('index');
	}

}

?>