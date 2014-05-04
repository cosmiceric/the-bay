<?php 

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */
 
// ------------------------------------------- //
//
// IMPORTANT!
//
// Update the local config variables below
// to relect your local environment.
//
//
// ------------------------------------------- //
 
return array(
  // All ENV
  '*' => array(
    'tablePrefix' => 'craft'
  ),
 
  // Local ENV
  'localhost' => array(
    'server'   => 'localhost',
    'user'     => 'root',
    'password' => 'root',
    'database' => 'craft-thebay'
  ),
 
  // Production ENV
  'thebay.io' => array(
    'server'   => 'localhost',
    'user'     => 'thebayio_admin',
    'password' => 'Newpass08',
    'database' => 'thebayio_craft'
  )
 
);
