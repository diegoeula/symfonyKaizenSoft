<?php

namespace FormularioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use FormularioBundle\Entity\Hecho;
use FormularioBundle\Entity\Causa;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * @Route("/")
 */
class DefaultController extends Controller {

    /**
     * Lista de todos los hechos.
     *
     * @Route("/", name="index_transportedivisas")
     * 
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $fiscalia = $this->get('security.token_storage')->getToken()->getUser()->getFiscalia();
        if ($fiscalia == 1) {
            $hechos = $em->getRepository('FormularioBundle:Causa')->findBy(array('activo' => true));
        } else {
            $hechos = $em->getRepository('FormularioBundle:Causa')->findBy(array('fiscaliaIngreso' => $fiscalia, 'activo' => true));
        }
        return $this->render('FormularioBundle:Causa:index.html.twig', array(
                    'causas' => $hechos,
                    'fiscalia' => $fiscalia,
        ));
    }

    /**
     * @Route("/causa",name="causa")
     */
    public function datosAction(Request $request) {
        $entity = new \FormularioBundle\Entity\Causa();
        $fiscalia = $this->get('security.token_storage')->getToken()->getUser()->getFiscalia();
        $entity->setFiscaliaIngreso($fiscalia);
        $form = $this->createForm('FormularioBundle\Form\Type\CausaType', $entity);
        $form->handleRequest($request);
        $id = '#';
        if ($form->get('save_volver')->isClicked()) {
            return $this->redirectToRoute('index_transportedivisas');
        }
        if ($form->isSubmitted()) {
            $entity->setUsuariocarga($this->get('security.token_storage')->getToken()->getUser()->getUsername());
            $fiscalia = $this->get('security.token_storage')->getToken()->getUser()->getFiscalia();
            $entity->setFiscaliaIngreso($fiscalia);
            $entity->setActivo(true);
            $entity->setFechacarga(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirectToRoute('causaupdate', array('id' => $entity->getId()));
        } else {
            return $this->render('FormularioBundle:Default:causa.html.twig', array('form' => $form->createView(), 'hechos' => [], 'personas' => [], 'view' => 0));
        }
    }

    /**
     * @Route("/causaupdate/{id}",name="causaupdate")
     * @Method({"GET", "POST"})
     */
    public function causaUpdateAction(Request $request, Causa $causa) {
        $em = $this->getDoctrine()->getManager();
        $fiscalia = $this->get('security.token_storage')->getToken()->getUser()->getFiscalia();
        $entity = $em->getRepository('FormularioBundle:Causa')->find($causa->getId());
        $form = $this->createForm('FormularioBundle\Form\Type\CausaType', $entity);
        if ($fiscalia == 1) {
            $masgrande = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id > :id and e.activo=true')
                    ->setParameter('id', $causa->getId())
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
            $maschico = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id < :id and e.activo=true')
                    ->setParameter('id', $causa->getId())
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
        } else {
            $masgrande = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id > :id and e.activo=true and e.fiscaliaIngreso = :fiscalia')
                    ->setParameter('id', $causa->getId())
                    ->setParameter('fiscalia', $fiscalia)
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
            $maschico = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id < :id and e.activo=true and e.fiscaliaIngreso = :fiscalia')
                    ->setParameter('id', $causa->getId())
                    ->setParameter('fiscalia', $fiscalia)
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
        }
        if ($form->get('save_volver')->isClicked()) {
            return $this->redirectToRoute('index_transportedivisas');
        }
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                $entity->setActivo(true);
                $entity->setUsuariomodificacion($this->get('security.token_storage')->getToken()->getUser()->getUsername());
                $entity->setFechamodificacion(new \DateTime('now'));
                $em->persist($entity);
                $em->flush();
                return $this->redirectToRoute('index_transportedivisas');
            }
        }

