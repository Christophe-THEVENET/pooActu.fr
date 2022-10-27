<?php

require_once __DIR__ . '/../Models/DatabaseConnect.php';



class ArticlesManager
{



  use DatabaseConnect; // connexion BDD


  // ------------------------- CREER ARTICLE ------------------------------

  public function createArticle(Article $article)
  {

    $req = $this->pdo->prepare("INSERT INTO `articles` (title, content, published_at) VALUES (:title, :content, :published_at)");

    $req->bindValue(":title", $article->getTitle(), PDO::PARAM_STR);
    $req->bindValue(":content", $article->getContent(), PDO::PARAM_STR);
    $req->bindValue(":published_at", $article->getPublished_at(), PDO::PARAM_STR);
    $req->execute();
  }


  // ------------------------- MODIFIER ARTICLE ------------------------------

  public function updateArticle(Article $article)
  {

    $req = $this->pdo->prepare("UPDATE `articles` SET (title = :title, content = :content, published_at = :published_at) WHERE  id = :id");

    $req->bindValue(":title", $article->getTitle(), PDO::PARAM_STR);
    $req->bindValue(":content", $article->getContent(), PDO::PARAM_STR);
    $req->bindValue(":published_at", $article->getPublished_at(), PDO::PARAM_STR);
    $req->bindValue(":id", $article->getId(), PDO::PARAM_INT);
    $req->execute();
  }



  // ------------------------- SUPPRIMER ARTICLE ------------------------------

  public function deleteArticle(int $id)
  {

    $req = $this->pdo->prepare("DELETE FROM `articles` WHERE  id = :id");

    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $req->execute();
  }



  // ------------------------- RECUPERER 1 ARTICLE ------------------------------

  public function getArticleById(int $id)
  {

    $req = $this->pdo->prepare("SELECT * FROM `articles` WHERE  id = :id");

    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $data = $req->fetch();
    return new Article($data);
  }



  // ------------------------- RECUPERER TOUS LES ARTICLES ------------------------------

  public function getAllArticles(): array
  {

    $stm = $this->pdo->query("SELECT * FROM `articles` ORDER BY id DESC");

    /* if ($stm->execute()) {

      $articles = $stm->fetchAll(PDO::FETCH_OBJ); // $users contient un tableau d'objets StdClass */


    $articles = [];

    /*  $datas = $stm->fetchAll();

    foreach ($datas as $data) {
      $articles[] = new Article($data);
    } */


    while ($data = $stm->fetch(PDO::FETCH_ASSOC)) {
      $articles[] = new Article($data);
    }



    require_once __DIR__ . '/../Templates/home.php';


    return $articles;
  }
}
/* } */
