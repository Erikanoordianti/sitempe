<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Id Penjualan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id_penjualan','class'=>'form-control'));?>
            <?php echo form_error('id_penjualan');?>
            <span id="check_data"></span>
            </div> 
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Pembelian</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_pembelian','type'=>'date','class'=>'form-control'));?>
            <?php echo form_error('tanggal_pembelian');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">No Nota</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'no_nota','class'=>'form-control'));?>
            <?php echo form_error('no_nota');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Konsumen</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_konsumen','class'=>'form-control'));?>
            <?php echo form_error('nama_konsumen');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Kualitas</label>
            <div class="col-sm-8">
            <select name ='kualitas'>
          <option value ='Baik'>Baik</option>
          <option value ='Buruk'>Buruk</option>
          </select>
          <span id="check_data"></span>
          </div>
        </div>
        &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Ukuran</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'ukuran','class'=>'form-control'));?>
            <?php echo form_error('ukuran');?>
            <span id="check_data"></span>
            </div>
        &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga','class'=>'form-control'));?>
            <?php echo form_error('harga');?>
            <span id="check_data"></span>
            </div>
        </div>
        &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Beli</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah_beli','class'=>'form-control'));?>
            <?php echo form_error('jumlah_beli');?>
            <span id="check_data"></span>
            </div>
        </div>
        &emsp;
        <div class="form-group">
            <label class="col-sm-4 control-label">Total Bayar</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'total_bayar','class'=>'form-control'));?>
            <?php echo form_error('total_bayar');?>
            <span id="check_data"></span>
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
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"penjualan/informasi_penjualan/show_addForm/","#divsubcontent")','Save','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>