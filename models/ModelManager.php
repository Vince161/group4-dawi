<?php

class ModelManager extends Model
{
	public function getModManager()
	{
		 $this->getBdd();
		 return $this->getAll('user', 'User');
		 $this->getBdd();
		 return $this->getAll('etudiant', 'Etudiant');
		 $this->getBdd();
		 return $this->getAll('entreprise', 'Entreprise');
		 $this->getBdd();
		 return $this->getAll('enseignant', 'Enseignant');
	}
}

?>
