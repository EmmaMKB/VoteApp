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
        <section class="login-form">
            <div class="content">
                <h1>Connexion</h1>
                <form class="form" action="" method="post">
                    <div class="input">
                        <label for="">Mail</label>
                        <input type="email" name="" placeholder="Votre Adresse Mail" id="">
                    </div>
                    <div class="input">
                        <label for="">Mot de Passe</label>
                        <input type="password" name="" placeholder="Votre Mot de Passe" id="">
                    </div>
                    <button class="orange-btn">Se connecter</button>
                </form>
            </div>
        </section>
        <?php include_once('inc/_footer.php') ?>
    </div>
</body>
</html>