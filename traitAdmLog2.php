<?php
session_start(); // Right at the top of your script



?>



<?php

require_once('connexion.php');
#catches user/password submitted by html form
$username = $_POST['username'];
$password = $_POST['password'];

/*#checks if the html form is filled
if(empty($_POST['email']) || empty($_POST['password'])){
echo "Fill all the fields!";
}else{
*/

#searches for email and password in the database
$query = "SELECT * FROM Users WHERE Username='$username' and Password='$password' and Accreditation=5";
$result = sqlsrv_query($conn, $query);  

#checks if the search was made
if($result === false){
 die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
   ?>
   <script type="text/javascript">
      alert("Mot de passe incorect ou vous n'avez pas l'acrréditation requise pour acceder cette partie");
      window.location = "index.php";
   </script>
   <?php
}else{

#creates sessions
while($row = sqlsrv_fetch_array($result)){
   $_SESSION['User_ID'] = $row['User_ID'];
   $_SESSION['Username'] = $row['Username'];
   $_SESSION['Password'] = $row['Password'];

 
 

//=================================================track user===================================
#get time
$timestamp = time();
#get Local time
date_default_timezone_set('America/Port-au-Prince');
#get time format
$track=(date("F d, Y h:i:s A", $timestamp));
#insert data on table Track
$query2="INSERT INTO Track(Username,log_in) VALUES ('".$username."','".$track."')";
$result2=sqlsrv_query($conn,$query2);


#check if query is executed
if($result2===false){
   die( print_r( sqlsrv_errors(), true));
  }
else{
   
   
   
}   

#==============end================================
 
}
#redirects user
header("Location:Adm.php");
}


?>