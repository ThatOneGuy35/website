<?php 
    session_start();
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<!-- Example Comment tag cause I'm gonna forget -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baker's Towing and Recovery</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, intiial-scale=1.0">
    </head>
    <body>
        <?php include 'includes/navbar.php';?>
        <h3 class="lv">Latest Vehicles</h3>
        <form method="GET">
            <input type="date" name="dateIn" value="value">
            <button>SUBMIT</button>
            <br>
        </form>
        <?php 
            
            


        ?>
    </body>
</html>