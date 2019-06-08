<?php
// session_start();
//DB connection string and Global variable
include '../db/dbsetup.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="900; url=index.php" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap admin panel 2/2/2015">
    <meta name="author" content="Ryan Jones">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <?php
	$sqlSetup = mysqli_query($db_conn, "SELECT tinymce, portfolioheading FROM setup");
	$rowSetup  = mysqli_fetch_array($sqlSetup);
 ?>
</head>
<body>
