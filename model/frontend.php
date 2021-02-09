<?php
function getSujets()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, titre, auteur, DATE_FORMAT(date_presentation, \'%d %b %Y\') AS creation_date_fr FROM sujets ORDER BY date_presentation DESC LIMIT 0, 5');

    return $req;
}

function getSujet($sujetId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, titre, auteur, DATE_FORMAT(date_presentation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM sujets WHERE id = ?');
    $req->execute(array($sujetId));
    $post = $req->fetch();

    return $post;
}

function getContacts($sujetId)
{
    $db = dbConnect();
    $contacts = $db->prepare('SELECT id, nom, prenom, tel, mail, fax, lieu_ins, code_ins, DATE_FORMAT(date_inscription, \'%d %b %Y \') AS comment_date_fr FROM contacts WHERE id_sujet = ? ORDER BY date_inscription DESC');
    $contacts->execute(array($sujetId));

    return $contacts;
}

function postContact($sujetId, $nom, $prenom, $tel, $mail, $fax, $lieu_ins, $code_ins)
{
    $db = dbConnect();
    $contacts = $db->prepare('INSERT INTO contacts(id_sujet, nom, prenom, tel, mail, fax, date_inscription, lieu_ins, code_ins) VALUES(?, ?, ?, ?, ?, ?, NOW() , ?, ?)');
    $affectedLines = $contacts->execute(array($sujetId, $nom, $prenom, $tel, $mail, $fax, $lieu_ins, $code_ins));

    return $affectedLines;
}

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=db_mvc;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