        return $this->render('FormularioBundle:Default:causa.html.twig', array('form' => $form->createView(), 'id' => $entity->getId(), 'hechos' => $entity->getHechos(), 'personas' => $entity->getPersonas(), 'view' => 0, 'masgrande' => $masgrande["id"], 'maschico' => $maschico["id"]));
    }

    /**
     * @Route("/causadelete/{id}",name="causadelete")
     * @Method({"GET", "POST"})
     */
    public function causaDeleteAction(Causa $causa) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FormularioBundle:Causa')->find($causa->getId());
        $entity->setUsuariomodificacion($this->get('security.token_storage')->getToken()->getUser()->getUsername());
        $entity->setFechamodificacion(new \DateTime('now'));
        $entity->setActivo(false);
        $em->persist($entity);
        $em->flush();
        return $this->redirectToRoute('index_transportedivisas');
    }

    /**
     * @Route("/causaview/{id}",name="causaview")
     * @Method({"GET", "POST"})
     */
    public function causaviewAction(Request $request, Causa $causa) {
        $em = $this->getDoctrine()->getManager();
        $fiscalia = $this->get('security.token_storage')->getToken()->getUser()->getFiscalia();
        $entity = $em->getRepository('FormularioBundle:Causa')->find($causa->getId());
        $form = $this->createForm('FormularioBundle\Form\Type\CausaType', $entity);
        if ($fiscalia == 1) {
            $masgrande = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id > :id and e.activo=true')
                    ->setParameter('id', $causa->getId())
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
            $maschico = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id < :id and e.activo=true')
                    ->setParameter('id', $causa->getId())
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
        } else {
            $masgrande = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id > :id and e.activo=true and e.fiscaliaIngreso = :fiscalia')
                    ->setParameter('id', $causa->getId())
                    ->setParameter('fiscalia', $fiscalia)
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
            $maschico = $em->createQueryBuilder()
                    ->select('e.id')
                    ->from('FormularioBundle:Causa', 'e')
                    ->where('e.id < :id and e.activo=true and e.fiscaliaIngreso = :fiscalia')
                    ->setParameter('id', $causa->getId())
                    ->setParameter('fiscalia', $fiscalia)
                    ->orderBy('e.id', 'ASC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
        }
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                if ($form->get('save_volver')->isClicked()) {
                    return $this->redirectToRoute('index_transportedivisas');
                }
            }
        }
        return $this->render('FormularioBundle:Default:causa.html.twig', array('form' => $form->createView(), 'id' => $entity->getId(), 'hechos' => $entity->getHechos(), 'view' => 1, 'fiscalnet' => $entity->getFiscalnet()));
    }

    /**
     * @Route("/agregarhecho/{causa}/{hecho}",name="agregarhecho")
     * @Method({"GET", "POST"})
     */
    public function agregarHechoAction(Request $request, Causa $causa, Hecho $hecho = null) {
        $em = $this->getDoctrine()->getManager();
        $entityCausa = $em->getRepository('FormularioBundle:Causa')->find($causa->getId());
        if ($hecho != null) {
            $entity = $em->getRepository('FormularioBundle:Hecho')->find($hecho->getId());
        } else {
            $entity = new \FormularioBundle\Entity\Hecho();
        }
        $form = $this->createForm('FormularioBundle\Form\Type\HechoType', $entity);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                if ($form->get('save_volver')->isClicked()) {
                    return $this->redirectToRoute('causaupdate', array('id' => $entityCausa->getId()));
                }
                $em->persist($entity);
                $em->flush();
                if ($hecho == null) {
                    $entityCausa->addHecho($entity);
                    $em->persist($entityCausa);
                    $em->flush();
                }
                if ($form->get('save_local')->isClicked()) {
                    return $this->redirectToRoute('agregarhecho', array('causa' => $entityCausa->getId(), 'hecho' => $entity->getId()));
                } else {
                    return $this->redirectToRoute('causaupdate', array('id' => $entityCausa->getId()));
                } 
            }   
        }
        return $this->render('FormularioBundle:Default:hecho.html.twig', array('form' => $form->createView(),
//                    'persona' => $entity->getPersonas(),
//                    'lugar' => $entity->getLugar(),
//                    'droga' => $entity->getDroga(),
//                    'elemento' => $entity->getElementos(),
//                    'intermedia' => $entity->getIntermedia(),
                    'view' => 0,
        ));
    }

    /**
     * @Route("/verhecho/{causa}/{hecho}",name="verhecho")
     * @Method({"GET", "POST"})
     */
    public function verHechoAction(Request $request, Causa $causa, Hecho $hecho) {
        $em = $this->getDoctrine()->getManager();
        $entityCausa = $em->getRepository('FormularioBundle:Causa')->find($causa->getId());

        $entity = $em->getRepository('FormularioBundle:Hecho')->find($hecho->getId());

        $form = $this->createForm('FormularioBundle\Form\Type\HechoType', $entity);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                if ($form->get('save_volver')->isClicked()) {
                    return $this->redirectToRoute('causaupdate', array('id' => $entityCausa->getId()));
                }
            }
        }
        return $this->render('FormularioBundle:Default:hecho.html.twig', array('form' => $form->createView(),
//                    'persona' => $entity->getPersonas(),
//                    'lugar' => $entity->getLugar(),
//                    'droga' => $entity->getDroga(),
//                    'elemento' => $entity->getElementos(),
//                    'intermedia' => $entity->getIntermedia(),
                    'view' => 1,
        ));
    }

    /**
     * @Route("/safec",name="safec")
     * @Method({"GET", "POST"})
     */
    public function buscadorAction(Request $request) {
        $defaultData = array('dac' => false,);
        $form = $this->createForm('FormularioBundle\Form\Type\BuscadorType', $defaultData);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted()) {

                $postData['data'] = $request->request->get('buscador');
                $postData['data']["fiscalia"] = isset($postData['data']["fiscalia"]) ? $postData['data']["fiscalia"] : null;
                $postData['data']["areaanalisis"] = (isset($postData['data']["areaanalisis"]) && ($postData['data']["areaanalisis"] != "")) ? $postData['data']["areaanalisis"] : null;
                $postData['data']["modoinicio"] = (isset($postData['data']["modoinicio"]) && ($postData['data']["modoinicio"] != "")) ? $postData['data']["modoinicio"] : null;
                $postData['data']["fuerzaSeguridad"] = isset($postData['data']["fuerzaSeguridad"]) ? $postData['data']["fuerzaSeguridad"] : null;
                $postData['data']["fechad"] = (isset($postData['data']["fechad"]) && ($postData['data']["fechad"] != false)) ? \DateTime::createFromFormat('d/m/Y H:i', $postData['data']["fechad"]) : null;
                $postData['data']["fechah"] = (isset($postData['data']["fechah"]) && ($postData['data']["fechah"] != false)) ? \DateTime::createFromFormat('d/m/Y H:i', $postData['data']["fechah"]) : null;
                $postData['data']["direccion"] = (isset($postData['data']["direccion"]) && ($postData['data']["direccion"] != "")) ? $postData['data']["direccion"] : null;
                $postData['data']["tipo"] = isset($postData['data']["tipo"]) ? $postData['data']["tipo"] : null;
                $em = $this->getDoctrine()->getManager();
                $fiscalia = $this->get('security.token_storage')->getToken()->getUser()->getFiscalia();
                if ($fiscalia == 1) {
                    return $this->render('FormularioBundle:Causa:graficos.html.twig', array(
                                'fiscalia' => $fiscalia,
                                'data' => $postData['data'],
                    ));
                } else {
                    return $this->redirectToRoute('index_transportedivisas');
                }
            }
        }
        return $this->render('FormularioBundle:Causa:buscador.html.twig', array(
                    'form' => $form->createView(), 'titulo' => 'Buscador de Información',
                    'data' => array(),
        ));
    }

    /**
     * Lista de todos los hechos.
     *
     * @Route("/exportar", name="exportar")
     * 
     */
    public function exportarAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $fiscalia = $this->get('security.token_storage')->getToken()->getUser()->getFiscalia();
        if ($fiscalia == 1) {
            return $this->render('FormularioBundle:Causa:exportar.html.twig', array());
        }
        return $this->redirectToRoute('index_transportedivisas');
    }

}
