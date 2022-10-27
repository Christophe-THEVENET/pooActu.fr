<!DOCTYPE html>
<html lang="fr">

<body>

  <?php


  // ****** HEADER ***************
  require_once __DIR__ . '/_header.php'; ?>


  <?php // ****** CONTENU *************** 
  ?>
  <h2 class="text-center my-5"><?= $title ?></h2>
  <main class="container d-flex flex-wrap justify-content-center ">
    <!--   on travaille avec une variable pour insérer le bon contenu-->
    <?= $content ?>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>