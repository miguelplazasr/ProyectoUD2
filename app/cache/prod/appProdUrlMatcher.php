<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // seguridad_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'seguridad_homepage')), array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/ud')) {
            if (0 === strpos($pathinfo, '/ud/seguridad/invitados')) {
                // ud_seguridad_invitados
                if ($pathinfo === '/ud/seguridad/invitados') {
                    return array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::indexAction',  '_route' => 'ud_seguridad_invitados',);
                }

                // ud_seguridad_invitados_show
                if (0 === strpos($pathinfo, '/ud/seguridad/invitados/show') && preg_match('#^/ud/seguridad/invitados/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_seguridad_invitados_show')), array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::showAction',));
                }

                // ud_seguridad_invitados_new
                if ($pathinfo === '/ud/seguridad/invitados/new') {
                    return array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::newAction',  '_route' => 'ud_seguridad_invitados_new',);
                }

                // ud_seguridad_invitados_create
                if ($pathinfo === '/ud/seguridad/invitados/create') {
                    return array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::createAction',  '_route' => 'ud_seguridad_invitados_create',);
                }

                // ud_seguridad_invitados_edit
                if (0 === strpos($pathinfo, '/ud/seguridad/invitados/edit') && preg_match('#^/ud/seguridad/invitados/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_seguridad_invitados_edit')), array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::editAction',));
                }

                // ud_seguridad_invitados_update
                if (0 === strpos($pathinfo, '/ud/seguridad/invitados/update') && preg_match('#^/ud/seguridad/invitados/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_seguridad_invitados_update')), array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::updateAction',));
                }

                // ud_seguridad_invitados_delete
                if (0 === strpos($pathinfo, '/ud/seguridad/invitados/delete') && preg_match('#^/ud/seguridad/invitados/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_seguridad_invitados_delete')), array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::deleteAction',));
                }

                // ud_seguridad_invitados_find
                if ($pathinfo === '/ud/seguridad/invitados/find') {
                    return array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::findAction',  '_route' => 'ud_seguridad_invitados_find',);
                }

            }

            // carnet_homepage
            if ($pathinfo === '/ud/carnetizacion') {
                return array (  '_controller' => 'Proyecto\\CarnetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'carnet_homepage',);
            }

        }

        // salones_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'salones_homepage')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/ud/salones')) {
            if (0 === strpos($pathinfo, '/ud/salones/salon')) {
                // ud_salones_salon
                if ($pathinfo === '/ud/salones/salon') {
                    return array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\SalonesController::indexAction',  '_route' => 'ud_salones_salon',);
                }

                // ud_salones_salon_show
                if (0 === strpos($pathinfo, '/ud/salones/salon/show') && preg_match('#^/ud/salones/salon/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_salon_show')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\SalonesController::showAction',));
                }

                // ud_salones_salon_new
                if ($pathinfo === '/ud/salones/salon/new') {
                    return array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\SalonesController::newAction',  '_route' => 'ud_salones_salon_new',);
                }

                // ud_salones_salon_create
                if ($pathinfo === '/ud/salones/salon/create') {
                    return array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\SalonesController::createAction',  '_route' => 'ud_salones_salon_create',);
                }

                // ud_salones_salon_edit
                if (0 === strpos($pathinfo, '/ud/salones/salon/edit') && preg_match('#^/ud/salones/salon/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_salon_edit')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\SalonesController::editAction',));
                }

                // ud_salones_salon_update
                if (0 === strpos($pathinfo, '/ud/salones/salon/update') && preg_match('#^/ud/salones/salon/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_salon_update')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\SalonesController::updateAction',));
                }

                // ud_salones_salon_delete
                if (0 === strpos($pathinfo, '/ud/salones/salon/delete') && preg_match('#^/ud/salones/salon/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_salon_delete')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\SalonesController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/salones/prestamo')) {
                // ud_salones_prestamo
                if ($pathinfo === '/ud/salones/prestamo') {
                    return array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::indexAction',  '_route' => 'ud_salones_prestamo',);
                }

                // ud_salones_prestamo_show
                if (0 === strpos($pathinfo, '/ud/salones/prestamo/show') && preg_match('#^/ud/salones/prestamo/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_prestamo_show')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::showAction',));
                }

                // ud_salones_prestamo_new
                if ($pathinfo === '/ud/salones/prestamo/new') {
                    return array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::newAction',  '_route' => 'ud_salones_prestamo_new',);
                }

                // ud_salones_prestamo_create
                if ($pathinfo === '/ud/salones/prestamo/create') {
                    return array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::createAction',  '_route' => 'ud_salones_prestamo_create',);
                }

                // ud_salones_prestamo_edit
                if (0 === strpos($pathinfo, '/ud/salones/prestamo/edit') && preg_match('#^/ud/salones/prestamo/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_prestamo_edit')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::editAction',));
                }

                // ud_salones_prestamo_update
                if (0 === strpos($pathinfo, '/ud/salones/prestamo/update') && preg_match('#^/ud/salones/prestamo/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_prestamo_update')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::updateAction',));
                }

                // ud_salones_prestamo_delete
                if (0 === strpos($pathinfo, '/ud/salones/prestamo/delete') && preg_match('#^/ud/salones/prestamo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_prestamo_delete')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::deleteAction',));
                }

            }

            // ud_salones_prestamo_calendario
            if ($pathinfo === '/ud/salones/calendario') {
                return array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::calendarioAction',  '_route' => 'ud_salones_prestamo_calendario',);
            }

        }

        // enfermeria_homepage
        if ($pathinfo === '/enfermeria') {
            return array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\DefaultController::pruebaAction',  '_route' => 'enfermeria_homepage',);
        }

        if (0 === strpos($pathinfo, '/ud/enfermeria')) {
            if (0 === strpos($pathinfo, '/ud/enfermeria/ssocial')) {
                // ud_enfermeria_ssocial
                if ($pathinfo === '/ud/enfermeria/ssocial') {
                    return array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\SeguridadSocialController::indexAction',  '_route' => 'ud_enfermeria_ssocial',);
                }

                // ud_enfermeria_ssocial_show
                if (0 === strpos($pathinfo, '/ud/enfermeria/ssocial/show') && preg_match('#^/ud/enfermeria/ssocial/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_enfermeria_ssocial_show')), array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\SeguridadSocialController::showAction',));
                }

                // ud_enfermeria_ssocial_new
                if ($pathinfo === '/ud/enfermeria/ssocial/new') {
                    return array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\SeguridadSocialController::newAction',  '_route' => 'ud_enfermeria_ssocial_new',);
                }

                // ud_enfermeria_ssocial_create
                if ($pathinfo === '/ud/enfermeria/ssocial/create') {
                    return array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\SeguridadSocialController::createAction',  '_route' => 'ud_enfermeria_ssocial_create',);
                }

                // ud_enfermeria_ssocial_edit
                if (0 === strpos($pathinfo, '/ud/enfermeria/ssocial/edit') && preg_match('#^/ud/enfermeria/ssocial/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_enfermeria_ssocial_edit')), array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\SeguridadSocialController::editAction',));
                }

                // ud_enfermeria_ssocial_update
                if (0 === strpos($pathinfo, '/ud/enfermeria/ssocial/update') && preg_match('#^/ud/enfermeria/ssocial/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_enfermeria_ssocial_update')), array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\SeguridadSocialController::updateAction',));
                }

                // ud_enfermeria_ssocial_delete
                if (0 === strpos($pathinfo, '/ud/enfermeria/ssocial/delete') && preg_match('#^/ud/enfermeria/ssocial/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_enfermeria_ssocial_delete')), array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\SeguridadSocialController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/enfermeria/reporte')) {
                // ud_enfermeria_reporte
                if ($pathinfo === '/ud/enfermeria/reporte') {
                    return array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\ReporteEmergenciaController::indexAction',  '_route' => 'ud_enfermeria_reporte',);
                }

                // ud_enfermeria_reporte_new
                if ($pathinfo === '/ud/enfermeria/reporte/new') {
                    return array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\ReporteEmergenciaController::newAction',  '_route' => 'ud_enfermeria_reporte_new',);
                }

                // ud_enfermeria_reporte_create
                if ($pathinfo === '/ud/enfermeria/reporte/create') {
                    return array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\ReporteEmergenciaController::createAction',  '_route' => 'ud_enfermeria_reporte_create',);
                }

                // ud_enfermeria_reporte_show
                if (0 === strpos($pathinfo, '/ud/enfermeria/reporte/show') && preg_match('#^/ud/enfermeria/reporte/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_enfermeria_reporte_show')), array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\ReporteEmergenciaController::showAction',));
                }

            }

        }

        // activos_homepage
        if (0 === strpos($pathinfo, '/hellok') && preg_match('#^/hellok/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activos_homepage')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/ud/activos')) {
            if (0 === strpos($pathinfo, '/ud/activos/elementos')) {
                // ud_activos_elementos
                if ($pathinfo === '/ud/activos/elementos') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\ElementosActivosController::indexAction',  '_route' => 'ud_activos_elementos',);
                }

                // ud_activos_elementos_show
                if (0 === strpos($pathinfo, '/ud/activos/elementos/show') && preg_match('#^/ud/activos/elementos/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_elementos_show')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\ElementosActivosController::showAction',));
                }

                // ud_activos_elementos_new
                if ($pathinfo === '/ud/activos/elementos/new') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\ElementosActivosController::newAction',  '_route' => 'ud_activos_elementos_new',);
                }

                // ud_activos_elementos_create
                if ($pathinfo === '/ud/activos/elementos/create') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\ElementosActivosController::createAction',  '_route' => 'ud_activos_elementos_create',);
                }

                // ud_activos_elementos_edit
                if (0 === strpos($pathinfo, '/ud/activos/elementos/edit') && preg_match('#^/ud/activos/elementos/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_elementos_edit')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\ElementosActivosController::editAction',));
                }

                if (0 === strpos($pathinfo, '/ud/activos/elementos/update')) {
                    // ud_activos_elementos_update
                    if (preg_match('#^/ud/activos/elementos/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_elementos_update')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\ElementosActivosController::updateAction',));
                    }

                    // ud_activos_elementos_delete
                    if (0 === strpos($pathinfo, '/ud/activos/elementos/updated') && preg_match('#^/ud/activos/elementos/updated/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_elementos_delete')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\ElementosActivosController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ud/activos/stock')) {
                // ud_activos_stock
                if ($pathinfo === '/ud/activos/stock') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\StockActivoController::indexAction',  '_route' => 'ud_activos_stock',);
                }

                // ud_activos_stock_show
                if (0 === strpos($pathinfo, '/ud/activos/stock/show') && preg_match('#^/ud/activos/stock/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_stock_show')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\StockActivoController::showAction',));
                }

                // ud_activos_stock_new
                if ($pathinfo === '/ud/activos/stock/new') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\StockActivoController::newAction',  '_route' => 'ud_activos_stock_new',);
                }

                // ud_activos_stock_create
                if ($pathinfo === '/ud/activos/stock/create') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\StockActivoController::createAction',  '_route' => 'ud_activos_stock_create',);
                }

                // ud_activos_stock_edit
                if (0 === strpos($pathinfo, '/ud/activos/stock/edit') && preg_match('#^/ud/activos/stock/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_stock_edit')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\StockActivoController::editAction',));
                }

                if (0 === strpos($pathinfo, '/ud/activos/stock/update')) {
                    // ud_activos_stock_update
                    if (preg_match('#^/ud/activos/stock/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_stock_update')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\StockActivoController::updateAction',));
                    }

                    // ud_activos_stock_delete
                    if (0 === strpos($pathinfo, '/ud/activos/stock/updated') && preg_match('#^/ud/activos/stock/updated/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_stock_delete')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\StockActivoController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ud/activos/prestamo')) {
                // ud_activos_prestamo
                if ($pathinfo === '/ud/activos/prestamo') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\PrestamoActivoController::indexAction',  '_route' => 'ud_activos_prestamo',);
                }

                // ud_activos_prestamo_show
                if (0 === strpos($pathinfo, '/ud/activos/prestamo/show') && preg_match('#^/ud/activos/prestamo/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_prestamo_show')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\PrestamoActivoController::showAction',));
                }

                // ud_activos_prestamo_new
                if ($pathinfo === '/ud/activos/prestamo/new') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\PrestamoActivoController::newAction',  '_route' => 'ud_activos_prestamo_new',);
                }

                // ud_activos_prestamo_create
                if ($pathinfo === '/ud/activos/prestamo/create') {
                    return array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\PrestamoActivoController::createAction',  '_route' => 'ud_activos_prestamo_create',);
                }

                // ud_activos_prestamo_delete
                if (0 === strpos($pathinfo, '/ud/activos/prestamo/delete') && preg_match('#^/ud/activos/prestamo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_prestamo_delete')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\PrestamoActivoController::deleteAction',));
                }

            }

        }

        // deportes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deportes_homepage')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/ud/deportes')) {
            if (0 === strpos($pathinfo, '/ud/deportes/elementos')) {
                // ud_deportes_elementos
                if ($pathinfo === '/ud/deportes/elementos') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\ElementosDeportesController::indexAction',  '_route' => 'ud_deportes_elementos',);
                }

                // ud_deportes_elementos_show
                if (0 === strpos($pathinfo, '/ud/deportes/elementos/show') && preg_match('#^/ud/deportes/elementos/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_elementos_show')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\ElementosDeportesController::showAction',));
                }

                // ud_deportes_elementos_new
                if ($pathinfo === '/ud/deportes/elementos/new') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\ElementosDeportesController::newAction',  '_route' => 'ud_deportes_elementos_new',);
                }

                // ud_deportes_elementos_create
                if ($pathinfo === '/ud/deportes/elementos/create') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\ElementosDeportesController::createAction',  '_route' => 'ud_deportes_elementos_create',);
                }

                // ud_deportes_elementos_edit
                if (0 === strpos($pathinfo, '/ud/deportes/elementos/edit') && preg_match('#^/ud/deportes/elementos/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_elementos_edit')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\ElementosDeportesController::editAction',));
                }

                // ud_deportes_elementos_update
                if (0 === strpos($pathinfo, '/ud/deportes/elementos/update') && preg_match('#^/ud/deportes/elementos/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_elementos_update')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\ElementosDeportesController::updateAction',));
                }

                // ud_deportes_elementos_delete
                if (0 === strpos($pathinfo, '/ud/deportes/elementos/delete') && preg_match('#^/ud/deportes/elementos/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_elementos_delete')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\ElementosDeportesController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/deportes/inventario')) {
                // ud_deportes_inventario
                if ($pathinfo === '/ud/deportes/inventario') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\InventarioDeportesController::indexAction',  '_route' => 'ud_deportes_inventario',);
                }

                // ud_deportes_inventario_show
                if (0 === strpos($pathinfo, '/ud/deportes/inventario/show') && preg_match('#^/ud/deportes/inventario/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_inventario_show')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\InventarioDeportesController::showAction',));
                }

                // ud_deportes_inventario_new
                if ($pathinfo === '/ud/deportes/inventario/new') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\InventarioDeportesController::newAction',  '_route' => 'ud_deportes_inventario_new',);
                }

                // ud_deportes_inventario_create
                if ($pathinfo === '/ud/deportes/inventario/create') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\InventarioDeportesController::createAction',  '_route' => 'ud_deportes_inventario_create',);
                }

                // ud_deportes_inventario_edit
                if (0 === strpos($pathinfo, '/ud/deportes/inventario/edit') && preg_match('#^/ud/deportes/inventario/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_inventario_edit')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\InventarioDeportesController::editAction',));
                }

                // ud_deportes_inventario_update
                if (0 === strpos($pathinfo, '/ud/deportes/inventario/update') && preg_match('#^/ud/deportes/inventario/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_inventario_update')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\InventarioDeportesController::updateAction',));
                }

                // ud_deportes_inventario_delete
                if (0 === strpos($pathinfo, '/ud/deportes/inventario/delete') && preg_match('#^/ud/deportes/inventario/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_inventario_delete')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\InventarioDeportesController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/deportes/prestamo')) {
                // ud_deportes_prestamo
                if ($pathinfo === '/ud/deportes/prestamo') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\PrestamoDeportesController::indexAction',  '_route' => 'ud_deportes_prestamo',);
                }

                // ud_deportes_prestamo_show
                if (0 === strpos($pathinfo, '/ud/deportes/prestamo/show') && preg_match('#^/ud/deportes/prestamo/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_prestamo_show')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\PrestamoDeportesController::showAction',));
                }

                // ud_deportes_prestamo_new
                if ($pathinfo === '/ud/deportes/prestamo/new') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\PrestamoDeportesController::newAction',  '_route' => 'ud_deportes_prestamo_new',);
                }

                // ud_deportes_prestamo_create
                if ($pathinfo === '/ud/deportes/prestamo/create') {
                    return array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\PrestamoDeportesController::createAction',  '_route' => 'ud_deportes_prestamo_create',);
                }

                // ud_deportes_prestamo_delete
                if (0 === strpos($pathinfo, '/ud/deportes/prestamo/delete') && preg_match('#^/ud/deportes/prestamo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_prestamo_delete')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\PrestamoDeportesController::deleteAction',));
                }

            }

        }

        // admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_homepage')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/ud/admin')) {
            if (0 === strpos($pathinfo, '/ud/admin/roles')) {
                // ud_admin_roles
                if ($pathinfo === '/ud/admin/roles') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\RolesController::indexAction',  '_route' => 'ud_admin_roles',);
                }

                // ud_admin_roles_show
                if (0 === strpos($pathinfo, '/ud/admin/roles/show') && preg_match('#^/ud/admin/roles/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_roles_show')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\RolesController::showAction',));
                }

                // ud_admin_roles_edit
                if (0 === strpos($pathinfo, '/ud/admin/roles/edit') && preg_match('#^/ud/admin/roles/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_roles_edit')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\RolesController::editAction',));
                }

                // ud_admin_roles_update
                if (0 === strpos($pathinfo, '/ud/admin/roles/update') && preg_match('#^/ud/admin/roles/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_roles_update')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\RolesController::updateAction',));
                }

                // ud_admin_roles_new
                if ($pathinfo === '/ud/admin/roles/new') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\RolesController::newAction',  '_route' => 'ud_admin_roles_new',);
                }

                // ud_admin_roles_create
                if ($pathinfo === '/ud/admin/roles/create') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\RolesController::createAction',  '_route' => 'ud_admin_roles_create',);
                }

                // ud_admin_roles_delete
                if (0 === strpos($pathinfo, '/ud/admin/roles/delete') && preg_match('#^/ud/admin/roles/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_roles_delete')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\RolesController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/admin/usuarios')) {
                // ud_admin_usuarios
                if ($pathinfo === '/ud/admin/usuarios') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'ud_admin_usuarios',);
                }

                // ud_admin_usuarios_show
                if (0 === strpos($pathinfo, '/ud/admin/usuarios/show') && preg_match('#^/ud/admin/usuarios/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_usuarios_show')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\UsuariosController::showAction',));
                }

                // ud_admin_usuarios_edit
                if (0 === strpos($pathinfo, '/ud/admin/usuarios/edit') && preg_match('#^/ud/admin/usuarios/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_usuarios_edit')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\UsuariosController::editAction',));
                }

                // ud_admin_usuarios_update
                if (0 === strpos($pathinfo, '/ud/admin/usuarios/update') && preg_match('#^/ud/admin/usuarios/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_usuarios_update')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\UsuariosController::updateAction',));
                }

                // ud_admin_usuarios_new
                if ($pathinfo === '/ud/admin/usuarios/new') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\UsuariosController::newAction',  '_route' => 'ud_admin_usuarios_new',);
                }

                // ud_admin_usuarios_create
                if ($pathinfo === '/ud/admin/usuarios/create') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\UsuariosController::createAction',  '_route' => 'ud_admin_usuarios_create',);
                }

                // ud_admin_usuarios_delete
                if (0 === strpos($pathinfo, '/ud/admin/usuarios/delete') && preg_match('#^/ud/admin/usuarios/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_usuarios_delete')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\UsuariosController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/admin/dependencia')) {
                // ud_admin_dependencia
                if ($pathinfo === '/ud/admin/dependencia') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DependenciaController::indexAction',  '_route' => 'ud_admin_dependencia',);
                }

                // ud_admin_dependencia_show
                if (0 === strpos($pathinfo, '/ud/admin/dependencia/show') && preg_match('#^/ud/admin/dependencia/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_dependencia_show')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DependenciaController::showAction',));
                }

                // ud_admin_dependencia_edit
                if (0 === strpos($pathinfo, '/ud/admin/dependencia/edit') && preg_match('#^/ud/admin/dependencia/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_dependencia_edit')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DependenciaController::editAction',));
                }

                // ud_admin_dependencia_update
                if (0 === strpos($pathinfo, '/ud/admin/dependencia/update') && preg_match('#^/ud/admin/dependencia/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_dependencia_update')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DependenciaController::updateAction',));
                }

                // ud_admin_dependencia_new
                if ($pathinfo === '/ud/admin/dependencia/new') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DependenciaController::newAction',  '_route' => 'ud_admin_dependencia_new',);
                }

                // ud_admin_dependencia_create
                if ($pathinfo === '/ud/admin/dependencia/create') {
                    return array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DependenciaController::createAction',  '_route' => 'ud_admin_dependencia_create',);
                }

                // ud_admin_dependencia_delete
                if (0 === strpos($pathinfo, '/ud/admin/dependencia/delete') && preg_match('#^/ud/admin/dependencia/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_admin_dependencia_delete')), array (  '_controller' => 'Proyecto\\AdminBundle\\Controller\\DependenciaController::deleteAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // fullcalendar_loader
        if ($pathinfo === '/fc-load-events') {
            return array (  '_controller' => 'ADesigns\\CalendarBundle\\Controller\\CalendarController::loadCalendarAction',  '_route' => 'fullcalendar_loader',);
        }

        if (0 === strpos($pathinfo, '/ud')) {
            // ud_enfermeria_reporte_search
            if (0 === strpos($pathinfo, '/ud/enfermeria/reporte/search') && preg_match('#^/ud/enfermeria/reporte/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_enfermeria_reporte_search')), array (  '_controller' => 'Proyecto\\EnfermeriaBundle\\Controller\\ReporteEmergenciaController::searchAction',));
            }

            if (0 === strpos($pathinfo, '/ud/deportes/prestamo')) {
                // ud_deportes_prestamo_cantidad
                if (0 === strpos($pathinfo, '/ud/deportes/prestamo/cantidad') && preg_match('#^/ud/deportes/prestamo/cantidad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_prestamo_cantidad')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\PrestamoDeportesController::cantidadAction',));
                }

                // ud_deportes_prestamo_search
                if (0 === strpos($pathinfo, '/ud/deportes/prestamo/search') && preg_match('#^/ud/deportes/prestamo/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_deportes_prestamo_search')), array (  '_controller' => 'Proyecto\\DeportesBundle\\Controller\\PrestamoDeportesController::searchAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/activos/prestamo')) {
                // ud_activos_prestamo_cantidad
                if (0 === strpos($pathinfo, '/ud/activos/prestamo/cantidad') && preg_match('#^/ud/activos/prestamo/cantidad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_prestamo_cantidad')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\PrestamoActivoController::cantidadAction',));
                }

                // ud_activos_prestamo_search
                if (0 === strpos($pathinfo, '/ud/activos/prestamo/search') && preg_match('#^/ud/activos/prestamo/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_activos_prestamo_search')), array (  '_controller' => 'Proyecto\\ActivosBundle\\Controller\\PrestamoActivoController::searchAction',));
                }

            }

            // ud_salones_prestamo_search
            if (0 === strpos($pathinfo, '/ud/salones/prestamo/search') && preg_match('#^/ud/salones/prestamo/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_salones_prestamo_search')), array (  '_controller' => 'Proyecto\\SalonesBundle\\Controller\\PrestamoSalonController::searchAction',));
            }

            if (0 === strpos($pathinfo, '/ud/carnetizacion')) {
                // ud_carnet_search
                if (0 === strpos($pathinfo, '/ud/carnetizacion/search') && preg_match('#^/ud/carnetizacion/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_carnet_search')), array (  '_controller' => 'Proyecto\\CarnetBundle\\Controller\\DefaultController::searchAction',));
                }

                // ud_carnet_createxml
                if (0 === strpos($pathinfo, '/ud/carnetizacion/createxml') && preg_match('#^/ud/carnetizacion/createxml/(?P<id>[^/]++)/(?P<role>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_carnet_createxml')), array (  '_controller' => 'Proyecto\\CarnetBundle\\Controller\\DefaultController::xmlAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ud/seguridad/invitados')) {
                // ud_seguridad_invitado_xml
                if (0 === strpos($pathinfo, '/ud/seguridad/invitados/xmlinv') && preg_match('#^/ud/seguridad/invitados/xmlinv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_seguridad_invitado_xml')), array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::xmlInvAction',));
                }

                // ud_seguridad_invitado_c
                if (0 === strpos($pathinfo, '/ud/seguridad/invitados/search') && preg_match('#^/ud/seguridad/invitados/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ud_seguridad_invitado_c')), array (  '_controller' => 'Proyecto\\SeguridadBundle\\Controller\\InvitadosController::searchAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
