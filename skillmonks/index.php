<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <title>Skill Monks</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet" />
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <style>
    body{
    background-image: url('img/ground4.jpg');
    background-repeat: no-repeat; 
    background-size: cover;
    }
    .logo-pop {
      width: 130px;
      float: left;
      position: absolute;
      top: 35px;
      right: 0;
      left: 25px;
      background-color: white !important;
    border-radius: 25px;
    }

    .btn-mb {
      padding: 8px 20px 8px 20px;
    }

    .sect {
      /* height: 100%; */
    }

    @media only screen and (max-width: 800px) {
      .logo-pop {
        width: 80px;
        float: left;
        position: absolute;
        top: 20px;
        right: 0;
        left: 20px;
      }

      .sect {
        background-color: rgba(0, 0, 0, 0.4) !important;
      }
    }

    @media only screen and (max-width: 350px) {
      body {
        background-repeat: initial !important;
      }
    }

    @media only screen and (max-width: 600px) {
      .btn-mb {
        padding: 4px 4px 4px 4px;
        font-size: 8px;
      }

      .d-cont {
        display: block !important;
      }

      .logo-pop {
        width: 80px;
        float: none;
        position: relative;
        top: 0px;
        left: 0px;
      }

      .h1-head {
        font-size: 22px;
      }

      .sect {
        height: auto;
      }

      body {
        background-size: initial !important;
      }
    }

    .btn-primary {
      background-color: #01773d !important;
      color: #fff;
    }

    .btn-success {
      background-color: #01783d !important;
      color: #fff;
    }
    .nav-trans{
      background-color: transparent !important;
    }
  </style>
  <?php
  include 'db/dbsetup.php'; //contains DB connection string and global variables


  //SQL Select Statements


  $sqlPages = mysqli_query($db_conn, "SELECT id, title, team1, team2, thumbnail, thumbnail1, content, active, datetime FROM match_details WHERE active=1 ORDER BY datetime DESC"); //uses while loop

  $sqlPagesActive = mysqli_query($db_conn, "SELECT id, title, team1, team2, thumbnail, thumbnail1, content, active FROM match_details WHERE active=1"); //uses while loop
  ?>
</head>

<body>
  <section class="mask rgba-black-light overflow-hidden sect" style=" background-color: rgba(0,0,0,0.5);">
  <!-- <nav class="navbar navbar-expand-lg navbar-dark white">
      <img src="img/logo.png" class="logo-pop bg-transparent pl-4 pt-2 pb-2" alt="" />
      <div class="navbar-collapse" id="navbarText" style="display: contents;">
        <ul class="navbar-nav mr-auto">
        </ul>
        <span class="navbar-text white-text">
          <p class="text-dark mb-1 font-weight-bolder">
            Email : team.primeclasses@gmail.com &nbsp &nbsp Contact :
            9703709221

          </p>
        </span>
      </div>
    </nav> -->

    <div class="container">
      <?php

      if (isset($_POST['save'])) {
        $mysqltime = date_create()->format('Y-m-d H:i:s');
        $sql = "INSERT INTO forms_wc (username, email, number, location, course_selected, team, matchd, date)
          VALUES ('" . $_POST["username"] . "','" . $_POST["email"] . "', '" . $_POST["number"] . "','" . $_POST["location"] . "', '" . $_POST["course_selected"] . "', '" . $_POST["team"] . "', '" . $_POST["matchd"] . "', '" . $mysqltime . "')";

        $result = mysqli_query($db_conn, $sql);

        header('Location: thank.php');
      }

      ?>

      <div class="text-center white-text mx-2 mt-lg-5 mt-3 wow fadeIn">
        <img src="img/logo.png" class="logo-pop bg-transparent" alt="" />

        <h1 class="mb-0 pl-md-4 pt-lg-4 mt-sm-5 font-weight-bolder h1-head " style="font-size:40px;text-transform:uppercase">
          <strong>Guess the winner now</strong>
        </h1>
        <h3><b>&</b></h3>
        <p style="font-size:20px" class="">Lucky Winners 
          <strong><b style="background: #01783d;
    padding: 5px;">GET FREE COACHING</b></strong>
        </p>
      </div>
     
     <form class="" action="" method="post">
          <div class="container mt-0 pt-0 ">
            <!-- Grd row -->
            <div class="form-row mt-lg-5 mt-3">
              <!-- Grid column -->
              <div class="col-lg pl-lg-3 pr-lg-3 p-1">
                <!-- Default input -->
                <input type="text" class="form-control" placeholder="Name" name="username" required />
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg pl-lg-3 pr-lg-3 p-1">
                <!-- Default input -->
                <input type="text" class="form-control" placeholder="Email" name="email" required />
              </div>
              <div class="col-lg pl-lg-3 pr-lg-3 p-1">
                <!-- Default input -->
                <input type="text" class="form-control" placeholder="Phone number" name="number" required />
              </div>
              <div class="col-lg pl-lg-3 pr-lg-3 p-1">
                <!-- Default input -->
                <input type="text" class="form-control" name="location" placeholder="location" required />
              </div>
              <div class="col-lg pr-lg-3 p-1">
              <select name="course_selected" class="browser-default custom-select">
  <option selected>Course Intrested In</option>
  <option value="Machine Learning">Machine Learning</option>
  <option value="Data Science">Data Science</option>
  <option value="Algorithm Design">Algorithm Design</option>
