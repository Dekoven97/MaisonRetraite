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
<link rel="stylesheet" href="css/save.css">
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
        <a class="nav-link" href="user.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Info.php">Gestion</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="save.php">Enregistrer un Résident<span class="sr-only">(current)</span></a>
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

<!--Main-->
<div class="main">

<!--==========================================Form===============================================-->
        <div class="container">
        <div class="row">
			  <div class="col-md-5 mx-auto">
			  <div id="first">
				<div class="myform form ">
					           <div class="logo mb-3">
						               <div class="col-md-12 text-center">
                   <img src="img/img1.png" alt="">
							<h1>Maison de retraite</h1>
                     <h3>Enregistrer un Résident</h3>
						 </div>
					</div>
                   <form action="traitSav.php" method="post" name="login"><br>
                   <h5>Résident</h5>
                                 <div class="sepa">
                                     </div>
                                     <br>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Nom</label>
                              <input type="text" name="Nom"  class="form-control" id="Nom"  placeholder="Entrer le Nom du Résident" required>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Prenom</label>
                              <input type="text" name="Prenom" id="Prenom"  class="form-control"  placeholder="Entrer le Prenom du Résident" required>
                           </div>
                           <div class="form-group">
                           <label for="exampleInputEmail1">Sexe</label></br>
                           <label for="">Masculin</label> 
                           <input type="radio" id="male" name="gender" value="M"><br>
                          
                           <label for="">Feminin</label>
                           <input type="radio" id="Female" name="gender" value="F"><br>
                           </div>
                           <div class="form-group">
                              <label for="datedenais">Date de naissance</label>
                              <input type="Date" name="dateDeNais" id="datedenais"  class="form-control"    onchange="submitBday()"    max="1980-12-31"     placeholder="date de naissance du patience" required>
                              
                           </div>
                           <div class="form-group">
                              <label for="">Age</label>
                             <!-- <input type="Number" name="Age" id="Age"    max="120"  min="40" class="form-control"  placeholder="Entrer l'age du patient" required>
                          -->
                          <p id="resultBday"> </p>
                           </div><br>
                           
                           
                           
                           
                           <!--============Age auto generate JS===============-->
                         <!--  <script type="text/javascript">  
            function SelectDate(e) {  
                var PresentDay = new Date();  
                var dateOfBirth = e.get_selectedDate();  
                var months = (PresentDay.getMonth() - dateOfBirth.getMonth() + (12 * (PresentDay.getFullYear() - dateOfBirth.getFullYear())));                  
                document.getElementById("datedenais").value = Math.round(months / 12);  
            }              
</script> 


