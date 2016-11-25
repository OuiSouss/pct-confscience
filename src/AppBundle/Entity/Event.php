<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Event{

	/**
	* @Assert\NotBlank()
	*/
	protected $titre;

	protected $date;

	protected $image;

	protected $description;

	protected $published;

	public function getTitre(){
		return $this->titre;
	}

	public function setTitre($titre){
		$this->titre = $titre;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate(\DateTime $date = null){
		$this->date = $date;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function Pusblished(){
		$this->published = true;
	}

	public function unPublished(){
		$this->published = false;
	}

	public function isPublished(){
		return $this->published;
	}
}
