<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>





<?php

require './Templates/_header.php';



$manager = new ArticlesManager();
$article = $manager->getArticleById($_GET['id']);


if ($_POST) {


  $article->hydrate($_POST);
  $manager->updateArticle($article);


  echo "
  <script>
    window.location.href = './home.php'
  </script>";
}


?>

<div class="container mt-2">
  <h3>Modifier l'article:  <?= $article->getTitle() ?> </h3>

  <form action="" method="POST">
    <div>
      <label for="form-label" class="mt-2">Titre de l'article</label>
      <input type="text" name="title" id="title" class="form-control" value="<?= $article->getTitle() ?>">
    </div>
    <div>
      <label for="form-label" class="mt-2">Contenu de l'article</label>
      <textarea type="text" name="content" id="content" class="form-control"> <?= $article->getContent() ?> </textarea>
    </div>
    <input type="submit" value="Modifier" class="btn btn-primary mt-2">

  </form>
</div>

