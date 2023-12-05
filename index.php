<?php
//Obtien le repertoire courant
define('ROOT', __DIR__ . '/');

require "vendor/autoload.php";

//Initialise le repertoire de template
$loader = new \Twig\Loader\FilesystemLoader(ROOT . "templates");

//Créer l'environement twig
$twig = new \Twig\Environment($loader);

//Affichage du template twig via la methode render
echo $twig->render('base.html.twig', [
    'data' => ROOT
]);
