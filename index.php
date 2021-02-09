<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listSujets();
    }
    elseif ($_GET['action'] == 'sujet') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            sujet();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addContact') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['nom']) && !empty($_POST['prenom'])) {
                addContact($_GET['id'], $_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['mail'], $_POST['fax'], $_POST['lieu_ins'], $_POST['code_ins']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    listSujets();
}
