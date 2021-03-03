<!DOCTYPE html>
<?php 
    include_once 'includes/dbh.inc.php';
    include 'includes/navbar.php';
?>


<!-- Example Comment tag cause I'm gonna forget -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vehicle Details</title>
        <link rel="stylesheet" href="includes/style.css">
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
                foreach ($vi as $v) {  
                    $veh = $v['veh_id'];
                    if ($v['bio'] = 1){
                        $bio = "Yes";
                    } else {
                        $bio = "No";
                    }
                    if ($v['winch'] = 1){
                        $winch = "Yes";
                    } else {
                        $winch = "No";
                    }
                    if ($v['kys'] = 1){
                        $keys = "Yes";
                    } else {
                        $keys = "No";
                    }
                    echo "Year: ".$v['yr']." </br>";
                    echo "Make: ".$v['make']." </br>";
                    echo "Model: ".$v['model']." </br>";
                    echo "Color: ".$v['color']." </br>";
                    echo "Plate: ".$v['plate']." </br>";
                    echo "State: ".$v['state']." </br>";
                    echo "Vin: ".$v['vin']." </br>";
                    echo "Location: ".$v['loc']." </br>";
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