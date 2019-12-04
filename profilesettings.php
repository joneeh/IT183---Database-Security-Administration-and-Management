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
                <a href="profilesettings.php">Settings</a>
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
             echo $_SESSION['cfname'].' '.$_SESSION['clname'].
            '<br>';
        ?>
            <div class="role">
                Customer
            </div>
        </div>
    </div>
    <div class="updateUser">
    <form action="updateprofile.php" method="post">
            <div id="update">
                <h1>Update Email</h1>
                <a>Enter New Email</a>
                <input class="input" type="username" name="email" placeholder="Email"><br>
                <a>Enter Password to confirm</a>
                <input pattern=".{8,}" required title="8 characters minimum" class="input" type="password" name="password" placeholder="Password">
                <button class="button" type="submit" onclick="javascript: return confirm('Please confirm email update');" name="changeuse">Save</button>
            </div>
        </form>
        <form action="updatepassword.php" method="post">
            <div id="updatepass">
                <h1>New Password</h1>
                <a>Enter New Password</a>
                <input class="input" type="password" name="password" placeholder="New Password"><br>
                <a>Enter Old Password to confirm</a>
                <input pattern=".{8,}" required title="8 characters minimum" class="input" type="password" name="passwordold" placeholder="Old Password">
                <button class="button" type="submit" onclick="javascript: return confirm('Please confirm password update');" name="changepass">Save</button>
            </div>
        </form>
    </div>
</body>

</html>