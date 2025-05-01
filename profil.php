<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Patient</title>
    <link rel="stylesheet" href="dashboard-style.css">
</head>
<body>
    <?php include 'navbar.php';
        include 'connexion.php';
    ?>

    <main class="container">
        <h1>Mon Profil</h1>

        <form method="POST" action="update_profile.php">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="<!-- Nom du patient -->" required>

            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" value="<!-- Prénom du patient -->" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<!-- Email du patient -->" required>

            <label for="telephone">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" value="<!-- Téléphone du patient -->" required>

            <label for="adresse">Adresse:</label>
            <textarea id="adresse" name="adresse" required><!-- Adresse du patient --></textarea>

            <button type="submit" class="btn-primary">Mettre à jour</button>
        </form>

        <form method="POST" action="delete_profile.php">
            <button type="submit" class="btn-danger">Supprimer mon profil</button>
        </form>
    </main>
</body>
</html>