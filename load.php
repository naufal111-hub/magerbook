<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include'head.php'; ?>
<body>   
<?php include "navigasi.php"; ?>
           
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
                           $data=mysqli_fetch_row(mysqli_query($con,"select * from tb_buku where id='".$_GET['id']."'")); 
                           ?>
                            <div style='border-bottom:1px solid #000'><?php echo $data[1]; ?></div>
                            <div><?php echo $data[2]; ?></div><br>
                            <div>
                                <embed src="biologi/<?php echo $data[0]; ?>.pdf" type="application/pdf" width="100%" height="700"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>