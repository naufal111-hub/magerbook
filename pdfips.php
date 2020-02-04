<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
           
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="pull-left">DOKUMEN PDF</div>
                            <br>
                        </div>
                        <div class="panel-body">
                           <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM tb_buku where id_kategori=2"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                                                while($data = mysqli_fetch_array($query)) {//untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                                                ?>
                                          
                                            
                            <div style='border-bottom:1px solid #000'><?php echo $data['judul']; ?></div>
                            <div><?php echo $data['pengarang']; ?></div><br>
                            <div>
                                <embed src="e-book/<?php echo $data['link']; ?>" type="application/pdf" width="100%" height="700"/>
                                
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>