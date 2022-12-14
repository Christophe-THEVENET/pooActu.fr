<?php




class Article extends HydrateObject
{

  private int $id;
  private string $title;
  private string $content;
  private ?string $published_at;


  //  ------------ mise en place système d'hydratation de l'entité avec un tableau de données ------------

  public function __construct(array $data)
  {
    $this->hydrate($data); // methode hydrate héritée de la classe HydrateObject
  }


  public function getId()
  {
    return $this->id;
  }


  public function setId(int $id)
  {
    $this->id = $id;

    return $this;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle(string $title)
  {
    if (is_string($title) && strlen($title) > 3 && strlen($title) < 80) {
      $this->title = htmlspecialchars($title);
    }

    return $this;
  }

  public function getContent()
  {
    return $this->content;
  }


  public function setContent(string $content)
  {
    if (is_string($content) && strlen($content) > 3 && strlen($content) < 5500) {
      $this->content = htmlspecialchars($content);
    }
    return $this;
  }




  public function getPublished_at()
  {

    return $this->published_at;
  }


  public function setPublished_at(?string $published_at)
  {

    if ($published_at) {

      $this->published_at = $published_at;
    } else {
      return null;
    }

    return $this;
  }
}
