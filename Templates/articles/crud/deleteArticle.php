<?php

require $_SERVER['DOCUMENT_ROOT'] . 'Templates/_header.php';


$manager = new ArticlesManager();
$manager->deleteArticle($_GET['id']);

?>

<script>
  window.location.href = "../../../index.php"
</script>

