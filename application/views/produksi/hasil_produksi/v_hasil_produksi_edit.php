<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Id Produksi</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'id_produksi','value'=>$row->id_produksi,'class'=>'form-control'));?>
            <?php echo form_error('id_produksi');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Produksi</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_produksi','type'=>'date','value'=>$row->tanggal_produksi,'class'=>'form-control'));?>
            <?php echo form_error('tanggal_produksi');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Hasil Total</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'hasil_total','value'=>$row->hasil_total,'class'=>'form-control'));?>
            <?php echo form_error('hasil_total');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Gagal</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah_gagal','value'=>$row->jumlah_gagal,'class'=>'form-control'));?>
            <?php echo form_error('jumlah_gagal');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Hasil Bersih</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'hasil_bersih','value'=>$row->hasil_bersih,'class'=>'form-control'));?>
            <?php echo form_error('hasil_bersih');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"produksi/hasil_produksi/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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