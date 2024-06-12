<?php
$title = 'outlet';
require'functions.php';
require'koneksi.php';
    $id = $_GET['id'];
    $query =  mysqli_query($koneksi,"SELECT * FROM outlet where id_outlet = $id");
    $data = mysqli_fetch_assoc($query);

    if(isset($_POST['update'])){
    
        $nama = $_POST['nama_outlet'];
        $alamat = $_POST['alamat_outlet'];
        $telp = $_POST['telp_outlet'];  
        $id = $_POST['id'];
        $query = mysqli_query($koneksi,"UPDATE outlet SET nama_outlet = '$nama', alamat_outlet = '$alamat' , telp_outlet = '$telp' WHERE id_outlet = '$id'");      
        echo "<script>alert('sukses mengedit data');window.location='outlet.php'</script>";
        
    }

require'layout_header.php';
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Master Outlet</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="outlet.php">Outlet</a></li>
                <li><a href="#">Tambah Outlet</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                          <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-primary box-title"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?= $data['id_outlet'] ?>">
                <div class="form-group">
                    <label>Nama Outlet</label>
                    <input type="text" value="<?= $data['nama_outlet']; ?>" name="nama_outlet" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Outlet</label>
                    <textarea name="alamat_outlet" class="form-control"><?= $data['alamat_outlet']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" value="<?= $data['telp_outlet']; ?>" name="telp_outlet" class="form-control">
                </div>
        
                <div class="text-right">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" name="update" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require'layout_footer.php';
?> 