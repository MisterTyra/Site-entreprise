<?php
// Définir des variables pour les valeurs par défaut ou vides
$name = $email = $message = $success = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    // Valider les données (vous pouvez ajouter des validations supplémentaires selon vos besoins)

    // Si tout est valide, envoyer l'e-mail
    $to = "votre@email.com";
    $subject = "Nouveau message de $name";
    $email_content = "Nom: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";
    $headers = "From: $email\n";

    if (mail($to, $subject, $email_content, $headers)) {
        $success = "Votre message a été envoyé avec succès.";
    } else {
        $success = "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
    }
}

// Fonction pour nettoyer les données du formulaire
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <title>Portefolio</title>
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
                  <a class="dropdown-item" href="stage1.html">Stage 1er année
  
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
</header>
<body id='contact' class ='bg-dark'>
    <h2>Contactez-nous</h2>

    <?php if (!empty($success)) : ?>
        <p><?php echo $success; ?></p>
    <?php else : ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class='form-group'>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required><?php echo $message; ?></textarea><br>

            <input type="submit" value="Envoyer">
          </div>
        </form>
    <?php endif; ?>
    
</body>
</html>

