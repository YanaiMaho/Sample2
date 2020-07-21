
<?php
//PHP/laravel03課題  矢内真帆
$name = "YanaiMaho";


if($name == "YanaiMaho"){
    echo "私は$name です";
    echo "\n";
}else{
    echo "私は$nameではありません";
    echo "\n";
}

$total = 0;
for($i = 1;$i<=10000;$i++){
    $total=$total+$i;
}
echo $total;
echo "\n";

$fruits = ["watermelon", "melon", "strawberry","pear","grape"];
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}


/* for文の始めの値を定義する*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}