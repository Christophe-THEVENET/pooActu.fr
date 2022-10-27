<?php

require './Templates/_header.php';
require_once __DIR__ . '/function.php';
 
$manager = new ArticlesManager();
$article = $manager->getArticleById($_GET['id']);


// ********* VOIR 1 ARTICLE **************

$title = null;


ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

// ********* TOUS LES ARTICLES **************

    include __DIR__ . '/Templates/_cardOne.php';



/* var_dump($articles); */

$content = ob_get_clean();

require_once('./Templates/layout.php');
