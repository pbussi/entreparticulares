<?php

namespace EP\EPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foto
 *
 * @ORM\Table(name="foto", indexes={@ORM\Index(name="fk_foto_aviso1_idx", columns={"aviso_id"})})
 * @ORM\Entity
 */
class Foto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="archivo", type="string", length=45, nullable=false)
     */
    private $archivo;

    /**
     * @var \Aviso
     *
     * @ORM\ManyToOne(targetEntity="Aviso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aviso_id", referencedColumnName="id")
     * })
     */
    private $aviso;



    /**
     * Set archivo
     *
     * @param string $archivo
     *
     * @return Foto
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo
     *
     * @return string
     */
    public function getArchivo()
    {
        return $this->archivo;
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

    /**
     * Set aviso
     *
     * @param \EP\EPBundle\Entity\Aviso $aviso
     *
     * @return Foto
     */
    public function setAviso(\EP\EPBundle\Entity\Aviso $aviso = null)
    {
        $this->aviso = $aviso;

        return $this;
    }

    /**
     * Get aviso
     *
     * @return \EP\EPBundle\Entity\Aviso
     */
    public function getAviso()
    {
        return $this->aviso;
    }
}
