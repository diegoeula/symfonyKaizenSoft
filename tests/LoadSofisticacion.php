<?php

namespace AccessBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadSofisticacion extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $datos = ['A la vista','Oculta en el vehículo','Oculta en el individuo (ropa o ingesta)','Camuflada en mercadería legal o equipaje'];
        foreach ($datos as $dato) {
            $dato_aux = new \SantiagoBundle\Entity\Sofisticacion();
            $dato_aux->setDescripcion($dato);
            $manager->persist($dato_aux);
        }

        $manager->flush();
    }

    public function getOrder() {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }

}
