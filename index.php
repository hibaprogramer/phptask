
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>

    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

    
  <?php include './readProducts.php' ;
  echo "<table id=customers>";
   
   
 echo "<tr>";
  echo  "<th>id</th>";
  echo  "<th>name</th>";
   echo "<th>price</th>";
   echo "<th>image_name</th>";
  echo "</tr>";
  //print_r($ar) ;
   foreach($ar as $v )
    {   echo "<tr>";
       echo "<td>".$v->getcode()."</td>";
       echo "<td>". $v->getname()."</td>";
       echo "<td>".$v->getprice()."</td>";
       echo "<td>".$v->getimage()."</td>";
      echo"</tr>";
    }
    echo " </table>";
    ?>
    
    
</body>
</html>
