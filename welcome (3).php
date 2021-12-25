<!DOCTYPE html>
<html>

<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/wfooter.css">

  <style>
    body {
      font-family: Verdana, sans-serif;
      background: #dddddd;
    }


    .header {
      background: #800000;
      font-family: Times New Roman;
      height: 30px;
      width: 100%;
      text-align: left;
      font-size: 18px;
      font-weight: 10px;
      padding-left: 10px;
      padding-top: 5px;
      color: white;
    }


    .mid {
      margin: 0px;
      background: #513b54;
      width: 100%;
      height: 100px;
      text-align: left;
      padding-top: 7px;
    }

    .text-mid {
      font-family: Times New Roman;
      font-size: 48px;
      font-weight: 10px;
      padding-left: 10px;
      color: white;
    }

    .bold {
      font-family: Arial;
      font-size: 30px;
      color: rgb(0, 0, 0);
    }

    .break {
      font-family: Times New Roman;
      font-size: 42px;
      color: rgb(0, 0, 0);
      margin-left: -5px;
    }

    /* Make the image fully responsive */
    .carousel-inner img {
      align-items: center;
      width: 100%;
      height: 80%;
      padding-top:;
    }

    .right {
      height: 550px;
      width: 400px;
      box-shadow: 0px 0px 15px #999999;
      margin-top: -3.3%;
      margin-left: 10%;
      background-color: #292c2f;
      color: white;
      padding-left: 30px;
      padding-top: 100px;
    }

  
    .mainclass {
      display: flex;
      margin-top: 50px;
    }

    .leftclass {
      
      max-width: 400px;
      padding-left: 6%;
      padding-top: 5%;
      font-size: 14px;
      
    }

    .middleclass {
      font-size: small;
      padding-top: 2%;
      padding-left: 3%;
    }

    .D {
      font-size: 16px;
      color: black;
      padding-left: -4%;
      font-family: Times New Roman;
    }
  </style>
</head>


