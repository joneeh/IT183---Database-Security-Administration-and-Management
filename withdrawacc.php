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
    <div class="depositAcc">
        <div class="deposit">
        <?php
            if(@$_GET['invalid']==true)
            {
        ?>
            <div class="alert center"><?php echo $_GET['invalid'] ?></div>
        <?php
            }
        ?>
            <form action="withdrawMquery.php" method="post">
                <div id="deposit">
                    <input class="input" type="text" name="accountNumber" placeholder="Account Number"><br>
                    <button class="button" type="submit" name="ok3">Ok</button>
                </div>
            </form>
        </div>
    </div>
    <div class="cardcontaindep">
    <h1>Withdraw Money from:</h1>
    <h2>Account Owner:
        <?php
            echo $_SESSION['cfname'].' '.$_SESSION['clname'];
        ?>
    </h2>
    <h2>Account Number:
        <?php
            echo $_SESSION['accountNumber'];
        ?>
    </h2>
    <h2>Card Number:
        <?php
            echo $_SESSION['cardNumber'];
        ?>
    </h2>
    <h2>
    Account Balance: 
    <?php
        echo $_SESSION['balance'];
    ?>
    </h2>
    </div>
    <form action="withdrawMcalculate.php" method="post">
    <div id="depo">
        <input class="input" type="number" name="depoM" placeholder="Enter Amount"><br>
        <button class="button" type="submit" onclick="javascript: return confirm('Please confirm deposit');" name="withdrawMan">Proceed</button>
        <h2>Withdraw</h2>  
    </div>
    </form>
</body>

</html>