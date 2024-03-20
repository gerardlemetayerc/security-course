# Configuration d'un Certificat Auto-signé pour DVWA :

## 1. Installation d'OpenSSL :
   - Assurez-vous que OpenSSL est installé sur votre système. Si ce n'est pas le cas, vous pouvez l'installer en utilisant la commande suivante (pour Ubuntu/Debian) :
     ```
     sudo apt install openssl
     ```

## 2. Génération de la clé privée :
   - Ouvrez un terminal sur votre système.
   - Utilisez la commande suivante pour générer une nouvelle clé privée :
     ```
     openssl genrsa -out dvwa.key 2048
     ```

## 3. Génération du certificat auto-signé :
   - Utilisez la commande suivante pour générer un certificat auto-signé en utilisant la clé privée générée précédemment :
     ```
     openssl req -new -x509 -key dvwa.key -out dvwa.crt -days 3650
     ```

## 4. Configuration de DVWA :
   - Accédez au répertoire d'installation de DVWA sur votre serveur web (par exemple, `/var/www/html/dvwa/`).
   - Copiez le fichier de clé privée (`dvwa.key`) et le certificat auto-signé (`dvwa.crt`) dans ce répertoire.

## 5. Configuration du fichier de configuration Apache :
   - Éditez le fichier de configuration d'Apache pour DVWA. Celui-ci est généralement situé dans `/etc/apache2/sites-available/`.
   - Ajoutez les lignes suivantes pour configurer le certificat auto-signé :
     ```
     SSLEngine on
     SSLCertificateFile /var/www/html/dvwa/dvwa.crt
     SSLCertificateKeyFile /var/www/html/dvwa/dvwa.key
     ```
   Assurez-vous de remplacer les chemins des fichiers par le chemin absolu vers les fichiers de clé privée et de certificat auto-signé que vous avez générés.

## 6. Redémarrez Apache :
   - Utilisez la commande suivante pour redémarrer le service Apache afin que les modifications de configuration prennent effet :
     ```
     sudo service apache2 restart
     ```

## 7. Accéder à DVWA via HTTPS :
   - Ouvrez un navigateur web et accédez à l'URL de votre DVWA en utilisant `https://` au lieu de `http://`. Par exemple : `https://localhost/dvwa`.
   - Vous pourrez rencontrer un avertissement de sécurité car le certificat est auto-signé. Ajoutez une exception pour continuer.

Maintenant, DVWA devrait être accessible via HTTPS avec le certificat auto-signé que vous avez configuré. Assurez-vous de toujours utiliser des certificats signés par une autorité de certification de confiance dans un environnement de production pour garantir la sécurité des communications.
