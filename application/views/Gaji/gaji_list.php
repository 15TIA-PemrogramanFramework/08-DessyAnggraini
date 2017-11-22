<?php $this->load->view('shif/shiflist_list');?>
<div class="row"> 
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Karyawan</th>
			<th>Nama</th>
			<th>Jumlah Gaji</th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach($gaji as $key => $row){?>
		<tr>
			<td><?php echo $row->id_gaji; ?></td>
			<td><?php echo $row->id_karyawan; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->jumlahgaji; ?></td>
			
		</tr>
		<?php } ?>
	</tbody>

</table>
</div>
<?php $this->load->view('shif/shif_footer');?>

</script>