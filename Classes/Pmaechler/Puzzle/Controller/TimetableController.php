<?php
namespace Pmaechler\Puzzle\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Puzzle\Domain\Model\Timetable;

/**
 * Timetable controller for the Pmaechler.Puzzle package 
 *
 * @Flow\Scope("singleton")
 */
class TimetableController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\TimetableRepository
	 */
	protected $timetableRepository;

	/**
	 * Shows a list of timetables
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('timetables', $this->timetableRepository->findAll());
	}

	/**
	 * Shows a single timetable object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Timetable $timetable The timetable to show
	 * @return void
	 */
	public function showAction(Timetable $timetable) {
		$this->view->assign('timetable', $timetable);
	}

	/**
	 * Shows a form for creating a new timetable object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new timetable object to the timetable repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Timetable $newTimetable A new timetable to add
	 * @return void
	 */
	public function createAction(Timetable $newTimetable) {
		$this->timetableRepository->add($newTimetable);
		$this->addFlashMessage('Created a new timetable.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing timetable object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Timetable $timetable The timetable to edit
	 * @return void
	 */
	public function editAction(Timetable $timetable) {
		$this->view->assign('timetable', $timetable);
	}

	/**
	 * Updates the given timetable object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Timetable $timetable The timetable to update
	 * @return void
	 */
	public function updateAction(Timetable $timetable) {
		$this->timetableRepository->update($timetable);
		$this->addFlashMessage('Updated the timetable.');
		$this->redirect('index');
	}

	/**
	 * Removes the given timetable object from the timetable repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Timetable $timetable The timetable to delete
	 * @return void
	 */
	public function deleteAction(Timetable $timetable) {
		$this->timetableRepository->remove($timetable);
		$this->addFlashMessage('Deleted a timetable.');
		$this->redirect('index');
	}

}

?>