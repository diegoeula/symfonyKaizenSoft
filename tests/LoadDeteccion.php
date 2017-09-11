<?php

namespace AccessBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadDeteccion extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $datos = ['Prevención (flagrancia) en la vía pública','Prevención (flagrancia) en control en ruta','En el marco de una investigación','A través de una denuncia'];
        foreach ($datos as $dato) {
            $dato_aux = new \SantiagoBundle\Entity\Deteccion();
            $dato_aux->setDescripcion($dato);
            $manager->persist($dato_aux);
        }

        $manager->flush();
    }

    public function getOrder() {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }

}
