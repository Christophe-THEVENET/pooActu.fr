<!-- **************** CARD ARTICLE ****************** -->

<div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $article->getTitle() ?></h5>
    <!-- substr affiche le contenu de l article de 0 a 150 charactéres dans la carte -->
    <p class="card-text"><?= substr($article->getContent(),0,150) ?> ...</p>
    <p class="card-text"><?= formatDateInFrench($article->getPublished_at()); ?></p>
     <!-- icon jumelle -->
    <a href="<?php $_SERVER['DOCUMENT_ROOT']?>Templates/articles/crud/readArticle.php?id=<?= $article->getId() ?>" class="btn text-dark"><i class="bi bi-binoculars" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir plus"></i></a>
     <!-- icon modif-->
    <a href="<?php $_SERVER['DOCUMENT_ROOT']?>Templates/articles/crud/updateArticle.php?id=<?= $article->getId() ?>" class="btn text-info"><i class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier l'article"></i></a>
     <!-- icon supp-->
    <a href="<?php $_SERVER['DOCUMENT_ROOT']?>Templates/articles/crud/deleteArticle.php?id=<?= $article->getId() ?>" class="btn text-danger"><i class="bi bi-x-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer l'article"></i></a>
  </div>
</div>

