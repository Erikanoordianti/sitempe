<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_produksi">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Hasil Produksi</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("produksi/hasil_produksi/form/base","#modal")','Add New hasil produksi','btn btn-success');
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
                <th>Id Produksi</th>
                <th>Tanggal Produksi</th>
                <th>Hasil Total </th>
                <th>Jumlah Gagal</th>
                <th>Hasil Bersih</th>
                <th>Act</th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($hasil_produksi->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->id_produksi?></td>
            <td align="center"><?=$row->tanggal_produksi?></td>
            <td align="center"><?=$row->hasil_total?></td>
            <td align="center"><?=$row->jumlah_gagal?></td>
            <td align="center"><?=$row->hasil_bersih?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("produksi/hasil_produksi/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
 
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('produksi/hasil_produksi/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus hasil produksi ?')"><i class="fa fa-trash"></i></a>

            </td>
          </tr>

          <?php endforeach;?>
        </tbody>
        </table>
        <a href="" class="btn btn-warning" style="margin-bottom;
        10px; "title="view/utily/v_dashboard.php"></i>Back</a>  </div>
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