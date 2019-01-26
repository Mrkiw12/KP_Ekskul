<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Senbud & Ekstrakurikuler</title>
  <?php include '../css/package.php'; ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <a href="logout.php" name="logout" class="btn btn-danger" style="margin-left: auto;">
       Logout  
    </a>
      
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../img/wk.jpg" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMK WIKRAMA BOGOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Home
                <!-- <i class="right fa fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Absen Seni Budaya
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="absen_senbud.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Absen Siswa & Siswi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Absen Ekstrakurikuler
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="absen_ekstrakurikuler.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Absen Siswa & Siswi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-folder-open-o"></i>
              <p>
                Laporan
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="cisarua.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Seni Budaya</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="cisarua.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Ekstrakurikuler</p>
                </a>
              </li>
            </ul>
          </li>
        </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h4>Daftar Seni Budaya</h4>
                <p>1. Seni Rupa</p>
                <p>2. Seni Tari</p>
                <p>3. Seni Suara</p>
                <p>4. Angklung</p>
                <p>5. Degung</p>
                <p>6. Guitar</p>
                <p>7. Teater</p>
                <p>8. Perkusi</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h4>Daftar Ekstrakurikuler Non Produktif</h4>
                <p>1. Basket</p>
                <p>2. Bulu Tangkis</p>
                <p>3. Band</p>
                <p>4. Bola Volley</p>
                <p>5. Broadcasting</p>
                <p>6. Catur</p>
                <p>7. Cyber Club</p>
                <p>8. Joyful English</p>
                <p>9. Jurnalistik</p>
                <p>10. Kaligrafi</p>
                <p>11. Marawis</p>
                <p>12. Tenis Meja</p>
                <p>13. Musikalisasi Puisi dan Cerpen</p>
                <p>14. Karya Ilmiah Remaja</p>
                <p>15. Palang Merah Remaja</p>
                <p>16. Baca Tulis Qur'an</p>
                <p>17. Renang</p>
                <p>18. Futsal</p>
                <p>19. Karate</p>
                <p>20. Paskibra</p>
                <p>21. Pencak Silat</p>
                <p>22. SepakBola</p>
                <p>23. Taekwondo</p> 
                <p>24. Tunas Hijau</p>
                <p>25. Musik Kolaborasi Wikrama</p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<?php include '../js.php'; ?>
</body>
</html>
