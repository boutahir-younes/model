<?php
include 'connexion.php';

// Obtenir tous les patients
$patients = $conn->query("SELECT * FROM patients");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Patients</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <?php include 'navbar-admin.php'; ?>

    <main class="container">
        <h1>Gestion des Patients</h1>
        <input type="text" id="search-bar" placeholder="Rechercher un patient...">
        <button class="btn-primary">Ajouter un nouveau patient</button>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Dossier Médical</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="patients-table">
                <?php while ($row = $patients->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['nom'] . ' ' . $row['prenom']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telephone']; ?></td>
                    <td><a href="#" class="btn-primary">Voir</a></td>
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
        const patientsTable = document.getElementById('patients-table');

        searchBar.addEventListener('input', () => {
            const searchValue = searchBar.value.toLowerCase();
            const rows = patientsTable.getElementsByTagName('tr');

            for (let row of rows) {
                const name = row.cells[0].textContent.toLowerCase();
                row.style.display = name.includes(searchValue) ? '' : 'none';
            }
        });
    </script>
</body>
</html>