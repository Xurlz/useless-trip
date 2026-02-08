<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/vendor/autoload.php';

$request = Request::createFromGlobals();

$name = $request->get('name','World');

$sprintfArgs = [
  'Hello %s',
  htmlspecialchars($name,ENT_QUOTES,'UTF-8')
];

$response = new Response(sprintf(...$sprintfArgs));

$response->send();

