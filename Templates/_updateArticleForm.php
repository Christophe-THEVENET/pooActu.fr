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



