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
                           $query=mysqli_query($koneksi,"select * from tb_buku ");
                           $data=mysqli_fetch_row($query);
                            ?>
                            <div style='border-bottom:1px solid #000'><?php echo $data[1]; ?></div>
                            <div><?php echo $data[3]; ?></div><br>
                            <div>
                                <embed src="e-book/<?php echo $data[id_buku]; ?>" type="application/pdf" width="100%" height="700"/>
                                
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