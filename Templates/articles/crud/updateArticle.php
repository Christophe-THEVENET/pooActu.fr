<?php

require $_SERVER['DOCUMENT_ROOT'] . 'Templates/_header.php';


$manager = new ArticlesManager();
$article = $manager->getArticleById($_GET['id']);


if ($_POST) {
  $article->hydrate($_POST);
  $manager->updateArticle($article);
  echo "
  <script>
    window.location.href = '../../../index.php'
  </script>";
}


// ********* TEMPLATE MAJ D'UN ARTICLE **************

$title = null;



ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once('../composants/_updateArticleForm.php'); 
  

/* var_dump($articles); */

$content = ob_get_clean();

require_once('../../layout.php');





