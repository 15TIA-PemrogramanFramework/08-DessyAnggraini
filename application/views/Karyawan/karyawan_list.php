
<?php $this->load->view('shif/shiflist_list');?>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top: 20px;margin-bottom: 20px">
		<?php echo anchor(site_url("Karyawan/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?>
	</div>
</div>
<div class="row">
	

<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID Karyawan</th>
			<th>Nama</th>
			<th>Tempat Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($karyawan as $key => $value) {
			 ?>
				<tr>
					<td><?php echo $value->id_karyawan; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->ttl; ?></td>
					<td><?php echo $value->jeniskelamin; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td>
						<?php echo anchor(site_url('Karyawan/edit/'.$value->id_karyawan),'<i class="fa fa-pencil"></i>','class="btn btn-warning"');?>
						<?php echo anchor(site_url('Karyawan/delete/'.$value->id_karyawan),'<i class="fa fa-trash"></i>','class="btn btn-danger"');?>
						<?php echo anchor(site_url('Shif/shif/'.$value->id_karyawan.'/'.$value->nama),'<i class="fa fa-clock-o"></i>','class="btn btn-primary"'); ?>
						<?php echo anchor(site_url('Gaji/gaji/'.$value->id_karyawan.'/'.$value->nama),'<i class="fa fa-money"></i>','class="btn btn-primary"'); ?>
					</td>
				</tr>	
				<?php } ?>
		</tbody>
</table>
</div>
<?php  
$this->load->view('shif/shif_footer')
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>