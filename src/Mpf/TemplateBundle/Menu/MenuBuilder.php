<?php

namespace Mpf\TemplateBundle\Menu;

use Knp\Menu\FactoryInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

//
//class MenuBuilder {
//
//    private $factory;
//
//    /**
//     * @param FactoryInterface $factory
//     *
//     * Add any other dependency you need
//     */
//    public function __construct(FactoryInterface $factory, EntityManager $em, TokenStorageInterface $context) {
//        $this->factory = $factory;
//        $this->em = $em;
//        $this->context = $context;
//    }
//
//    public function createMainMenu(array $options) {
//        $menu = $this->factory->createItem('root');
//
//        $menu->setChildrenAttribute('class', 'nav top-menu');
//        $menu->addChild('downloads')
//                ->setAttribute('dropdown', 'true')
//                ->setAttribute('icon', ' fa fa-download')
//                ->setAttribute('span', 'badge bg-theme')
//                ->setAttribute('id', 'list-distrito');
//        $menu->addChild('mail')
//                ->setAttribute('dropdown', 'true')
//                ->setAttribute('icon', 'fa fa-envelope-o')
//                ->setAttribute('span', 'badge bg-theme')
//                ->setAttribute('uri', 'mailto:dac@mpf.gov.ar?Subject=Consulta');
//        return $menu;
//    }
//
//    public function createSidebarMenu(array $options) {
//        $menu = $this->factory->createItem('root');
//        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
//        $menu->setChildrenAttribute('id', 'menuusuario');
//        //$is_admin = 1;
//        $user = $this->em->getRepository('MpfTemplateBundle:User')->getProfile($this->context->getToken()->getUser()->getUsername());
//        # You probably want to show user specific information such as the username here. That's possible! Use any of the below methods to do this.
//
//        $menu->addChild('User', array('label' => 'Hola ' . $user[0]->getUsername()))
//                //  $menu->addChild('User', array('label' => 'Hola ' . $_SERVER['MELLON_cn']))
////        $menu->addChild('User', array('label' => 'Hola Usuario'))
//                ->setAttribute('dropdown', true)
//                ->setAttribute('icon', 'icon-user')
//                ->setAttribute('class', 'active');
////        $menu['User']->addChild('Edición de Perfil de Usuario', array('route' => 'sma_homepage'))
////                ->setAttribute('icon', 'icon-edit');
//        //}
////        if ($this->container->get('security.context')->isGranted(array('ROLE_ADMIN'))) {
////            $menu['User']->addChild('Administración', array('route' => 'sma_admin'))
////                    ->setAttribute('icon', 'icon-edit');
////        }
////        $menu['User']->addChild('Logout', array('route' => 'saml_logout'))
////                ->setAttribute('icon', 'icon-edit');
//        return $menu;
//    }
//
//}



class MenuBuilder {

    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory, EntityManager $em, TokenStorageInterface $context) {
        $this->factory = $factory;
        $this->em = $em;
        $this->context = $context;
    }

