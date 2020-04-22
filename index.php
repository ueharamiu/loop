

<?php
// テスト
  echo "Hellow World";
  echo '<br>';
  echo '<br>';
$i = 200;
  print( "このパンは" . $i . "円です" );

echo '<br>';
echo '<br>';
define( "TITLE", "オレンジ" );
define( "TITLE", "みかん" );
define( "TAX", 2.2 );
echo TITLE . "は" . 300 * TAX . "円です";

echo '<br>';
echo '<br>';
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

for($i = 2; $i <= 20; $i *2) {
  echo $i;
  $i = $i * 2;
  echo '<br>';
}
echo '<br>';

$i = array( 300, 400, 500,);
  echo $i[0];
  echo $i[1];
  echo $i[2];

echo '<br>';

$i = array( 300, 400, 500,);
for($j = 0; $j < 3; $j++ ) {
  echo $j;
}

echo '<br>';
echo '<br>';

$i = array( 315, 420, 520, 100, 50, 3, "田中");
for($j = 0; $j < 7; $j++ ) {
  echo $i[$j] . '<br>';
}

echo '<br>';
echo '<br>';

$i = array( "田中", "山田", "佐藤");
for($j = 0; $j < 4; $j++ ) {
  echo $i[$j] . '<br>';
}
?>
