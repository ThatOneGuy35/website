<!DOCTYPE html>
<!-- Example Comment tag cause I'm gonna forget -->
<?php 
    include 'dbh.inc.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Database Search</title>
        <link rel="stylesheet" text="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, intiial-scale=1.0">
        <?php include 'navbar-includes.php';?>
    </head>
    <body>
    
    
        <div>
            <h3>Database Search</h3>
        </div>
        <form class="vehicle-search"action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search">
            <input type="submit" name="submit-search">
        </form>
        <div class="vehicle-container">
        <?php

        if (isset($_POST['submit-search'])) { 
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sqls = "SELECT * FROM vehicles WHERE yr LIKE '%$search%' OR make LIKE '%$search%' OR model LIKE '%$search%' OR color LIKE '%$search%' OR plate LIKE '%$search%' OR state LIKE '%$search%' OR vin LIKE '%$search%' OR loc LIKE '%$search%' OR datein LIKE '%$search%'";
                $sresult = mysqli_query($conn, $sqls);
                $querySResult = mysqli_num_rows($sresult);
                if ($querySResult > 0) {
                    while ($srow = mysqli_fetch_assoc($sresult)) {
                        $veh = $srow['veh_id'];
                        echo "<a href = '../vehicle.php?vehicle=".$srow['veh_id']."&vin=".$srow['vin']."'>".$srow['yr']." ";
                        echo $srow['make']." ";
                        echo $srow['model']." </a></br>";
                    }
                } else {
                    echo "No results found!";
                }
            }
        ?>
        </div>
    </body>
</html>



