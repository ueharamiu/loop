

<?php
// テスト
echo "<h1>Hello World</h1>";
echo '<br>';
echo '<br>';

/* 条件分岐 elseif */
$data = 10;
if( $data == 10 ) {
  echo '$dataの値は' . 1;
} elseif( $data == 5 ) {
  echo '$dataの値は' . 5;
} elseif( $data == 20 ) {
  echo '$dataの値は' . 20;
} else {
  echo '$dataの値は1および5および20以外の値です';
}
echo '<br>';
echo '<br>';
/* 条件分岐 switch */
switch( $data ) {
  case 1;
    echo '$dataの値は' . 1;
    break;
  case 5;
    echo '$dataの値は' . 5;
    break;
  case 20;
    echo '$dataの値は' . 20;
    break;
  default;
    echo '$dataの値は1および5および20以外の値です';
    break;
}
echo '<br>';
echo '<br>';
// for文
for( $j = 0; $j < 20; $j++ ) {
  echo $j;
  $j++;
}

echo '<br>';
echo '<br>';
// while文
while( $a < 20 ) {
  $a++;
}
echo $a;

echo '<br>';
echo '<br>';
// foreach文
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 3;
    echo $value;
}
// $arr は array(2, 4, 6, 8)となる
unset($value); 

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
$flag = '俺、この戦争が終わったら告白するんだ！';
 if ($flag == true) {
  echo '死亡';
} else {
  echo '生存';
}
echo '<br>';
echo '<br>';
if(false)
  echo 'フラグ';
  else echo 'フラグじゃない';
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
