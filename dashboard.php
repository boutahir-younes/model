<?php
include 'connexion.php';

// Obtenir les statistiques globales
$total_patients = $conn->query("SELECT COUNT(*) AS count FROM patients")->fetch_assoc()['count'];
$total_medecins = $conn->query("SELECT COUNT(*) AS count FROM medecins")->fetch_assoc()['count'];
$total_rendezvous = $conn->query("SELECT COUNT(*) AS count FROM rendez_vous")->fetch_assoc()['count'];
$revenus_totaux = $conn->query("SELECT SUM(montant) AS total FROM paiements")->fetch_assoc()['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Administrateur</title>
    <link rel="stylesheet" href="admin-style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include 'navbar-admin.php'; ?>

    <main class="container">
        <h1>Tableau de bord</h1>

        <section class="stats">
            <div class="stat-card">
                <h2>Patients</h2>
                <p><?php echo $total_patients; ?></p>
            </div>
            <div class="stat-card">
                <h2>Médecins</h2>
                <p><?php echo $total_medecins; ?></p>
            </div>
            <div class="stat-card">
                <h2>Rendez-vous</h2>
                <p><?php echo $total_rendezvous; ?></p>
            </div>
            <div class="stat-card">
                <h2>Revenus</h2>
                <p><?php echo number_format($revenus_totaux, 2); ?> MAD</p>
            </div>
        </section>

        <section class="charts">
            <h2>Statistiques Mensuelles</h2>
            <canvas id="chartPatients"></canvas>
            <canvas id="chartRendezVous"></canvas>
        </section>
    </main>

    <script>
        const ctxPatients = document.getElementById('chartPatients').getContext('2d');
        const ctxRendezVous = document.getElementById('chartRendezVous').getContext('2d');

        new Chart(ctxPatients, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Nouveaux Patients',
                    data: [12, 19, 3, 5, 2, 3, 15, 10, 8, 12, 6, 9],
                    borderColor: '#0d6efd',
                    backgroundColor: 'rgba(13, 110, 253, 0.2)'
                }]
            }
        });

        new Chart(ctxRendezVous, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Nouveaux Rendez-vous',
                    data: [8, 14, 7, 10, 12, 3, 9, 11, 6, 13, 4, 8],
                    backgroundColor: 'rgba(255, 193, 7, 0.7)'
                }]
            }
        });
    </script>
</body>
</html>