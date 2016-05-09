<?php

// src/EPBundle/DemoBundle/Twig/Extension/ColorExtension.php

namespace EP\EPBundle\Twig\Extension;

/**
 * Recupera nomencladores
 */
class NomencladorExtension extends \Twig_Extension {

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct($em) {
        $this->em = $em;
    }

    public function getName() {
        return 'nomenclador_extension';
    }

    public function getFunctions() {
        return array(
            'get_tipos' => new \Twig_Function_Method($this, 'getTipos'),
            'get_categorias' => new \Twig_Function_Method($this, 'getCategorias'),
        );
    }

    public function getTipos() {
        return $this->em->getRepository('EPBundle:Tipo')->findAll();
    }

    public function getCategorias($id) {
        return $this->em->getRepository('EPBundle:Categoria')->findBy(array('tipo' => $id));

    }

}
