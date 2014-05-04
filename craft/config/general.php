<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  // All ENV
  '*' => array(
    'omitScriptNameInUrls' => true,
    'defaultImageQuality' => 100,
    'useCompressedJs' => false
  ),

  // Local ENV
  'localhost' => array(
    'devMode' => true,
    'environmentVariables' => array(
      'siteUrl'        => 'http://localhost/the-bay/',
      'fileSystemPath' => '/Users/ericressler/Documents/Dev/http/the-bay/'
    )
  ),

  // Production ENV
  'thebay.io' => array(
    'devMode' => false,
    'environmentVariables' => array(
      'siteUrl'        => 'http://thebay.io/',
      'fileSystemPath' => ''
    )
  )
);