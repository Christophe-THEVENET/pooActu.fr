<?php


require_once __DIR__ . '/../Models/DatabaseConnect.php';



class CommentsManager
{



  use DatabaseConnect; // connexion BDD


  // ------------------------- CREER COMMENTAIRE ------------------------------

  public function createComment(Comment $comment)
  {
    $req = $this->pdo->prepare("INSERT INTO comments (name, content, article_id, published_at) VALUES (:name, :content, :article_id, NOW())");
    $req->bindValue(":name", $comment->getName(), PDO::PARAM_STR);
    $req->bindValue(":content", $comment->getContent(), PDO::PARAM_STR);
    $req->bindValue(":article_id", $comment->getArticle_id(), PDO::PARAM_INT);
    $req->execute();
  }


  // ------------------------- MODIFIER COMMENTAIRE ------------------------------

  public function updateComment(Comment $comment)
  {
    $req = $this->pdo->prepare("UPDATE `comments` SET name = :name, content = :content, published_at = NOW() WHERE  id = :id");
    $req->bindValue(":name", $comment->getName(), PDO::PARAM_STR);
    $req->bindValue(":content", $comment->getContent(), PDO::PARAM_STR);
    $req->bindValue(":id", $comment->getId(), PDO::PARAM_INT);
    $req->execute();
  }



  // ------------------------- SUPPRIMER COMMENTAIRE ------------------------------

  public function deleteComment(int $id)
  {
    $req = $this->pdo->prepare("DELETE FROM comments WHERE  id = :id");
    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $req->execute();
  }



  // ------------------------- RECUPERER 1 COMMENTAIRE ------------------------------

  public function getCommentById(int $id)
  {
    $req = $this->pdo->prepare("SELECT * FROM `comments` WHERE  id = :id");
    $req->bindParam(":id", $id, PDO::PARAM_INT);
    $req->execute();
    $data = $req->fetch(PDO::FETCH_ASSOC);
    return new Comment($data);
  }

  


  // ------------------------- RECUPERER TOUS LES COMMENTAIRES D'UN ARTICLE------------------------------

  public function getAllCommentsByArticleId(int $articleId): array
  {
    $stm = $this->pdo->prepare("SELECT * FROM comments WHERE article_id = :article_id ORDER BY published_at DESC");
    $stm->bindValue(":article_id", $articleId, PDO::PARAM_INT);
    $stm->execute();
    $comments = [];
    while ($data = $stm->fetch(PDO::FETCH_ASSOC)) {
      $comments[] = new Comment($data);
    }
    return $comments;
  }
}
