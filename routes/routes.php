<?php

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');

$url = "http://";

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $url = "https://";

$url.= $_SERVER['HTTP_HOST'].'/';


$routes = array(
  'main' => $url ,
  'cooperation' => $url.'faq/cooperation' ,
  'info' => $url.'faq/info',
  'about' => $url.'#about',
  'order' => $url.'#order',
  'contacts' => $url.'#contacts',
);
