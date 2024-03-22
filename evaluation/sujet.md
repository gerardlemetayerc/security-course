
# Demande de Propositions (RFP) : Modernisation de l'Infrastructure IT chez Mettalugic France

## 1. Introduction

Mettalugic France, leader dans la production de pièces métalliques et basée dans les Yvelines depuis 1989, lance une demande de propositions pour la modernisation de son infrastructure IT, l'amélioration de la sécurité des données et l'implémentation d'une solution de télétravail sécurisée.

## 2. Contexte de l'Entreprise

- **Nom** : Mettalugic France
- **Fondation** : 1989
- **Emplacement** : Yvelines, France
- **Activité** : Production de pièces métalliques
- **Infrastructure IT Actuelle** :
  - Serveur Dell T110 (2014), sous Hyper-V, avec Windows Server 2012 R2.
     - Hébergement d'un Active Directory en VM, sous Windows Server 2012 R2
     - Hébergement d'un serveur de fichier sous Windows Server 2012 R2, avec :
       - 1 partage CIFS administratif
       - 1 partage SMBv1 pour les machines de conception
       - 1 partage CIFS pour les employés
  - Postes de travail Windows 10, avec accès MSTSC via internet
       - Les postes de travail des employés de conception dispose chacun de la solution AutoCAD, permettant de réaliser les schémas d'usinages consommés par les machines de conceptions
       - A noter :  `AutoCAD` est une application très consommatrice en `RAM` et en `GPU`
  - Licences Microsoft 365 Business pour chaque employé (messagerie, onedrive, sharepoint online...)
  - Réseau unifié comprenant 15 postes de travail, 10 machines de conception, le serveur et un routeur. Téléphonie via PABX.
  - La sauvegarde est réalisée via un robocopy vers un serveur NAS Synology DS223J avec 2 disques de 3 To en RAID 0
  - Le réseau est composé d'un switch CISCO de 25 ports et d'une box internet assurant le routage
       - La box internet une ligne SDSL. Des lignes fibres arrivent en bas du bâtiment, des travaux d'amménagement seraient à prévoir par la société afin de tirer la fibre jusqu'au locaux techniques (coût des travaux estimés à 20.000 €). 
  - Il n'y a pas de parefeu, pas de serveur proxy
  - Le DNS est assuré par le serveur Active Directory

## 3. Problèmes à Résoudre

- Nécessité de moderniser l'infrastructure IT vieillissante.
- Besoin de renforcer la sécurité des données et des accès.
- Adaptation de l'entreprise au télétravail dans un contexte post-pandémique.

## 4. Objectifs du Projet

- **Modernisation de l'Infrastructure** : Mises à niveau matérielles et logicielles requises.
- **Amélioration de la Sécurité** : Actualisation des protocoles de sécurité et sécurisation des accès à distance.
- **Support au Télétravail** : Développement d'une infrastructure permettant le télétravail sécurisé.

## 5. Budget

- **Disponible** : 600.000 €.

## 6. Livrables

- **Analyse des Besoins** : Diagnostic de l'infrastructure actuelle et identification des faiblesses.
- **Proposition de Solution** :
  - Plan pour la modernisation de l'infrastructure.
  - Stratégies de sécurité améliorées.
  - Infrastructure adaptée au télétravail.
- **Schémas Architecturaux** : Visualisation de la structure IT proposée.
- **Budget Détail** : Estimation des coûts pour chaque composant de la solution.
- **Plan de Mise en Œuvre** : Calendrier et méthodologie de déploiement.

## 7. Critères d'Évaluation

- **Innovation et Pertinence** : Créativité et adéquation des solutions avec les besoins de l'entreprise.
- **Optimisation du Budget** : Efficience et justification des coûts.
- **Sécurité** : Robustesse des mesures de sécurité proposées.
- **Clarté** : Qualité de la présentation des documents et plans.

## 8. Soumission des Propositions

Les propositions doivent être soumises par mail avant **00:00 ce soir**. Les propositions retenues seront examinées par un comité de sélection composé de professionnels du secteur et de dirigeants de Mettalugic France.

Nous cherchons des propositions qui contribueront significativement à notre transformation digitale, en abordant les enjeux contemporains de l'IT et de la cybersécurité. Nous attendons avec impatience vos propositions innovantes.
