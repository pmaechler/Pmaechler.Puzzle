<?php
namespace Pmaechler\Puzzle\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Pmaechler.Puzzle".      *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Pmaechler\Puzzle\Domain\Model\Room;

/**
 * Room controller for the Pmaechler.Puzzle package 
 *
 * @Flow\Scope("singleton")
 */
class RoomController extends BaseController {

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\RoomRepository
	 */
	protected $roomRepository;

	/**
	 * Shows a list of rooms
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('rooms', $this->roomRepository->findAll());
	}

	/**
	 * Shows a single room object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Room $room The room to show
	 * @return void
	 */
	public function showAction(Room $room) {
		$this->view->assign('room', $room);
	}

	/**
	 * Shows a form for creating a new room object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new room object to the room repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Room $newRoom A new room to add
	 * @return void
	 */
	public function createAction(Room $newRoom) {
		$this->roomRepository->add($newRoom);
		$this->addFlashMessage('Created a new room.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing room object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Room $room The room to edit
	 * @return void
	 */
	public function editAction(Room $room) {
		$this->view->assign('room', $room);
	}

	/**
	 * Updates the given room object
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Room $room The room to update
	 * @return void
	 */
	public function updateAction(Room $room) {
		$this->roomRepository->update($room);
		$this->addFlashMessage('Updated the room.');
		$this->redirect('index');
	}

	/**
	 * Removes the given room object from the room repository
	 *
	 * @param \Pmaechler\Puzzle\Domain\Model\Room $room The room to delete
	 * @return void
	 */
	public function deleteAction(Room $room) {
		$this->roomRepository->remove($room);
		$this->addFlashMessage('Deleted a room.');
		$this->redirect('index');
	}

}

?>