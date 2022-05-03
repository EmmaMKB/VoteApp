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
                        Nom de l'Election
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quia atque, rem ratione nemo ad. Eligendi quae adipisci quos id quaerat quisquam blanditiis, distinctio ab dolorem asperiores sed velit veniam!</p>
                </div>
                <div class="votes">
                    <h3>Comptes a Rebours</h3>
                    <h1>00:00:00</h1>
                    <form class="form-vote" action="" style="display: flex; flex-flow:column">
                        <select name="" id="">
                            <option value="">Alain</option>
                            <option value="">Mitonga</option>
                        </select>
                        <button class="orange-btn" type="submit">Voter</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once('inc/_footer.php') ?>
    </div>
</body>
</html>