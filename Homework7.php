<?php
function randArray(int $length, int $min, int $max): array{
   $array=[];
    for ($i=0; count($array)<$length; $i++){
$array[]=rand($min, $max);

}
    return $array;
}
var_dump(randArray(10,0,9));
$randArray=randArray(10,0,9);

$index=min($randArray);
echo $index;
$index2=max($randArray);
echo $index2;

$index3=sort($randArray);
foreach($randArray as $key => $val){
echo "randArray[".$key."]=".$val."\n";}