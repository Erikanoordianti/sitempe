<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">ID</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id','value'=>$row->id,'class'=>'form-control'));?>
            <?php echo form_error('id');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Bahan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_bahan','value'=>$row->nama_bahan,'class'=>'form-control'));?>
            <?php echo form_error('nama_bahan');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Seri</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'seri','value'=>$row->seri,'class'=>'form-control'));?>
            <?php echo form_error('seri');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Merk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'merk','value'=>$row->merk,'class'=>'form-control'));?>
            <?php echo form_error('merk');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Satuan Grosir</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'satuan_grosir','value'=>$row->satuan_grosir,'class'=>'form-control'));?>
            <?php echo form_error('satuan_grosir');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Grosir</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah_grosir','value'=>$row->jumlah_grosir,'class'=>'form-control'));?>
            <?php echo form_error('jumlah_grosir');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Grosir</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_grosir','value'=>$row->harga_grosir,'class'=>'form-control'));?>
            <?php echo form_error('harga_grosir');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Estimasi Jumlah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'estimasi_jumlah','value'=>$row->estimasi_jumlah,'class'=>'form-control'));?>
            <?php echo form_error('estimasi_jumlah');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Dasar</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_dasar','value'=>$row->harga_dasar,'class'=>'form-control'));?>
            <?php echo form_error('harga_dasar');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Lab</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_lab','value'=>$row->nama_lab,'class'=>'form-control'));?>
            <?php echo form_error('nama_lab');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'status','value'=>$row->status,'class'=>'form-control'));?>
            <?php echo form_error('status');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"pengajuan/pengajuan_bahan/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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