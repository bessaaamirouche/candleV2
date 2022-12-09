<?php
    $retour = mail('amirouche.dev@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: bessaa.amirouche@gmail.com');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>