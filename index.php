<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/controller/AlunniController.php';

$app = AppFactory::create();

$app->get('/negozio', 'NegozioController:index');

$app->get('/articoli', 'ArticoloController:show');
$app->get('/articoli/{id}', 'ArticoloController:show');

$app->get('/ordini', 'OrdiniController:show');
$app->get('/ordini/{numero_ordine} ', 'OrdiniController:show');
$app->get('/ordini/{numero_ordine}/articoli_venduti', 'OrdiniController:show');
$app->get('/ordini/{numero_ordine}/articoli_venduti/articoli_venduti/{id}', 'OrdiniController:show');

$app->run();
