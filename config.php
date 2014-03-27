<?php

//Toon alle fouten.
error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = array(
  
  # Your username
  'username'     => '',
  
  # Your access token
  'access_token' => '',

  # Download folder
  'download_folder' => 'download',

  # Places you want to download images from
  'places' => array(
    array('title' => 'Amsterdam', 'lat' => '52.370216', 'lng' => '4.895168'),
    array('title' => 'New York', 'lat' => '40.714353', 'lng' => '-74.005973'),
    array('title' => 'Paris', 'lat' => '48.856614', 'lng' => '2.352222'),
    array('title' => 'Rotterdam', 'lat' => '51.924216', 'lng' => '4.481776')
  ),

  # Tags you want to filter
  'tags' => array(
    'dinner',
    'food',
    'foodorgasm',
    'foodporn',
    'cruditee',
    'lovefood'
  )

);
