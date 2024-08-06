<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validation simple
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        \
        echo "<h1>Merci pour votre message, $name !</h1>";
        echo "<p><strong>Email :</strong> $email</p>";
        echo "<p><strong>Sujet :</strong> $subject</p>";
        echo "<p><strong>Message :</strong> $message</p>";
    } else {
        echo "<h1>Erreur : Tous les champs sont requis.</h1>";
    }
} else {
    echo "<h1>Erreur : Méthode de requête non valide.</h1>";
}
?>
