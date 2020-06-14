<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Informasi Penjualan</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("penjualan/informasi_penjualan/form/base","#modal")','Add New informasi penjualan','btn btn-success');
              } else {
                # code...
              }
              ?>
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>No</th>
                <th>Id Penjualan</th>
                <th>Tanggal Pembelian</th>
                <th>No Nota</th>
                <th>Nama Konsumen</th>
                <th>Kualitas</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Jumlah Beli</th>
                <th>Total Bayar</th>
                <th>Status</th>
                <th>Act</th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($informasi_penjualan->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->id_penjualan?></td>
            <td align="center"><?=$row->tanggal_pembelian?></td>
            <td align="center"><?=$row->no_nota?></td>
            <td align="center"><?=$row->nama_konsumen?></td>
            <td align="center"><?=$row->kualitas?></td>
            <td align="center"><?=$row->ukuran?></td>
            <td align="center"><?=$row->harga?></td>
            <td align="center"><?=$row->jumlah_beli?></td>
            <td align="center"><?=$row->total_bayar?></td>
            <td align="center"><?=$row->status?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("penjualan/informasi_penjualan/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
 
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('penjualan/informasi_penjualan/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus informasi penjualan ?')"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
        </table>
        <a href="" class="btn btn-warning" style="margin-bottom;
        10px; "title="view/utily/v_dashboard.php"></i>Back</a>
           <a href ="application/page/informasi_penjualan/cetak.php" class="btn btn-primary" style="margin-bottom;
        10px; "title=""><i class="fa fa-print"></i>Cetak</a>
        </div>
       </div>
      </div>
      </div>
      </div>
      </div>
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#tableku').DataTable( {
      "ordering": false,
    } );
  });
</script>