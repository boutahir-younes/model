<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prédictions - Patient</title>
    <link rel="stylesheet" href="dashboard-style.css">
</head>
<body>
    <?php include 'navbar.php';
    ;include 'connexion.php';
    ?>

    <main class="container">
        <h1>Prédire une Maladie</h1>

        <form method="POST" action="predict.php">
            <label for="fievre">Fièvre:</label>
            <select id="fievre" name="fievre" required>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>

            <label for="toux">Toux:</label>
            <select id="toux" name="toux" required>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>

            <label for="fatigue">Fatigue:</label>
            <select id="fatigue" name="fatigue" required>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>

            <label for="respiration">Difficulté à respirer:</label>
            <select id="respiration" name="respiration" required>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>

            <label for="age">Âge:</label>
            <input type="number" id="age" name="age" required>

            <label for="genre">Genre:</label>
            <select id="genre" name="genre" required>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>

            <label for="pression">Pression artérielle:</label>
            <select id="pression" name="pression" required>
                <option value="normale">Normale</option>
                <option value="elevee">Élevée</option>
                <option value="basse">Basse</option>
            </select>

            <label for="cholesterol">Niveau de cholestérol:</label>
            <select id="cholesterol" name="cholesterol" required>
                <option value="normale">Normale</option>
                <option value="elevee">Élevée</option>
            </select>

            <button type="submit" class="btn-primary">Prédire la Maladie</button>
        </form>
    </main>
</body>
</html>