<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php";?>
<body>
<?php include "navigasi.php";?>
<!--- Tampil Judul dan Kategori PDF-->  
<div class="container"> 
    <h2>Contoh Mengload Dokumen PDF</h2> 
    <div class="row">
    <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="pull-left">DOKUMEN PDF</div>
                <br>
            </div>
            <div class="panel-body">
                <?php
                    $qu=mysqli_query($koneksi,"select * from tb_buku order by id desc limit 3");
                    $no=1;
                    while($has=mysqli_fetch_row($qu))
                    {
                        if($no<10)
                            $no='0'.$no;
                        echo "
                        <div class='row' style='margin-bottom:12px;padding-left:15px'>
                            <div class='col-md-2' style='background-color:#EE0930 ;color:#eee' ;>
                                <h2 style='text-align:center'>$no</h2>
                            </div>
                            <div class='col-md-10'>
                            <h5 style='padding-bottom:0px;'>$has[2]</h5>
                            <hr class='grsbawah'>
                            <h5><a href='load_pdf.php?id=$has[0]'>$has[1]</a></h5>
                            </div>
                            </div>";
                        $no++;
                    }
                ?>
            </div>
        </div>
        </div>
    </div>
</div> 
<!-- Akhir Tampil Judul dan Kategori PDF -->
</body>
</html>