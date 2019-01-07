<?php

// Storing, displaying values and combining strings easily with heredoc.
// Could also print or echo param1, param2, ...

$firstName = "Keller";
$lastName = "Flint";
$age = 21;
$job = "programmer";

// heredoc
$sentence = <<< EOT
$firstName $lastName is $age and will be a $job.
EOT;

echo $sentence;

// Arrays
$list = ["one", "two", "three"];

// Append item to the array
$list[] = "four";

print_r($list);
echo $list[2];