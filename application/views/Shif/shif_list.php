<?php $this->load->view('shif/shiflist_list');?>
<div class="row"> 
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Karyawan</th>
			<th>Nama</th>
			<th>Status</th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach($shif as $key => $row){?>
		<tr>
			<td><?php echo $row->id_shif; ?></td>
			<td><?php echo $row->id_karyawan; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->status; ?></td>
			
		</tr>
		<?php } ?>
	</tbody>

</table>
</div>
<?php $this->load->view('shif/shif_footer');?>

</script>