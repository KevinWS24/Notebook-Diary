<?php
session_start();
include('includes/config.php');
if(isset($_POST['signin']))
{
	$email=$_POST['email'];
	$password=md5($_POST['password']);

	$sql ="SELECT * FROM register where email ='$email' AND password ='$password'";
	$query= mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
	if($count > 0)
	{
		while ($row = mysqli_fetch_assoc($query)) {
		   $_SESSION['alogin']=$row['user_ID'];
		   echo "<script type='text/javascript'> document.location = 'notebook.php'; </script>";
		}

	} 
	else{
	  
	  echo "<script>alert('Invalid Details');</script>";

	}

}

?>

<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Notebook Diary| Developer by KelompokWs</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="login.php">Notebook Diary</a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Halo, Selamat Datang!!!</strong>
        </header>
        <form name="signin" method="post">
          <div class="panel-body wrapper-lg">
          	<div class="form-group">
            <label class="control-label">Email</label>
            <input name="email" type="email" placeholder="KelompokWs@example.com" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input name="password" type="password" id="inputPassword" placeholder="Kata Sandi" class="form-control input-lg">
          </div>
          <div class="line line-dashed"></div>
          <button name="signin" type="submit" class="btn btn-primary btn-block">Masuk</button>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Tidak Memiliki Akun??</small></p>
          <a href="signup.php" class="btn btn-default btn-block">Buat akun baru</a>
          </div>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Notebook Diary| Developer by KelompokWs<br>&copy; 2022</small>
      </p>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>

  <script src="js/bootstrap.js"></script>

  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  
</body>
</html>