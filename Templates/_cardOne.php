<!-- **************** CARD ARTICLE ****************** -->

<div class="card m-2" style="width: 60%">
  <div class="card-body">
    <h5 class="card-title"><?= $article->getTitle() ?></h5>
  
    <p class="card-text"><?= $article->getContent() ?> ...</p>
    <p class="card-text"><?= formatDateInFrench($article->getPublished_at()); ?></p>
    <!-- icon modif-->
    <a href="home.php" class="btn text-dark"><i class="bi bi-card-checklist"></i></a>
    <a href="updateArticle.php?id=<?= $article->getId() ?>" class="btn text-info"><i class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier l'article"></i></a>
    <a href="deleteArticle.php?id=<?= $article->getId() ?>" class="btn text-danger"><i class="bi bi-x-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer l'article"></i></a>

    <!-- 
          <a href="#" class="card-link">Another link</a> -->
  </div>
</div>

