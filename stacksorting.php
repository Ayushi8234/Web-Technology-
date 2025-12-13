<?php
// Stack using array
$stack = array(4, 1, 3, 2);

echo "<p>Stack before sorting:</p>";
echo "<p>" . implode(", ", $stack) . "</p>";

// Sort the stack
sort($stack);   // ascending order

echo "<p>Stack after sorting:</p>";
echo "<p>" . implode(", ", $stack) . "</p>";
?>
