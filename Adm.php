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
<script src="https://kit.fontawesome.com/98604d5c1b.js" crossorigin="anonymous"></script>

<!--CSS-->
<link rel="stylesheet" href="css/adm.css">
<!--website icon-->
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
<!--===============================-->
    <title>Administration</title>
</head>
<body>
  
  
  <div class="ead">

   <header>
   
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="user.php"><img src="img/img1.png" alt="">Maison de retraite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      




      <li class="nav-item active">
        <a class="nav-link" href="#">Administration<span class="sr-only">(current)</span></a>
      </li>
    






<!--============================================================-->
   </ul>
   

 

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



<div class="container choose  d-flex flex-row   d-flex justify-content-center">





<!--========================card 1======================-->
<div class="card" style="width: 18rem;">
<i class="fas fa-users tes card-img-top"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Résident</h5>
    <p class="card-text">Liste des Résident de l'établissements.</p>
    <a href="admRes.php" class="btn btn-primary">Voir</a>
  </div>
</div>
<!--============================================================-->





<!--========================card 2======================-->
<div class="card c2" style="width: 18rem;">
<i class="fas fa-users-cog tes card-img-top"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Administration</h5>
    <p class="card-text">Liste des Utilisateurs</p>
    <a href="#" class="btn btn-primary"  onclick="openForm()" >Acceder</a>
  </div>
</div>
<!--============================================================-->


<!--========================card 3======================-->
<div class="card c2" style="width: 18rem;">
<i class="far fa-user tes card-img-top"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">User</h5>
    <p class="card-text">Liste des Utilisateurs,UserTrack,stock etc</p>
    <a href="userList.php" class="btn btn-primary"  onclick="openForm()" >Acceder</a>
  </div>
</div>
<!--============================================================-->

</div>
<!--========================================================-->


</br>





<div class="container choose  d-flex flex-row   d-flex justify-content-center">


<!--========================card 4======================-->
<div class="card c2" style="width: 18rem;">
<i class="fas fa-clock tes card-img-top" ></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">User track</h5>
    <p class="card-text">Liste des Utilisateurs,UserTrack,stock etc</p>
    <a href="track.php" class="btn btn-primary"  onclick="openForm()" >Acceder</a>
  </div>
</div>
<!--============================================================-->


<!--========================card 5======================-->
<div class="card c2" style="width: 18rem;">
<i class="fas fa-coins tes card-img-top"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Stock</h5>
    <p class="card-text">Liste des Utilisateurs,UserTrack,stock etc</p>
    <a href="stock.php" class="btn btn-primary"  onclick="openForm()" >Acceder</a>
  </div>
</div>
<!--============================================================-->




<!--========================card 6======================-->
<div class="card c2" style="width: 18rem;">
<i class="fas fa-user-md tes  card-img-top"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Staff Medical</h5>
    <p class="card-text">Liste des Utilisateurs,UserTrack,stock etc</p>
    <a href="staff_med.php" class="btn btn-primary"  onclick="openForm()" >Acceder</a>
  </div>
</div>
<!--============================================================-->








</div>

<div class="container choose  d-flex flex-row   d-flex justify-content-center">


<!--========================card 7======================-->
<div class="card c2" style="width: 18rem;">
<i class="fas fa-broom tes  card-img-top"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Personnel d'entretien</h5>
    <p class="card-text">Liste des Utilisateurs,UserTrack,stock etc</p>
    <a href="persoDentre.php" class="btn btn-primary"  onclick="openForm()" >Acceder</a>
  </div>
</div>
<!--============================================================-->






</div>







<!--==============================================-->






<!--========================Auto logout after inactivity========================-->
<script type="text/javascript"   src="JS/autoLogOut.js"></script>
<!--================================================-->


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