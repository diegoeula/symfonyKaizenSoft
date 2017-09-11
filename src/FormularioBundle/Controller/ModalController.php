<?php

namespace FormularioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use FormularioBundle\Entity\Persona;
use FormularioBundle\Entity\Relacion;

/**
 * Modales controller.
 *
 * @Route("/modalTransporteDivisas", options={"expose"=true})
 */
class ModalController extends Controller {

    /**
     * @Route("/newPersona", name="newPersona")
     */
    public function newPersonaAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entidad = new Persona();

        $entidadForm = $this->createForm(
                'FormularioBundle\Form\PersonaForm', $entidad, array('action' => $this->generateUrl('newPersona'),
            'method' => 'POST')
        );

        if ($request->isMethod('POST')) {
            $entidadForm->handleRequest($request);

            if ($entidadForm->isSubmitted()) {
                $entidadData = $entidadForm->getData();

                $em->persist($entidadData);
                $em->flush();

                $response = new Response(json_encode([
                            'success' => true,
                            'id' => $entidadData->getId(),
//                            'name' => $entidadData->getDescripcion()
                ]));
                $response->headers->set('Content-Type', 'application/json');

                return $response;
            }
        }
        return $this->render("FormularioBundle:Modal:modal_persona.html.twig", array(
                    'form' => $entidadForm->createView()
        ));
    }

    /**
     * @Route("/editPersona/{id}", name="editPersona")
     */
    public function editPersonaAction(Request $request, Persona $entity) {

        $personaform = $this->createForm(
                'FormularioBundle\Form\PersonaForm', $entity
        );

        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $personaform->handleRequest($request);

            if ($personaform->isSubmitted()) {
                $personaData = $personaform->getData();

                $em->persist($personaData);
                $em->flush();

                $response = new Response(json_encode([
                            'success' => true,
                            'id' => $personaData->getId(),
                ]));
                $response->headers->set('Content-Type', 'application/json');

                return $response;
            }
        }
        $datos = array('id' => $entity->getId(),
            'personafisica' => $entity->getPersonafisica(),
            'apellido' => $entity->getApellido(),
            'nombre' => $entity->getNombre(),
            'apodo' => $entity->getApodo(),
            'nrodocumento' => $entity->getNrodocumento(),
            'edad' => $entity->getEdad(),
            'redessociales' => $entity->getRedessociales(),
            'observaciones' => $entity->getObservaciones(),
            'direccion' => $entity->getDireccion(),
            'latitud' => $entity->getLatitud(),
            'longitud' => $entity->getLongitud(),
            'piso' => $entity->getPiso(),
            'depto' => $entity->getDepto(),
            'referencia' => $entity->getReferencia(),
            'manzana' => $entity->getManzana(),
            'casa' => $entity->getCasa(),
            'km' => $entity->getKm(),
            'torre' => $entity->getTorre(),
            'telefono' => $entity->getTelefono(),
            'funcion' => $entity->getFuncion(),
            'esfuncionario' => $entity->getEsfuncionario(),
            'esfuncionariodescripcion' => $entity->getEsfuncionariodescripcion(),
            'email' => $entity->getEmail(),
            'departamento' => $entity->getDepartamento(),
            'provincia' => $entity->getProvincia(),
            'razonsocial' => $entity->getRazonsocial(),
        );

        if (null !== $entity->getNacionalidad()) {
            $datos['nacionalidad'] = $entity->getNacionalidad()->getId();
        }
        if (null !== $entity->getTipodocumento()) {
            $datos['tipodocumento'] = $entity->getTipodocumento()->getId();
        }
        if (null !== $entity->getTiporazonsocial()) {
            $datos['tiporazonsocial'] = $entity->getTiporazonsocial()->getId();
        }

        if (null !== $entity->getGenero()) {
            $datos['genero'] = $entity->getGenero()->getId();
        }
        if (null !== $entity->getFechanacimiento()) {
            $datos['fechanacimiento'] = $entity->getFechanacimiento()->format('d/m/Y H:i');
        } else {
            $datos['fechanacimiento'] = null;
        }

        $response = new Response(json_encode([
                    'success' => true,
                    'id' => $entity->getId(),
                    'datos' => $datos
        ]));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/newRelacion", name="newRelacion")
     */
    public function newRelacionAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entidad = new Relacion();

        $entidadForm = $this->createForm(
                'FormularioBundle\Form\RelacionForm', $entidad, array('action' => $this->generateUrl('newRelacion'),
            'method' => 'POST')
        );

        if ($request->isMethod('POST')) {
            $entidadForm->handleRequest($request);

            if ($entidadForm->isSubmitted()) {
                $entidadData = $entidadForm->getData();

                $em->persist($entidadData);
                $em->flush();

                $response = new Response(json_encode([
                            'success' => true,
                            'id' => $entidadData->getId(),
//                            'name' => $entidadData->getDescripcion()
                ]));
                $response->headers->set('Content-Type', 'application/json');

                return $response;
            }
        }
        return $this->render("FormularioBundle:Modal:modal_relacion.html.twig", array(
                    'form' => $entidadForm->createView()
        ));
    }

    /**
     * @Route("/editRelacion/{id}", name="editRelacion")
     */
    public function editRelacionAction(Request $request, Relacion $entity) {

        $entidadForm = $this->createForm(
                'FormularioBundle\Form\RelacionForm', $entity
        );

        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $entidadForm->handleRequest($request);

            if ($entidadForm->isSubmitted()) {
                $entidadData = $$entidadForm->getData();

                $em->persist($entidadData);
                $em->flush();

                $response = new Response(json_encode([
                            'success' => true,
                            'id' => $entidadData->getId(),
                ]));
                $response->headers->set('Content-Type', 'application/json');

                return $response;
            }
        }
        $datos = array('id' => $entity->getId(),
            'observacion' => $entity->getObservacion(),
        );

        if (null !== $entity->getPersonadestino()) {
            $datos['personadestino'] = $entity->getPersonadestino()->getId();
        }
        if (null !== $entity->getPersonaorigen()) {
            $datos['personaorigen'] = $entity->getPersonaorigen()->getId();
        }
        if (null !== $entity->getTiporelacion()) {
            $datos['tiporelacion'] = $entity->getTiporelacion()->getId();
        }
        if (null !== $entity->getTiporelacionversion()) {
            $datos['tiporelacionversion'] = $entity->getTiporelacionversion()->getId();
        }
        $response = new Response(json_encode([
                    'success' => true,
                    'id' => $entity->getId(),
                    'datos' => $datos
        ]));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/newEstado", name="newEstado")
     */
    public function newEstadoAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entidad = new \FormularioBundle\Entity\EstadoEstupefaciente();

        $entidadForm = $this->createForm(
                'FormularioBundle\Form\EstadoEstupefacienteForm', $entidad, array('action' => $this->generateUrl('newEstado'),
            'method' => 'POST')
        );

        if ($request->isMethod('POST')) {
            $entidadForm->handleRequest($request);

            if ($entidadForm->isValid()) {
                $entidadData = $entidadForm->getData();

                $em->persist($entidadData);
                $em->flush();

                $response = new Response(json_encode([
                            'success' => true,
                            'id' => $entidadData->getId(),
                            'name' => $entidadData->getDescripcion()
                ]));
                $response->headers->set('Content-Type', 'application/json');

                return $response;
            }
        }

        return $this->render("FormularioBundle:Modal:modal_new.html.twig", array(
                    'form' => $entidadForm->createView()
        ));
    }

}
