<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Admin Guides Routes
// $routes->get('igupload', 'AdminGuides::igupload', ['filter' => 'auth']);
// $routes->get('maps', 'AdminGuides::maps', ['filter' => 'auth']);
// $routes->match(['get', 'post'], 'imageupload', 'AdminGuides::imageUpload');
// $routes->match(['get', 'post'], 'imagess', 'AdminGuides::imagesort');
// $routes->get('vgupload', 'AdminGuides::vgupload', ['filter' => 'auth']);
// $routes->match(['get', 'post'], 'videoupload', 'AdminGuides::videoUpload');

// Image Guides
$routes->get('igflood', 'AdminGuides::igflood', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'igfupload', 'AdminGuides::igfupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deleteigf(:num)', 'AdminGuides::deleteigf/$1');
$routes->match(['get', 'post'], 'igfedit(:num)', 'AdminGuides::igfedit/$1');

$routes->get('iglandslide', 'AdminGuides::iglandslide', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'iglupload', 'AdminGuides::iglupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deleteigl(:num)', 'AdminGuides::deleteigl/$1');
$routes->match(['get', 'post'], 'igledit(:num)', 'AdminGuides::igledit/$1');

$routes->get('igtyphoon', 'AdminGuides::igtyphoon', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'igtupload', 'AdminGuides::igtupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deleteigt(:num)', 'AdminGuides::deleteigt/$1');
$routes->match(['get', 'post'], 'igtedit(:num)', 'AdminGuides::igtedit/$1');

// Video Guides
$routes->get('vgflood', 'AdminGuides::vgflood', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'vgfupload', 'AdminGuides::vgfupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deletevgf(:num)', 'AdminGuides::deletevgf/$1');
$routes->match(['get', 'post'], 'vgfedit(:num)', 'AdminGuides::vgfedit/$1');

$routes->get('vglandslide', 'AdminGuides::vglandslide', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'vglupload', 'AdminGuides::vglupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deletevgl(:num)', 'AdminGuides::deletevgl/$1');
$routes->match(['get', 'post'], 'vgledit(:num)', 'AdminGuides::vgledit/$1');

$routes->get('vgtyphoon', 'AdminGuides::vgtyphoon', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'vgtupload', 'AdminGuides::vgtupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deletevgt(:num)', 'AdminGuides::deletevgt/$1');
$routes->match(['get', 'post'], 'vgtedit(:num)', 'AdminGuides::vgtedit/$1');
 
//Users
$routes->get('users', 'Admin::users', ['filter' => 'auth']);



// FAQs Generator
$routes->get('faqgenerator', 'AdminGuides::faqgenerator', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'faqsupload', 'AdminGuides::faqsupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'faqsdel(:num)', 'AdminGuides::faqsdel/$1');
$routes->match(['get', 'post'], 'faqsedit(:num)', 'AdminGuides::faqsedit/$1');

// Officials
$routes->get('officials', 'AdminGuides::officials', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'offupload', 'AdminGuides::offupload', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deleteoff(:num)', 'AdminGuides::deleteoff/$1');
$routes->match(['get', 'post'], 'editoff(:num)', 'AdminGuides::editoff/$1');

// Admin Routes
$routes->match(['get', 'post'], 'login', 'Admin::login', ['filter' => 'noauth']);
$routes->get('dashboard', 'Admin::dashboard', ['filter' => 'auth']);
$routes->match(['get', 'post'],'register', 'Admin::register', ['filter' => 'noauth']);
$routes->get('maps', 'Admin::maps', ['filter' => 'auth']);
$routes->get('logout', 'Admin::logout');



// Main Routes
$routes->get('/', 'Users::index');
$routes->get('highriskmap', 'Users::highriskmap');
$routes->get('barangayofficial', 'Users::barangayofficial');
$routes->get('aboutus', 'Users::aboutus');
$routes->get('faqs', 'Users::faqs');
$routes->get('videoguides', 'Users::videoguides');
$routes->get('imageguides', 'Users::imageguides');
$routes->match(['get', 'post'], 'contact', 'Users::contact');
// $routes->match(['get', 'post'], 'register', 'Users::register');
// $routes->match(['get', 'post'], 'login', 'Users::login');
// $routes->get('dashboard', 'Users::dashboard');
// $routes->get('logout', 'Users::logout');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