-->

                                    <script type='text/javascript'>
                                    function submitBday() {
                                     var Q4A = "";
                                    var Bdate = document.getElementById('datedenais').value;
                                    var Bday = +new Date(Bdate);
                                    Q4A =~~ ((Date.now() - Bday) / (31557600000));
                                    var res = parseInt(Q4A * 100)/100;
                                    //var res = Q4A.toFixed(0);
                                    var theBday = document.getElementById('resultBday');
                                      theBday.innerHTML = res;
                                                                }
                                                  </script>
                                  <!--======================================================-->

                            <h5>Personne résponsable</h5>
                                 <div class="sepa">
                                     </div>
                                     <br>
                                     <div class="form-group">
                              <label for="">Nom</label>
                              <input type="text" name="nomResp" id="nomResp"   class="form-control"  placeholder="Entrer le nom du responsable" required>
                           </div>
                           <div class="form-group">
                              <label for="">Prénom</label>
                              <input type="text" name="prenomResp" id="prenomResp"   class="form-control"  placeholder="Entrer le Prénom du responsable" required>
                           </div>
                           <div class="form-group">
                              <label for="">Téléphone</label>
                              <input type="tel" name="telResp" id="telResp"   class="form-control"  placeholder="50930000000"    required>

                           </div>
                           <div class="form-group">
                              <label for="">Addresse</label>
                              <input type="text" name="adresResp" id="adresResp"   class="form-control"  placeholder="36 Rue Darguin,Petion Ville"   required>
                           </div>


                           <div class="form-group">
                              <label for="">CIN</label>
                              <input type="text" name="cinResp" id="cinResp"    pattern="[0-9]{14}" class="form-control"  placeholder=""   required title="numerique seulement de 14 chiffre">
                           </div>









                                                                  
                           <div class="form-group">
                              <label for="">Email</label>
                              <input type="Email" name="emailResp" id="emailResp"   class="form-control"  placeholder="someone@gmail.com"   required>
                           </div>

                           
                           <br>
                            <h5>Maladies</h5>
                                 <div class="sepa">
                                     </div>
                                     <br>
                                     
                                    <input type="hidden"  name="cec" value="N\A">
                                    <input type="checkbox"  name="cec" value="Cécité">
                                    <label for="vehicle1">Cécité</label><br>
                                   <!--===================-->
                                   <input type="hidden"  name="sur" value="N\A">
                                  <input type="checkbox"  name="sur" value="Surdité">
                                   <label for="vehicle2">Surdité</label><br>
                                    <!--===================-->
                                    <input type="hidden"  name="Cancer" value="N\A">
                                   <input type="checkbox"  name="Cancer" value="Cancer">
                                   <label for="vehicle3">Cancer</label><br>
                                   <!--===================-->
                                   <input type="hidden"  name="hyp" value="N\A">
                                   <input type="checkbox"  name="hyp" value="Hypertension">
                                    <label for="vehicle1">Hypertension Artériel</label><br>
                                      <!--===================-->
                                  <input type="hidden"  name="Diabète" value="N\A">
                                   <input type="checkbox"  name="Diabète" value="Diabète">
                                    <label for="vehicle2">Diabète</label><br>
                                    <!--===================-->
                                    <input type="hidden"  name="park" value="N\A">
                                   <input type="checkbox"  name="park" value="Parkinston">
                                   <label for="vehicle3">Parkinston</label><br>
                                     <!--===================-->
                                     <input type="hidden"  name="other1" value="N\A">
                                   <input type="checkbox" value="other" id="other" name="other" class="others" /> 
                                   <label for="other">other</label>

<!--=====================hide checkbox if not checked JS============================-->
<script>
                                   $(".others").change(function () {
    //check if its checked. If checked move inside and check for others value
    if (this.checked && this.value === "other") {
        //add a text box next to it
        $(this).next("label").after(" <br><textarea name='other1' cols='50' id='other-text'></textarea>")
    } else {
        //remove if unchecked
        $("#other-text").remove();
    }
});
</script>
 <!--=================================================================-->
                                 <br>
                            <h5>Autre Notes et Remarques</h5>
                                 <div class="sepa">
                                     </div>
                                    <br>

                                    <div class="form-group">
                              <textarea name="note" id="" class="form-control" cols="50" rows="10"></textarea>
                           </div>



                                  <!--===============Verification des informations=========================-->

                           <input type="checkbox"  name="accept" value="accept" id="accept">
                                   <label for="vehicle3">Je certifie que les informations sont correctes</label><br>
                              <!--================================Verification JS=========================-->
                                 <script>
                                 $('#accept').click(function() {
                                	if ($('#submitbtn').is(':disabled')) {
                                	$('#submitbtn').removeAttr('disabled');
                                  } else {
                                	$('#submitbtn').attr('disabled', 'disabled');
                                   }
                                       });
                              </script>

                          <!--======================================================================-->



                          <!--========Submit button=====-->
                         <div class="col-md-12 text-center ">   
                              <button type="submit"  id="submitbtn"  disabled="disabled" class=" btn btn-block mybtn btn-primary tx-tfm" name="log">Enregistrer</button>
                           </div>
                          <!--================================-->
                        </form>
                 
			</div>
			</div>                           
			</div>
		  </div>
      </div>   




<!--================================================================-->


<!--===================autologout JS================-->
<script type="text/javascript"   src="JS/autoLogOut.js"></script>
<!--=======================================================-->
</div>
<!--================================================END MAIN================================-->






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