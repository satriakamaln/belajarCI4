<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/',                       'Pages::index');
$routes->get('/pages/about/',           'Pages::about');
$routes->get('/pages/contact/',         'Pages::contact');

$routes->get('/komik',                  'Komik::index');
$routes->get('/komik/create',           'Komik::create');
$routes->get('/komik/edit/(:segment)',  'Komik::edit/$1');
$routes->post('/komik/update/(:segment)',  'Komik::update/$1');
$routes->post('/komik/save',            'Komik::save');
$routes->delete('/komik/(:num)',        'Komik::delete/$1');
$routes->get('/komik/(:any)',           'Komik::detail/$1');


$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/save', 'Mahasiswa::save');
$routes->delete('/mahasiswa/(:num)', 'Mahasiswa::delete/$1');
$routes->get('/mahasiswa/detail/(:any)', 'Mahasiswa::detail/$1');
