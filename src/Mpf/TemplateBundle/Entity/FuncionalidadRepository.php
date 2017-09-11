<?php

namespace Mpf\TemplateBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FuncionalidadRepository extends EntityRepository {

    public function findAllFuncionalidadPadre() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT p FROM MpfTemplateBundle:Funcionalidad p where p.funcionalidadPadre is null and p.isAdmin = false'
                        )
                        ->getResult();
    }

    public function findAllFuncionalidadPadreAdmin() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT p FROM MpfTemplateBundle:Funcionalidad p where p.funcionalidadPadre is null and p.isAdmin = true'
                        )
                        ->getResult();
    }

    public function findAllFuncionalidadHijo($id) {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT p FROM MpfTemplateBundle:Funcionalidad p where p.funcionalidadPadre = :id_padre order by p.funcionalidadOrden asc'
                        )->setParameter('id_padre', $id)
                        ->getResult();
    }

    public function getPadres() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT p.id,p.funcionalidadNombre FROM MpfTemplateBundle:Funcionalidad p where p.funcionalidadPadre is null'
                        )
                        ->getResult();
//        $query = $this->createQueryBuilder('p')
//                ->from('DacAdminBundle:Funcionalidad', 'p')
//                ->where('p.funcionalidadPadre is null');
//
//        return $query;
    }

}
