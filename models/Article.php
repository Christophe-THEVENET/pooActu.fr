<?php

use DateTime;

date_default_timezone_set('UTC');



class Article
{

  private int $id;
  private string $title;
  private string $content;
  private DateTime $publishedAt;


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
    if (is_string($content) && strlen($content) > 3 && strlen($content) < 500) {
      $this->content = htmlspecialchars($content);
    }
    return $this;
  }

  public function getPublishedAt()
  {
    return $this->publishedAt;
  }

  public function setPublishedAt()
  {
    $this->publishedAt = new DateTime();

    return $this;
  }
}
