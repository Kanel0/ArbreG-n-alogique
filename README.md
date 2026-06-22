# ArbreGénéalogique

Application web de gestion d'arbre généalogique permettant de recenser les membres d'une famille, leurs relations, mariages et décès.

## Fonctionnalités

- **Gestion des membres** : Ajout, modification, suppression et consultation des membres
- **Registre familial** : Enregistrement des individus avec nom, date de naissance, âge et genre
- **Relations parent-enfant** : Association d'un enfant à ses parents
- **Mariages** : Enregistrement des unions entre membres
- **Décès** : Enregistrement des dates de décès
- **Recherche** : Recherche de membres par nom
- **Authentification** : Système d'inscription et connexion

## Prérequis

- PHP 7.4+
- MySQL / MariaDB
- Serveur web (Apache, Nginx, etc.)

## Installation

1. Cloner le dépôt
2. Importer le schéma de base de données (base `sgbd`)
3. Configurer la connexion dans les fichiers PHP (utilisateur `root`, pas de mot de passe, port par défaut)
4. Lancer sur un serveur PHP : `php -S localhost:8000`

## Structure

```
├── css/          # Feuilles de style
├── docs/         # Pages de gestion des membres
├── features/     # Page des fonctionnalités
├── home/         # Page d'accueil
├── images/       # Ressources images
├── login/        # Page de connexion
├── person/       # Registre des personnes
├── register/     # Page d'inscription
└── review/       # Notes de révision
```

## Auteur

Projet réalisé dans le cadre d'un travail pratique.
