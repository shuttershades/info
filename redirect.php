<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <!-- YOU CAN CHANGE THE TITLE HERE -->
     <title>Free Instagram Followers - Be InstaFamous</title>

     <!-- Bootstrap Core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

     <!-- Custom Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">



     <!-- Plugin CSS -->
     <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
     <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

     <!-- Theme CSS -->
     <link href="css/style.css" rel="stylesheet">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
     <style>
   html { min-height: 100%; }
   .msg {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
   }
   </style>

 </head>

 <body  style="background: url('./img/bg.jpg'); background-size:cover; background-repeat: no-repeat; width: 100%;">


         <div class="container">
             <div class="row">
                 <div class="col-md-12">

                   <div class="col-md-1"></div>
                   <div class="col-md-10 msg text-center" style='color:#ffffff; box-shadow: inset 0px 0px 0 2000px rgba(0,0,0,0.5); padding-top:20px; padding-bottom:20px; margin-top: 40%'>
                           <h1>Committing Changes to Your Account</h1>
                           <h2 id="error" style="display:none;"></h2>

                             <br/>

                           <p id="retry" style="display:none;"></p>

                           <div id="wait">
                           <img src="img/ring.svg" />
                           <p>please wait</p>
                           </div>
                   </div>
                   <div class="col-md-1"></div>

                 </div>
             </div>


     <!-- jQuery -->
     <script src="vendor/jquery/jquery.min.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <script  src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

     <!-- Plugin JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

     <!-- Theme JavaScript -->
     <script src="js/script.js"></script>

     <script type="text/javascript">
      $(document).ready(function() {

  setTimeout(function() {
    var counter = 6;
    $('#wait').slideToggle("fast");
    $('#error').html("<span style='font-size:large;' class='glyphicon glyphicon-remove'></span> All servers are full at the moment :(");
    $('#error').slideToggle("slow");
    setInterval(function() {
      counter--;
      if (counter >= 0) {
        $("#retry").html("Retrying in "+counter+" seconds ...");
      }
      if (counter === 0) {
         clearInterval(counter);
         window.location.href = "http://google.com"; // REPLACE WHAT IS INSIDE THE COMA TO SEND THE VISITOR WHERE YOU WANT ... THIS DEFAULT VALUE WILL RELOAD THE LP
      }                               //IF YOUR NETWORK HAS DIRECT LINK TO THE LOCKER, LIKE OGADS, YOU CAN PUT IT HERE
    }, 1000);
    $('#retry').slideToggle("slow");

  }, 5000);

      });
     </script>

 </body>

 </html>
