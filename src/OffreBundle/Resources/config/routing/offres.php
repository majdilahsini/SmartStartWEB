<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('offres_index', new Route(
    '/',
    array('_controller' => 'OffreBundle:Offres:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('offres_show', new Route(
    '/{id}/show',
    array('_controller' => 'OffreBundle:Offres:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('offres_new', new Route(
    '/new',
    array('_controller' => 'OffreBundle:Offres:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('offres_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'OffreBundle:Offres:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('offres_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'OffreBundle:Offres:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
