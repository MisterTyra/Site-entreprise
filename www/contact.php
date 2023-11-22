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


include 'index.html';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contactez-nous</h2>

    <?php if (!empty($success)) : ?>
        <p><?php echo $success; ?></p>
    <?php else : ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required><?php echo $message; ?></textarea><br>

            <input type="submit" value="Envoyer">
        </form>
    <?php endif; ?>
</body>
</html>
