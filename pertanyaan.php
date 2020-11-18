<?php
require_once "core/init.php";
require_once "functions/db.php";
require_once "functions/blog.php";

$articles = tampilkan();

  $error = '';
  $id = $_GET['id'];

  if (isset($_GET['id'])) {
    $article = tampilkan_per_id($id);
    while ($row = mysqli_fetch_assoc($article)) {
      $judul_awal = $row['pertanyaan'];
      $id = $row['id'];
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Web Seminar</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/fullpage.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css" />
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>
<body>
  <div id="fullpage">
    <div class="section">
      <div class="container padding-top-long">
        <h1 align="center" style="text-transform:uppercase;">
          <?=$judul_awal; ?>
        </h1>
      </div>

      <div align="center" class="padding-top">
      <a href="http://localhost/onepage/index.php#5thPage">
        <button style="width:250px; height:50px;" class="btn" type="button" name="button">Back To Question Page</button>
      </a>
      </div>

    </div>
  </div>


    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/fullpage.js"></script>
</body>
</html>