<body>
  <div class=".container-fluid">
    <div class="header">COMSATS University Islambad, Abbottabad
    </div>

    <div class="mid">
      <span class="text-mid">
        COMSATS University Islambad, Abbottabad
        <span class="break">
          |
          <span class="bold">
            Admissions
          </span>
        </span>
      </span>
    </div><!-- Header Portion end -->

    <!--  -->
    <nav class="navbar navbar-expand-em bg-dark navbar-dark">
      <div class="btn-group">
        <div class="btn-group">
          <a class="btn btn-dark" href="welcome.php" role="button">Home</a>

          <div class="btn-group">
            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
              Departments
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="Cs depart.php">CS Department</a>
              <a class="dropdown-item" href="BTN depart.php">BTN Department</a>
              <a class="dropdown-item" href="Electrica depart.php"> Electrical & Computer Engineering </a>
              <a class="dropdown-item" href="civil depart.php"> Civil Engineering </a>
              <a class="dropdown-item" href="chem dep.php">Chemistry Department</a>
              <a class="dropdown-item" href="Development_studies dep.php">Development Studies Department</a>
              <a class="dropdown-item" href="Earth dep.php">Earth Sciences Department</a>
              <a class="dropdown-item" href="Environmental dep.php">Environmental Sciences Department</a>
               <a class="dropdown-item" href="Humanities dep.php">Humanities Department</a>
              <a class="dropdown-item" href="Management dep.php">Management Sciences Department</a>
              <a class="dropdown-item" href="math dep.php">Mathematics Department</a>
              <a class="dropdown-item" href="pharmacy dep.php">Pharmacy Department</a>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                Admissions
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="Signup.php">Apply</a>
                <a class="dropdown-item" href="check.php">Check</a>
              </div>

              <div class="btn-group">
              <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                Language
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="welcome.php">English</a>
                <a class="dropdown-item" href="urdu.php">Urdu</a>
              </div>

              <div class="btn-group">
                <a class="btn btn-dark" href="contactus.php" role="button">Contact Us</a>
              </div>

               
              <!--btn-group main-->
    </nav>
    <!--nav bar-->

    <!-- -->

    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <!-- Indicators end-->

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/pic 1.jpeg" alt="Your name" style="height: 590px;">
          <div class="carousel-caption">
            <h3>COMSATS University Islambad Abbottabad</h3>
            <p>Best IT University in Pakistan</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/drone_shoot.jpg" alt="tokyo ghoul" style="height: 590px;">
          <div class="carousel-caption">
            <h3>COMSATS University Islambad Abbottabad</h3>
            <p>Beautiful and Refreshing Environment</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/Cui.jpg" alt="You name" style="height: 590px;">
          <div class="carousel-caption">
            <h3>COMSATS University Islambad Abbottabad</h3>
            <p>Social Clubs, Keeping young minds fresh</p>
          </div>
        </div>
      </div>
      <!-- Slideshow end -->

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev" style="padding-right: 150px;">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next" style="padding-left: 150px; ">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!-- -->


    <!--Welcome-->

    <div class="jumbotron" style="background-color:lightgrey; ">
      <h1 class="display-5" style="color:navy; text-align: center;">WELCOME!</h1>
    </div>

    <div class="mainclass">
      <div class="leftclass">
       <h2 class="display-5">
         Annoucement!!
         <hr>
       </h2>
       <div class="D">
         <p style="padding-top:20px; "> Admissions are open now</p>
         <p>Create your account and apply for Admission.</p>
         <p>Make sure to provide valid Information</p> <p>Incase of false or faulty information, your admission form will be nulled and voided.</p> 
         <p><b>NOTE:</b> Due to any reason, if you are unable to submit the registration form within due date. You can Email us within 3 days and we will get back to you promptly.</p>
         <p>If you want to translate this page into Urdu <a href="urdu.php"> Click Here!!! </a></p>
     </div>
        

      </div>
     <div class="middleclass">
        <h2 class="display-5">Message from our entire team</h2>
        <hr><br>
        <div class="D">
          It is our honor to proudly present to you our creation.<br>
          This website will let users:
          <ul>
            <li>Create and manage their accounts.</li>
            <li>Apply for their preffered courses with little to no effort.</li>
            <li>Keep track of their admission progress.</li>
            <li>Provide their feedback and we'll make sure to get back to them.</li>
            <li>In case of any queries they can contact us and will recieve a swift and positive reply.</li>
          </ul>

        </div>
      </div>
      <div class="right">
      <form action="login.php" method="POST">
        <h2 class="display-5" style="text-align: center;"> Log-in Here! </h2> <br><br>
        <table>
          <tr>
            <td>User name:</td>
            <td><input type="text" name="name" placeholder="Enter your User Name"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="Password" name="password" placeholder="Enter Password"></td>
          </tr>
          <tr>
            <td></td>
            <td style="padding-top: 30px; "><input class="btn btn-outline-primary" name="save" type="submit" value="Log-in"></td>
          </tr>
          <tr>
            <td></td>
            <td style="padding-top: 50px;">
              <p>Don't have an account?</p> <a class="btn btn-outline-primary" href="Signup.php">Sign-up</a> For Free!
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

    </div>



    <!-- -->

    
    </div>
   </div>
     </div>
     <!--Container-->
     <footer class="footer-distributed">
 
     <div class="footer-left">
 
    <h3>Page<span>Links</span></h3>
 
    <p class="footer-links">
    <a href="welcome.php">Home</a>
    |  
   <a href="Cs depart.php">CS Departmant</a>
     |
    <a href="CVE depart.php">Civil Department </a>
    |
    <a href="ECE depart.php">Electrical Departmant</a>
    |
    <a href="Signup.php">Sign Up</a>
 
     </p>
 
     <p class="footer-company-name">COMSATS ABBOTTABAD &copy; 2021</p>
     </div>
 
     <div class="footer-center">
 
       <div>
          <i class="fa fa-map-marker"></i>
     <p><span>UNIVERSITY Road</span> ABBOTTABAD, Pakistan</p>
     </div>
 
     <div>
     <i class="fa fa-phone"></i>
     <p>+923016478477</p>
      </div>
 
      <div>
       <i class="fa fa-envelope"></i>
       <p><a href="mailto:contact@cuiatd.edu.pk.com">contact@cuiatd.edu.pk.com</a></p>
        </div>
 
          </div>
   
             <div class="footer-right">
 
        <p class="footer-company-about">
      <span>About the COMSATS</span>
        #1 Ranking IT UNIVERSITY In Pakistan
         </p>
  
         <div class="footer-icons">
 
          <a href="#"><i class="fa fa-facebook"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
             <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
 
              </div>
    </div>
 
                 </footer>
                </body>

</html>

