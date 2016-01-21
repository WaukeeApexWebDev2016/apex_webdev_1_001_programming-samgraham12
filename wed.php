<?php

echo var_dump(true and true);
echo var_dump(true and false);
echo var_dump(true or false);
echo var_dump(false or false);
echo var_dump(!false);

if (true) {
  echo "yes \n";
}

if (false) {
  echo "2) yes\n";
}

$username = readline("Enter your username: ");

if ($username == "admin") {
  echo "you are admin. all access granted!";
}

else if ($username =="sam") {
  echo "you are sam";
}

 else {
  echo "access denied";
}


echo "\n";
?>
