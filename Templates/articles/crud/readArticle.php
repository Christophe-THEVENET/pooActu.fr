<?php

require $_SERVER['DOCUMENT_ROOT'] . 'Templates/_header.php';

// ******** REQUETE 1 ARTICLE PAR ID **************
$articleManager = new ArticlesManager();
$article = $articleManager->getArticleById($_GET['id']);


// ******** AJOUT COMMENTAIRE **************
// on detaille le $_POST pour pouvoir injecter l article id $_GET['id]
$commentManager = new CommentsManager();
if ($_POST) {
  $comment = new Comment([
    'name' => $_POST['name'],
    'content' => $_POST['content'],
    'article_id' => $_GET['id'],
  ]);
  $commentManager->createComment($comment);
  
echo "<script>
window.location.href = './readArticle.php?id={$_GET['id']}'
</script>";

}

// ******** RECUPERER TOUT LES COMMENTAIRES **************
$comments = $commentManager->getAllCommentsByArticleId($_GET['id']);


// ********* VOIR 1 ARTICLE **************

$title = null;

ob_start(); // mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

// ------ carte 1 article
include $_SERVER['DOCUMENT_ROOT'] . 'Templates/articles/composants/_cardOne.php';
// ------ formulaire ajouter commentaire
include $_SERVER['DOCUMENT_ROOT'] . 'Templates/commentaires/_commentForm.php';
?>

<!-- ------ liste de tout les commentaires de l'article -->
<div class="container d-flex flex-column justify-content-center align-items-center">
<?php 
if (isset($comments)) {
  foreach ($comments as $comment) {
    include $_SERVER['DOCUMENT_ROOT'] . 'Templates/commentaires/_card.php';
  }
}
?>
</div>
<?php


$content = ob_get_clean();

require_once $_SERVER['DOCUMENT_ROOT'] . 'Templates/layout.php';
