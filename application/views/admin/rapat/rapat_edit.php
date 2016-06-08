<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hasil Rapat</h1>
        </div>
    </div>
    <?php require_once('tinymce.php'); ?>
    <?php echo validation_errors(); ?>
    <div class="row">
      <div class="col-lg-12">
    	<form name="form1" method="post" action="<?php echo base_url() ?>admin/rapat/edit/" class="myform">
    		<p>
    			<label for="judul">Judul Rapat</label>
    			<input type="text" name="judul" id="judul" size="70" value="<?php echo $detail['judul'] ?>">
    		</p>	
    		<p>
    			<label for="hasil_rapat">Hasil Rapat</label>
    			<textarea name="hasil_rapat" id="hasil_rapat" cols="45" rows="5"><?php echo $detail['hasil_rapat'] ?></textarea>
    		</p>
    		<p>
    			<label for="jenis_hasil_rapat">Status rapat</label>
    			<select name="jenis_hasil_rapat" id="jenis_hasil_rapat">
    				<option value="Publish" <?php echo $detail['jenis_hasil_rapat'] ?>>Publikasikan</option>
    				<option value="Draft" <?php if($detail['jenis_hasil_rapat']=="Draft") {echo 'selected';} ?>>Simpan sebagai draft</option>
    			</select>
                <input type="hidden" name="id_rapat" id="id_rapat" value="<?php echo $detail['id_rapat'] ?>">
    		</p>
    		<p>
    			<input type="submit" name="submit" id="submit" value="Submit">
    			<input type="reset" name="submit2" id="submit2" value="Reset">
    		</p>
    	</form>
    	<p>&nbsp;</p>
      </div>  
    </div>

</div>