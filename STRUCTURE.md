# `🧱` Structure du projet

## `📁` App

- Dossier qui va contenir l'ensemble de la logique
  du projet. (MVC)

## `📁` database

- Dossier qui va contenir une classe de connexion à
  la base de données.

## `📁` docs

- Dossier qui va contenir différentes informations à propos de votre projet comme :

  **db**

  1.le schéma de la base de données en **.png** exporté depuis MySQL Workbench.

  2.le fichier **.sql** de la base de données exporté depuis MySQL Workbench.

  3.le fichier **.sql** avec les données de test pour pouvoir importer celles-ci dans la base de données.

  4.un fichier appelé **access.md** avec le nom de l'utilisateur de votre de base de données et le mot de passe. Il s'agit de celui utilisé depuis l'application. Pour rappel, un user par base c'est la base !

  **wireframes**

  - Vos maquettes réalisées avec Pencil pour les pages : Accueil, A propos, Blog, Contact, Login et 404.

  **MEMO.md**

  - Un fichier qui peut servir de presse-papier pour y coller des informations ou du code à reprendre.

## `📁` Public

- Tous les fichiers sous ce répertoire sont accessibles par le nom de domaine. Il s'agit de vos pages, des fichiers .css, des fichiers .js et des images servies aux visiteurs.

  **css**

  - L'endroit pour stocker vos fichiers .css pour le projet.

  **img**

  - L'endroit pour stocker vos images optimisées pour le projet.

  **js**

  - L'endroit pour stocker vos fichiers .js pour le projet.

  **index.php**

  - Fichier qui sera directement contacté par le serveur web Apache dès votre arrivée sur le site.

  **robots.txt**

  - Fichier pour les robots d'indexation.

⚠️ Vous devez ajouter à la racine du dossier public, à côté de robots.txt et index.php, votre fichier favicon.ico

## `📁` routes

- Dossier qui va contenir la logique de notre système de routing.

## `📁` views

- Dossier qui va contenir nos vues pour la partie frontend et backend dans des dossiers séparés. Ici, vous allez devoir déposer vos pages.html

  **admin**

  - Les vues de la partie d'administration du site (backend).

    **css**

  - L'endroit pour stocker vos fichiers .css pour le projet.

    **img**

  - L'endroit pour stocker vos images optimisées pour le projet.

    **js**

  - L'endroit pour stocker vos fichiers .js pour le projet.

  **auth**

  - Tout ce qui concerne l'authentification comme la page de login.

  **blog**

  - L'ensemble des pages du frontend de votre site.

  ***

  **Pour le reste du projet :**

  - un fichier .editorconfig pour la configuration de vscode ;
  - un fichier .gitignore pour lister ce qui ne doit pas être envoyé sur le système de versioning ;
  - un fichier .htaccess pour définir le root du site au niveau du dossier public ;
  - un composer.json pour définir les dépendances ;
  - un fichier README.md pour présenter le projet ;
  - un fichier STRUCTURE.md pour définir la structure du projet

---

**Listing des extensions :**

- Auto Close Tag :
  https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag
- HTML Preview :
  https://marketplace.visualstudio.com/items?itemName=george-alisson.html-preview-vscode
- Material Icon Theme :
  https://marketplace.visualstudio.com/items?itemName=PKief.material-icon-theme
- Open in browser :
  https://marketplace.visualstudio.com/items?itemName=techer.open-in-browser
- PHP Intelephense :
  https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client
- PHP Namespace Resolver :
  https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver
- PHP region :
  https://marketplace.visualstudio.com/items?itemName=emandeguzman.php-region
- PHPDoc Comment :
  https://marketplace.visualstudio.com/items?itemName=rexshi.phpdoc-comment-vscode-plugin
- Prettier - Code formatter :
  https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode
- php cs fixer :
  https://marketplace.visualstudio.com/items?itemName=junstyle.php-cs-fixer
- Dracula Official :
  https://marketplace.visualstudio.com/items?itemName=dracula-theme.theme-dracula
