<?php 
    session_start();
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<!-- Example Comment tag cause I'm gonna forget -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Vehicle</title>
        <link rel="stylesheet" href="includes/style.css">
        <meta name="viewport" content="width=device-width, intiial-scale=1.0">
    </head>
    <body>
        <?php include 'includes/navbar.php'; ?>
        <div>
            <h3>Add Vehicles</h3>
        </div>
        <form class="adv" action="includes/addveh.php" method="POST">
            <ul>
                <li><input type="text" name="year" placeholder="Year"></li>
                <li><input type="text" name="make" placeholder="Make"></li>
                <li><input type="text" name="model" placeholder="Model"></li>
                <li><input type="text" name="color" placeholder="Color"></li>
                <li><input type="text" name="plate" placeholder="Plate"></li>
                <li><input type="text" name="state" placeholder="State"></li>
                <li><input type="text" name="vin" placeholder="Vin"></li>
                <li>Lot: 
                    <select name="Lot">
                        <option value="Huntington">Huntington</option>
                        <option value="Wayne">Wayne</option>
                    </select>
                </li>
                <li><input type="text" name="location" placeholder="Location"></li>
                <li>Bio: 
                    <select name="bio">
                        <option value="ybio">Yes</option>
                        <option value="nbio">No</option>
                    </select>
                </li>
                <li> Winch:
                    <select name="winch">
                        <option value="ywinch">Yes</option>
                        <option value="nwinch">No</option>
                    </select>
                </li>
                <li>
                    Type: 
                    <select name="type">
                        <option value="Impound">Impound</option>
                        <option value="Wreck">Wreck</option>
                    </select>
                    Other: <input type="text" name="other" placeholder="...">
                </li>
                <li>Keys:
                    <select name="keys">
                        <option value="ykey">Yes</option>
                        <option value="nkey">No</option>
                    </select>
                </li>
                <li>Date towed in: <input type="date" name="datein" placeholder="Date"></li>
                <li>
                    <textarea name="notes" placeholder="Addition Notes"></textarea>
                </li>
                <li><input type="submit" name="submit"> </li>
            </ul>
        </form>
    </body>
</html>