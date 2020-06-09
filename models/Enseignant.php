<?php

class Enseignant

{

	// Element BDD

	private $_id;
	private $_note;
	private $_edt;
		


	// Constructeur

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	public function hydrate(array $data)
	{
		foreach ($data as $key => $value) 
		{
			$method = 'set'.ucfirst($key);

			if(method_exists($this, $method))
				$this->$method($value);
		}
	}

	// Setters

	public function setId($id)
	{
		$id = (int) $id;

		if($id > 0)
			$this->_id = $id;
	}

	public function setNote($note)
	{
	
		$note = (float) $note;

		if($note => 0)
			$this->_note = $note;
	}

	public function setEdt($edt)
	{
	
		if(is_string($edt))
			$this->_edt = $edt;
	}


	// Getters

	public function id()
	{
		return $this->_id;
	}

	public function note()
	{
		return $this->_note;
	}

	public function edt()
	{
		return $this->_edt;
	}
}


?>
