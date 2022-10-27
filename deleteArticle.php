<?php

require './Templates/_header.php';


$manager = new ArticlesManager();
$manager->deleteArticle($_GET['id']);

?>

<script>
  window.location.href = "./home.php"
</script>

