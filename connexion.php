<?php
#server name
$ServerName="Dekoven";


$connectionInfo=array("Database"=>"Intra");
$conn =sqlsrv_connect($ServerName,$connectionInfo);

if($conn){
   
 //   header('Location:login.php');
}else{
    echo "not connected";
    die(print_r(sqlsrv_errors() ,true));


}
?>