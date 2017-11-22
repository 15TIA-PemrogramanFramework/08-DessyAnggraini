<?php $this->load->view('shif/shiflist_list');?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" placeholder="Masukkan Nama" value="<?php echo $nama; ?>" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Tempat Tanggal Lahir</label>
		<input type="text" placeholder="Masukkan Tempat Tanggal Lahir" value="<?php echo $ttl; ?>" class="form-control" name="ttl">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" placeholder="Masukkan Jenis Kelamin" value="<?php echo $jeniskelamin; ?>" class="form-control" name="jeniskelamin">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>

	<input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('karyawan') ?>" class="btn btn-default">Cancel </a>
</form>

<?php $this->load->view('shif/shif_footer');?>

