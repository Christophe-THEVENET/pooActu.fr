<!-- **************** CARD ARTICLE ****************** -->

<div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $article->getTitle() ?></h5>
    <p class="card-text"><?= $article->getContent() ?></p>
    <p class="card-text"><?= formatDateInFrench($article->getPublished_at()); ?></p>
    <a href="updateArticle.php?id=<?= $article->getId() ?>" class="btn text-info"><i class="bi bi-pencil-square"></i></a>
    <a href="deleteArticle.php?id=<?= $article->getId() ?>" class="btn text-danger"><i class="bi bi-x-circle"></i></a>

    <!-- 
          <a href="#" class="card-link">Another link</a> -->
  </div>
</div>