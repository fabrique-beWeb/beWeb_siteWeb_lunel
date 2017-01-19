<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promos
 *
 * @ORM\Table(name="promos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromosRepository")
 */
class Promos
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
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="datedebut", type="string", length=255)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="detefin", type="string", length=255)
     */
    private $detefin;

    /**
     * @var string
     *
     * @ORM\Column(name="fkville", type="string", length=255)
     */
    private $fkville;


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
     * Set numero
     *
     * @param string $numero
     *
     * @return Promos
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Promos
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set datedebut
     *
     * @param string $datedebut
     *
     * @return Promos
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return string
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set detefin
     *
     * @param string $detefin
     *
     * @return Promos
     */
    public function setDetefin($detefin)
    {
        $this->detefin = $detefin;

        return $this;
    }

    /**
     * Get detefin
     *
     * @return string
     */
    public function getDetefin()
    {
        return $this->detefin;
    }

    /**
     * Set fkville
     *
     * @param string $fkville
     *
     * @return Promos
     */
    public function setFkville($fkville)
    {
        $this->fkville = $fkville;

        return $this;
    }

    /**
     * Get fkville
     *
     * @return string
     */
    public function getFkville()
    {
        return $this->fkville;
    }
}

