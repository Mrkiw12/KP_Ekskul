<?php  
  
  include "../koneksi.php";
  include "../library/controllers.php";
  $perintah=new oop();
  $table="tbl_senbud";


  date_default_timezone_set('Asia/Jakarta');
  if (!empty($_GET['senbud'])) {
    $isi = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tbl_senbud WHERE id_senbud='$_GET[senbud]'"));
    $id_rombel = $isi['id_senbud'];
    $rombel = $isi['senbud']; 
  }


?>

<!-- Start Status area -->
    <br>
    <section class="header">
    <div class="notika-status-area">
        <div class="container-fluid">
          <form method="post" action="">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <div class="card-body">
                              <div class="form-group" style="margin-left: 20px;">
                                <label for="">Pilih Seni Budaya</label>
                                <select name="senbud" class="form-control" style="width: 1000px;">
                                  <option value="<?php echo @$id_senbud ?>"><?php echo @$senbud ?></option>
                                              <?php
                                              $a = $perintah->tampil($con, "tbl_senbud");
                                              foreach ($a as $r) {
                                                  ?>
                                                  <option value="<?php echo $r['0'] ?>"><?php echo $r['1'] ?></option>
                                              <?php } ?>
                                </select>
                                 <br>
                                 <div class="form-group header">
                                   <button type="submit" name="cetak" class="btn btn-primary">CEK&nbsp;<i class="fa fa-print"></i></button>
                                 </div>
                             </div>
                             
                             <?php  

                                if(isset($_POST['cetak'])){
                                  echo "<script>document.location.href='?menu=absen_senbud&senbud=$_POST[senbud]'</script>";
                                }

                                if (!empty($_GET['senbud'])) {
                                    $tgl_sekarang = date('Y-m-d');
                                    $cek = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM query_absen WHERE id_senbud = '$_GET[senbud]' and tgl_absen = '$tgl_sekarang' "));
                                    if ($cek['tgl_absen'] == $tgl_sekarang and $cek['id_senbud'] == $_GET['senbud']) {
                                        echo "<script>alert('Senbud $senbud sudah di absen hari ini');document.location.href='?menu=absen_senbud'</script>";
                                    } else {
                                ?>
                          <br>
                          <table class="table table-bordered table-hover">
                              <tr>
                                  <td rowspan="2">No</td>
                                  <td rowspan="2">NIS</td>
                                  <td rowspan="2">Nama</td>
                                  <td rowspan="2">Jenis Kelamin</td>
                                  <td rowspan="2">Rayon</td>
                                  <td rowspan="2">Kelas</td>
                                  <td rowspan="2">Senbud</td>
                                  <td colspan="4" align="center">Keterangan</td>
                              </tr>
                              <tr>
                                  <td>Hadir</td>
                                  <td>Sakit</td>
                                  <td>Izin</td>
                                  <td>Alpa</td>
                              </tr>
                              <?php
                              $no = 0;
                              $sql = "SELECT * FROM query_siswa WHERE id_senbud = '$_GET[senbud]'";
                              $query = mysqli_query($con, $sql);
                              $cek = mysqli_num_rows($query);
                              if ($cek == "") {
                                  echo "<tr><td align='center' colspan='10'>NO RECORD</td></tr>";
                              } else {

                              while($r= mysqli_fetch_array($query)){
                              $no++;
                              
                              ?>
                                      <tr>
                                          <td><?php echo $no; ?></td>
                                          <td><?php echo $r['nis'] ?></td>
                                          <td><?php echo $r['nama'] ?></td>
                                          <td><?php echo $r['lp'] ?></td>
                                          <td><?php echo $r['ray'] ?></td>
                                          <td><?php echo $r['kelas'] ?></td>
                                          <td><?php echo $r['senbud'] ?></td>
                                          <td><input type="radio" checked="checked" name="keterangan<?php echo $r['nis'] ?>" value="hadir"/></td>
                                          <td><input type="radio" name="keterangan<?php echo $r['nis'] ?>" value="sakit"/></td>
                                          <td><input type="radio" name="keterangan<?php echo $r['nis'] ?>" value="ijin"/></td>
                                          <td><input type="radio" name="keterangan<?php echo $r['nis'] ?>" value="alpa"/></td></td>
                                      </tr>    

                                      <?php
                                      $tgl = date('Y-m-d');
                                      $table = "tbl_absen";
                                      $link = '?menu=absen_senbud';

                                      if (@$_POST['keterangan' . $r['nis']] == 'hadir') {

                                          // $isi = array('nis' => $r['nis'], 'hadir' => '1', 'sakit' => '0', 'ijin' => '0', 'alpa' => '0', 'tgl_absen' => $tgl);
                                        $isi = "nis='$r[nis]', hadir='1', sakit='0',ijin='0',alpa='0',tgl_absen='$tgl'";

                                      } elseif (@$_POST['keterangan' . $r['nis']] == 'sakit') {
                                          
                                          // $isi = array('nis' => $r['nis'], 'hadir' => '0', 'sakit' => '1', 'ijin' => '0', 'alpa' => '0', 'tgl_absen' => $tgl);
                                        $isi = "nis='$r[nis]', hadir='0',sakit='1',ijin='0',alpa='0',tgl_absen='$tgl'";
                                     
                                      } elseif (@$_POST['keterangan' . $r['nis']] == 'ijin') {
                                     
                                          // $isi = array('nis' => $r['nis'], 'hadir' => '0', 'sakit' => '0', 'ijin' => '1', 'alpa' => '0', 'tgl_absen' => $tgl);
                                        $isi = "nis='$r[nis]', hadir='0', sakit='0',ijin='1',alpa='0',tgl_absen='$tgl'";

                                      } else {
                                          
                                          // $isi = array('nis' => $r['nis'], 'hadir' => '0', 'sakit' => '0', 'ijin' => '0', 'alpa' => '1', 'tgl_absen' => $tgl);
                                        $isi = "nis='$r[nis]', hadir='1', sakit='0',ijin='0',alpa='1',tgl_absen='$tgl'";
                                      
                                      }

                                      
                                      if (isset($_REQUEST['simpan'])) {
                                          // $tgl_absen = date('Y-m-d');
                                          // $sql = mysqli_query($con, "INSERT INTO tbl_absen VALUES('$_POST[nis]','$_POST[hadir]','$_POST[sakit]','$_POST[ijin]','$_POST[alpa]','$tgl_absen')");
                                          // if($sql){
                                          //   echo "<script>alert('Berhasil');document.location.href='?menu=absen_senbud'</script>";
                                          // }else{
                                          //   echo "<script>alert('Gagal');document.location.href='?menu=absen_senbud'</script>";
                                          // }
                                          $perintah->simpan($con, $table, $isi, $link);
                                      }
                                      
                                    }
                                  }
                                  ?>
                                  <tr>
                                      <!-- <td colspan="10" align="center">
                                        <a href="" class="btn btn-primary" name="simpan">Simpan</a>
                                      </td> -->
                                      <td colspan="10" align="center"><button type="submit" class="btn btn-success" name="simpan">Simpan&nbsp;<i class="fa fa-download fa-lg"></i></button></td>
                                  </tr>
                              </table>
                              <?php  } } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </form> 
        </div>
    </div>
    </section>
    <!-- End Status area-->