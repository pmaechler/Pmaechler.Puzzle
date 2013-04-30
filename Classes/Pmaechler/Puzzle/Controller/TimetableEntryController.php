<?php
namespace Pmaechler\Puzzle\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Puzzle\Domain\Model\TimetableEntry;

/**
 * TimetableEntry controller for the Pmaechler.Puzzle package 
 *
 * @Flow\Scope("singleton")
 */
class TimetableEntryController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\TimetableEntryRepository
	 */
	protected $timetableEntryRepository;

	/**
	 * Shows a list of timetable entries
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('timetableEntries', $this->timetableEntryRepository->findAll());
	}

	/**
	 * Shows a single timetable entry object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry $timetableEntry The timetable entry to show
	 * @return void
	 */
	public function showAction(TimetableEntry $timetableEntry) {
		$this->view->assign('timetableEntry', $timetableEntry);
	}

	/**
	 * Shows a form for creating a new timetable entry object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new timetable entry object to the timetable entry repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry $newTimetableEntry A new timetable entry to add
	 * @return void
	 */
	public function createAction(TimetableEntry $newTimetableEntry) {
		$this->timetableEntryRepository->add($newTimetableEntry);
		$this->addFlashMessage('Created a new timetable entry.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing timetable entry object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry $timetableEntry The timetable entry to edit
	 * @return void
	 */
	public function editAction(TimetableEntry $timetableEntry) {
		$this->view->assign('timetableEntry', $timetableEntry);
	}

	/**
	 * Updates the given timetable entry object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry $timetableEntry The timetable entry to update
	 * @return void
	 */
	public function updateAction(TimetableEntry $timetableEntry) {
		$this->timetableEntryRepository->update($timetableEntry);
		$this->addFlashMessage('Updated the timetable entry.');
		$this->redirect('index');
	}

	/**
	 * Removes the given timetable entry object from the timetable entry repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\TimetableEntry $timetableEntry The timetable entry to delete
	 * @return void
	 */
	public function deleteAction(TimetableEntry $timetableEntry) {
		$this->timetableEntryRepository->remove($timetableEntry);
		$this->addFlashMessage('Deleted a timetable entry.');
		$this->redirect('index');
	}

}

?>