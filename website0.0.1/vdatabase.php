<!DOCTYPE html>
<!-- Example Comment tag cause I'm gonna forget -->
<?php 
    include_once 'includes/dbh.inc.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Baker's Database</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, intiial-scale=1.0">
    </head>
    <body>
    <?php include 'includes/navbar.php';?>
        <div>
            <h3>Vehicle Database</h3>
        </div>
        <?php 
            $sql = "SELECT * FROM vehicles;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    foreach ($row as $columnName => $columnData) {
                        echo ' ' . $columnName . ' ' . $columnData . '<br />';
                    }
                }
            }
        ?>
    </body>
</html>