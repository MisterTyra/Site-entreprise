<?php
$formexist = false;
if($formexist)
{
    $destinataire = 'ethanreina91860@gmail.com';

    $expediteur = $_POST['email'];
    
    $objet = $_POST['message'];

    $headers  = 'MIME-Version: 1.0' . "\n"; 
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; 
    $headers .= 'To: '.$destinataire."\n"; 
    $headers .= 'From:<'.$expediteur.'>'."\n"; 


    $message =  '<div style="width: 100%; text-align: center; font-weight: bold">'.'<br>'.'Nom : '.$_POST['nom'].'<br>'.'<br>'.'Prenom:'.$_POST['prenom'].
    '<br>'.'Email :'.$_POST['email'].'<br>'.'Ville:'.$_POST['ville'].'<br>'.'Message:'.$_POST['message'].'</div>';

    mail($destinataire, $objet, $message, $headers);
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <nav class="navbar navbar-expand-lg bg-light m-2 sticky-top rounded-pill" id="nav">

    <div class="container">


      <a class="navbar-brand" href="index.html">
        <img id="logo" src="ETHAN__1_-removebg-preview.png" alt="Bootstrap" width="75" height="75">
      </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active text-dark fs-5" href="Qui_suisje.html">Mon parcours scolaire</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Experiences professionnelles
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li>
                <a class="dropdown-item" href="projet.html">Stage 1er année

                </a>
              </li>
              <li>
                <a class="dropdown-item" href="Stage2.html">Stage 2ème année
                </a>
              </li>
            </ul>

            <li class="nav-item">
                <a class="nav-link active text-dark fs-5" href="projet.html">Projet</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active text-dark fs-5" href="veille.html">Veille technologique</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-dark fs-5" href="contact.php">Contact</a>
          </li>

        </ul>

      </div>

    </div>

  </nav>

  
  <div 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>