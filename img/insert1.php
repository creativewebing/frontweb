<?php

include("config.php");


$firstname= $_POST[ 'firstname' ] ;
$lastname=  $_POST[ 'lastname' ] ;
$email=     $_POST[ 'email' ] ;
$type=     $_POST[ 'type' ] ;
$number=     $_POST[ 'number' ] ;
$firsttime=     $_POST[ 'firsttime' ] ;
$lasttime=     $_POST[ 'lasttime' ] ;

echo  $firstname.' '.  $lastname .' '. $email.' '.$type.' '.$firsttime.''.$lasttime ;
echo " <br>";
 echo  "seccess" ;

 isset($_POST['submit']) ; 
 
   $sql="INSERT INTO user5 (firstname,lastname,email,type,number,firsttime,lasttime) VALUES 
   ('$firstname','$lastname','$email','$type','$number','$firsttime','$lasttime')";
  
  // if(!mysqli_query($conn,$sql)){die ("Error: ' .mysqli_error($conn)");
   







header("location:index.php");




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>Document</title>
 
</head>
<body>
  <div class="ttt"><br><br>
    <img src="img/km.png">
    <p>ADD ORDER</p>
<div >


<form      method="POST"    class="lo" >
   



<!-- user_id <br><input type= "number"    name=" user_id"  ><br> -->
    firstname <br><input type= "text"    name="firstname"  ><br>
    lastname  <br><input type= "text"    name="lastname"  ><br>
    email     <br><input type= "text"    name="email"  > <br>
  
    type      <br><input type= "text"    name="type"  > <br>
    number    <br><input type= "text"    name="number"  > <br>
    firsttime      <br><input type= "date"    name="firsttime"  > <br>
    lasttime      <br><input type= "date"    name="lastttime"  > <br>
 
                      <input type= "submit"    value="ADD"    name="submit"  ><br>


</form>

</div>
</div>
</body>
</html>