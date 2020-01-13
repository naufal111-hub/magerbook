<?php 
             if (isset($_POST['cari'])) {
				  $koneksi = mysql_connect("localhost","root","","perpustakaan");
				  $cari = $_POST['cari'];
				  $sql = "select * from tb_buku where judul like '%".$cari."%'";
				  $result = mysql_query($sql);
				  if (mysql_num_rows($result) > 0) {
				  }else{
				    while ($row = mysql_fetch_array($query)) {
				      $judul = $row['judul'];
				      $id_buku = $row['id_buku'];
				    }
				  }
				}
			?>
<div class="tab-pane  active" id="blockView">
<?php 
include 'koneksi.php';

session_start();
@$sess = $_SESSION['gambar']
?>
<!-- Start product images -->
<div class="product-images">
	<?php
			$query = mysqli_query($koneksi, "select * from tb_buku where gambar = '$sess'");
			while ($data = mysqli_fetch_array($query)) {
				 ?>
<div class="main-image images">
	<span><img src="img/<?php echo $data ['gambar'];?>" width='50'></a></span>
	
</div>
	<?php } ?>
	 
</div>
<!-- End product images>