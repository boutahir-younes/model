<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation - Patient</title>
    <link rel="stylesheet" href="dashboard-style.css">
</head>
<body>
    <?php include 'navbar.php'; 
         include 'connexion.php';
    ?>

    <main class="container">
        <h1>Prendre un Rendez-vous</h1>

        <form method="POST" action="book_appointment.php">
            <label for="date">Choisir une date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Choisir une heure:</label>
            <select id="time" name="time" required>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
            </select>

            <label for="doctor">Choisir un docteur:</label>
            <select id="doctor" name="doctor" required>
                <!-- Les docteurs seront listés ici depuis la base de données -->
            </select>

            <button type="submit" class="btn-primary">Confirmer le Rendez-vous</button>
        </form>
    </main>
</body>
</html>