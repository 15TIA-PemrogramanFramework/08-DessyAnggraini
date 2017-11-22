<?php $this->load->view('shif/shiflist_list');?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Jumlah Gaji</label>
		<input type="text" class="form-control" name="jumlahgaji" required placeholder="Masukkan Jumlah Gaji" value="<?php echo $jumlahgaji; ?>">
	</div>

	<input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>">
	<input type="hidden" name="nama" value="<?php echo $nama; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('Gaji') ?>" class="btn btn-default">Cancel </a>
</form>

<?php $this->load->view('shif/shif_footer');?>

