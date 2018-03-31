<?php

namespace Sce\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jen
 *
 * @ORM\Table(name="jen")
 * @ORM\Entity(repositoryClass="Sce\UserBundle\Repository\JenRepository")
 */
class Jen
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=50)
     */
    private $intitule;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEnseignants", type="integer", nullable=true)
     */
    private $nbEnseignants;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEtudiants", type="integer", nullable=true)
     */
    private $nbEtudiants;

    /**
     * @var int
     *
     * @ORM\Column(name="nbActeurs", type="integer", nullable=true)
     */
    private $nbActeurs;

    /**
     * @var string
     *
     * @ORM\Column(name="outils", type="text", nullable=true)
     */
    private $outils;

    /**
     * @var string
     *
     * @ORM\Column(name="dispositifs", type="text", nullable=true)
     */
    private $dispositifs;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsys", type="text", nullable=true)
     */
    private $synopsys;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\User", inversedBy="jens")
     * @ORM\JoinTable(name="CreationJen",
     *      joinColumns={@ORM\JoinColumn(name="jen_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="createur_id", referencedColumnName="id")}
     *      )
     */
    private $createurs;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\Discipline", inversedBy="jens")
     * @ORM\JoinTable(name="discipline_Jen",
     *      joinColumns={@ORM\JoinColumn(name="jen_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="discipline_id", referencedColumnName="id")}
     *      )
     */
    private $disciplines;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\Communaute", inversedBy="jens")
     * @ORM\JoinTable(name="communaute_jen",
     *      joinColumns={@ORM\JoinColumn(name="jen_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="communaute_id", referencedColumnName="id")}
     *      )
     */
    private $communautes;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\CarteJen", inversedBy="jens")
     * @ORM\JoinTable(name="carteJen_jen",
     *      joinColumns={@ORM\JoinColumn(name="carteJen_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="jen_id", referencedColumnName="id")}
     *      )
     */
    private $cartesJen;

    /**
     * @ORM\OneToMany(targetEntity="Sce\UserBundle\Entity\Mission", mappedBy="jen", cascade={"persist","remove"})
     */
    private $missions;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Jen
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set nbEnseignants
     *
     * @param integer $nbEnseignants
     *
     * @return Jen
     */
    public function setNbEnseignants($nbEnseignants)
    {
        $this->nbEnseignants = $nbEnseignants;

        return $this;
    }

    /**
     * Get nbEnseignants
     *
     * @return int
     */
    public function getNbEnseignants()
    {
        return $this->nbEnseignants;
    }

    /**
     * Set nbEtudiants
     *
     * @param integer $nbEtudiants
     *
     * @return Jen
     */
    public function setNbEtudiants($nbEtudiants)
    {
        $this->nbEtudiants = $nbEtudiants;

        return $this;
    }

    /**
     * Get nbEtudiants
     *
     * @return int
     */
    public function getNbEtudiants()
    {
        return $this->nbEtudiants;
    }

    /**
     * Set nbActeurs
     *
     * @param integer $nbActeurs
     *
     * @return Jen
     */
    public function setNbActeurs($nbActeurs)
    {
        $this->nbActeurs = $nbActeurs;

        return $this;
    }

    /**
     * Get nbActeurs
     *
     * @return int
     */
    public function getNbActeurs()
    {
        return $this->nbActeurs;
    }

    /**
     * Set outils
     *
     * @param string $outils
     *
     * @return Jen
     */
    public function setOutils($outils)
    {
        $this->outils = $outils;

        return $this;
    }

    /**
     * Get outils
     *
     * @return string
     */
    public function getOutils()
    {
        return $this->outils;
    }

    /**
     * Set dispositifs
     *
     * @param string $dispositifs
     *
     * @return Jen
     */
    public function setDispositifs($dispositifs)
    {
        $this->dispositifs = $dispositifs;

        return $this;
    }

    /**
     * Get dispositifs
     *
     * @return string
     */
    public function getDispositifs()
    {
        return $this->dispositifs;
    }

        /**
     * Set synopsys
     *
     * @param string $synopsys
     *
     * @return Jen
     */
    public function setSynopsys($synopsys)
    {
        $this->synopsys = $synopsys;

        return $this;
    }

    /**
     * Get synopsys
     *
     * @return string
     */
    public function getSynopsys()
    {
        return $this->synopsys;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->disciplines = new \Doctrine\Common\Collections\ArrayCollection();
        $this->communautes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->missions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add createur
     *
     * @param \Sce\UserBundle\Entity\User $createur
     *
     * @return Jen
     */
    public function addCreateur(\Sce\UserBundle\Entity\User $createur)
    {
        $this->createurs[] = $createur;

        return $this;
    }

    /**
     * Remove createur
     *
     * @param \Sce\UserBundle\Entity\User $createur
     */
    public function removeCreateur(\Sce\UserBundle\Entity\User $createur)
    {
        $this->createurs->removeElement($createur);
    }

    /**
     * Get createurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreateurs()
    {
        return $this->createurs;
    }

    /**
     * Add discipline
     *
     * @param \Sce\UserBundle\Entity\Discipline $discipline
     *
     * @return Jen
     */
    public function addDiscipline(\Sce\UserBundle\Entity\Discipline $discipline)
    {
        $this->disciplines[] = $discipline;

        return $this;
    }

    /**
     * Remove discipline
     *
     * @param \Sce\UserBundle\Entity\Discipline $discipline
     */
    public function removeDiscipline(\Sce\UserBundle\Entity\Discipline $discipline)
    {
        $this->disciplines->removeElement($discipline);
    }

    /**
     * Get disciplines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDisciplines()
    {
        return $this->disciplines;
    }

    /**
     * Add communaute
     *
     * @param \Sce\UserBundle\Entity\Communaute $communaute
     *
     * @return Jen
     */
    public function addCommunaute(\Sce\UserBundle\Entity\Communaute $communaute)
    {
        $this->communautes[] = $communaute;

        return $this;
    }

    /**
     * Remove communaute
     *
     * @param \Sce\UserBundle\Entity\Communaute $communaute
     */
    public function removeCommunaute(\Sce\UserBundle\Entity\Communaute $communaute)
    {
        $this->communautes->removeElement($communaute);
    }

    /**
     * Get communautes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommunautes()
    {
        return $this->communautes;
    }

    /**
     * Add mission
     *
     * @param \Sce\UserBundle\Entity\Mission $mission
     *
     * @return Jen
     */
    public function addMission(\Sce\UserBundle\Entity\Mission $mission)
    {
        $this->missions[] = $mission;

        return $this;
    }

    /**
     * Remove mission
     *
     * @param \Sce\UserBundle\Entity\Mission $mission
     */
    public function removeMission(\Sce\UserBundle\Entity\Mission $mission)
    {
        $this->missions->removeElement($mission);
    }

    /**
     * Get missions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * Add cartesJen
     *
     * @param \Sce\UserBundle\Entity\CarteJen $cartesJen
     *
     * @return Jen
     */
    public function addCartesJen(\Sce\UserBundle\Entity\CarteJen $cartesJen)
    {
        $this->cartesJen[] = $cartesJen;

        return $this;
    }

    /**
     * Remove cartesJen
     *
     * @param \Sce\UserBundle\Entity\CarteJen $cartesJen
     */
    public function removeCartesJen(\Sce\UserBundle\Entity\CarteJen $cartesJen)
    {
        $this->cartesJen->removeElement($cartesJen);
    }

    /**
     * Get cartesJen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartesJen()
    {
        return $this->cartesJen;
    }
}
