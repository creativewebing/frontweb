<?php
// include("config.php");

// $conn=mysqli_connect('localhost','root','','user');
// if(!$conn)
// echo 'error :' .mysqli_connect_error ();



//  $sql='select * from user' ;
//  $result=mysqli_query($conn,$sql);
//  $users=mysqli_fetch_array($result);


//     // echo '<pre>';
//     // print_r($users);
//     // echo '</pre>';





   

   
//     while($res=mysqli_fetch_array($result)){
//         echo" <table   width=50%       border=1px>";
//         echo " <tr>"  ;
        
  

//        echo     "<td>" .$res['id']. "</td>" ;
//        echo " <td>" .$res['firstname']. "</td>" ;
//         echo " <td>" .$res['lastname']. "</td>" ;
//         echo " <td>" .$res['email']. "</td>" ;

//         echo  "</table>" ;
//     }
   ?>

   <table id="emp"         width=50%       border=1    class="dg">
   <?php
   include("config.php");
   
   $conn=mysqli_connect('localhost','root','','user');
   
   if(!$conn)
   echo 'error :' .mysqli_connect_error ();
   
   
   
     $sql='select * from user' ;
   
    $result=mysqli_query($conn,$sql);
   
   
   
       //  echo '<pre>';
       //  print_r($users);
       // echo '</pre>';
   
   
   
       //  echo    " <table   width=50%       border=1        >";
         
   
        echo    " <tr>"  ;
        echo    "<th    >ggg</th>" ;
        echo    "<th    >hhh</th>" ;
       echo    "<th    >kk</th>" ;
        echo    "<th    >dddddddddd</th>" ;
         echo    " </tr>"  ;
      
        // echo  "</table>" ;
      
       while($res=mysqli_fetch_array($result)){
            // echo    " <table   width=50%       border=1px   >";
         
            echo    " <tr>"  ;
          echo     "<td >" .$res['id']. "</td>" ;
          echo     " <td>" .$res['firstname']. "</td>" ;
           echo    " <td>" .$res['lastname']. "</td>" ;
           echo    " <td>" .$res['email']. "</td>" ;
           echo    "</tr>";
       }
           echo  "</table>" ;
     
      
        
       ?>