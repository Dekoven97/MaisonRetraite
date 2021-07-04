
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
<link rel="stylesheet" href="css/info.css">
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
     
   
   
    
    
    <li class="nav-item ">
        <a class="nav-link" href="user.php">Accueil </a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="Info.php">Gestion<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="save.php">Enregistrer un Résident</a>
      </li>

     



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
<!--=====================================================================-->

<!--=====================================MAIN============================-->
<div class="container">

<div class="container choose  d-flex flex-row   d-flex justify-content-center">





<!--========================card 1======================-->
<div class="card" style="width: 18rem;">
<i class="fas fa-users tes"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Résident</h5>
    <p class="card-text">Liste des Résident de l'établissements.</p>
    <a href="show.php" class="btn btn-primary">Voir</a>
  </div>
</div>
<!--============================================================-->





<!--========================card 2======================-->
<div class="card c2" style="width: 18rem;">
<i class="fas fa-users-cog tes"></i>
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Administration</h5>
    <p class="card-text">Liste des Utilisateurs,UserTrack,stock etc</p>
    <a href="#" class="btn btn-primary disabled"  onclick="openForm()" >Acceder</a>
  </div>
</div>
<!--============================================================-->







<!--===============Autentif JS=====================-->


<script>
function openForm() {
  document.getElementById("hide").style.display = "block";
}

function closeForm() {
  document.getElementById("hide").style.display = "none";
}
</script>

<!--
<script>
function authentif() {
  var x = document.getElementById("hide");
  if (x.style.display === "none") {
    x.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
</script>
============================================-->

</div>
<!--=================================================-->

    <!--===================Auto Logout JS======================-->
<script type="text/javascript"   src="JS/autoLogOut.js"></script>
<!--===============================================================-->

<!--====================================Autentif Hiden form==========================-->
<div class="container form-popup" id="hide">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
                   <img src="img/img1.png" alt="">
							<h1>Maison de retraite</h1>
                     <h3>Vérification d'Accréditation</h3>
             </div>
             <!--==================Close Form=====================-->
             <button type="button" class="close" aria-label="Close" onclick="closeForm()">
  <span aria-hidden="true">&times;</span>
</button>
<!--===========================================================-->
            </div>
                   <form action="traitAdmLog.php" method="post" name="login">
                  
                           <div class="form-group">
                              <label for="exampleInputEmail1">Utilisateur</label>
                              <input type="text" name="username"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Utilisateur" required>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Mot De Passe</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe" required>
                           </div>
                           <div class="form-group">
                              <!--<p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>-->
                           </div>
                           <div class="col-md-12 text-center ">
                              
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="log">Connexion</button>
                           </div>
                        </form>
                 
				</div>
			</div>
			  
<!--===============================================================================-->













</div>

<!--====================================END MAIN=============================-->




     
     







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
<!--==================================== -->
   
 
   
   
   </div>
 
</body>
</html>