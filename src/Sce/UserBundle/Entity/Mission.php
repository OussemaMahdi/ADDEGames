<?php

namespace Sce\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity(repositoryClass="Sce\UserBundle\Repository\MissionRepository")
 */
class Mission
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
     * @ORM\Column(name="titre", type="string", length=50, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contexteScenaristique", type="text", nullable=true)
     */
    private $contexteScenaristique;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", nullable=true)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="ludification", type="text", nullable=true)
     */
    private $ludification;

    /**
     * @var string
     *
     * @ORM\Column(name="authenticite", type="text", nullable=true)
     */
    private $authenticite;

    /**
     * @var string
     *
     * @ORM\Column(name="immersion", type="text", nullable=true)
     */
    private $immersion;

    /**
     * @ORM\ManyToOne(targetEntity="Sce\UserBundle\Entity\Jen", inversedBy="missions"))
     * @ORM\JoinColumn(name="id_jen", referencedColumnName="id")
     */
    private $jen;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\CarteJen", inversedBy="missions")
     * @ORM\JoinTable(name="carteJen_mission",
     *      joinColumns={@ORM\JoinColumn(name="carteJen_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="mission_id", referencedColumnName="id")}
     *      )
     */
    private $cartesJen;

    /**
     * @ORM\OneToMany(targetEntity="Sce\UserBundle\Entity\Image", mappedBy="mission",cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $images;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Mission
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contexteScenaristique
     *
     * @param string $contexteScenaristique
     *
     * @return Mission
     */
    public function setContexteScenaristique($contexteScenaristique)
    {
        $this->contexteScenaristique = $contexteScenaristique;

        return $this;
    }

    /**
     * Get contexteScenaristique
     *
     * @return string
     */
    public function getContexteScenaristique()
    {
        return $this->contexteScenaristique;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Mission
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set schema
     *
     * @param string $schema
     *
     * @return Mission
     */
    public function setSchema($schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * Get schema
     *
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Set ludification
     *
     * @param string $ludification
     *
     * @return Mission
     */
    public function setLudification($ludification)
    {
        $this->ludification = $ludification;

        return $this;
    }

    /**
     * Get ludification
     *
     * @return string
     */
    public function getLudification()
    {
        return $this->ludification;
    }

    /**
     * Set authenticite
     *
     * @param string $authenticite
     *
     * @return Mission
     */
    public function setAuthenticite($authenticite)
    {
        $this->authenticite = $authenticite;

        return $this;
    }

    /**
     * Get authenticite
     *
     * @return string
     */
    public function getAuthenticite()
    {
        return $this->authenticite;
    }

    /**
     * Set immersion
     *
     * @param string $immersion
     *
     * @return Mission
     */
    public function setImmersion($immersion)
    {
        $this->immersion = $immersion;

        return $this;
    }

    /**
     * Get immersion
     *
     * @return string
     */
    public function getImmersion()
    {
        return $this->immersion;
    }

    /**
     * Set illustration
     *
     * @param string $illustration
     *
     * @return Mission
     */
    public function setIllustration($illustration)
    {
        $this->illustration = $illustration;

        return $this;
    }

    /**
     * Get illustration
     *
     * @return string
     */
    public function getIllustration()
    {
        return $this->illustration;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartesJen = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set jen
     *
     * @param \Sce\UserBundle\Entity\Jen $jen
     *
     * @return Mission
     */
    public function setJen(\Sce\UserBundle\Entity\Jen $jen = null)
    {
        $this->jen = $jen;

        return $this;
    }

    /**
     * Get jen
     *
     * @return \Sce\UserBundle\Entity\Jen
     */
    public function getJen()
    {
        return $this->jen;
    }

    /**
     * Add cartesJen
     *
     * @param \Sce\UserBundle\Entity\CarteJen $cartesJen
     *
     * @return Mission
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

    /**
     * Add image
     *
     * @param \Sce\UserBundle\Entity\Image $image
     *
     * @return Mission
     */
    public function addImage(\Sce\UserBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Sce\UserBundle\Entity\Image $image
     */
    public function removeImage(\Sce\UserBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
