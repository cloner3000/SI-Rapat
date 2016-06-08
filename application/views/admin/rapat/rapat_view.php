<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manajemen Rapat</h1>
        </div>
    </div>
    <div class="row">
     <div class="col-lg-12">
		<div align="right">
			<a href="<?php echo base_url() ?>admin/rapat/tambah" class="btn btn-primary">Tambah Rapat</a>
		</div><br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<p>Daftar Rapat</p>
			</div>
			<div class="panel-body">
			  <div class="table-responsive">
				<table class="table table-stripped">
					<thead><tr>
						<th scope="col">Judul</th>
						<th scope="col">Status</th>
						<th scope="col">Tanggal</th>
						<th scope="col">&nbsp;</th>
					</tr></thead>
					<tbody>
					<?php foreach($rapat as $list) { ?>
					<tr>
						<td>
							<a href="<?php echo base_url() ?>admin/c_admin/read/<?php echo $list['slug'] ?>" target="_blank"><?php echo $list['judul']; ?></a>
						</td>
						<td><?php echo $list['jenis_hasil_rapat']; ?></td>
						<td><?php echo $list['tanggal_rapat']; ?></td>
						<td>
							<a href="<?php echo base_url() ?>admin/rapat/edit/<?php echo $list['id_rapat'] ?>">EDIT</a> | <a href="<?php echo base_url() ?>admin/rapat/delete/<?php echo $list['id_rapat'] ?>">DELETE</a>
						</td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
			  </div>	
			</div>
		</div>	
	  </div>
	</div>	
</div>