<?php namespace Config;

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
$routes->setDefaultController('MarkdownBlog');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'MarkdownBlog::index');


$route['feed.xml'] 							= 'MarkdownBlog::feed';

$route['page/(:num).html'] 					= 'MarkdownBlog::page/$1';

$route['category/(:any)/page/(:num).html'] 	= 'MarkdownBlog::category/$1/$2';
$route['category/(:any).html'] 				= 'MarkdownBlog::category/$1';

$route['tags/(:any)/page/(:num).html'] 		= 'MarkdownBlog::tags/$1/$2';
$route['tags/(:any).html'] 					= 'MarkdownBlog::tags/$1';

$route['archive/(:any)/page/(:num).html'] 	= 'MarkdownBlog::archive/$1/$2';
$route['archive/(:num).html']				= 'MarkdownBlog::archive/$1';

$route['blog/(.+).html'] 					= 'MarkdownBlog::blog';

$route['search'] 							= 'MarkdownBlog::search';

$route['export'] 							= 'MarkdownBlog::exportSite';
$route['wp2gb'] 							= 'Wp2Gb';

$route['default_controller'] 				= 'MarkdownBlog';

$route['404_override'] 						= 'MarkdownBlog::go404';

$route['translate_uri_dashes'] = FALSE;

$routes->map($route);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
