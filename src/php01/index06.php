<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 === 0) {
    echo "Fizz";
  } elseif ($i % 5 === 0) {
        echo 'Buzz';
  } elseif (($i % 3 === 0) && ($i % 5 === 0)) {
        echo 'FizzBuzz';
  } else {
    echo $i;
  }