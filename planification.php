<?php
include 'connexion.php';

// Gestion de l'ajout des créneaux
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    $query = "INSERT INTO disponibilites (date, heure_debut, heure_fin, statut) VALUES ('$date', '$start_time', '$end_time', 'Disponible')";
    $conn->query($query);
}

// Récupérer les créneaux existants
$disponibilites = $conn->query("SELECT * FROM disponibilites");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planification - Médecin</title>
    <link rel="stylesheet" href="doctor-style.css">
</head>
<body>
    <?php include 'navbar-doctor.php'; ?>

    <main class="container planification">
        <h1>Planification des disponibilités</h1>
        <button id="add-slot-btn" class="btn-primary">Ajouter un créneau</button>

        <form id="add-slot-form" style="display: none;" method="POST">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="start_time">Heure de début:</label>
            <input type="time" id="start_time" name="start_time" required>

            <label for="end_time">Heure de fin:</label>
            <input type="time" id="end_time" name="end_time" required>

            <button type="submit" class="btn-primary">Ajouter</button>
        </form>

        <h2>Liste des disponibilités</h2>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $disponibilites->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['heure_debut']; ?></td>
                    <td><?php echo $row['heure_fin']; ?></td>
                    <td><?php echo $row['statut']; ?></td>
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
        const addSlotBtn = document.getElementById('add-slot-btn');
        const addSlotForm = document.getElementById('add-slot-form');

        addSlotBtn.addEventListener('click', () => {
            addSlotForm.style.display = addSlotForm.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>
</html>