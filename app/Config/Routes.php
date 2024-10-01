<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default Route
$routes->get('/', 'Auth\LoginController::login');

/**
 * --------------------------------------------------------------------
 * Custom Routing 
 * --------------------------------------------------------------------
 */
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
	// Registration
	$routes->get('register', 'Auth\RegistrationController::register', ['as' => 'register']);
  $routes->post('register', 'Auth\RegistrationController::attemptRegister');

	// Activation
	$routes->get('activate-account', 'Auth\RegistrationController::activateAccount', ['as' => 'activate-account']);

	// Login-out
	$routes->get('login', 'Auth\LoginController::login', ['as' => 'login']);
	$routes->post('login', 'Auth\LoginController::attemptLogin');
  $routes->get('logout', 'Auth\LoginController::logout');

	// Forgotten password
	$routes->get('forgot-password', 'Auth\PasswordController::forgotPassword', ['as' => 'forgot-password']);
  $routes->post('forgot-password', 'Auth\PasswordController::attemptForgotPassword');

  // Reset password
  $routes->get('reset-password', 'Auth\PasswordController::resetPassword', ['as' => 'reset-password']);
  $routes->post('reset-password', 'Auth\PasswordController::attemptResetPassword');

  // Account settings
  $routes->get('account', 'Auth\AccountController::account', ['as' => 'account']);
  $routes->post('account', 'Auth\AccountController::updateAccount');
  $routes->post('change-email', 'Auth\AccountController::changeEmail'); // not used
  $routes->get('confirm-email', 'Auth\AccountController::confirmNewEmail'); // not used
  $routes->post('change-password', 'Auth\AccountController::changePassword'); // new
  $routes->post('delete-account', 'Auth\AccountController::deleteAccount'); // new

  // Profile
  $routes->get('profile', 'Auth\AccountController::profile', ['as' => 'profile']); // new 
  $routes->post('update-profile', 'Auth\AccountController::updateProfile'); // new

  // Users
  $routes->get('users', 'Auth\UsersController::users', ['as' => 'users']); // new
  $routes->get('users/enable/(:num)', 'Auth\UsersController::enable'); // new
  $routes->get('users/edit/(:num)', 'Auth\UsersController::edit'); // new
  $routes->post('users/update-user', 'Auth\UsersController::update'); // new
  $routes->get('users/delete/(:num)', 'Auth\UsersController::delete'); // new
  $routes->post('users/create-user', 'Auth\UsersController::createUser');
  $routes->get('users/logs', 'Auth\UsersController::userLogs', ['as' => 'userlogs']); // new

  // Settings
  $routes->get('settings', 'Auth\SettingsController::settings', ['as' => 'settings']); // new
  $routes->post('settings-update-system', 'Auth\SettingsController::updateSystem'); // new
  $routes->post('settings-update-email', 'Auth\SettingsController::updateEmail'); // new
});
