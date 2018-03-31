<?php

namespace Sce\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteJen
 *
 * @ORM\Table(name="carte_jen")
 * @ORM\Entity(repositoryClass="Sce\UserBundle\Repository\CarteJenRepository")
 */
class CarteJen
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
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\Mission", mappedBy="cartesJen")
     */
    private $missions;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\Jen", mappedBy="cartesJen")
     */
    private $jens;

    /**
     * @ORM\OneToOne(targetEntity="Sce\UserBundle\Entity\Image", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="id_image", referencedColumnName="id")
     */
    private $image;

    /**
     * @ORM\OneToOne(targetEntity="Sce\UserBundle\Entity\QrCode", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="id_qrCode", referencedColumnName="id")
     */
    private $qrCode;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\CategorieCarte", inversedBy="carteJen")
     * @ORM\JoinTable(name="carteJen_categorie",
     *      joinColumns={@ORM\JoinColumn(name="categorie_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="carteJen_id", referencedColumnName="id")}
     *      )
     */
    private $categorie;


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
     * Constructor
     */
    public function __construct()
    {
        $this->missions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mission
     *
     * @param \Sce\UserBundle\Entity\Mission $mission
     *
     * @return CarteJen
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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return CarteJen
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
     * Set image
     *
     * @param \Sce\UserBundle\Entity\Image $image
     *
     * @return CarteJen
     */
    public function setImage(\Sce\UserBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Sce\UserBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set qrCode
     *
     * @param \Sce\UserBundle\Entity\QrCode $qrCode
     *
     * @return CarteJen
     */
    public function setQrCode(\Sce\UserBundle\Entity\QrCode $qrCode = null)
    {
        $this->qrCode = $qrCode;

        return $this;
    }

    /**
     * Get qrCode
     *
     * @return \Sce\UserBundle\Entity\QrCode
     */
    public function getQrCode()
    {
        return $this->qrCode;
    }

    /**
     * Add categorie
     *
     * @param \Sce\UserBundle\Entity\CategorieCarte $categorie
     *
     * @return CarteJen
     */
    public function addCategorie(\Sce\UserBundle\Entity\CategorieCarte $categorie)
    {
        $this->categorie[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \Sce\UserBundle\Entity\CategorieCarte $categorie
     */
    public function removeCategorie(\Sce\UserBundle\Entity\CategorieCarte $categorie)
    {
        $this->categorie->removeElement($categorie);
    }

    /**
     * Get categorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add jen
     *
     * @param \Sce\UserBundle\Entity\Jen $jen
     *
     * @return CarteJen
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
