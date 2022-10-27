
<!-- **************** CARD ARTICLE ****************** -->

<div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $article->getTitle() ?></h5>
    <p class="card-text"><?= $article->getContent() ?></p>
    <p class="card-text"><?= formatDateInFrench($article->getPublished_at()); ?></p>

    <!-- <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a> -->
  </div>
</div>