<div class="card m-3" style="width: 50%;">
  <div class="card-body">
    <h5 class="card-title"><?= $comment->getName() ?></h5>
    <p class="card-text"><?= $comment->getContent() ?></p>
    <p class="card-text"><?= formatDateInFrench($comment->getPublished_at()); ?></p>
    <!-- icon modif-->
    <a href="/Templates/commentaires/updateComment.php?id=<?= $comment->getId() ?>" class="btn text-dark"><i class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier le commentaire"></i></a>
    <!-- icon supp-->
    <a href="/Templates/commentaires/deleteComment.php?id=<?= $comment->getId() ?>" class="btn text-danger"><i class="bi bi-x-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer le commentaire"></i></a>
  </div>
</div>