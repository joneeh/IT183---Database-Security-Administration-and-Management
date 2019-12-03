<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Banko de Joni</title>
    <link rel="icon" href="img/icon.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="divider1">
        <img src="img/icon.png" alt="Bank Logo">
        <H1>BANKO DE JONI</H1>
    </div>
    <div class="divider2">
        <?php
            if(@$_GET['empty']==true)
            {
        ?>
            <div class="alert center"><?php echo $_GET['empty'] ?></div>
        <?php
            }
        ?>
        <?php
            if(@$_GET['invalid']==true)
            {
        ?>
            <div class="alert center"><?php echo $_GET['invalid'] ?></div>
        <?php
            }
        ?>
        <form action="process.php" method="post">
            <div id="login">
                <input class="input" type="username" name="email" placeholder="Email"><br>
                <input class="input" type="password" name="password" placeholder="Password">
                <button class="button" type="submit" name="login">Login</button>
            </div>
        </form>
    </div>
</body>

</html>