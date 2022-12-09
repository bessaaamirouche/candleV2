<?php
if (isset($_POST["message"])){
    $retour = mail('amirouche.dev@gmail.com', $_POST['name'],"Reply-to:" .$_POST['email'], $_POST['message'], '');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>