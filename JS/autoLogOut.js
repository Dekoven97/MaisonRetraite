
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 60000) 
         window.location = "logout.php";
         else 
             setTimeout(refresh, 5000);
     }

     setTimeout(refresh, 5000);
