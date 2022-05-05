<?php 
    use Controllers\ElectionController;
    require_once (__DIR__.'\app\controllers\ElectionController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Now</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
    <div class="main">
        <?php include_once('inc/_header.php') ?>
        <div class="banner">
            <div class="content">
                <div class="text">
                    <h1 class="main-title">
                        Toutes les elections
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quia atque, rem ratione nemo ad. Eligendi quae adipisci quos id quaerat quisquam blanditiis, distinctio ab dolorem asperiores sed velit veniam!</p>
                    <a class="orange-btn" href="login.php">Se connecter</a>
                </div>
                <div class="votes">
                    <h3>Derniers votes organisés</h3>
                    <div class="votes-section">
                        <div class="vote-item">

                        </div>
                    </div>
                    <a class="orange-btn" href="">Tous les votes</a>
                </div>
            </div>
        </div>
        <section class="votes">
            <h1>Liste des Elections</h1>
            <div class="votes-block">
                <?php 
                    $votes = ElectionController::get_all();
                    
                    foreach ($votes as $vote) {
                ?>
                <div class="vote-item">
                    <div class="content">
                        <h3><?php echo $vote['title'] ?></h3>
                        <p><?php echo $vote['description'] ?></p>
                        <a href="vote-details.php?id=<?php echo $vote['id'] ?>" class="orange-btn">Voir</a>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
        </section>
        <?php include_once('inc/_footer.php') ?>
    </div>
</body>
</html>