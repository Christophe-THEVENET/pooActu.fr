<div class="container mt-2" style="width: 40%">
  <div class="row">
  <div class="col-12">
    <form action="" method="POST">
      <div>
        <label for="label-control ">Modifiez votre Nom</label>
        <input type="text" name="name" id="name" class="form-control my-2" value="<?=$comment->getName()?>">
      </div>
      <div>
      <label for="label-control ">Modifiez votre article</label>
        <textarea type="text" name="content" id="content" class="form-control my-2" ><?=$comment->getContent()?></textarea>
      </div>
      <input type="submit" value="Modifier" class="btn btn-info mt-2">
    </form>
  </div>
</div>
</div>