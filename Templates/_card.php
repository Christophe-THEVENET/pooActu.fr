
  <?php
  
  setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
  echo strftime('%A %d %B %Y %I:%M:%S'). '<br>';

      ?>
<!-- **************** CARD ARTICLE ****************** -->

  <div class="card m-2" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $article->getTitle() ?></h5>
      <p class="card-text"><?= $article->getContent() ?></p>
      <p class="card-text"><?= $article->getPublished_at() ?></p>

      <!-- <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a> -->
    </div>
  </div>



  