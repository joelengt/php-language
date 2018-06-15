<!-- includedfile.php -->

<b>This text is included!</b><br />
<?php 
$number2 = 30;
echo "And so is this PHP code - ".$number1." + ".$number2." equals " . ($number1 + $number2) . "!";
?>


<!-- index.php -->
<i>Below this, content will come from another file!</i>
<br /><br /><br />
<?php
$number1 = 20;
include("includedfile.php");
?>
<br /><br /><br />
<i>We're back, after the included file has ended!</i>




<!-- includedfile.php -->

<b>This text is included!</b><br />
<?php 
$number2 = 30;
echo "And so is this PHP code - ".$number1." + ".$number2." equals " . ($number1 + $number2) . "!";
?>


<!-- index.php -->
<i>Below this, content will come from another file!</i>
<br /><br /><br />
<?php
$number1 = 20;
require("includedfile.php");
?>
<br /><br /><br />
<i>We're back, after the included file has ended!</i>


