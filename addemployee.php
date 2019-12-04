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
    <div class="createNewAcc">
        <h1>Add New Employee</h1>
        <div class="newAccform">
            <form action="addemployeprocess.php" method="post">
            <input class="input" type="text" name="fname" placeholder="First Name"><br>
            <input class="input" type="text" name="lname" placeholder="Last Name"><br>
            <input class="input" type="text" name="email" placeholder="Email"><br>
            <input pattern=".{8,}" required title="8 characters minimum" class="input" type="password" name="password" placeholder="Password"><br>
            <select name="position">
                <option value="Manager">Manager</option>
                <option value="Teller">Teller</option>
            </select>
            <button class="button" type="submit" onclick="javascript: return confirm('Please confirm account addition');" name="newEmp">Proceed</button>
            </form>
        </div>
    </div>
</body>

</html>