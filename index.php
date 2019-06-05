<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <title>Us Live Pops</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet" />
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <style>
    .logo-pop {
      width: 130px;
      float: left;
      position: absolute;
      top: 35px;
      right: 0;
      left: 40px;
    }

    .btn-mb {
      padding: 8px 20px 8px 20px;
    }

    .sect {
      height: 100%;
    }

    @media only screen and (max-width: 800px) {
      .logo-pop {
        width: 80px;
        float: left;
        position: absolute;
        top: 20px;
        right: 0;
        left: 40px;
      }

      .sect {
        background-color: rgba(0, 0, 0, 0) !important;
      }
    }
    @media only screen and (max-width: 350px) {
       body{
        background-repeat: initial !important;
       }
    }

    @media only screen and (max-width: 600px) {
      .btn-mb {
        padding: 4px 4px 4px 4px;
        font-size: 8px;
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
        /* background-size: initial !important; */
      }
    }
  </style>
</head>

<body style="background-image: url('img/ground5.jpg'); background-repeat: no-repeat; background-size: cover;">
  <?php include('config.php'); ?>
  <section class="mask rgba-black-light overflow-hidden sect" style=" background-color: rgba(0,0,0,0.3);">
    <div class="container">
      <?php

      if (isset($_POST['save'])) {
        $sql = "INSERT INTO users (username, email, number, location, team)
          VALUES ('" . $_POST["username"] . "','" . $_POST["email"] . "', '" . $_POST["number"] . "','" . $_POST["location"] . "', '" . $_POST["team"] . "')";

        $result = mysqli_query($conn, $sql);
        header('Location: thank.php');
      }

      ?>
      <form class="" action="" method="post">

        <div class="text-center white-text mx-2 mt-lg-5 mt-3 wow fadeIn">
          <img src="img/logo.png" class="logo-pop bg-transparent" alt="" />

          <h1 class="mb-0 mt-sm-5 font-weight-bolder h1-head ">
            <strong>Predict the winner now</strong>
          </h1>

          <p>
            <strong>and grab a bucket of popcorn for free</strong>
          </p>

        </div>
        <div class="container mt-0 pt-0 ">
          <!-- Grd row -->
          <div class="form-row mt-lg-5 mt-3">
            <!-- Grid column -->
            <div class="col-lg-3 col-6 col-md-6 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="name" name="username" required />
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-6 col-md-6 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="email" name="email" required />
            </div>
            <div class="col-lg-3 col-6 col-md-6 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="Phone number" name="number" required />
            </div>
            <div class="col-lg-3 col-6 col-md-6 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" name="location" placeholder="location" required />
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grd row -->
        </div>

        <div class="row justify-content-center d-flex mt-3">
          <div class="col-12 mb-sm-2 text-center">
            <small class="white-text ">Match on Wed 5th June, The Rose Bowl</small>

          </div>
          <div class="col-4 col-sm-4  text-center ">
            <div>
              <img src="img/team/ind-f.png" width="200px" class="img-fluid hoverable" alt="" />
            </div>
            <button style="" type="button" class="btn btn-primary btn-mb mt-lg-4" onclick="document.getElementById('defaultUnchecked').click()">
              India
            </button>
            <div class="custom-control custom-radio radio-b">
              <input type="radio" class="custom-control-input" id="defaultUnchecked" name="team" value="India" required />
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
              <img src="img/team/sa-f.png" width="200px" class="img-fluid hoverable" alt="" />
            </div>
            <button style="" type="button" class="btn btn-primary mt-lg-4 btn-mb" onclick="document.getElementById('defaultChecked').click()">
              South Africa
            </button>
            <div class="custom-control custom-radio radio-b">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="team" value="South Africa" required />
              <label class="custom-control-label" for="defaultChecked"></label>
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-lg-1 pt-0">
          <button class="btn btn-success " type="submit" name="save">Submit</button>
        </div>
      </form>

    </div>
  </section>
  <!-- Navbar -->

  <!-- Navbar -->

  <!-- Full Page Intro -->
  <!-- <div class="view" style="background-image: url('img/bat.jpg'); background-repeat: no-repeat; background-size: cover;">

    <div class="mask rgba-black-light justify-content-center align-items-center">


      <div class="text-center white-text mx-5 mt-5 wow fadeIn">
        <h1 class="mb-2">
          <strong>Guess the winner</strong>
        </h1>

        <p>
          <strong>Best & free guide of responsive web design</strong>
        </p>
        <small>Sat 4th June, Sophia Gardens</small>
        <div class="row ">
          <div class="col-4 text-center">
            <div>
                <img src="img/team/ind.png" class="img-fluid" alt="">
                <button type="button" class="btn btn-elegant">Elegant</button>
            </div>
            
          </div>
          <div class="col-4 text-center">
              <div>
                  <div>
                      <img src="img/team/cup.png" class="img-fluid" alt="">
                  </div>              
                </div>
          </div>
          
          <div class="col-4 text-center">
            <div>
                <img src="img/team/ran.png"class="img-fluid" alt="">
                <button type="button" class="btn btn-elegant">Elegant</button>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div> -->
  <!-- Full Page Intro -->

  <!--Main layout-->

  <!--Main layout-->

  <!--Footer-->

  <!--/.Footer-->
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