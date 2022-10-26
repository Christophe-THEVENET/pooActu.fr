    <?php


    // pour charger (require) automatiquement les classes a l'instanciation (formulaire)
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

    require  "./Controllers/ArticlesManager.php";


    $manager = new ArticlesManager();

    $articles = $manager->getAllArticles();

    