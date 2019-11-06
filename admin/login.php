<?php

require_once '../class/Database.php';
require_once '../src/bootstrap.php';
require_once '../src/utils.php';

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>L3 - Project 3 </title>
  </head>
  <body>

          <!-- Form for the pre-registration -->
    <div class="container">
        <form action="index.php" method="POST">
            <input type="hidden" name="id"/>
        <div class="form-group">
            <label>Votre pseudo :</label>
            <input type="text" name="pseudo" class="form-control" placeholder="Votre pseudo">
        </div>

        <div class="form-group">
            <label>Votre mot de passe :</label>
            <input type="password" name="passwordd" class="form-control" placeholder="Votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
