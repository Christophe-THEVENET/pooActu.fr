<?php
require $_SERVER['DOCUMENT_ROOT'] . 'Templates/_header.php';

$commentManager = new CommentsManager();

// recup du commentaire pour recup l article id pour rediriger sur l article
$comment = $commentManager->getCommentById($_GET['id']);
$articleId = $comment->getArticle_id();

// supp du commentaire
$commentManager->deleteComment($_GET['id']);


?>

<script>
  window.location.href = "../articles/crud/readArticle.php?id=<?= $articleId ?>"
</script>

