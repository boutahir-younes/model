<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';
include 'navbar-doctor.php';
// Récupérer le nombre de rendez-vous pour aujourd'hui
$date_today = date('Y-m-d');
$query = "SELECT COUNT(*) AS total_rendezvous FROM rendez_vous WHERE date_rendez_vous LIKE '$date_today%'";
$result = $conn->query($query);
$total_rendezvous = $result->fetch_assoc()['total_rendezvous'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Médecin</title>
    <link rel="stylesheet" href="doctor-style.css">
</head>
<body>
    <?php include 'navbar-doctor.php'; ?>

    <main class="container dashboard">
        <h1>Bienvenue, Docteur</h1>
        <section class="stats">
            <div class="stat-card">
                <h2>Aperçu d'aujourd'hui</h2>
                <p><strong><?php echo $total_rendezvous; ?></strong> rendez-vous</p>
            </div>
        </section>
    </main>
</body>
</html>