<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>

<h2>Liste des utilisateurs</h2>

<?php
include 'connexion.php';

// Récupérer les utilisateurs
$resultat = $bdd->query('SELECT id, nom, email FROM utilisateurs');

if ($resultat) {
    $utilisateurs = $resultat->fetchAll(PDO::FETCH_ASSOC);

    if ($utilisateurs) {
        echo "<ul>";
        foreach ($utilisateurs as $utilisateur) {
            echo "<li>ID: " . $utilisateur["id"] . " - Nom: " . $utilisateur["nom"] . " - Email: " . $utilisateur["email"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Aucun utilisateur trouvé.";
    }
} else {
    echo "Erreur lors de la récupération des utilisateurs.";
}

$bdd = null; // Fermer la connexion à la base de données
?>

</body>
</html>
