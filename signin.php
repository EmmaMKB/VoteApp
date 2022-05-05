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
                <h1>Inscription</h1>
                <form class="form" action="app/controllers/UserController.php" method="post">
                    <div class="input">
                        <label for="">Nom</label>
                        <input type="text" name="name" placeholder="Votre Nom Complet" required id="">
                    </div>
                    <div class="input">
                        <label for="">Mail</label>
                        <input type="email" name="email" placeholder="Votre Adresse Mail" required id="">
                    </div>
                    <div class="input">
                        <label for="">Mail</label>
                        <input type="tel" name="tel" placeholder="Votre Numero de Tel" required id="">
                    </div>
                    <div class="input">
                        <label for="">Mot de Passe</label>
                        <input type="password" name="password" placeholder="Votre Mot de Passe" required id="">
                    </div>
                    <div class="input">
                        <label for="">Confirmer le Mot de Passe</label>
                        <input type="password" name="pwdconf" placeholder="Votre Mot de Passe" required id="">
                    </div>
                    <input type="hidden" name="action" value="post_user">
                    <button class="orange-btn">S'inscrire</button>
                </form>
            </div>
        </section>
        <?php include_once('inc/_footer.php') ?>
    </div>
</body>
</html>