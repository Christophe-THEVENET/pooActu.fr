<?php



abstract class HydrateObject
{

  public function hydrate(array $data): void
  {
    foreach ($data as $key => $value) {
      // le setteur de chaque data du style setData
      $method = 'set' . ucfirst($key); // setTitle / setContent
      // si la méthode existe dans l'objet courant on l'execute avec la valeur du tableau de data en parametre
      method_exists($this, $method) ? $this->$method($value) : null; //   ex: $this->setTitle($_POST['content']) 
    }
  } // ---------------------------------------------------------------------

}

