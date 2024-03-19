# Mode Opératoire pour l'Exercice d'Injection SQL sur DVWA (Niveau Low)

## Objectif de l'Exercice

L'objectif est d'apprendre à identifier et exploiter une vulnérabilité d'injection SQL dans une application web pour comprendre l'importance de sécuriser les interactions entre une application et sa base de données.

## Qu'est-ce qu'une Injection SQL ?

Une injection SQL est une technique d'attaque qui exploite une vulnérabilité dans le traitement des entrées utilisateur d'une application web. L'attaquant injecte des commandes SQL malveillantes dans les champs d'entrée prévus pour l'utilisateur, ce qui peut lui permettre de lire, modifier, ou supprimer des données dans la base de données.

## Étapes Détaillées

### 1. Préparation de l'Environnement

- Assurez-vous que DVWA est installé et accessible via votre navigateur.
- Connectez-vous avec les identifiants par défaut (`admin / password`) et réglez le niveau de sécurité sur "Low".

### 2. Accès à l'Exercice d'Injection SQL

- Dans le menu DVWA, cliquez sur l'onglet "SQL Injection" pour accéder à l'exercice.

### 3. Test de Vulnérabilité

- Essayez d'entrer un caractère unique `'` (apostrophe) dans le champ de saisie. Si le système renvoie une erreur SQL, cela indique que l'application est potentiellement vulnérable aux injections SQL.

### 4. Exploitation de la Vulnérabilité

- Dans le champ de saisie, entrez la requête SQL suivante : `' OR '1'='1`. Cette commande tente de contourner l'authentification (ou toute autre logique métier) en exploitant la logique SQL.

### 5. Observation des Résultats

- Si l'injection est réussie, l'application pourrait afficher des données sensibles ou se comporter de manière inattendue. Dans le contexte de cet exercice, vous pourrez voir des informations qui ne devraient normalement pas être accessibles.

### 6. Documentation et Rapport

- Documentez votre processus et les résultats obtenus. Incluez les requêtes SQL utilisées, les messages d'erreur éventuels, et une capture d'écran des données exposées par l'injection SQL réussie.