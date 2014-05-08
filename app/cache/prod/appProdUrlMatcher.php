<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::indexAction',  '_route' => 'travel_hotel',);
                }

                // travel_hotel_show
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::showAction',));
                }

                // travel_hotel_new
                if ($pathinfo === '/travel_hotel/new') {
                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::newAction',  '_route' => 'travel_hotel_new',);
                }

                // travel_hotel_create
                if ($pathinfo === '/travel_hotel/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_travel_hotel_create;
                    }

                    return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::createAction',  '_route' => 'travel_hotel_create',);
                }
                not_travel_hotel_create:

                // travel_hotel_edit
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::editAction',));
                }

                // travel_hotel_update
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_travel_hotel_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::updateAction',));
                }
                not_travel_hotel_update:

                // travel_hotel_delete
                if (preg_match('#^/travel_hotel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_travel_hotel_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_hotel_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::deleteAction',));
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

            if (0 === strpos($pathinfo, '/travel_res')) {
                if (0 === strpos($pathinfo, '/travel_respagence')) {
                    // travel_respagence
                    if (rtrim($pathinfo, '/') === '/travel_respagence') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'travel_respagence');
                        }

                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::indexAction',  '_route' => 'travel_respagence',);
                    }

                    // travel_respagence_show
                    if (preg_match('#^/travel_respagence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_respagence_show')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::showAction',));
                    }

                    // travel_respagence_new
                    if ($pathinfo === '/travel_respagence/new') {
                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::newAction',  '_route' => 'travel_respagence_new',);
                    }

                    // travel_respagence_create
                    if ($pathinfo === '/travel_respagence/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_travel_respagence_create;
                        }

                        return array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::createAction',  '_route' => 'travel_respagence_create',);
                    }
                    not_travel_respagence_create:

                    // travel_respagence_edit
                    if (preg_match('#^/travel_respagence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_respagence_edit')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::editAction',));
                    }

                    // travel_respagence_update
                    if (preg_match('#^/travel_respagence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_travel_respagence_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_respagence_update')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::updateAction',));
                    }
                    not_travel_respagence_update:

                    // travel_respagence_delete
                    if (preg_match('#^/travel_respagence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_travel_respagence_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_respagence_delete')), array (  '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::deleteAction',));
                    }
                    not_travel_respagence_delete:

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
