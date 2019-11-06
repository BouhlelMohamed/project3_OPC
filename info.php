<?php

/* 

Systeme des news
Systeme de preinscriptions : 
- Choisir son film
Dashboard Admin : 
- Voir le nombre d'inscrit pour chaque film
Optionnel : modifier un film

SQL
   *une base de données Film_P3
1 - une table pour les films
    - id A.I
    - nameOfFilm Varchar 255
    - description LongText
    - projectionDate Date
2 - une table pour les pre-registrations
    - id A.I
    - name Varchar 255
    - email Varchar 320
    - id_film 
3 - une table admins
    - id A.I
    - pseudo Varchar 255
    - password Varchar 255
4 - une table news
    - id A.I
    - title Varchar 255
    - text LongText
    - author Varchar 255

PHP
1 - Database.class.php
    - connect()

2 - Person.class.php
    - $id;
    - $name;
    - $email;
    - preRegistration()

3 - Film.class.php
    - $id
    - $nameOfFilm;
    - $description;
    - $projectionDate;
    - $images
    - showFilm()

4 - Admin.class.php
    - $pseudo;
    - $password;

    - $nameOfFilm;
    - $description;
    - $projectionDate;

    - $idOfPerson;
    - $nameOfPerson;
    - $emailOfPerson;

    - $titleOfNew;
    - $textOfNew;
    - $Author;

    - showFilm()
    - showPreRegistrationOfFilm()
    - createNews()
    - deleteNews()

JS - React
1 - Filtre par genre

HTML/CSS
1 - Template OnePage
2 - Template Admin


*/