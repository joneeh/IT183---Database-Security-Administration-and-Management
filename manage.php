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
    <div class="tablingTeller">
        <a class="dep" href="deposit.php">Deposit Money</a>
        <h1>Account Holders</h1>
        <input type="text" id="myInput" onkeyup="search()" placeholder="Search for account number">
        
        <table id="myTable">
            <tr>
                <th style="width:10%;" onclick="sortTable(0)">Branch Code</th>
                <th style="width:10%;" onclick="sortTable(1)">First Name</th>
                <th style="width:10%;" onclick="sortTable(2)">Last Name</th>
                <th style="width:10%;" onclick="sortTable(3)">Account Number</th>
                <th style="width:10%;" onclick="sortTable(4)">Card Number</th>
                <th style="width:10%;" onclick="sortTable(5)">Balance</th>
                <th style="width:10%;" onclick="sortTable(6)">Account Type</th>
                <th style="width:10%;" onclick="sortTable(7)">Expiry Date</th>
            </tr>
            <?php
            require_once('connection.php');

            $sql = "select * from tellerviewcustomer";
            $result = $conn-> query($sql);

            if($result-> num_rows >0)
            {
                while($row = $result-> fetch_assoc())
                {
                    echo "<tr><td>".$row['branchCode']."</td><td class=pads1>".$row['cfname']."</td><td class=pads1>".$row['clname']
                    ."</td><td>".$row['accountNumber']."</td><td>".$row['cardNumber']."</td><td class=pads>".$row['balance']
                    ."</td><td>".$row['accountType']."</td><td>".$row['expiryDate']."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 Result";
            }

            $conn-> close();
            ?>
        </table>
    </div>
</body>

</html>