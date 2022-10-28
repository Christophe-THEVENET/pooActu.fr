<?php

// ------------------ CONNEXION BDD -----------------------

trait DatabaseConnect
{
  private $pdo = null;

  public function __construct()
  {
    try {
      // connexion
      $this->pdo = new PDO('mysql:host=localhost;dbname=pooactuadmin;charset=utf8', 'pooActuAdmin', '_8lh*y6w7YC/](BX');
    } catch (PDOException $e) {
      exit('Erreur : ' . $e->getMessage());
    }
  }
}



