<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* Event
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
*/
class Event{

	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	* @ORM\Column(name="tite", type="string", length=512)
	* @Assert\NotBlank()
	*/
	private $titre;

	/**
	* @ORM\Column(name="date", type="date")
	*/
	private $date;

	/**
	* @ORM\Column(name="image", type="string")
	* @Assert\File(mimeTypes={ "image/png", "image/jpeg", "image/jpg", "image/gif"},
	* mimeTypesMessage = "Image Invalide")
	*/
	private $image;

	/**
	* @ORM\Column(name="description", type="text", length=512)
	*/
	private $description;

	/**
	* @ORM\Column(name="published", type="boolean")
	*/
	private $published;

	/**
	* @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $user;

	public function getTitre(){
		return $this->titre;
	}

	public function setTitre($titre){
		$this->titre = $titre;
	}

	public function getDate(){
		return $this->date;
	}

	public function getUser(){
		return $this->user;
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

	public function setUser($user){
		$this->user = $user;
	}

	public function pusblished(){
		$this->published = true;
	}

	public function unPublished(){
		$this->published = false;
	}

	public function isPublished(){
		return $this->published;
	}

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Event
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
}
