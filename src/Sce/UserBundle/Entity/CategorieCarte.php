<?php

namespace Sce\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieCarte
 *
 * @ORM\Table(name="categorie_carte")
 * @ORM\Entity(repositoryClass="Sce\UserBundle\Repository\CategorieCarteRepository")
 */
class CategorieCarte
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\CarteJen", mappedBy="categorie")
     */
    private $carteJen;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return CategorieCarte
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carteJen = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carteJen
     *
     * @param \Sce\UserBundle\Entity\CarteJen $carteJen
     *
     * @return CategorieCarte
     */
    public function addCarteJen(\Sce\UserBundle\Entity\CarteJen $carteJen)
    {
        $this->carteJen[] = $carteJen;

        return $this;
    }

    /**
     * Remove carteJen
     *
     * @param \Sce\UserBundle\Entity\CarteJen $carteJen
     */
    public function removeCarteJen(\Sce\UserBundle\Entity\CarteJen $carteJen)
    {
        $this->carteJen->removeElement($carteJen);
    }

    /**
     * Get carteJen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarteJen()
    {
        return $this->carteJen;
    }
}
