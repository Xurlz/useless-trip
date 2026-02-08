<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/vendor/autoload.php';

$request = Request::createFromGlobals();

$name = $request->get('name','World');


$response = new Response();

$sprintfArgs = [
  'Hello %s',
  htmlspecialchars($name,ENT_QUOTES,'UTF-8')
];

$response->setContent(sprintf(...$sprintfArgs));
$response->setStatusCode(418);

$response->setMaxAge(10);

$response->send();

