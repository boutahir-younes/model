<nav class="navbar">
    <div class="container">
        <a href="dashboard1.php" class="logo">MediConnect</a>
        <ul class="nav-links">
            <li><a href="dashboard1.php">Tableau de bord</a></li>
            <li><a href="planification.php">Planification</a></li>
            <li><a href="patients1.php">Patients</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
        </ul>
    </div>
</nav>

<style>
/* Styles pour la barre de navigation */
.navbar {
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.logo {
    font-size: 24px;
    font-weight: 700;
    color: #0d6efd;
    text-decoration: none;
}

.nav-links {
    display: flex;
    list-style: none;
}

.nav-links li {
    margin-left: 30px;
}

.nav-links a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #0d6efd;
}
</style>