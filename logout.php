<!--Logout-->
<?php
require_once('connexion.php');
session_start();
session_destroy();



//=================================================track user===================================
#get time
$timestamp = time();
#get local time
date_default_timezone_set('America/Port-au-Prince');
#get time format
$track=(date("F d, Y h:i:s A", $timestamp));
#update table Track on log_out
$query2="UPDATE Track SET log_out=('".$track."') WHERE Username='".$_SESSION['Username']."'";
$result2=sqlsrv_query($conn,$query2);


#check if query is executed
if($result2===false){
   die( print_r( sqlsrv_errors(), true));
  }
else{
   
   
   
}   

#==============================end================================


#redirect

header('Location: index.php');
exit;

?>