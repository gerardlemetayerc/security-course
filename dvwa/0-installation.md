# TP : Installation de Damn Vulnerable Web Application (DVWA) sur Debian

## Objectif

Ce TP vise à installer et configurer DVWA, une application web conçue pour être intentionnellement vulnérable, sur une machine virtuelle Debian. Cela permettra aux élèves de pratiquer les compétences en administration système et en cybersécurité dans un environnement contrôlé.

## Pré-requis

- Une machine virtuelle Debian récente (Debian 10 ou 11) installée et opérationnelle.
- Accès à internet pour la VM pour télécharger les paquets nécessaires.
- Connaissances de base des commandes Linux et de l'utilisation du terminal.

## Étapes d'Installation

### Étape 1 : Mise à jour du système

Commencez par mettre à jour la liste des paquets et le système pour vous assurer que tous les logiciels sont à jour.

\```bash
sudo apt update
sudo apt upgrade -y
\```

### Étape 2 : Installation de LAMP (Linux, Apache, MySQL, PHP)

DVWA nécessite un environnement LAMP. Installez Apache, MySQL, et PHP ainsi que les extensions PHP requises.

\```bash
sudo apt install apache2 mysql-server php php-mysqli php-gd libapache2-mod-php -y
\```

### Étape 3 : Configuration de la base de données MySQL

Sécurisez votre installation MySQL et créez une base de données pour DVWA.

1. Exécutez le script de sécurisation MySQL.

\```bash
sudo mysql_secure_installation
\```

Répondez aux questions pour définir le mot de passe de l'utilisateur root de MySQL et sécuriser votre installation.

2. Connectez-vous à MySQL pour créer la base de données DVWA.

\```bash
sudo mysql -u root -p
\```

3. Une fois connecté, créez la base de données et l'utilisateur DVWA.

\```sql
CREATE DATABASE dvwa;
CREATE USER 'dvwa'@'localhost' IDENTIFIED BY 'dvwapassword';
GRANT ALL PRIVILEGES ON dvwa.* TO 'dvwa'@'localhost';
FLUSH PRIVILEGES;
EXIT;
\```

Remplacez \`'dvwapassword'\` par un mot de passe sécurisé de votre choix.

### Étape 4 : Téléchargement et Installation de DVWA

1. Téléchargez DVWA depuis le dépôt GitHub officiel.

\```bash
cd /var/www/html
sudo git clone https://github.com/digininja/DVWA.git
\```

2. Changez le propriétaire du répertoire DVWA pour \`www-data\`.

\```bash
sudo chown -R www-data:www-data /var/www/html/DVWA
\```

### Étape 5 : Configuration de DVWA

1. Copiez le fichier de configuration par défaut.

\```bash
cd /var/www/html/DVWA/config
sudo cp config.inc.php.dist config.inc.php
\```

2. Modifiez le fichier de configuration pour définir la base de données et le mot de passe.

\```bash
sudo nano config.inc.php
\```

Trouvez les lignes suivantes et remplacez les valeurs par celles que vous avez définies lors de la création de la base de données MySQL :

\```php
$_DVWA[ 'db_user' ] = 'dvwa';
$_DVWA[ 'db_password' ] = 'dvwapassword';
$_DVWA[ 'db_database' ] = 'dvwa';
\```

### Étape 6 : Dernières Configurations et Redémarrage d'Apache

1. Redémarrez Apache pour appliquer les changements.

\```bash
sudo systemctl restart apache2
\```

2. Modifiez les permissions pour permettre à DVWA de fonctionner correctement.

\```bash
sudo chmod -R 777 /var/www/html/DVWA/hackable/uploads/
sudo chmod -R 777 /var/www/html/DVWA/external/phpids/0.6/lib/IDS/tmp/phpids_log.txt
\```

### Étape 7 : Accéder à DVWA

1. Ouvrez un navigateur web et accédez à \`http://<ADRESSE_IP_VM>/DVWA/setup.php\` pour terminer l'installation.

2. Suivez les instructions à l'écran pour finaliser la configuration.

3. Connectez-vous avec les identifiants par défaut : \`admin