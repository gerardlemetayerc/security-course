# Mode Opératoire : Déchiffrement des Communications TLS avec Wireshark sous Windows

## 1. Création de la Variable d'Environnement SSLKEYLOGFILE :

   - Appuyez sur la touche Windows + R pour ouvrir la boîte de dialogue "Exécuter".
   
   - Tapez `mmc` dans la boîte de dialogue "Exécuter" et appuyez sur Entrée. Cela ouvrira la Console de gestion Microsoft (MMC).
   
   - Dans la console MMC, allez dans "Fichier" > "Ajouter/Supprimer un composant logiciel enfichable".
   
   - Sélectionnez "Variables d'environnement" dans la liste des composants disponibles, puis cliquez sur "Ajouter".
   
   - Cliquez sur "OK" pour ajouter les variables d'environnement à la console MMC.
   
   - Dans la fenêtre "Variables d'environnement", sous l'onglet "Variables utilisateur", cliquez sur "Nouveau".
   
   - Dans le champ "Nom de la variable", entrez `SSLKEYLOGFILE`.
   
   - Dans le champ "Valeur de la variable", entrez le chemin absolu du répertoire où vous souhaitez enregistrer le fichier de journalisation des clés SSL.
   
   - Cliquez sur "OK" pour créer la variable d'environnement SSLKEYLOGFILE.
   
   - Fermez la console MMC.

## 2. Configuration de Wireshark pour Utiliser le Fichier de Clés SSL :

   - Ouvrez Wireshark.
   
   - Allez dans "Édition" > "Préférences".
   
   - Dans la boîte de dialogue des préférences, sélectionnez "Protocols" dans la colonne de gauche, puis sélectionnez `TLS` dans la liste des protocoles.
   
   - Cochez la case "Use the (Pre)-Master-Secret log file" et entrez le chemin absolu vers le fichier de journalisation des clés SSL que vous avez configuré dans la variable d'environnement SSLKEYLOGFILE.
   
   - Cliquez sur "OK" pour enregistrer les modifications et fermer la boîte de dialogue des préférences.

## 3. Lancement de la Capture de Communication :

   - Dans Wireshark, sélectionnez l'interface réseau que vous souhaitez utiliser pour la capture dans la barre d'outils.
   
   - Cliquez sur le bouton "Démarrer la capture" (icône du petit homme courant).
   
   - Ouvrez votre navigateur web (Chrome ou Firefox) et commencez à naviguer sur des sites HTTPS.
   
   - Revenez à Wireshark après avoir effectué vos activités de navigation.
   
   - Cliquez sur le bouton "Arrêter la capture" (carré rouge) dans la barre d'outils pour arrêter la capture.
   
   - Wireshark affichera maintenant les paquets capturés et déchiffrés dans la fenêtre principale.
