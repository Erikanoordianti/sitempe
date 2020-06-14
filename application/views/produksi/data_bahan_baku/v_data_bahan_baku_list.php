<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Bahan Baku</h3>
            </div>
            </head>
            <body>
            <table>
            <tr>
            </div>
            </div>
            &emsp;
            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("produksi/data_bahan_baku/form/base","#modal")','Add New Data Bahan Baku','btn btn-success');
              } else {
                # code...
              }
              ?>
            </div>
          </div>
         </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>ID</th>
                <th>ID Bahan Baku</th>
                <th>Nama Bahan Baku</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Act</th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($data_bahan_baku->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->id_bahan_baku?></td>
            <td align="center"><?=$row->nama_bahan_baku?></td>
            <td align="center"><?=$row->harga?></td> 
            <td align="center"><?=$row->jumlah?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("produksi/data_bahan_baku/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('produksi/data_bahan_baku/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data bahan baku?')"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
        </table>
        <a href="" class="btn btn-warning" style="margin-bottom;
        10px; "title="view/utily/v_dashboard.php"></i>Back</a>
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