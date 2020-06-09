<?php

class ModelManager extends Model
{
	public function getModManager()
	{
		 $this->getBdd();
		 return $this->getAll('users', 'User');
	}
}

?>
