<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pooActus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>






<?php
// pour charger (require) automatiquement les classes Models et Controllers
function loadClasses($class)
{
  // si il y a la string Manager dans le nom de ma classe alors c'est un controleur
  if (strpos($class, 'Manager')) {
    // on retourne la classe corespondante
    require __DIR__ . "/../Controllers/$class.php";
  } else {
    require __DIR__ . "/../Models/$class.php";
  }
}
// charge la classe a l 'instanciation
spl_autoload_register("loadClasses");
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home.php">pooActu.fr</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 20%;">
      <ul class="navbar-nav">
        <li class="nav-item d-flex align-items-baseline">
            <a class="nav-link active mx-2" aria-current="page" href="/home.php"><i class="bi bi-house-fill"></i> Acceuil</a>
        </li>
        <!--  <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

