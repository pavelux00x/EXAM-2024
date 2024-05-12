<?php
$conn=new mysqli("localhost:3306","root","","CODISCHOOL");
$query="SELECT * FROM STUDENTI";
$result=$conn->query($query);
while($row=$result->fetch_assoc()){
  foreach($row as $key=>$value){
    echo $key . "Value: " . $value  ;
    echo "<br>";


  }

}

?>