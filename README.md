-Créer un dossier « comics » dans le dossier laravel
-Dans le terminal se positionner dans le dossier laravel et écrire cette ligne de commande : composer create-project laravel/laravel comics
Ceci va permettre la creation des dossier et fichiers de base de laravel
-Ouvrir le dossier « comics » sur Visual Studio Code
-Creer les vues avec blade en : ressources>views
Ex: home.blade.php
-Créer dans le dossier public :
-Dossier: css
Dans ce dossier-> créer les fichier css qui vont être utilisés dans les views
-Dossier: images
Dans ce dossier ->stocker les images qui vont être utilisés dans nos views
-Dans le terminal se positionner dans le dossier comics.
-Créer un model + migration +seeder sur le terminal en rentrant cette ligne de commande : php artisan make:model character -ms
-Vérifier la creation du model + migration +seeder
Créer une nouvelle base de données « comics » *attention a utiliser le meme nom que dans le fichier .env
-Modifier le fichier .env pour qu’il fasse le lien avec la base de donnes
DB_PORT/ DB_DATABASE/DB_USERNAME/DB_PASSWORD
-Créer le contenu du fichier migration (colones)
Créer le contenu du fichier seeder (contenu des colones)
Ajouter :
	 $this->call([
            CharacterSeeder::class,
        ]);
Dans le fichier DatabaseSeeder.php
-Ajouter au fichier model —> public $timestamps=false;
-Ecrire dans le terminal : php artisan migrate
Pour nous permettre d’avoir notre migration (colones) dans la base de données sur phpmyadmin
-Ecrire dans le terminal : php artisan db:seed
Pour nous permettre d’avoir nos seeders (contenu de nos colonnes) dans la base de données sur phpmyadmin
-Créer un nouveau controller pour permettre afficher les pages:
Ecrire dans le terminal>>> php artisan make:controller NavController
-Créer un nouveau controller pour permettre de réaliser les actions sur les pages:
Ecrire dans le terminal>>> php artisan make:controller ActionController
Ajouter l’accès aux nouveaux controlllers dans le fichier web.php
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

Pour réaliser le CRUD j’ai procédé dans cet ordre:

Read:
-Créer la view list.blade.php qui va servir a afficher tous les personnages avec quelques informations
-Ajouter la fonction dans le Nav contrôleur qui va permettre l’affichage de la liste de tous les personnages 
-Ajouter la route dans le fichier web.php 

Create:
-Créer la view addCharacter.blade.php qui va servir a afficher le formulaire pour la creation d’un nouveau personnage
-Ajouter la fonction dans le Navcontroller pour permettre l’affichage (get)
-Ajouter la fonction dans le Actioncontroller pour permettre de créer et sauvegarder le nouveau personage dans la base de données (post)
-Ajouter les routes dans le fichier web.php

Delete:
-Modifier le fichier lis.blade.php : ajouter une colonne delete, form méthode POST et créer le button pour executer l’action
-Ajouter la fonction dans le Actioncontroller pour permettre de éliminer le personage dans la base de données (post)
-Ajouter les routes dans le fichier web.php

Update:
-Modifier le fichier lis.blade.php : ajouter une colonne Update, form méthode POST et créer le button pour afficher la page qui va nous permettre de réaliser l’action.
-Créer la view updateCharacter.blade.php qui va servir a afficher le formulaire pour la modification du personnage
-Ajouter la fonction dans le Navcontroller pour permettre l’affichage (get)
-Ajouter la fonction dans le Actioncontroller pour permettre de modifier et sauvegarder les changements du personage dans la base de données (post)
-Ajouter les routes dans le fichier web.php

Après verifier le correct fonctionnement de chaque étape je  crée un model + migration + seeder sur le terminal en rentrant cette ligne de commande
 php artisan make:model designer-ms

Et je répète les mêmes actions que pour les characters à l’exception de la creation de la clé étrangère. Pour celle-ci il a fallu  modifier les modèles : Designer et Character pour établir la relation 1-n / One to Many. En même temps, j’ai modifié la migration et les seeder du character, ainsi que les dossier blade pour adapter l’affichage avec la nouvelle clé étrangère.

Finalement, je répète le processus de la réalisation du CRUD avec les données des dessinateurs et je modifie les dossier .blade.php pour rendre le contenu synchronisé avec la base de données.