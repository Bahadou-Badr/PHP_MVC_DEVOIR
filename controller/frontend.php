<?php

require('model/frontend.php');

function listSujets()
{
    $sujets = getSujets();

    require('view/frontend/listPostsView.php');
}

function sujet()
{
    $sujet = getSujet($_GET['id']);
    $contacts = getContacts($_GET['id']);

    require('view/frontend/postView.php');
}

function addContact($sujetId, $nom, $prenom, $tel, $mail, $fax, $lieu_ins, $code_ins)
{
    $affectedLines = postContact($sujetId, $nom, $prenom, $tel, $mail, $fax, $lieu_ins, $code_ins);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le contact !');
    }
    else {
        header('Location: index.php?action=sujet&id=' . $sujetId);
    }
}
