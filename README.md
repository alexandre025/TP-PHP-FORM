# Partie 1: TP-PHP-FORM

## Création de la base de données

- Créez une base de données
- Ajoutez une table `contact`
- Dans cette table `contact` ajoutez les columns `id`, `full_name_or_company`, `email` et `comment`

## Ecrire la requête SQL

Ecrivez la requête INSERT permettant d'ajouter des données dans la table `contact`. Testez la via PhpMyAdmin.

## Configurer la connexion à la base de données

La fonction `getDatabase` incluse dans le fichier `lib/app.php` a besoins de contantes contenant les informations de connexion 
qui ne sont pas dans le projet pour des raisons de sécurités.

- Créez le fichier `lib/secrets.php`. Celui ci ne sera jamais dans un commit git étant donné que nous l'avons ajouté au fichier `.gitignore`.

- Remplissez le en modifiant au besoins :
```php
<?php
  define('DB_HOST', 'mysql:host=localhost;dbname=your_db_name');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
?>
```

## Compléter le script php

- Executez la requête INSERT précédement écrite dans le cadre du script du formulaire `controllers/contact_form.php`.
- Effectuez une redirection vers `index.php` et affichez un message de succès.

## Pour aller plus loin

Quelques idées: 
- Empêchez l'accès au script du formulaire en mode GET.
- Gérez la gestion des erreurs dans le formulaire dans le script php (email non valide, champs manquant...) et affichez une erreur dans le formulaire.

# Partie 2 : API

Créer un script en PHP permettant de renvoyer le résultat d'une recherche sur la table comment au format JSON:
- Assurez vous d'avoir un peu de data dans votre base de données.
- Ecrivez votre requête SQL avec l'opérateur SQL LIKE cherchant à la fois sur la column `full_name_or_company` et `email`.
- Pour le script PHP, utilisez la méthode GET avec le GET parameters "search".
- Utilisez votre requête SQL, construisez un tableau de données avec les résultats et encodez le en JSON avec la fonction `json_encode`.

# Partie 3 : Consommer l'API

- Créer une nouvelle page search.php contenant un champs de recherche text. 
- Utiliser `$.get` de JQuery pour envoyer une requête sur notre API.
- Afficher les résultats dans une div en dessous de la barre de recherche.
- Afficher un message lorsqu'il n'y a pas de résultats.