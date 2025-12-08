<?php
$a = 10;
$b = 20;

// Display before swapping
echo "<p>Before Swapping:</p>";
echo "<p>a = $a</p>";
echo "<p>b = $b</p>";

// Add two numbers
$sum = $a + $b;
echo "<p>Sum of a and b = $sum</p>";

// Swap without third variable
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

// Display after swapping
echo "<p>After Swapping:</p>";
echo "<p>a = $a</p>";
echo "<p>b = $b</p>";
?>
