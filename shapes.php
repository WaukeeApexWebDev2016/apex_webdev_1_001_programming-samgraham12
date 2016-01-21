<?php

// Ask user for shape
$shape = readline("Enter your shape: ");

// Ask user for shape inputs

// If circle, ask for radius
if ($shape == "circle") {
  $radius = readline("Enter the radius: ");
  echo "area = " . 3.14159 * $radius *$radius . "\n";
}

// If square, ask for side length
else if ($shape =="square") {
  $side = readline("Enter the side length: ");
  echo "area = " . $side * $side . "\n";
}


// If trapezoid, ask for a, b, and height
else if ($shape =="trapezoid") {
  $base1 = readline("Enter base length: ");
  $base2 = readline("Enter top length: ");
  $height = readline("Enter the height: ");
  echo "area = " . ($base1 + $base2)/2 * $height . "\n";
}

// If triangle, ask for base and height
else if ($shape == "triangle") {
  $base = readline("Enter base: ");
  $height = readline("Enter height: ");
  echo "area = " . ($base * $height)/2 . "\n";
}

// If rectangle, ask for base and height
else if ($shape == "rectangle") {
  $base = readline("Enter base: ");
  $height = readline("Enter height: ");
  echo "area = " . ($base * $height) . "\n";
}

// If ellipse, ask for a and b
else if ($shape == "ellipse") {
  $a = readline("Enter a: ");
  $b = readline("Enter b: ");
  echo "area = " . ($a * $b * 3.14159) . "\n";
}

else {
echo "area caluclations not available for this shape \n";
}

?>
