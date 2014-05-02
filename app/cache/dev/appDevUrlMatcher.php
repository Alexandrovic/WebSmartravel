<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // travel_agence_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_agence_homepage')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/travel_')) {
            if (0 === strpos($pathinfo, '/travel_voyageur')) {
                // travel_voyageur
                if (rtrim($pathinfo, '/') === '/travel_voyageur') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'travel_voyageur');
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::indexAction',  '_route' => 'travel_voyageur',);
                }

                // travel_voyageur_show
                if (preg_match('#^/travel_voyageur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyageur_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::showAction',));
                }

                // travel_voyageur_new
                if ($pathinfo === '/travel_voyageur/new') {
                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::newAction',  '_route' => 'travel_voyageur_new',);
                }

                // travel_voyageur_create
                if ($pathinfo === '/travel_voyageur/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_travel_voyageur_create;
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::createAction',  '_route' => 'travel_voyageur_create',);
                }
                not_travel_voyageur_create:

                // travel_voyageur_edit
                if (preg_match('#^/travel_voyageur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyageur_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::editAction',));
                }

                // travel_voyageur_update
                if (preg_match('#^/travel_voyageur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_travel_voyageur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyageur_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::updateAction',));
                }
                not_travel_voyageur_update:

                // travel_voyageur_delete
                if (preg_match('#^/travel_voyageur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_travel_voyageur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyageur_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::deleteAction',));
                }
                not_travel_voyageur_delete:

            }

            if (0 === strpos($pathinfo, '/travel_hotel')) {
                // travel_hotel
                if (rtrim($pathinfo, '/') === '/travel_hotel') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'travel_hotel');
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelsController::indexAction',  '_route' => 'travel_hotel',);
                }

                // travel_hotel_show
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelsController::showAction',));
                }

                // travel_hotel_new
                if ($pathinfo === '/travel_hotel/new') {
                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelsController::newAction',  '_route' => 'travel_hotel_new',);
                }

                // travel_hotel_create
                if ($pathinfo === '/travel_hotel/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_travel_hotel_create;
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelsController::createAction',  '_route' => 'travel_hotel_create',);
                }
                not_travel_hotel_create:

                // travel_hotel_edit
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelsController::editAction',));
                }

                // travel_hotel_update
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_travel_hotel_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelsController::updateAction',));
                }
                not_travel_hotel_update:

                // travel_hotel_delete
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_travel_hotel_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelsController::deleteAction',));
                }
                not_travel_hotel_delete:

            }

            if (0 === strpos($pathinfo, '/travel_admin')) {
                // travel_admin
                if (rtrim($pathinfo, '/') === '/travel_admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'travel_admin');
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::indexAction',  '_route' => 'travel_admin',);
                }

                // travel_admin_show
                if (preg_match('#^/travel_admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_admin_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::showAction',));
                }

                // travel_admin_new
                if ($pathinfo === '/travel_admin/new') {
                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::newAction',  '_route' => 'travel_admin_new',);
                }

                // travel_admin_create
                if ($pathinfo === '/travel_admin/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_travel_admin_create;
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::createAction',  '_route' => 'travel_admin_create',);
                }
                not_travel_admin_create:

                // travel_admin_edit
                if (preg_match('#^/travel_admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_admin_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::editAction',));
                }

                // travel_admin_update
                if (preg_match('#^/travel_admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_travel_admin_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_admin_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::updateAction',));
                }
                not_travel_admin_update:

                // travel_admin_delete
                if (preg_match('#^/travel_admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_travel_admin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_admin_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::deleteAction',));
                }
                not_travel_admin_delete:

            }

            if (0 === strpos($pathinfo, '/travel_facture')) {
                // travel_facture
                if (rtrim($pathinfo, '/') === '/travel_facture') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'travel_facture');
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::indexAction',  '_route' => 'travel_facture',);
                }

                // travel_facture_show
                if (preg_match('#^/travel_facture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_facture_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::showAction',));
                }

                // travel_facture_new
                if ($pathinfo === '/travel_facture/new') {
                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::newAction',  '_route' => 'travel_facture_new',);
                }

                // travel_facture_create
                if ($pathinfo === '/travel_facture/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_travel_facture_create;
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::createAction',  '_route' => 'travel_facture_create',);
                }
                not_travel_facture_create:

                // travel_facture_edit
                if (preg_match('#^/travel_facture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_facture_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::editAction',));
                }

                // travel_facture_update
                if (preg_match('#^/travel_facture/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_travel_facture_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_facture_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::updateAction',));
                }
                not_travel_facture_update:

                // travel_facture_delete
                if (preg_match('#^/travel_facture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_travel_facture_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_facture_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::deleteAction',));
                }
                not_travel_facture_delete:

            }

            if (0 === strpos($pathinfo, '/travel_agence')) {
                // travel_agence
                if (rtrim($pathinfo, '/') === '/travel_agence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'travel_agence');
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::indexAction',  '_route' => 'travel_agence',);
                }

                // travel_agence_show
                if (preg_match('#^/travel_agence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_agence_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::showAction',));
                }

                // travel_agence_new
                if ($pathinfo === '/travel_agence/new') {
                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::newAction',  '_route' => 'travel_agence_new',);
                }

                // travel_agence_create
                if ($pathinfo === '/travel_agence/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_travel_agence_create;
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::createAction',  '_route' => 'travel_agence_create',);
                }
                not_travel_agence_create:

                // travel_agence_edit
                if (preg_match('#^/travel_agence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_agence_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::editAction',));
                }

                // travel_agence_update
                if (preg_match('#^/travel_agence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_travel_agence_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_agence_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::updateAction',));
                }
                not_travel_agence_update:

                // travel_agence_delete
                if (preg_match('#^/travel_agence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_travel_agence_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_agence_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::deleteAction',));
                }
                not_travel_agence_delete:

            }

            if (0 === strpos($pathinfo, '/travel_reservation')) {
                // travel_reservation
                if (rtrim($pathinfo, '/') === '/travel_reservation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'travel_reservation');
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::indexAction',  '_route' => 'travel_reservation',);
                }

                // travel_reservation_show
                if (preg_match('#^/travel_reservation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_reservation_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::showAction',));
                }

                // travel_reservation_new
                if ($pathinfo === '/travel_reservation/new') {
                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::newAction',  '_route' => 'travel_reservation_new',);
                }

                // travel_reservation_create
                if ($pathinfo === '/travel_reservation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_travel_reservation_create;
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::createAction',  '_route' => 'travel_reservation_create',);
                }
                not_travel_reservation_create:

                // travel_reservation_edit
                if (preg_match('#^/travel_reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_reservation_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::editAction',));
                }

                // travel_reservation_update
                if (preg_match('#^/travel_reservation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_travel_reservation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_reservation_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::updateAction',));
                }
                not_travel_reservation_update:

                // travel_reservation_delete
                if (preg_match('#^/travel_reservation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_travel_reservation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_reservation_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::deleteAction',));
                }
                not_travel_reservation_delete:

            }

            if (0 === strpos($pathinfo, '/travel_voy')) {
                if (0 === strpos($pathinfo, '/travel_voypropose')) {
                    // travel_voypropose
                    if (rtrim($pathinfo, '/') === '/travel_voypropose') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'travel_voypropose');
                        }

                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurHasVoyageController::indexAction',  '_route' => 'travel_voypropose',);
                    }

                    // travel_voypropose_show
                    if (preg_match('#^/travel_voypropose/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voypropose_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurHasVoyageController::showAction',));
                    }

                    // travel_voypropose_new
                    if ($pathinfo === '/travel_voypropose/new') {
                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurHasVoyageController::newAction',  '_route' => 'travel_voypropose_new',);
                    }

                    // travel_voypropose_create
                    if ($pathinfo === '/travel_voypropose/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_travel_voypropose_create;
                        }

                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurHasVoyageController::createAction',  '_route' => 'travel_voypropose_create',);
                    }
                    not_travel_voypropose_create:

                    // travel_voypropose_edit
                    if (preg_match('#^/travel_voypropose/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voypropose_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurHasVoyageController::editAction',));
                    }

                    // travel_voypropose_update
                    if (preg_match('#^/travel_voypropose/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_travel_voypropose_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voypropose_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurHasVoyageController::updateAction',));
                    }
                    not_travel_voypropose_update:

                    // travel_voypropose_delete
                    if (preg_match('#^/travel_voypropose/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_travel_voypropose_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voypropose_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurHasVoyageController::deleteAction',));
                    }
                    not_travel_voypropose_delete:

                }

                if (0 === strpos($pathinfo, '/travel_voyage')) {
                    // travel_voyage
                    if (rtrim($pathinfo, '/') === '/travel_voyage') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'travel_voyage');
                        }

                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::indexAction',  '_route' => 'travel_voyage',);
                    }

                    // travel_voyage_show
                    if (preg_match('#^/travel_voyage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyage_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::showAction',));
                    }

                    // travel_voyage_new
                    if ($pathinfo === '/travel_voyage/new') {
                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::newAction',  '_route' => 'travel_voyage_new',);
                    }

                    // travel_voyage_create
                    if ($pathinfo === '/travel_voyage/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_travel_voyage_create;
                        }

                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::createAction',  '_route' => 'travel_voyage_create',);
                    }
                    not_travel_voyage_create:

                    // travel_voyage_edit
                    if (preg_match('#^/travel_voyage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyage_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::editAction',));
                    }

                    // travel_voyage_update
                    if (preg_match('#^/travel_voyage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_travel_voyage_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyage_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::updateAction',));
                    }
                    not_travel_voyage_update:

                    // travel_voyage_delete
                    if (preg_match('#^/travel_voyage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_travel_voyage_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_voyage_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::deleteAction',));
                    }
                    not_travel_voyage_delete:

                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
