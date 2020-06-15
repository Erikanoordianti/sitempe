<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Id Penjualan</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'id_penjualan','value'=>$row->id_penjualan,'class'=>'form-control'));?>
            <?php echo form_error('id_penjualan');?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Pembelian</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_pembelian','type'=>'date','value'=>$row->tanggal_pembelian,'class'=>'form-control'));?>
            <?php echo form_error('tanggal_pembelian');?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">No Nota</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'no_nota','value'=>$row->no_nota,'class'=>'form-control'));?>
            <?php echo form_error('no_nota');?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Konsumen</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_konsumen','value'=>$row->nama_konsumen,'class'=>'form-control'));?>
            <?php echo form_error('nama_konsumen');?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Kualitas</label>
          <div class="col-sm-8">
          <select name ='kualitas'>
          <option value ='Baik'>Baik</option>
          <option value ='Buruk'>Buruk</option>
          </select>
            </div>
        </div>
&emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Ukuran</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'ukuran','value'=>$row->ukuran,'class'=>'form-control'));?>
            <?php echo form_error('ukuran');?>
            </div>
         </div>
         &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga','value'=>$row->harga,'class'=>'form-control'));?>
            <?php echo form_error('harga');?>
            </div>
            </div>
            &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Beli</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah_beli','value'=>$row->jumlah_beli,'class'=>'form-control'));?>
            <?php echo form_error('jumlah_beli');?>
            </div>
        </div>
        &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Total Bayar</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'total_bayar','value'=>$row->total_bayar,'class'=>'form-control'));?>
            <?php echo form_error('total_bayar');?>
            </div>
        </div>
        &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
          <div class="col-sm-8">
          <select name ='status'>
          <option value ='Sudah Dibayar'>Sudah Dibayar</option>
          <option value ='Belum Dibayar'>Belum Dibayar</option>
          </select>
        </div>
    </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"penjualan/informasi_penjualan/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>