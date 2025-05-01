<?php
include 'connexion.php';

// Obtenir tous les médecins
$medecins = $conn->query("SELECT * FROM medecins");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Médecins</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <?php include 'navbar-admin.php'; ?>

    <main class="container">
        <h1>Gestion des Médecins</h1>
        <input type="text" id="search-bar" placeholder="Rechercher un médecin...">
        <button class="btn-primary">Ajouter un médecin</button>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Spécialité</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="medecins-table">
                <?php while ($row = $medecins->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['nom'] . ' ' . $row['prenom']; ?></td>
                    <td><?php echo $row['specialite']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telephone']; ?></td>
                    <td>
                        <button class="btn-light">Modifier</button>
                        <button class="btn-danger">Supprimer</button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <script>
        const searchBar = document.getElementById('search-bar');
        const medecinsTable = document.getElementById('medecins-table');

        searchBar.addEventListener('input', () => {
            const searchValue = searchBar.value.toLowerCase();
            const rows = medecinsTable.getElementsByTagName('tr');

            for (let row of rows) {
                const name = row.cells[0].textContent.toLowerCase();
                row.style.display = name.includes(searchValue) ? '' : 'none';
            }
        });
    </script>
</body>
</html>