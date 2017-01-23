<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeRepository")
 */
class Type
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
     * @ORM\Column(name="noms", type="string", length=255)
     */
    private $noms;

    /**
     * @var string
     *
     * @ORM\Column(name="idtype", type="string", length=255)
     */
    private $idtype;


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
     * Set noms
     *
     * @param string $noms
     *
     * @return Type
     */
    public function setNoms($noms)
    {
        $this->noms = $noms;

        return $this;
    }

    /**
     * Get noms
     *
     * @return string
     */
    public function getNoms()
    {
        return $this->noms;
    }

    /**
     * Set idtype
     *
     * @param string $idtype
     *
     * @return Type
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return string
     */
    public function getIdtype()
    {
        return $this->idtype;
    }
}
