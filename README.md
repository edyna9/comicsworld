Créer un dossier « comics » dans le dossier laravel
Dans le terminal se positionner dans le dossier laravel et écrire cette ligne de commande : composer create-project laravel/laravel comics
Ceci va permettre la creation des dossier et fichiers de base de laravel
Ouvrir le dossier « comics » sur Visual Studio Code
Creer les vues avec blade en : ressources>views
Ex: home.blade.php
-Créer dans le dossier public :
	-Dossier: css
		Dans ce dossier-> créer les fichier css qui vont être utilisés dans les views
	-Dossier: images
		Dans ce dossier ->stocker les images qui vont être utilisés dans nos views
Dans le terminal se positionner dans le dossier comics.
-Créer un model + migration +seeder sur le terminal en rentrant cette ligne de commande
 php artisan make:model character -ms
-Vérifier la creation du model + migration +seeder
Créer une nouvelle base de données « comics » *attention a utiliser le meme nom que dans le fichier .env
-Modifier le fichier .env pour qu’il fasse le lien avec la base de donnes
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
- Créer le contenu du fichier migration (colones)
Créer le contenu du fichier seeder (contenu des colones)
Ajouter :
	 $this->call([
            CharacterSeeder::class,
        ]);
Dans le fichier DatabaseSeeder.php
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

Pour réaliser le CRUD je vais procéder dans cet ordre:

Read:
-Créer la view list.blade.php qui va servir a afficher tous les personnages avec quelques informations
-Ajouter la fonction dans le Nav contrôleur
-Ajouter la route dans le fichier web.php 

Create:

Delete:

Update:
