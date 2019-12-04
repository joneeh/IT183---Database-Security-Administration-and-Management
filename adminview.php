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
    <div class="tablingadmin">
        <a class="anm" href="addemployee.php">Add New Employee Account</a>
        <a class="del" href="deleteemployee.php">Delete Employee Account</a>
        <a class="edit" href="editemployee.php">Edit Employee Account</a>
        <h1>Bank Employees</h1>
        <input type="text" id="myInput" onkeyup="searchemp()" placeholder="Search for Names">
        
        <table class="table" id="myTable">
            <tr>
                <th style="width:10%;" onclick="sortTable(0)">Position</th>
                <th style="width:10%;" onclick="sortTable(1)">First Name</th>
                <th style="width:10%;" onclick="sortTable(2)">Last Name</th>
                <th style="width:10%;" onclick="sortTable(3)">Email</th>
                <th style="width:10%;" onclick="sortTable(4)">Password
                </th>
            </tr>
            <?php
            require_once('connection.php');

            $sql = "select * from adminviewemployee";
            $result = $conn-> query($sql);

            if($result-> num_rows >0)
            {
                while($row = $result-> fetch_assoc())
                {
                    echo "<tr><td>".$row['position']."</td><td class=pads1>".$row['fname']."</td><td class=pads1>".$row['lname']
                    ."</td><td>".$row['email']."</td><td>".$row['password']."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 Result";
            }

            $conn-> close();
            ?>

    </div>
</body>

</html>