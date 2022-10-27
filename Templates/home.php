<?php

require_once __DIR__ . '/../function.php';


// ********* TEMPLATE LISTE DES FILMS **************

$title = 'les derniers articles';



ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

// ********* TOUS LES ARTICLES **************
foreach ($articles as $article) {
    include __DIR__ . '/_card.php';
}



/* var_dump($articles); */

$content = ob_get_clean();

require_once('layout.php');
