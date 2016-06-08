<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Penjadwalan Rapat</h1>
        </div>
    </div>
    <div class="row">
    	
    	<form name="form1" method="post" action="<?php echo base_url() ?>admin/jadwal_rapat/edit" class="myform">
    		<p class="col-lg-4">
    			<label for="judul">Judul Rapat</label>
    			<input type="text" name="judul" value="<?php echo $detail['judul'] ?>">
    		</p>	
    		<p class="col-lg-4">
    			<label for="event_date">Tanggal</label>
                <input type="date" name="event_date" value="<?php echo $detail['event_date'] ?>">
    		</p>
            <p class="col-lg-4">
                <label for="status">Status rapat</label>
                <select name="status" id="status">
                    <option value="OK">Adakan Rapat</option>
                    <option value="Batal">Rapat Dibatalkan</option>
                    <!-- <option value="Done">Rapat Selesai</option> -->
                </select>
            </p>
    		<p class="col-lg-12">
    			<input type="submit" name="submit" id="submit" value="Submit">
                <input type="hidden" name="role_user" value="Admin">
    		</p>
    	</form>
    </div>
    <div class="row">
     <div class="col-lg-12">
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
                    <?php foreach($jadwal as $list) { ?>
                    <tr>
                        <td>
                            <?php echo $list['judul']; ?>
                        </td>
                        <td><?php echo $list['status']; ?></td>
                        <td><?php echo $list['event_date']; ?></td>
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