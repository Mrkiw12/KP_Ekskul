<?php 
error_reporting(0);
class oop{

	public function simpan($con, $table, $isi, $link){

		@$sql = "INSERT INTO $table SET $isi";
		@$query = mysqli_query($con, $sql);
		if ($query) {
			echo "<script>alert('Berhasil Menyimpan...');document.location.href='$link'</script>";
		}else{
			// echo "<script>alert('Failed');document.location.href='$link'</script>";
			echo mysqli_error($con);
		}
	}

	public function hapus($con, $table, $where, $link){

		$sql = "DELETE FROM $table WHERE $where";
		$query = mysqli_query($con, $sql);
		if ($query) {
			echo "<script>alert('Berhasil Menghapus...');document.location.href='$link'</script>";
		}else{
			echo "<script>alert('Gagal Menghapus...');document.location.href='$link'</script>";
		}
	}

	public function edit($con, $table, $where){

		$sql = "SELECT * FROM $table WHERE $where";
		$query = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($query);
		return $data;	
	}

	public function update($con, $table, $where, $isi, $link){

		$sql = "UPDATE $table SET $isi WHERE $where";
		$query = mysqli_query($con, $sql);
		if ($query) {
			echo "<script>alert('Berhasil Mengubah...');document.location.href='$link'</script>";
		}else{
			echo "<script>alert('Gagal Mengubah...');document.location.href='$link'</script>";
		}
	}

	public function tampil($con, $table){

		$sql = "SELECT * FROM $table";
		$query = mysqli_query($con, $sql);
		while ($data = mysqli_fetch_array($query))
			$isi[] = $data;
			return @$isi;
	}

	public function login($con, $table, $username, $password, $level, $jabatan, $link){

		session_start();
		$sql = "SELECT * FROM $table WHERE username = '$username' AND password = '$password' AND level = '$level' AND id_rayon = '$jabatan'";
		$query = mysqli_query($con, $sql);
		$cek = mysqli_num_rows($query);
		if ($cek > 0) {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = $level;
			$_SESSION['jabatan'] = $jabatan;
			echo "<script>alert('Login Berhasil');document.location.href='$link'</script>";
		}else{
			echo "<script>alert('Login gagal! Cek username dan password');document.location.href='login.php'</script>";
		}
	}

	public function autokode($con, $table, $field, $prefix){
		
            $sql = "SELECT COUNT($field) FROM $table";
            $query = mysqli_query($con, $sql);
            $rows = mysqli_num_rows($query);
            if($rows > 0){
                $sql = "SELECT MAX($field) AS max FROM $table";
                $query = mysqli_query($con, $sql);
                $result = mysqli_fetch_assoc($query);
                $jml = substr($result['max'], 2,3);
                $jml += 1;
                if(strlen($jml) == 4){ 
                    $kode = $prefix.$jml;
                }else if(strlen($jml) == 3){ 
                    $kode = $prefix."0".$jml;
                }else if(strlen($jml) == 2){ 
                    $kode = $prefix."00".$jml;
                }else if(strlen($jml) == 1){ 
                    $kode = $prefix."000".$jml;
                }
            }else{
                $kode = $prefix.'0001';
            }
            return $kode;
        }

    public function upload($foto, $folder) {
        $tmp = $foto['tmp_name'];
        $namafile = $foto['name'];
        move_uploaded_file($tmp, "$folder/$namafile");
        return $namafile;
    }    

    public function login2($con, $table, $username, $password) {
        $sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_num_rows($query);

        if ($row > 0) {
         $data = mysqli_fetch_assoc($query);

            if($data['level'] == 'Pembimbing Rayon' ){
            $sql1 = "SELECT * FROM query_user WHERE username = '$username' ";
            $query1 = mysqli_query($con,$sql);
            
              return ['response'=>'success','alert'=>'login success','level'=>$data['level'],'rayon' =>$data['id_rayon'] ];            
            }else{

                 return ['response'=>'success','alert'=>'login success','level'=>$data['level'] ];
            }
        }else{
            return ['response'=>'error','alert'=>'<script>alert("Password yang anda masukkan salah")</script>'];
        }
    }
}

?>