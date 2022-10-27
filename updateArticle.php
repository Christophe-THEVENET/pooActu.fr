<?php

require './Templates/_header.php';

$manager = new ArticlesManager();
$article = $manager->getArticleById($_GET['id']);


if ($_POST) {
  $article->hydrate($_POST);
  $manager->updateArticle($article);
  echo "
  <script>
    window.location.href = './home.php'
  </script>";
}


// ********* TEMPLATE MAJ D'UN ARTICLE **************

$title = null;



ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once('Templates/_updateArticleForm.php'); 
  

/* var_dump($articles); */

$content = ob_get_clean();

require_once('Templates/layout.php');








?>

