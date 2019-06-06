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
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
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
      left: 25px;
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
        left: 20px;
      }

      .sect {
        background-color: rgba(0, 0, 0, 0.4) !important;
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
      .d-cont{
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
        /* background-size: initial !important; */
      }
    }
    .btn-primary {
    background-color: #ffb700!important;
    color: #000;
}
.btn-success {
    background-color: #f66d44!important;
    color: #fff;
}
  </style>
</head>

<body style="background-image: url('img/ground5.jpg'); background-repeat: no-repeat; background-size: cover;">
  <?php include('config.php'); ?>
  <section class="mask rgba-black-light overflow-hidden sect" style=" background-color: rgba(0,0,0,0.5);">
  <div style="float:right" class="pr-4 pt-4 d-none d-cont d-lg-block"><p class="text-white mb-1 font-weight-bolder">
Contact :
7095343684
</p>
<p class="text-white font-weight-bolder">
Email :
uslivepops@gmail.com</p></div>
  
    <div class="container">
      <?php

      if (isset($_POST['save'])) {
        $mysqltime = date_create()->format('Y-m-d H:i:s'); 
        $sql = "INSERT INTO users (username, email, number, location, team, matchd, date)
          VALUES ('" . $_POST["username"] . "','" . $_POST["email"] . "', '" . $_POST["number"] . "','" . $_POST["location"] . "', '" . $_POST["team"] . "', '" . $_POST["matchd"] . "', '".$mysqltime."')";

        $result = mysqli_query($conn, $sql);

        header('Location: thank.php');
      }

      ?>
      <form class="" action="" method="post">

        <div class="text-center white-text mx-2 mt-lg-5 mt-3 wow fadeIn">
          <img src="img/logo.png" class="logo-pop bg-transparent" alt="" />

          <h1 class="mb-0 pl-md-4 pt-lg-4 mt-sm-5 font-weight-bolder h1-head " style="font-size:40px;text-transform:uppercase">
            <strong>Predict the winner now</strong>
          </h1>
<h3><b>&</b></h3>
          <p style="font-size:20px" class="">
            <strong><b style="background: #f66d44;
    padding: 5px;">WIN FREE US POPCORN</b> everyday</strong>
          </p>

        </div>
        <div class="container mt-0 pt-0 ">
          <!-- Grd row -->
          <div class="form-row mt-lg-5 mt-3">
            <!-- Grid column -->
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="Name" name="username" required />
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="Email" name="email" required />
            </div>
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="Phone number" name="number" required />
            </div>
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" name="location" placeholder="location" required />
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grd row -->
        </div>

        <div class="row justify-content-center d-flex mt-3">
          <div class="col-12 mb-sm-2 text-center d-none d-lg-block">
          <textarea name="matchd" class="white-text text-center" readonly=readonly>Match on Fri 7th June. County Ground, Bristol</textarea>
            <!-- <small class="white-text " name="match">Match on Fri 7th June. County Ground, Bristol</small> -->

          </div>
          <div class="col-4 col-sm-4  text-center ">
            <div>
              <img src="img/team/pak.png" width="250px" class="img-fluid hoverable" alt="" />
            </div>
            <button style="" type="button" class="btn btn-primary btn-mb mt-lg-4" onclick="document.getElementById('defaultUnchecked').click()">
              Pakistan
            </button>
            <div class="custom-control custom-radio radio-b">
              <input type="radio" class="custom-control-input" id="defaultUnchecked" name="team" value="pakistan" required />
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
              <img src="img/team/sri.png" width="250px" class="img-fluid hoverable" alt="" />
            </div>
            <button style="" type="button" class="btn btn-primary mt-lg-4 btn-mb" onclick="document.getElementById('defaultChecked').click()">
              Srilanka
            </button>
            <div class="custom-control custom-radio radio-b">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="team" value="Srilanka" required />
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