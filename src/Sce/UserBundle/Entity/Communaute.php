<?php

namespace Sce\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communaute
 *
 * @ORM\Table(name="communaute")
 * @ORM\Entity(repositoryClass="Sce\UserBundle\Repository\CommunauteRepository")
 */
class Communaute
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
     * @ORM\ManyToMany(targetEntity="Sce\UserBundle\Entity\Jen", mappedBy="communautes")
     */
    private $jens;

    public function __toString()
    {
        return $this->intitule;
    }

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
     * @return Communaute
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
     * Constructor
     */
    public function __construct()
    {
        $this->jens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jen
     *
     * @param \Sce\UserBundle\Entity\Jen $jen
     *
     * @return Communaute
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
