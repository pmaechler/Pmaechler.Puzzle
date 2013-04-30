<?php
namespace Pmaechler\Puzzle\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Puzzle\Domain\Model\Standard;

/**
 * Standard controller for the Pmaechler.Puzzle package 
 *
 * @Flow\Scope("singleton")
 */
class StandardController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\StandardRepository
	 */
	protected $standardRepository;

	/**
	 * Shows a list of standards
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('standards', $this->standardRepository->findAll());
	}

	/**
	 * Shows a single standard object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Standard $standard The standard to show
	 * @return void
	 */
	public function showAction(Standard $standard) {
		$this->view->assign('standard', $standard);
	}

	/**
	 * Shows a form for creating a new standard object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new standard object to the standard repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Standard $newStandard A new standard to add
	 * @return void
	 */
	public function createAction(Standard $newStandard) {
		$this->standardRepository->add($newStandard);
		$this->addFlashMessage('Created a new standard.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing standard object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Standard $standard The standard to edit
	 * @return void
	 */
	public function editAction(Standard $standard) {
		$this->view->assign('standard', $standard);
	}

	/**
	 * Updates the given standard object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Standard $standard The standard to update
	 * @return void
	 */
	public function updateAction(Standard $standard) {
		$this->standardRepository->update($standard);
		$this->addFlashMessage('Updated the standard.');
		$this->redirect('index');
	}

	/**
	 * Removes the given standard object from the standard repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Standard $standard The standard to delete
	 * @return void
	 */
	public function deleteAction(Standard $standard) {
		$this->standardRepository->remove($standard);
		$this->addFlashMessage('Deleted a standard.');
		$this->redirect('index');
	}

}

?>