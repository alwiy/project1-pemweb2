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
            <?php
class Dispenser
{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function __construct($brand, $hargaSegelas, $volumeGelas, $vol)
    {
        $this->namaMinuman = $brand;
        $this->volume = $vol;
        $this->hargaSegelas = $hargaSegelas;
        $this->volumeGelas = $volumeGelas;
    }
    public function beli($jumlah)
    {
        echo "Pengguna Membeli Minuman " . $this->namaMinuman . " Sejumlah " . $jumlah . " Gelas";
        echo "<br>";
        $this->volume = $this->volume - ($this->volumeGelas * $jumlah);
        echo "Total Harganya adalah Rp " . ($this->hargaSegelas * $jumlah) . ",-";
        echo "<br>";
        return;
    }
    public function print()
    {
        echo "Merek Minuman = " . $this->namaMinuman;
        echo "<br>";
        echo "Isi wadah = " . $this->volume . " ml";
        echo "<br>";
        echo "Harga Pergelas = Rp " . $this->hargaSegelas . ",-";
        echo "<br>";
        echo "Ukuran Pergelas = " . $this->volumeGelas . " ml";
        echo "<hr>";
    }
    public function isiUlang()
    {
        $this->volume = $this->volume + 10000;
    }
};

$minuman = new Dispenser("Coca Cola", 2000, 250, 10000);
$minuman->print();
$minuman->beli(4);
$minuman->print();
$minuman->isiUlang();
$minuman->print();
?>
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
