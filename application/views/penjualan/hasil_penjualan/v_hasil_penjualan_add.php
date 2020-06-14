<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Informasi Penjualan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'Informasi_penjualan','class'=>'form-control'));?>
            <?php echo form_error('Informasi_penjualan');?>
            <span id="check_data"></span>
            </div> 
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">id</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id','class'=>'form-control'));?>
            <?php echo form_error('id');?>
            <span id="check_data"></span>
            </div> 
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Alias</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'alias','class'=>'form-control'));?>
            <?php echo form_error('alias');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nama</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama','class'=>'form-control'));?>
            <?php echo form_error('nama');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Deskripsi</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'deskripsi','class'=>'form-control'));?>
            <?php echo form_error('deskripsi');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Allowed Level</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'allowed_level','class'=>'form-control'));?>
            <?php echo form_error('allowed_level');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Url</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'url','class'=>'form-control'));?>
            <?php echo form_error('url');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Aktif</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'aktif','class'=>'form-control'));?>
            <?php echo form_error('aktif');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Urutan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'urutan','class'=>'form-control'));?>
            <?php echo form_error('urutan');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Grub</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'grub','class'=>'form-control'));?>
            <?php echo form_error('grub');?>
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