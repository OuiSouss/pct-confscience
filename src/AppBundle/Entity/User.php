<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable{
  /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /*public function __construct()
    {
      //$this->salt = md5(uniqid(null, true));
    }*/

    public function getUserName(){
      return $this->username;
    }

    public function getPassword(){
      return $this->password;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    public function getEmail(){
      return $this->email;
    }

    public function setUserName($username){
      $this->username = $username;
    }

    public function setPassword($password){
      $this->password = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function serialize()
   {
       return serialize(array(
           $this->id,
           $this->username,
           $this->password,
           // see section on salt below
           // $this->salt,
       ));
   }

   /** @see \Serializable::unserialize() */
   public function unserialize($serialized)
   {
       list (
           $this->id,
           $this->username,
           $this->password,
           // see section on salt below
           // $this->salt
       ) = unserialize($serialized);
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
}
