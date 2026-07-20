<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/dashboard', 'Login::dashboard');
$routes->get('/logout', 'Login::logout');


$routes->get('story-based', 'Home::storyBased');
$routes->get('tech-awareness', 'Home::techAwareness');
$routes->get('handson', 'Home::handson');
$routes->get('youth-mentoring', 'Home::youthMentoring');
$routes->get('prototype', 'Home::prototype');
$routes->get('about-us', 'Home::aboutus');