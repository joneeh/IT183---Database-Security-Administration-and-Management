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
           Administrator
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
            <form action="deleteemployeeprocess.php" method="post">
                <div id="deposit">
                    <input class="input" type="text" name="fname" placeholder="First Name"><br>
                    <input class="input" type="text" name="lname" placeholder="Last Name"><br>
                    <button class="button" type="submit" name="ok4">Ok</button>
                </div>
            </form>
        </div>
    </div>
    <div class="cardcontaindel">
    <h1 style="color: red; text-align:center;">Delete Employee Account</h1>
    <h2>Employee:
        <?php
            echo $_SESSION['fname'].' '.$_SESSION['lname'];
        ?>
    </h2>
    <h2>Role: 
            <?php
            echo $_SESSION['position'];
        ?>
    </h2>
    </div>
    <form action="deleteemployeeprocess.php" method="post">
    <div id="delc">
        <button class="button" type="submit" onclick="javascript: return confirm('Please confirm deposit');" name="confdeleteemp">Proceed</button>
    </div>
    </form>
</body>

</html>