//    public function createMainMenu(array $options) {
//        $menu = $this->factory->createItem('root');
//
//        $menu->setChildrenAttribute('class', 'nav top-menu');
//        $menu->addChild('downloads')
//                ->setAttribute('dropdown', 'true')
//                ->setAttribute('icon', ' fa fa-download')
//                ->setAttribute('span', 'badge bg-theme')
//                ->setAttribute('id', 'list-distrito');
//        $menu->addChild('mail')
//                ->setAttribute('dropdown', 'true')
//                ->setAttribute('icon', 'fa fa-envelope-o')
//                ->setAttribute('span', 'badge bg-theme')
//                ->setAttribute('uri', 'mailto:dac@mpf.gov.ar?Subject=Consulta');
//        return $menu;
//    }
//
//    public function createSidebarMenu(array $options) {
//        $menu = $this->factory->createItem('sidebar');
//        $user = $this->em->getRepository('DacTemplateBundle:User')->getProfile($this->context->getToken()->getUser()->getUsername());
//
////        if (isset($options['include_homepage']) && $options['include_homepage']) {
////            $menu->addChild('Home', array('route' => 'homepage'));
////        }
//        $menu->setChildrenAttribute('class', 'sidebar-menu');
//        $menu->setChildrenAttribute('id', 'nav-accordion');
//        $menu->addChild('Profile', array('route' => 'user_edit', 'routeParameters' => array('id' => $user[0]->getId())))
//                ->setAttribute('name', $user[0]->getUsername())
//                ->setAttribute('image', $user[0]->getWebPath())
//                ->setAttribute('profile', 'true');
//        foreach ($this->em->getRepository('DacTemplateBundle:Funcionalidad')->findAllFuncionalidadPadre() as $padre) {
//            $hijos = $this->em->getRepository('DacTemplateBundle:Funcionalidad')->findAllFuncionalidadHijo($padre->getId());
//            if (sizeof($hijos) == 0) {
//                $menu->addChild($padre->getFuncionalidadNombre(), array('route' => $padre->getFuncionalidadRoute()))
//                        ->setAttribute('class', 'mt')
//                        ->setAttribute('icon', $padre->getIcon());
//            } else {
//                $menu->addChild($padre->getFuncionalidadNombre())
//                        ->setAttribute('dropdown', 'true')
//                        ->setAttribute('class', 'sub-menu')
//                        ->setAttribute('icon', $padre->getIcon());
//                foreach ($hijos as $hijo) {
//                    $menu[$padre->getFuncionalidadNombre()]
//                            ->setChildrenAttribute('class', 'sub')
//                            ->addChild($hijo->getFuncionalidadNombre(), array('route' => $hijo->getFuncionalidadRoute()))
//                            ->setAttribute('class', '');
//                }
//            }
//        }
//        if ($user[0]->getIsAdmin()) {
//            foreach ($this->em->getRepository('DacTemplateBundle:Funcionalidad')->findAllFuncionalidadPadreAdmin() as $padre) {
//                $hijos = $this->em->getRepository('DacTemplateBundle:Funcionalidad')->findAllFuncionalidadHijo($padre->getId());
//                if (sizeof($hijos) == 0) {
//                    $menu->addChild($padre->getFuncionalidadNombre(), array('route' => $padre->getFuncionalidadRoute()))
//                            ->setAttribute('class', 'mt')
//                            ->setAttribute('icon', $padre->getIcon());
//                } else {
//                    $menu->addChild($padre->getFuncionalidadNombre())
//                            ->setAttribute('dropdown', 'true')
//                            ->setAttribute('class', 'sub-menu')
//                            ->setAttribute('icon', $padre->getIcon());
//                    foreach ($hijos as $hijo) {
//                        $menu[$padre->getFuncionalidadNombre()]
//                                ->setChildrenAttribute('class', 'sub')
//                                ->addChild($hijo->getFuncionalidadNombre(), array('route' => $hijo->getFuncionalidadRoute()))
//                                ->setAttribute('class', '');
//                    }
//                }
//            }
//        }
//        return $menu;
//    }



    public function createMenu(array $options) {

//        $menu = $this->factory->createItem('root');
//         $menu->setChildrenAttribute('class', 'nav navbar-nav active');
//
//        foreach ($this->em->getRepository('DacTemplateBundle:Funcionalidad')->findAllFuncionalidadPadre() as $padre) {
//            $hijos = $this->em->getRepository('DacTemplateBundle:Funcionalidad')->findAllFuncionalidadHijo($padre->getId());
//            if (sizeof($hijos) == 0) {
//                $menu->addChild($padre->getFuncionalidadNombre(), array('route' => $padre->getFuncionalidadRoute()))
//                        ->setAttribute('dropdown', true)
//                    ->setAttribute('icon', 'icon-list')
//                    ->setAttribute('class', 'active');
//            } else {
//                $menu->addChild($padre->getFuncionalidadNombre())
//                        ->setAttribute('dropdown', true)
//                        ->setAttribute('class', 'active')
////                        ->setAttribute('class', 'sub-menu')
//                        ->setAttribute('icon', 'icon-list');
//                foreach ($hijos as $hijo) {
//                    $menu[$padre->getFuncionalidadNombre()]
////                            ->setChildrenAttribute('class', 'sub')
//                            
//                            ->addChild($hijo->getFuncionalidadNombre(), array('route' => $hijo->getFuncionalidadRoute()))
//                            ->setAttribute('icon','icon-edit');
//                }
//            }
//        }
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav active');
//        $em = $this->container->get('doctrine')->getEntityManager();
        foreach ($this->em->getRepository('MpfTemplateBundle:Funcionalidad')->findAllFuncionalidadPadre() as $padre) {
            $menu->addChild($padre->getFuncionalidadNombre(), array('route' => $padre->getFuncionalidadRoute()))
                    ->setAttribute('dropdown', true)
                    ->setAttribute('icon', 'icon-list')
                    ->setAttribute('class', 'active');
            foreach ($this->em->getRepository('MpfTemplateBundle:Funcionalidad')->findAllFuncionalidadHijo($padre->getId()) as $hijo) {
                $menu[$padre->getFuncionalidadNombre()]->addChild($hijo->getFuncionalidadNombre(), array('route' => $hijo->getFuncionalidadRoute()))
                        ->setAttribute('icon', 'icon-edit');
            }
        }

        return $menu;
    }

    public function createUserMenu(array $options) {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
        $menu->setChildrenAttribute('id', 'menuusuario');
        //$is_admin = 1;
        $user = $this->em->getRepository('MpfTemplateBundle:User')->getProfile($this->context->getToken()->getUser()->getUsername());
        # You probably want to show user specific information such as the username here. That's possible! Use any of the below methods to do this.

        $menu->addChild('User', array('label' => 'Hola ' . $user[0]->getUsername()))
                //  $menu->addChild('User', array('label' => 'Hola ' . $_SERVER['MELLON_cn']))
//        $menu->addChild('User', array('label' => 'Hola Usuario'))
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-user')
                ->setAttribute('class', 'active');
        $menu['User']->addChild('Edición de Perfil de Usuario', array('route' => 'sma_homepage'))
                ->setAttribute('icon', 'icon-edit');
        //}
//        if ($this->container->get('security.context')->isGranted(array('ROLE_ADMIN'))) {
//            $menu['User']->addChild('Administración', array('route' => 'sma_admin'))
//                    ->setAttribute('icon', 'icon-edit');
//        }
//        $menu['User']->addChild('Logout', array('route' => 'saml_logout'))
//                ->setAttribute('icon', 'icon-edit');
        return $menu;
    }

}
