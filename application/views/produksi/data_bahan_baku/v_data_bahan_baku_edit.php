<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">ID Bahan Baku</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'id_bahan_baku','value'=>$row->id_bahan_baku,'class'=>'form-control'));?>
            <?php echo form_error('id_bahan_baku');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Bahan Baku</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_bahan_baku','value'=>$row->nama_bahan_baku,'class'=>'form-control'));?>
            <?php echo form_error('nama_bahan_baku');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga','value'=>$row->harga,'class'=>'form-control'));?>
            <?php echo form_error('harga');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah','value'=>$row->jumlah,'class'=>'form-control'));?>
            <?php echo form_error('jumlah');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"produksi/data_bahan_baku/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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