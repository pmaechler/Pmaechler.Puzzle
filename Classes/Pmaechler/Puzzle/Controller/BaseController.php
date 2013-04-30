<?php
namespace Pmaechler\Puzzle\Controller;

/*
 * This script belongs to the FLOW3 package "Pmaechler.Puzzle".
 *
 */

use TYPO3\Flow\Annotations as Flow;

/**
 * Base controller for the Pmaechler.Puzzle package
 *
 * @Flow\Scope("singleton")
 */
class BaseController extends \TYPO3\Flow\Mvc\Controller\ActionController {
	/**
	 * @var \TYPO3\Flow\Security\Context
	 */
	protected $securityContext;

	/**
	 * @var \TYPO3\Flow\Security\Account()
	 */
	protected $account;

	/**
	 * @Flow\Inject
	 * @var \Pmaechler\Puzzle\Domain\Repository\TeacherRepository
	 */
	protected $teacherRepository;

	/**
	 * Injects the security context
	 *
	 * @param \TYPO3\Flow\Security\Context $securityContext The security context
	 * @return void
	 */
	public function injectSecurityContext(\TYPO3\Flow\Security\Context $securityContext) {
		$this->securityContext = $securityContext;
	}

	/**
	 * Initializes the view that is used in all the controllers
	 *
	 * @param \TYPO3\Flow\Mvc\View\ViewInterface $view
	 */
	protected function initializeView(\TYPO3\Flow\Mvc\View\ViewInterface $view) {
		$navigation = $this->createNavigationEntries();

		$this->account = $this->securityContext->getAccount();

		$this->teacher = $this->teacherRepository->findOneByAccount($this->account);

		/* if ($this->account) {
			$this->view->assign('teacher', $this->account->getParty());
			array_push(
				$navigation,
				$this->createNavigationEntriesCategory()
			);
		} else {
			array_push(
				$navigation,
				$this->createNavigationEntriesNoLoggedInTeacher()
			);
		} */

		$this->view->assign('navigationItems', $navigation);
	}

	/**
	 * Creates the base entries for the main navigation of the application.
	 *
	 * The configuration array is handed to the view, where the navigation viewhelper
	 * builds the navigation out of it.
	 */
	protected function createNavigationEntries() {
		return
			array(
				array(
					'id' => 'navDashboard',
					'label' => 'Home',
					'icon' => 'icon-home',
					'invertIcon' => TRUE,
					'href' => $this->uriBuilder->setCreateAbsoluteUri(TRUE)->uriFor('index', array(), 'Standard'),
				),
			);
	}



}
?>