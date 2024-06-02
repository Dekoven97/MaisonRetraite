<?php
require_once('connexion.php');
#catches data from form
//for Patient
$NomPat = $_POST['Nom'];
$PrenomPat = $_POST['Prenom'];
$gender=$_POST['gender'];
$dateDeNPat=$_POST['dateDeNais'];

//Auto take age values
$date = new DateTime($dateDeNPat);
$now = new DateTime();
$interval = $now->diff($date);
$Age = $interval->y;
//====================================
$note=$_POST['note'];



//for Responsable

$nomResp=$_POST['nomResp'];
$prenResp=$_POST['prenomResp'];
$telResp=$_POST['telResp'];
$adresResp=$_POST['adresResp'];
$cinResp=$_POST['cinResp'];
$emailResp=$_POST['emailResp'];

//for maladie

$maladie1=$_POST['cec'];
$maladie2=$_POST['sur'];
$maladie3=$_POST['Cancer'];
$maladie4=$_POST['hyp'];
$maladie5=$_POST['Diabète'];
$maladie6=$_POST['park'];
$maladie7=$_POST['other1'];


#query to insert data on sql server
$query="INSERT INTO Patient(Nom,Prenom,Sexe,Date_de_Naissance,Age,Notes) VALUES ('".$NomPat."','".$PrenomPat."','".$gender."','".$dateDeNPat."','".$Age."','".$note."')";
$query2="INSERT INTO Responsables(Nom_Res,Prenom_Res,Telephone,Adresse,CIN,Email) VALUES ('".$nomResp."','".$prenResp."','".$telResp."','".$adresResp."','".$cinResp."','".$emailResp."')";
$query3="INSERT INTO Maladie(Maladie1,Maladie2,Maladie3,Maladie4,Maladie5,Maladie6,Maladie7) VALUES ('".$maladie1."','".$maladie2."','".$maladie3."','".$maladie4."','".$maladie5."','".$maladie6."','".$maladie7."')";

$result = sqlsrv_query($conn, $query); 
$result2=sqlsrv_query($conn,$query2);
$result3=sqlsrv_query($conn,$query3);

#check if query is executed
if($result && $result2 && $result3===false){
    die( print_r( sqlsrv_errors(), true));
   }
else{
    ?>
    <script type="text/javascript">
       alert("Résident enregistrer avec succes");
      window.location = "user.php";
    </script>
    <?php
    
}   
?>