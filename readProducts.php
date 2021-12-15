<?php
include './data/task.php';
$products = array();

$f= fopen('data/products.txt','r') or die("Unable to open file!");

$line=explode('2',fgets($f));

//print_r($line) ;
while(!feof($f))
{
 
  //echo "<br>".$ff."</br>";
    $p=explode(',', fgets($f)) ;
     //print_r($p);
     
      $products= new Prodect($p[0],$p[1],$p[2],$p[3]);
      //print_r($products);
    //$products-> getcode();
      //$products-> getname();
      //$products-> getprice();
     //$products-> getimage();
    // echo $x.'<br>';
     //echo $y.'<br>';
     //echo $b.'<br>';
     //echo $n;
   $ar[]=$products;
}
//print_r($ar);
fclose($f);
?>