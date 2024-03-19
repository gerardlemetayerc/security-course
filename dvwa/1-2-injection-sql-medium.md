# Mode Opératoire pour l'Exercice d'Injection SQL sur DVWA (Niveau Medium)

## Objectif de l'Exercice

Approfondir la compréhension des injections SQL en exploitant une vulnérabilité au niveau de sécurité "Medium" de DVWA, en mettant l'accent sur les techniques pour contourner des mesures de sécurité plus sophistiquées.

## Introduction

Au niveau "Medium", DVWA implémente des mesures de sécurité qui visent à bloquer les injections SQL les plus simples. Cet exercice guide les élèves à travers le processus de contournement de ces mesures.

## Étapes Détaillées

### 1. Configuration Initiale

- Assurez-vous d'être connecté à DVWA.
- Allez dans la section DVWA Security et réglez le niveau de sécurité sur "Medium".

### 2. Identification de la Vulnérabilité

- Naviguez vers la section "SQL Injection" de DVWA.
- Contrairement au niveau "Low", une simple apostrophe `'` ne provoquera pas d'erreur visible, car les erreurs SQL ne sont pas affichées à l'utilisateur.

### 3. Contournement des Mesures de Sécurité

#### Exploration Initiale

- Tentez une injection basique telle que `1' or '1' = '1` dans le champ d'entrée. Notez la réponse de l'application pour déterminer si l'injection a eu un effet.

#### Exploitation

- Les filtres mis en place au niveau "Medium" peuvent échapper certains caractères spéciaux. Une technique consiste à utiliser des commentaires SQL (`--` ou `#`) pour terminer la requête de manière prématurée.
- Par exemple, essayez d'injecter la valeur suivante : `1' or '1' = '1' #`. Cela a pour but d'ajouter une condition toujours vraie à la requête SQL et de commenter le reste de la requête originale pour éviter les erreurs syntaxiques.

### 4. Analyse des Résultats

- Observez comment l'application web réagit à votre injection. Une injection réussie au niveau "Medium" pourrait ne pas afficher des erreurs SQL explicites mais peut toujours révéler des informations ou se comporter d'une manière non prévue.
- Si l'injection réussit, vous pourriez être en mesure de récupérer des données sensibles ou de vous affranchir de certaines limitations logiques de l'application.

### 5. Documentation et Discussion

- Documentez les étapes que vous avez suivies, les requêtes injectées, et les résultats obtenus.
- Réfléchissez aux implications de la vulnérabilité que vous avez exploitée et proposez des stratégies pour la mitiger. Discutez de l'importance de filtrer et de valider toutes les entrées utilisateur, ainsi que de l'usage des requêtes préparées pour prévenir les injections SQL.

## Conclusion

Le niveau "Medium" de l'exercice d'injection SQL sur DVWA introduit des défis supplémentaires qui nécessitent une compréhension plus nuancée des mécanismes de sécurité et des techniques d'injection. Cet exercice renforce l'importance de pratiques de développement sécurisées et offre une opportunité précieuse d'apprendre comment identifier et exploiter de manière responsable les vulnérabilités dans les applications web.