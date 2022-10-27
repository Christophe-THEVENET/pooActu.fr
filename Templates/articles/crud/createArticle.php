<?php

require $_SERVER['DOCUMENT_ROOT'] . 'Templates/_header.php';


if ($_POST) {

  $manager = new ArticlesManager();

  $data = $_POST;
  $article = new Article($data);
/* 
var_dump($article);
exit; */


  $manager->createArticle($article);

  echo "
  <script>
    window.location.href = '../../../index.php'
  </script>";
}


// ********* TEMPLATE MAJ D'UN ARTICLE **************

$title = null;



ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once $_SERVER['DOCUMENT_ROOT'] .('Templates/articles/composants/_createArticleForm.php');


/* var_dump($articles); */

$content = ob_get_clean();

include('../../layout.php');



