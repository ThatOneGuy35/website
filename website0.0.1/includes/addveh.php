<?php 
include 'dbh.inc.php';

$year = $_POST['year'];
$make = $_POST['make'];
$model = $_POST['model'];
$color = $_POST['color'];
$plate = $_POST['plate'];
$state = $_POST['state'];
$vin = $_POST['vin'];
$lot = $_POST['Lot'];
$loc = $_POST['location'];
if ($_POST['bio'] == "ybio") {
    $bio = '1';
} else {
    $bio= '0';
}
if ($_POST['winch'] == "ywinch") {
    $winch = '1';
} else {
    $winch= '0';
}
$type = $_POST['type'];
if ($_POST['keys'] == "ykey") {
    $key = '1';
} else {
    $key= '0';
}
$datein = $_POST['date'];
$notes = $_POST['notes'];
$day1 = strtotime($_POST["datein"]);
$day1 = date('m-d-Y', $day1);
$sql = "INSERT INTO vehicles (yr, make, model, color, plate, state, vin, loc, lot, bio, winch, type, kys, datein, notes) VALUES ('$year', '$make','$model','$color','$plate','$state','$vin','$loc', '$lot','$bio','$winch','$type','$key','$day1','$notes');";
mysqli_query($conn, $sql);
header("Location: ../vdatabase.php?addveh=success");
//echo "Error: " . $sql . "<br>" . mysqli_error($conn); 

?>