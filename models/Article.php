<?php





class Article
{

  private int $id;
  private string $title;
  private string $content;



  //  ------------ mise en place système d'hydratation de l'entité avec un tableau de données ------------

  public function __construct(array $data)
  {
    $this->hydrate($data);
  }

  public function hydrate(array $data): void
  {
    foreach ($data as $key => $value) {
      // le setteur de chaque data du style setData
      $method = 'set ' . ucfirst($key);
      // si la méthode existe dans l'objet courant
      method_exists($this, $method) ? $this->$method($value) : ""; // ex $this->setId(1) pour la première hydratation
    }
  } // ---------------------------------------------------------------------


  public function getId()
  {
    return $this->id;
  }


  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  public function getContent()
  {
    return $this->content;
  }


  public function setContent($content)
  {
    $this->content = $content;

    return $this;
  }
}
