# Analyse OSINT (Open Source Intelligence) à l'aide de Maltego

# Introduction

### Objectif

Utiliser Maltego pour collecter et analyser des informations sur le nom de domaine de votre entreprise.

### Matériel nécessaire

Un ordinateur avec Maltego Community Edition installé, un accès Internet, et le nom de domaine de l'entreprise à analyser (le nom de domaine de votre entreprise).

## Mode opératoire

### Etape 1 : Installation de Maltego

* Téléchargez Maltego sur l'URL suivante : https://downloads.maltego.com/maltego-v4/windows/MaltegoSetup.JRE64.v4.6.0.exe
* Installez Maltego à l'aide des paramètres par défaut

### Etape 2 : Lancement de Maltego

* **Ouvrir Maltego** : Lancez Maltego sur votre ordinateur. Si c'est la première fois que vous l'utilisez, vous devrez peut-être vous enregistrer ou vous connecter (prenez la version **Community CE**).
* **Sélectionner un espace de travail** : Choisissez 'New' pour créer un nouvel espace de travail. Vous allez réaliser votre analyse sur cet espace vierge.

### Etape 3 : Ajout d'un nom de domaine

* **Trouver l'entité Domaine** : Dans la barre d'outils, cliquez sur 'Entity Palette'. Trouvez l'icône qui représente un domaine (généralement marqué par un globe ou une icône de la Terre).
* **Ajouter l'entité au graphique** : Faites glisser l'entité 'Domaine' dans l'espace de travail central. Une boîte de dialogue s'ouvre (dans le cas contraire, double cliquez sur l'icône).
* **Entrer le nom de domaine** : Dans la boîte de dialogue, entrez le nom de domaine de l'entreprise que vous analysez dans le champ *"Domain Name"* et cliquez sur 'OK'.

###  Étape 4 : Utilisation des transformations

* **Sélectionner le domaine** : Cliquez sur l'entité domaine que vous avez ajoutée à votre graphique.
* **Appliquer des transformations** : Faites un clic droit sur l'entité, puis choisissez 'Run Transformations' > 'All Transforms'. Cela lancera une série de recherches automatiques liées à votre domaine.
* **Observer les résultats** : Attendez que Maltego termine de traiter les transformations. Vous verrez apparaître différents nœuds connectés à votre domaine initial, représentant des informations comme les sous-domaines, les adresses IP, etc.

### Étape 5 : Analyse des informations

* **Explorer les liens** : Examinez les connexions entre les différents éléments recueillis. Cliquez sur chaque nœud pour voir des détails spécifiques sur cette entité.
* **Identifier des patterns** : Essayez de repérer des modèles ou des informations pertinentes concernant la sécurité ou la structure du domaine. Par exemple, des sous-domaines inattendus ou des adresses IP partageant certaines vulnérabilités.
* **Pousser l'analyse** : sur des éléments que vous considérez comme pertinent, lancez de nouveau une transformation, et voyez quelles informations peuvent ressortir à l'aide de ces analyses supplémentaires

### Etape 6 : Analyse avancée
* Sélectionnez l'entité cible (par exemple, une application web) et appliquez les transformations pertinentes pour révéler les configurations et les technologies utilisées.
* Documentez toute version de logiciel ou configuration potentiellement vulnérable identifiée.
* Recherchez des correspondances dans les bases de données de vulnérabilités pour les versions de logiciels ou configurations identifiées.
* Notez toutes les découvertes potentielles et les zones qui nécessitent une investigation plus approfondie ou un test de pénétration ciblé.

Aidez-vous du fichier de template afin de fournir votre rapport d'analyse.
