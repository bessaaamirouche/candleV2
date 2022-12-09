<?php
  // Récupération des données du formulaire
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Traitement des données...

  // Affichage d'un message de confirmation
  echo "Merci pour votre message, $nom. Nous vous contacterons prochainement.";
 // Récupération des données du formulaire
 $nom = $_POST['nom'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 // Préparation de l'email
 $to = "destinataire@exemple.com";
 $subject = "Nouveau message de $nom";
 $body = "Vous avez reçu un nouveau message de $nom.\n\n";
 $body .= "Email : $email\n\n";
 $body .= "Message :\n$message";

 // Envoi de l'email
 mail($to, $subject, $body);

 // Affichage d'un message de confirmation
 echo "Merci pour votre message, $nom. Nous vous contacterons prochainement.";
?>