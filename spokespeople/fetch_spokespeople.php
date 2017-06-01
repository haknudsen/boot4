<?php
require( "data.php" );
$q = "SELECT name FROM spokespeople ORDER BY `spokespeople`.`name` ASC "; 
$spoke = mysqli_query( $conn, $q );
$data = mysqli_fetch_array( $spoke, MYSQLI_BOTH );
$arrlength = count($data);
    echo "<br>";
    echo $arrlength;
    echo "<br>";
for($x = 0; $x < 30; $x++) {
    echo $data[$x];
    echo "<br>";
}
mysqli_close($con);
?>