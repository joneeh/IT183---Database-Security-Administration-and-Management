<!DOCTYPE html>
<?php session_start();?>
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
    <script src="js/menu.js"></script>
    <script src="js/sort.js"></script>
    <script src="js/search.js"></script>
</head>
<body>
    <div class="menu">
        <div class="title">
            <img src="img/icon.png" alt="Bank Logo">
            <h1>BANKO DE JONI</h1>
        </div>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"></button>
            <div id="myDropdown" class="dropdown-content">
                <?php
                if(isset($_SESSION['id']))
                {
                    echo '<a href="index.php?logout">Log out</a>';
                }
                else
                {
                    header('location:index.php');
                }
                ?>
            </div>
        </div>
        <div class="user">
        <?php
            echo $_SESSION['fname'].' '.$_SESSION['lname'].
            '<br>';
        ?>
        <div class="role">
        <?php
            echo $_SESSION['position'].
            '<br>';
        ?>
        </div>
        </div>
    </div>
    <div class="createNewAcc">
        <h1>Create New Account</h1>
        <div class="newAccform">
            <form action="newaccprocess.php" method="post">
            <input class="input" type="text" name="fname" placeholder="First Name">
            <input class="input" type="text" name="lname" placeholder="Last Name">
            <input class="input" type="text" name="email" placeholder="Email">
            <input class="input" type="password" name="password" placeholder="Password">
            <select name="cardType">
                <option value="Credit">Credit</option>
                <option value="Debit">Debit</option>
            </select>
            <button class="button" type="submit" name="newAcc">Proceed</button>
            </form>
        </div>
    </div>
</body>

</html>