<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

     <!-- Main content -->
    <section class="content" style="margin : 15px">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div>
                <div class="container">
                    <div class="row justify-content-center">
                        <?php
                            $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
                            $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
                            $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
                            $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
                            $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
                        ?>
                        
                            <h3 style="text-align: center;">Daftar Nilai Mahasiswa</h3>
                            <table class="table table-striped custab">
                                <thead>
                                    <tr>
                                        <th>nomor</th>
                                        <th>NIM</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        <th>Tugas</th>
                                        <th>Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $nomor = 1;
                                    foreach($ar_nilai as $ns){
                                        echo '<tr><td>'.$nomor.'</td>';
                                        echo '<td>'.$ns['nim'].'</td>';
                                        echo '<td>'.$ns['uts'].'</td>';
                                        echo '<td>'.$ns['uas'].'</td>';
                                        echo '<td>'.$ns['tugas'].'</td>';
                                        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                                        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                                        echo '<tr/>';
                                        $nomor++;   
                                    }
                                ?>
                                </tbody>        
                            </table>
                        
                       
                    </div>
                </div>
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
