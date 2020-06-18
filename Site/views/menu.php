
<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="UTF-8">
  <title>Simplexify </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8f3397bdc4.js" crossorigin="anonymous"></script>
</head>
<body style="background-image:url(img/white.jpg); background-size: contain; width: auto;">

  


   <nav class="navbar navbar-expand-lg " style="background-color: #6351ce; margin-bottom: 50px">

      <a class="navbar-brand link" href="index.php"><i class="fas fa-calculator link"></i> Simplexify</a>

      <!-- Brand and toggle get grouped for better mobile display -->
      <!-- This is the actual code that creates the "hamburger icon" -->
      <!-- The data-target grabs ids to put into the icon -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <!-- Anything inside of collapse navbar-collapse goes into the "hamburger" -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="navbar-nav ">

          <!-- the span class "sr-only" tells screen readers that Home is the active link, for accessibility -->
          <a  class="nav-item nav-link active link"  href="CalculSimplexe.php">Calcul de Simplexe <span class="sr-only"></span></a>
          

          <div class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle link"  href="#" id="navbar-dropdown-menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Qu'est-ce c'est ?
            </a>
            <div class="dropdown-menu" aria-labelledby="navbar-dropdown-menu">
              <a class="dropdown-item" href="methodesimplexe.php">Méthode de Simplexe</a>
              <a class="dropdown-item" href="#">Méthode de Coupes</a>
              <a class="dropdown-item" href="#">Méthode de Séparation et d'évaluation</a>
              <!-- Use this to separate a new link: -->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Modélisation de Problème</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link" href="#" id="navbar-dropdown-menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              George B.Dantzig
            </a>
            <div class="dropdown-menu" aria-labelledby="navbar-dropdown-menu">
              <a class="dropdown-item" href="qui.php">Qui est-ce ?</a>
            </div>
          </div>


          <!-- DROPDOWN MENU -->


        </div> <!-- /.navbar-nav, left-hand content -->

        <!-- STUFF ON THE RIGHT -->
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link link" href="#"><i class="fas fa-door-open"></i></a>
        </div> <!-- /.navbar-nav, right-hand content -->

      </div> <!-- /.navbar-collapse -->
    </nav>


  <style>
    .link { color: black; } /* CSS link color */
    .jumbotron{background-image:url(img/ciment.jpg); background-size: contain;}
    .h1{text-align: center; margin-bottom: 30px;}
    .mtitre{text-align: center; font-weight: bold; margin-bottom: 30px; margin-top: 30px}
    .tabsansbord{ margin:0 auto; border:0; margin-bottom: 20px;}
    .gras{font-weight: bold;}
    .centre{display:block; margin:0 auto; text-align:center;}
    .subindice{font-size:11px;}
    .table{
      margin-left:auto;
      margin-right:auto;
      border:1px solid #aaa;
      border-collapse:collapse;
      -webkit-border-radius:4px;
      -moz-border-radius:4px;
      border-radius:4px;
    }
    .table th, .table td{
      border:1px solid #aaa;
      padding:5px 10px;
    }
    .table th{
      text-align:center;
      font-weight:bold;
      width:150px;
    }
    .elem{background-color:#ffc993;}
    .img{margin-bottom: 20px;}
    .bio{margin-bottom: 30px; margin-top:30px; margin-left: 30px;}
    .drt{float:right;margin: 20px;}
    .gch{float:left; margin: 20px; }

  </style>





