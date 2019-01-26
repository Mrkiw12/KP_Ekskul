<?php  

	@session_start();
	@session_destroy();

	echo "<script>alert('Sampai Jumpa...');document.location.href='index.php'</script>";

?>