</select>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grd row -->
          </div>
          <?php
      while ($rowPagesActive  = mysqli_fetch_array($sqlPagesActive)) {
        ?>
          <div class="row justify-content-center d-flex mt-3">
            <div class="col-12 mb-sm-2 text-center d-none d-lg-block">
              <textarea name="matchd" class="white-text text-center" readonly=readonly><?php echo $rowPagesActive["title"]; ?></textarea>
              <!-- <small class="white-text " name="match_details">Match on Fri 7th June. County Ground, Bristol</small> -->

            </div>
            <div class="col-4 col-sm-4  text-center ">
              <div>
                <?php
                echo "<img src='uploads/" . $rowPagesActive["thumbnail"] . "' class='img-fluid hoverable' width='250px' alt=''>";
                ?>
              </div>
              <button style="" type="button" class="btn btn-primary btn-mb mt-lg-4" onclick="document.getElementById('defaultUnchecked').click()">
                <?php echo $rowPagesActive["team1"]; ?>
              </button>
              <div class="custom-control custom-radio radio-b">
                <input type="radio" class="custom-control-input" id="defaultUnchecked" name="team" value="<?php echo $rowPagesActive["team1"]; ?>" required />
                <label class="custom-control-label" for="defaultUnchecked"></label>
              </div>
            </div>
            <div class="col-2 col-sm-2 text-center">
              <div class="">
                <div>
                  <img src="img/cup.png" width="100px" class="img-fluid" alt="" />
                </div>
                <h3 class="text-white mt-3 font-italic font-weight-bold">VS</h3>
              </div>
            </div>

            <div class="col-4 col-sm-4 text-center">
              <div class="">
                <?php
                echo "<img src='uploads/" . $rowPagesActive["thumbnail1"] . "' class='img-fluid hoverable' width='250px' alt=''>";
                ?>
              </div>
              <button style="" type="button" class="btn btn-primary mt-lg-4 btn-mb" onclick="document.getElementById('defaultChecked').click()">
                <?php echo $rowPagesActive["team2"]; ?>

              </button>
              <div class="custom-control custom-radio radio-b">
                <input type="radio" class="custom-control-input" id="defaultChecked" name="team" value="<?php echo $rowPagesActive["team2"]; ?>" required />
                <label class="custom-control-label" for="defaultChecked"></label>
              </div>
            </div>
          </div>
          <div class="col-12 text-center mt-lg-1 pt-0">
            <button class="btn btn-success " type="submit" name="save">Submit</button>
          </div>
          <h2>
  <?php
  // echo $rowPagesActive["title"]; 
  ?>
</h2>



</div>

<?php
}
?>
        </form>
      <div class="" id="portfolioModal<?php echo $rowPagesActive["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">


    </div>
  </section>
  <!-- Navbar -->
  <script>

  </script>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>