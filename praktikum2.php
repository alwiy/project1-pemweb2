<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
                <div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container-fluid">
    <h1> Belanja Online</h1>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
<form method="POST" action="praktikum2.php">
  <div class="form-group row">
    <label for="nama_customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nama_produk" id="nama_produk_0" type="radio" class="custom-control-input" value="Televisi"> 
        <label for="nama_produk_0" class="custom-control-label">Televisi</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nama_produk" id="nama_produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="nama_produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nama_produk" id="nama_produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="nama_produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
				</div>
				<div class="col-md-4">
					<table class="table table-sm table-striped">
						<thead>
							<h4>Daftar Harga</h4>
						</thead>
						<tbody>
							<tr>
								<td>
									Televisi
								</td>
								<td>
									:
								</td>
								<td>
									Rp.4.200.000
								</td>
							</tr>
							<tr class="table-active">
								<td>
									Kulkas
								</td>
								<td>
									:
								</td>
								<td>
									Rp.3.100.000
								</td>
							</tr>
							<tr class="table-success">
								<td>
									Mesin Cuci
								</td>
								<td>
									:
								</td>
								<td>
									Rp.3.800.000
								</td>
							</tr>
						</tbody>
					</table>
                    <h5>Harga Dapat berubah setiap saat</h5>
				</div>
			</div>
		</div>
	</div>
</div>


<?php 

error_reporting(0);
$customer = $_POST['nama_customer'];
$produk = $_POST['nama_produk'];
$jumlah = $_POST['jumlah'];
$kirim = $_POST['kirim'];

if ($produk == 'Televisi') {
	$total = $jumlah * 4200000;
}
elseif ($produk == 'Kulkas') {
	$total = $jumlah * 3100000;
}
elseif ($produk == 'Mesin Cuci') {
	$total = $jumlah * 3800000;
}
  


  echo 'Nama Customer : '.$customer;
  echo '<br/> Produk Pilihan : '.$produk;
  echo '</br> Jumlah Beli : '.$jumlah;
  echo '</br> Total Belanja : '.$total;
?>
                </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>
