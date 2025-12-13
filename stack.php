<?php
// Stack using array
$stack = [];

// Push elements into stack
array_push($stack, 30);
array_push($stack, 10);
array_push($stack, 50);
array_push($stack, 20);

echo "<p>Original Stack:</p>";
echo "<p>" . implode(", ", $stack) . "</p>";

// Sort stack in ascending order
sort($stack);  // use rsort($stack) for descending

echo "<p>Sorted Stack (Ascending):</p>";
echo "<p>" . implode(", ", $stack) . "</p>";
?>
