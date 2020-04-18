

<?php

$i = 0;
while($i <= 20) {
  echo $i;
  $i = $i + 2;
}

echo '<br>';

$i = 0;
while($i < 5) {
  echo $i;
  $i++;
  // code...
}

echo '<br>';

for($i = 0; $i <= 10; $i++) {
  echo $i;
}

echo '<br>';

for($i = 2,$j = 100; $i <= 20; $i*2,$j*2) {
  echo $i;
  $i = $i * 2;
  echo $j;
}

?>
