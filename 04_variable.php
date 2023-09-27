<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<!-- DOUBLE -->

<?php
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
print($many + $many_2 . " = " . "is a " . gettype($few) . "<br>");
?>


<!-- INTEGER -->
<?php
$int = 5985;
echo $int . ": " . "is an ". gettype($int) . "<br>";
?>

<!-- STRING -->
<?php
$x = "Hello world!";
echo $x . "<br>";
?>
