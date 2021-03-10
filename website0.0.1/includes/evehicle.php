<!DOCTYPE html>
<?php 
    include_once 'dbh.inc.php';
    include 'navbar.php';
?>


<!-- Example Comment tag cause I'm gonna forget -->
<html>

<head>
    <meta charset="UTF-8">
    <title>Vehicle Edit</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, intiial-scale=1.0">
</head>

<body>
    <div class="vehicle-container">
        <?php 
                $vehicle = mysqli_real_escape_string($conn, $_GET['vehicle']);
                $vin = mysqli_real_escape_string($conn, $_GET['vin']);

                $sql = "SELECT * FROM vehicles WHERE veh_id='$vehicle' AND vin='$vin';";
                $result = mysqli_query($conn, $sql);
                $vi = array();
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $vi[] = $row;
                    }
                }
                //print_r($vi);
                //Sort for editable dropdown
                $ybio = false;
                $nbio = false;
                $ywinch = false;
                $nwinch = false;
                $ykeys = false;
                $nkeys = false;
                foreach ($vi as $v) {  
                    $veh = $v['veh_id'];
                    if ($v['bio'] = 1){
                        $ybio = true;
                    } else {
                        $nbio = true;
                    }
                    if ($v['winch'] = 1){
                        $ywinch = true;
                    } else {
                        $nwinch = true;
                    }
                    if ($v['kys'] = 1){
                        $ykeys = true;
                    } else {
                        $nkeys = true;
                    }
                    echo 'Year: <input type="text" name="year" value='.$v["yr"].'>';
                    echo 'Make: <input type="text" name="make" value='.$v["make"].'>';
                    echo 'Model: <input type="text" name="model" value='.$v["model"].'>';
                    echo 'Color: <input type="text" name="color" value='.$v["color"].'>';
                    echo 'Plate: <input type="text" name="plate" value='.$v["plate"].'>';
                    echo 'State: <input type="text" name="state" value='.$v["state"].'>';
                    echo 'VIN: <input type="text" name="vin" value='.$v["vin"].'>';
                    echo 'Location: <input type="text" name="location" value='.$v["loc"].'>';
                    if ($ykeys = true) {
                        echo 'Keys: <select name="keys">
                            <option value="ybio">Yes</option>
                            <option value="nbio">No</option>
                        </select>';
                    } else {
                        echo 'Keys: <select name="keys">
                            <option value="nbio">Yes</option>
                            <option value="ybio">No</option>
                        </select>';
                    }

                    echo "Lot: ".$v['lot']." </br>";
                    echo "Bio: ".$bio." </br>";
                    echo "Winch: ".$winch." </br>";
                    echo "Type: ".$v['type']." </br>";  
                    echo "Keys: ".$keys." </br>";
                    echo "Date in: ".$v['datein']." </br>";
                    echo $v['notes']." </a></br>";
                }
            ?>
    </div>

</body>

</html>