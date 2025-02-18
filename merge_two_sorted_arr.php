<?php
$a1 = [1,2,3,4]; $a2 = [4,5,6,7,8];
$merged = [...$a1, ...$a2]; // Use spread operator properly
// print_r(array_values(array_unique($merged)));

// -----------------------------------

array_push($a1, ...$a2);
print_r(array_values($a1));
