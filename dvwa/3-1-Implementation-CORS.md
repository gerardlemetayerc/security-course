# Mode Opératoire : Déploiement et Test de l'Exploit CORS DVWA

## Déploiement du Fichier HTML sur le Serveur Web :

1. Assurez-vous d'avoir accès au serveur web où DVWA est installé. Vous aurez besoin des autorisations nécessaires pour accéder au répertoire de document root du serveur web.

2. Clonez le dépôt Git contenant le fichier HTML d'exemple depuis GitHub. Utilisez la commande suivante dans le répertoire souhaité :
   ```
   git clone https://github.com/gerardlemetayerc/security-course.git
   ```

3. Accédez au répertoire contenant le fichier HTML :
   ```
   cd security-course/dvwa/template/cors
   ```

4. Copiez le fichier \`index.html\` vers le répertoire de document root du serveur web. Utilisez la commande suivante :
   ```
   mkdir /var/www/html/cors
   sudo cp index.html /var/www/html/cors/index.html
   ```

## Test avec le Mode "Low" de DVWA :

1. Assurez-vous que DVWA est correctement installé et fonctionne sur votre serveur web. Vous pouvez accéder à DVWA dans un navigateur en utilisant l'URL appropriée (par exemple, \`http://localhost/DVWA\`).

2. Connectez-vous à DVWA en utilisant vos identifiants (par défaut, \`admin\` et \`password\`).

3. Accédez à la section "DVWA Security" et réglez le niveau de sécurité sur "Low".

4. Accédez à l'URL suivante dans un navigateur pour ouvrir le fichier HTML que vous avez déployé :
   ```
   http://VOTREIP/cors/index.html
   ```

5. Observez le comportement de l'application dans la console du navigateur ou dans le code HTML pour voir si l'exploit CORS a réussi ou échoué.

6. Répétez le test en ajustant le niveau de sécurité de DVWA pour observer comment il affecte la réussite ou l'échec de l'exploit CORS et contrôler si ce dernier change le mot de passe (pensez à changer le mot de passe du compte entre chaque étape.
