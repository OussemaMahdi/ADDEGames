<?php

namespace Sce\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255, nullable=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255,nullable=true)
     */
    private $prenom;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\Jen", mappedBy="createurs")
     */
    private $jens;


    /**
     * @var string
     *
     * @ORM\Column(name="date_inscription", type="string", length=255,nullable=true)
     */
    private $dateInscription;

    public function __construct()
    {
        parent::__construct();
        // your own logic

        $now = new \DateTime('now');
        $this->dateInscription = $now->format('Y-m-d H:i:s');    // MySQL datetime format
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateInscription
     *
     * @param string $dateInscription
     *
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return string
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Add jen
     *
     * @param \Sce\UserBundle\Entity\Jen $jen
     *
     * @return User
     */
    public function addJen(\Sce\UserBundle\Entity\Jen $jen)
    {
        $this->jens[] = $jen;

        return $this;
    }

    /**
     * Remove jen
     *
     * @param \Sce\UserBundle\Entity\Jen $jen
     */
    public function removeJen(\Sce\UserBundle\Entity\Jen $jen)
    {
        $this->jens->removeElement($jen);
    }

    /**
     * Get jens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJens()
    {
        return $this->jens;
    }
}
