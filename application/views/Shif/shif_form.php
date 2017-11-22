<?php $this->load->view('shif/shiflist_list');?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>Status</label>
		<input type="text" class="form-control" name="status" required placeholder="Masukkan Status (Pagi/Sore/Lembur)" value="<?php echo  $status; ?>">
	</div>
	<input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan?>"/>
	<input type="hidden" name="nama" value="<?php echo $nama?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button  ?></button>
	<a href="<?php echo site_url('shif') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('shif/shif_footer');?>