<?php

require $_SERVER['DOCUMENT_ROOT'] . 'Templates/_header.php';


// recup du commentaire
$manager = new CommentsManager();
$comment = $manager->getCommentById($_GET['id']);

// recup de l article id du commentaire pour rediriger sur l article
$articleId = $comment->getArticle_id();

if ($_POST) {
  $comment->hydrate($_POST);
  $manager->updateComment($comment);



  // redirection vers la meme page de larticle 
?>
  <script>
    window.location.href = "../articles/crud/readArticle.php?id=<?= $articleId ?>"
  </script>;

<?php
}


// ********* TEMPLATE MAJ D'UN COMMENTAIRE **************

$title = null;



ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once './_updateCommentForm.php';


/* var_dump($articles); */

$content = ob_get_clean();

require_once './../layout.php';
