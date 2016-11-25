<?php
  namespace AppBundle\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
 * Draft
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DraftRepository")
 */
  class Draft{

    /**
    * @ORM\Column(name="id", type ="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @ORM\OneToOne(targetEntity="AppBundle\Entity\Event", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    protected $event; //stock l'evenement lié au draft
    //A remplacer par l'entité user valide
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $user;//stock l'utilisateur correspondant au draft

    public function getId(){
      return $this->id;
    }

    public function getEvent(){
      return $this->event;
    }

    public function getUser(){
      return $this->user;
    }

    public function setId($id){
      $this->id = $id;
    }

    public function setEvent(Event $event){
      $this->event = $event;
    }

    public function setUser(User $user){
      $this->user = $user;
    }


  }
?>
