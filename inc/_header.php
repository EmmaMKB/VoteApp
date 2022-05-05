<?php
    session_start();
?>
<header class="navbar">
    <a href="index.php" class="logo"><h3>Vote App</h3></a>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="all-votes.php">Votes</a></li>
        <?php if (!isset($_SESSION["email"])) { ?>
            <li><a href="login.php">Connexion</a></li>
            <li><a href="signin.php">Inscription</a></li>
        <?php } ?>

        <?php if (isset($_SESSION["email"])) { ?>
            <li class="user">
                <?php echo $_SESSION["email"] ?>
            </li>
        <?php } ?>
    </ul>
</header>