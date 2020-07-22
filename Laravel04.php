<?php
//PHP_Laravel03 課題　矢内真帆


//1.二倍値を返す関数
function twice($x){
    $twice = 0;
    $twice = 2*$x;
    return $twice;
}
echo twice(3);
echo "\n";


//2.二つの値の和を返す関数
function addition($a,$b){
    $total = 0;
    $total = $a+$b;
    return $total;
}
echo addition(5,3);
echo "\n";


//3.配列の全ての要素の商を返す関数
function multi_array($arr){
    $total = 1;
    foreach($arr as $a){
   $total = $total*$a;
}
return $total;
}

$oddNum = [1, 3, 5 ,7, 9];
echo multi_array($oddNum);
echo "\n";


//4.配列の一番大きい要素を返す関数
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
  if($a>$max_number){
      $max_number = $a;
  }
 }
 return $max_number;
}
 $arr = [3,7,4,6,8,2,9];
 echo max_array($arr);
 echo "\n";

 
//strip_tags:文字列からhtmlタグを取り除く
$text = '<a href="https://tech-boost.jp/lp/001/?from=google-listing-name&gclid=EAIaIQobChMIkfzgzOjf6gIVEdiWCh1b8AUREAAYASAAEgJ21PD_BwE#">techboost</a>';
echo strip_tags($text);
echo "\n";


//array_push　配列の最後に新たな配列の要素を追加
$animals = array("とら","ぞう","キリン");
array_push($animals,"パンダ","オカピ");
print_r($animals);


//array_merge　配列の結合
$color1 = array("red","blue","yellow","green");
$color2 = array("pink","parple");
$color = array_merge($color1,$color2);
print_r($color);

//time, mktime　　現在時刻、指定時刻のUnixタイムスタンプの取得
echo time();
echo "\n";

$time = mktime(2,3,0,4,16,1999);
echo $time;
echo "\n";

//date    現在の日時を取得
date_default_timezone_set('UTC');
echo date('y M d G:i:s');
echo "\n";