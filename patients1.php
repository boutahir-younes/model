<?php
include 'connexion.php';

// Récupérer tous les patients
$patients = $conn->query("SELECT * FROM patients");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Patients</title>
    <link rel="stylesheet" href="doctor-style.css">
    
</head>
<body>
    <?php include 'navbar-doctor.php'; ?>

    <main class="container patients">
        <h1>Gestion des Patients</h1>
        <input type="text" id="search-bar" placeholder="Rechercher un patient...">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom et Prénom</th>
                    <th>Âge</th>
                    <th>Sexe</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="patients-table">
                <?php while ($row = $patients->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nom'] . ' ' . $row['prenom']; ?></td>
                    <td><?php echo $row['date_naissance']; ?></td>
                    <td><?php echo $row['sexe']; ?></td>
                    <td><?php echo $row['telephone']; ?></td>
                    <td><a href="#" class="btn-primary">Voir Dossier</a></td>
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
                const name = row.cells[1].textContent.toLowerCase();
                row.style.display = name.includes(searchValue) ? '' : 'none';
            }
        });
    </script>
</body>
</html>