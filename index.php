<?php  

	@session_start();
	include "koneksi.php";
	
	if(isset($_POST['login'])){
		
		@$sql = mysqli_query($con, "SELECT * FROM tbl_user WHERE username='$_POST[username]' AND password='$_POST[password]' AND level ='$_POST[hak]'");
		@$cek = mysqli_num_rows($sql);
		@$data = mysqli_fetch_array($sql);

		if($cek > 0)
		{
			if($data['level'] == 'admin'){
				$_SESSION['admin'] = $_POST['username'];
				echo "<script>alert('Selamat Datang $_POST[username]');document.location.href='admin/index.php'</script>";
			}elseif($data['level'] == 'instruktur'){
				$_SESSION['admin'] = $_POST['username'];
				echo "<script>alert('Selamat Datang $_POST[username]');document.location.href='instruktur/index.php'</script>";
			}elseif($data['level'] == 'pembimbing'){
				$_SESSION['admin'] = $_POST['username'];
				echo "<script>alert('Selamat Datang $_POST[username]');document.location.href='pembimbing/index.php'</script>";
			}
		}else{
			echo "<script>alert('Username & Password Salah');document.location.href='index.php'</script>";
		}
      	
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="css/mains.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    	.form-control::focus{
    		background-color: #172029;
    	}
    	.logo-new{
    		margin-top: -80px;
    		margin-bottom: -10px;
    		font-size: 40px;
    	}
    </style>

</head>
<body id="backLogin">
	<section class="login-content">

      <p class="logo-new" style="color: white;">Absensi</p><br>
      <p class="text-center" style="color: white;">Seni Budaya & Ekstrakurikuler</p>
      <div class="login-box">


        <form class="login-form" method="post">
        	<br><br>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text"  autofocus name="username" autocomplete="off" autofocus="on"required>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" required>
          </div>
          <div class="form-group">
          	<select name="hak" class="form-control" required="">
          		<option value="">Pilih Level User</option>
          		<option value="admin">Admin</option>
          		<option value="instruktur">Instruktur</option>
          		<option value="pembimbing">Pembimbing</option>
          	</select>
          </div>
          <div class="form-group">
            <!-- <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
            </div> -->
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-danger btn-block" name="login"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>

          <p style="text-align: center; margin-top: 20px;">Smk Wikrama Bogor</p>

      </div>
    </section>


	  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    
</body>
</html>