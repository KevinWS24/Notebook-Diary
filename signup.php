<?php
session_start();
include('includes/config.php');
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);

	$query = mysqli_query($conn,"select * from register where email = '$email'")or die(mysqli_error());
	$count = mysqli_num_rows($query);

	if ($count > 0){ ?>
	 <script>
	 alert('Data Already Exist');
	</script>
	<?php
      }else{
        mysqli_query($conn,"INSERT INTO register(fullName, email, password) VALUES('$name','$email','$password')         
		") or die(mysqli_error()); ?>
		<script>alert('Records Successfully  Added');</script>;
		<script>
		window.location = "index.php"; 
		</script>
		<?php   }

}

?>

<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Notebook Diary |  Developer by KelompokWs</title>
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
  <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="signup.php">Notebook Diary</a>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>Silahkan Masukkan Data Yang Diperlukan Untuk Mendaftar ya!!!</strong>
        </header>
        <form name="signup" method="POST">
          <div class="panel-body wrapper-lg">
          	 <div class="form-group">
	            <label class="control-label">Masukkan nama anda</label>
	            <input name="name" type="text" placeholder="eg. Your name or company" class="form-control input-lg">
	          </div>
	          <div class="form-group">
	            <label class="control-label">Email</label>
	            <input name="email" type="email" placeholder="KelompokWs@example.com" class="form-control input-lg">
	          </div>
	          <div class="form-group">
	            <label class="control-label">Kata Sandi</label>
	            <input name="password" type="password" id="inputPassword" placeholder="Type a password" class="form-control input-lg">
	          </div>
	          <div class="line line-dashed"></div>
	          <button name="signup" type="submit" class="btn btn-primary btn-block">Buat</button>
	          <div class="line line-dashed"></div>
	          <p class="text-muted text-center"><small>Sudah memiliki Akun??</small></p>
	          <a href="index.php" class="btn btn-default btn-block">Masuk</a>
          </div>
        </form>
      </section>
    </div>
  </section>

  <footer id="footer">
    <div class="text-center padder clearfix">
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