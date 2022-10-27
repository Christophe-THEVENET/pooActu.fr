  <?php

  // ****** HEADER ***************
  require_once __DIR__ . '/_header.php'; ?>




  <h2 class="text-center my-5"><?= $title ?></h2>
  <main class="container d-flex flex-wrap justify-content-center ">
    <!--   on travaille avec une variable pour insérer le bon contenu-->
    <?= $content ?>
  </main>

  <?php




  // ****** FOOTER***************
  require_once __DIR__ . '/_footer.php'; ?>