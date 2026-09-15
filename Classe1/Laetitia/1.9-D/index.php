<?php
require_once "De.php";

$testDe1 = new De();
$testDe2 = new De(20);
?>
<br>
<?php
// readonly permet la lecture
echo $testDe1->faces;

echo "<br>";
echo $testDe1;
echo "<br>";
echo $testDe2;
echo "<hr>";
var_dump($testDe1);
?>