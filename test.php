<?php
$fruits = array("apple","orange","lemon");
for($i = 0;$i<count($fruits);$i++ ){
    echo "要素は" .$fruits[$i];
    echo "\n";
}

$animals = array("dog","cat","panda");
foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}