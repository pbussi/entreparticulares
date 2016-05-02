<?php

namespace EP\EPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AvisosCategoria
 *
 * @ORM\Table(name="avisos_categoria", indexes={@ORM\Index(name="fk_avisos_categoria_aviso_idx", columns={"aviso_id"}), @ORM\Index(name="fk_avisos_categoria_categorias1_idx", columns={"categoria_id"})})
 * @ORM\Entity
 */
class AvisosCategoria
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
     * @var \Aviso
     *
     * @ORM\ManyToOne(targetEntity="Aviso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aviso_id", referencedColumnName="id")
     * })
     */
    private $aviso;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;



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
     * @return AvisosCategoria
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

    /**
     * Set categoria
     *
     * @param \EP\EPBundle\Entity\Categoria $categoria
     *
     * @return AvisosCategoria
     */
    public function setCategoria(\EP\EPBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \EP\EPBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}
