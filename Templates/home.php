<?php
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR@euro', 'fr_FR.utf8', 'fr-FR', 'fra');
date_default_timezone_set('Europe/Paris');


 // formater les dates en français 
 function formatDateInFrench($date)
 {
   // converti la date en timestamp
   $dateTimestamp = strtotime($date);
   // pour avoir les dates en français avec l objet Intl
   $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::SHORT);
   return $formatter->format($dateTimestamp);
 }



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
