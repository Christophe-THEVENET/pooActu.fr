<?php


// ******************** pour charger (require) automatiquement les classes Models et Controllers ********************
function loadClasses($class)
{
  // si il y a la string Manager dans le nom de ma classe alors c'est un controleur
  if (strpos($class, 'Manager')) {
    // on retourne la classe corespondante
    require __DIR__ . "/Controllers/$class.php";
  } else {
    require __DIR__ . "/Models/$class.php";
  }
}
// charge la classe a l 'instanciation
spl_autoload_register("loadClasses");





// ******************* formater les dates en français ******************************
function formatDateInFrench($date)
{
    setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR@euro', 'fr_FR.utf8', 'fr-FR', 'fra');
    date_default_timezone_set('Europe/Paris');
    // converti la date en timestamp
    $dateTimestamp = strtotime($date);
    // pour avoir les dates en français avec l objet Intl
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::SHORT);
    return $formatter->format($dateTimestamp);
}

