# Eloquent_test

Eloquent_test is a small Laravel sample project demonstrating basic Eloquent usage and a simple Contacts CRUD (Create, Read, Update, Delete).

## Fonctionnalités

- CRUD pour les contacts (`phone`, `editor_id`, relation `editor`).
- Vues Blade pour `index`, `show`, `create`, `edit` (Tailwind CSS simple via CDN).

## Prérequis

- PHP 8.x
- Composer
- Base de données (MySQL, SQLite, etc.)

## Installation rapide

1. Installer les dépendances PHP:

```bash
composer install
```

2. Copier `.env` et générer la clé:

```bash
cp .env.example .env
php artisan key:generate
```

3. Configurer la connexion à la base de données dans `.env`, puis lancer les migrations:

```bash
php artisan migrate
```

5. Lancer le serveur local:

```bash
php artisan serve
```

Accédez ensuite à `http://127.0.0.1:8000`.

## Routes importantes

Le contrôleur de ressources pour les contacts est enregistré (routes resource). Utilisez:

- `contacts.index` — liste
- `contacts.create` — formulaire de création
- `contacts.store` — sauvegarder
- `contacts.show` — détail
- `contacts.edit` — formulaire d'édition
- `contacts.update` — mettre à jour

## Tailwind CSS

Pour la simplicité, certaines vues utilisent la version CDN de Tailwind (`<script src="https://cdn.tailwindcss.com"></script>`). Si vous souhaitez intégrer Tailwind via Vite (recommandé pour production), installez et configurez Tailwind dans `resources/css` et `vite.config.js`.

## Notes spécifiques au projet

- Vues modifiées/ajoutées: `resources/views/contact/Create.blade.php`, `Edit.blade.php`, `Show.blade.php`, `index.blade.php`.
- Le formulaire `editor_id` est actuellement un champ texte; vous pouvez le remplacer par une `select` liée au modèle `Editor`.

## Tests

Le projet contient une configuration de base pour PHPUnit. Exécutez les tests avec:

```bash
./vendor/bin/phpunit
```

## Structure du projet

Extrait de l'arborescence principale (éléments importants) :

- `app/` — contrôleurs, modèles, providers
- `bootstrap/` — démarrage de l'application
- `config/` — configuration
- `database/` — migrations, seeders, factories
- `public/` — point d'entrée web
- `resources/views/` — vues Blade (`contact/` contient Create/Edit/Show/index)
- `resources/css` — CSS (si Tailwind via Vite)
- `routes/` — fichiers de routes (`web.php`)
- `storage/` — logs et fichiers temporaires
- `tests/` — tests PHPUnit

## Commandes utiles (création des étapes du projet)

Voici les commandes couramment utilisées pour créer les éléments de ce projet :

- Créer un nouveau projet Laravel :

```bash
composer create-project laravel/laravel Nom_projet
```

- Générer un contrôleur de ressources (exemple utilisé ici) :

```bash
php artisan make:controller ContactController --resource
```

- Générer un modèle avec migration et factory :

```bash
php artisan make:model Contact -m -f
```

- Générer une migration séparée :

```bash
php artisan make:migration create_contacts_table
```

- Générer un seeder :

```bash
php artisan make:seeder ContactsTableSeeder
```

- Exécuter les migrations :

```bash
php artisan migrate
```

- Lancer un seeder :

```bash
php artisan db:seed --class=ContactsTableSeeder
```

- Lancer le serveur local :

```bash
php artisan serve
```

## Commandes spécifiques utilisées lors du développement

- Création du contrôleur ContactResource (exécutée dans ce repo) :

```bash
php artisan make:controller ContactController --resource
```


