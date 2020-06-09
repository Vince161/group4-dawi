<?php

class Entreprise

{

	// Element BDD

	private $_id;
	private $_pt;
	private $_oa;
	private $_nom;

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

	public function setPt($pt)
	{
	
		if(is_string($pt))
			$this->_pt = $pt;
	}

	public function setOa($oa)
	{
	
		if(is_string($oa))
			$this->_oa = $oa;
	}

	public function setNom($nom)
	{
	
		if(is_string($nom))
			$this->_nom = $nom;
	}


	
	// Getters

	public function id()
	{
		return $this->_id;
	}

	public function pt()
	{
		return $this->_pt;
	}

	public function oa()
	{
		return $this->_oa;
	}


	public function nom()
	{
		return $this->_nom;
	}



}


?>
