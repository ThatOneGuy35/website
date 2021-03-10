<!DOCTYPE html>
<!-- Example Comment tag cause I'm gonna forget -->
<?php 
    include 'includes/dbh.inc.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Baker's Database</title>
    <link rel="stylesheet" text="text/css" href="includes/style.css">
    <meta name="viewport" content="width=device-width, intiial-scale=1.0">
    <?php include 'includes/navbar.php';?>
</head>

<body>


    <div>
        <h3>Vehicle Database</h3>
    </div>
    <form class="vehicle-search" action="includes/search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <input type="submit" name="submit-search">
    </form>
    <div class="vehicle-container">
        <?php 
                $sql = "SELECT * FROM vehicles;";
                $result = mysqli_query($conn, $sql);
                $vi = array();
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $vi[] = $row;
                    }
                }
                //print_r($vi);
                foreach ($vi as $v) {  
                    $veh = $v['veh_id'];
                    echo "<a href = 'vehicle.php?vehicle=".$v['veh_id']."&vin=".$v['vin']."'>".$v['yr']." ";
                    echo $v['make']." ";
                    echo $v['model']." </a></br>";
                }
            ?>
    </div>
</body>

</html>