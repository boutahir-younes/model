<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Patient</title>
    <link rel="stylesheet" href="dashboard-style.css">
</head>
<body>
    <?php include 'navbar.php'; 
        include 'connexion.php';
    ?>

    <main class="container">
        <h1>Bienvenue sur votre tableau de bord</h1>

        <section>
            <h2>Rendez-vous à venir</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Docteur</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les rendez-vous à venir seront listés ici depuis la base de données -->
                </tbody>
            </table>
        </section>

        <section>
            <h2>Historique des rendez-vous</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Docteur</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Historique des rendez-vous sera affiché ici -->
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>