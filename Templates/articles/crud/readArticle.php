<?php

require $_SERVER['DOCUMENT_ROOT'] . 'Templates/_header.php';

$manager = new ArticlesManager();
$article = $manager->getArticleById($_GET['id']);

// ********* VOIR 1 ARTICLE **************

$title = null;

ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

// ********* TOUS LES ARTICLES **************

include $_SERVER['DOCUMENT_ROOT'] . 'Templates/articles/composants/_cardOne.php';


$content = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . 'Templates/layout.php';
