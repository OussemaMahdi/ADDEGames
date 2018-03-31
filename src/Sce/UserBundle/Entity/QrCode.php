<?php

namespace Sce\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QrCode
 *
 * @ORM\Table(name="qr_code")
 * @ORM\Entity(repositoryClass="Sce\UserBundle\Repository\QrCodeRepository")
 */
class QrCode
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

