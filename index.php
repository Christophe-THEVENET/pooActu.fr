    <?php

require_once './Templates/_header.php';
    


    $manager = new ArticlesManager();

    $articles = $manager->getAllArticles();

 