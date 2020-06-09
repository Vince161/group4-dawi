<?php

require_once('views/View.php');

class ControllerAccueil
{
	private $_modelManager;
	private $_view;

	public function __construct($url)
	{
		if(isset($url) && count($url) > 1)
			throw new Exception('Error Processing Request - Page Introuvable');
		else 
			$this->users();
			
	}

	private function users()
	{
		$this->_modelManager = new ModelManager;
		$users = $this->_modelManager->getModManager();

		$this->_view = new View('Accueil');
		$this->_view->generate(array('users' => $users));
		
	}
}

?>
