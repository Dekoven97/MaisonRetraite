<?php
session_start();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link-->
    <!--boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--fontawesome-->
<link rel="stylesheet" href="fontawesome/css/all.css">
<!--CSS-->
<link rel="stylesheet" href="css/User_List.css">
<!--website icon-->
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
<!--===============================-->
    <title>Maison de retraite</title>
</head>
<body>
  
  
  <div class="ead">

   <header>
   
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="img/img1.png" alt="">Maison de retraite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
 


      <li class="nav-item">
        <a class="nav-link" href="Adm.php">Administration<span class="sr-only">(current)</span></a>
      </li>


      
      <li class="nav-item active">
        <a class="nav-link" href="userList.php">Users<span class="sr-only">(current)</span></a>
      </li>
    




   </ul>
   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->


  <!------------------- connect link and avatar----------------------------------->
                                <!--current user-->
                                <a class="nav-link link" href=""><?php echo $_SESSION['Username'] ?></a><i class="fa fa-user-circle use" ></i>
<!--===========================================================-->
  <!--logout-->
  
        <a class="nav-link" href="logout.php" data-toggle="tooltip" title="Deconnexion"><i class="fas fa-sign-out-alt"></i></a>

<!--======================Tooltip JS======================-->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
        <!--============================================================-->
    
  </div>
</nav>
   </header>
   </div>

<!--====================================================-->





<!--=================================================MAIN=============================-->
<div class="container-fluid main">




<!--========================Table SQL SERVER OUTPUT==============================-->
<div class="container-fluid">
<div class="ti">User</div> <br>

     <table class="table table-responsive" id="editable">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">User ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Accreditation</th>
    </tr>
  </thead>
  <tbody>
    
  <!--===============PHP QUERY FOR OUTPUT==================-->
<?php
require_once('connexion.php');

$sql = "SELECT *
FROM Users";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
  echo' 
  <tr>
     
      <td>'.$row['User_ID'].'</td>
      <td>'.$row['Username'].'</td>
      <td>'.$row['Password'].'</td>
      <td>'.$row['Accreditation'].'</td>
    </tr>

';


}

sqlsrv_free_stmt( $stmt);


?>

<!--========================================END PHP==========================-->

  </tbody>
</table>
</div>
<!--===========================END TABLE=====================-->









</div>


<!--========================END MAIN========================-->

















<!--======Footer======-->
   <div class="container-fluid foot" >

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
     
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">SQL Server intra</a>
  </div>
  <!-- Copyright -->

</footer>
<!--==================END FOOTER================== -->
   
 
   
   
   </div>
 
</body>
</html>