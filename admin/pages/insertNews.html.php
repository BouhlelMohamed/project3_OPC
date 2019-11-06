<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once '../../class/Database.php';
require_once '../../src/bootstrap.php';
require_once '../../src/utils.php';

$title   = isset($_POST['title']) ? $_POST['title'] : NULL;
$content = isset($_POST['content']) ? $_POST['content'] : NULL;
$author  = isset($_POST['author']) ? $_POST['author'] : NULL;

//On mets un if isset sinon sur chaque actualisation ca va rensigner des champs vide dans la bdd
if(isset($_POST['envoyer'])){
//  NE jamais mettre les variables dans la requete a preparer sinon grosse erreur
$req = $database->prepare("INSERT INTO news(title, content, author) VALUES(:title,:content,:author)");
$req->execute(array(
	'title' => $title,
	'content' => $content,
	'author' => $author
	));
}
?>
<html>
    <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="http://icons.iconarchive.com/icons/aha-soft/free-large-boss/512/Admin-icon.png">
    <link rel="shortcut icon" href="http://icons.iconarchive.com/icons/aha-soft/free-large-boss/512/Admin-icon.png">

    </head>
<body>

<!-- Form for the pre-registration -->
<div class="container">
    <form action="#" method="POST">
        <input type="hidden" name="id"/>
    <div class="form-group">
        <label>Le titre :</label>
        <input type="text" name="title" class="form-control" placeholder="Le titre" required>
    </div>

    <div class="form-group">
        <label>L'auteur : </label>
        <input type="text" name="author" class="form-control" placeholder="L'auteur" required>
    </div>

    <div class="form-group">
        <label>Texte : </label>
        <textarea type="text" name="content" class="form-control" placeholder="Votre texte" required></textarea>
    </div>

    <button type="submit" name="envoyer" class="btn btn-success">Publier</button>
    </form>
    <br />
    <a class="btn btn-success" href="../index.php">Revenir en arriére</a>

</div>

</body>
</html>