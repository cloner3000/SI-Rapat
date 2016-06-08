<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hasil Rapat</h1>
        </div>
    </div>
    <?php require_once('tinymce.php'); ?>
    <?php echo validation_errors(); ?>
    <div class="row">
      
    	<form name="form1" method="post" action="<?php echo base_url() ?>admin/rapat/tambah/" class="myform">
    		<p class="col-lg-12">
    			<label for="judul">Judul Rapat</label>
    			<input type="text" name="judul" id="judul" size="70">
    		</p>	
    		<p class="col-lg-12">
    			<label for="hasil_rapat">Hasil Rapat</label>
    			<textarea name="hasil_rapat" id="hasil_rapat" cols="45" rows="5"></textarea>
    		</p>
            <p class="col-lg-4">
                <label for="tanggal_rapat">Tanggal</label>
                <input type="date" name="tanggal_rapat" id="tanggal_rapat">
            </p>
            <p class="col-lg-4">
                <label for="jam_mulai_rapat">Jam Mulai</label>
                <input type="time" name="jam_mulai_rapat" id="jam_mulai_rapat">
            </p>
            <p class="col-lg-4">
                <label for="jam_selesai_rapat">Jam Selesai</label>
                <input type="time" name="jam_selesai_rapat" id="jam_selesai_rapat">
            </p>
            <!-- <p class="col-lg-12">
                <label for="absensi">Absensi</label>
                    <input type="checkbox" name="absensi[]" value="196001011985031000">Prof. Dr. Surya Afnarius, Ph.D <br>
                    <input type="checkbox" name="absensi[]" value="196409141995121001">Ir. Darwison, MT
            </p> -->
            <hr>
    		<p >
    			<label for="jenis_hasil_rapat">Status rapat</label>
    			<select name="jenis_hasil_rapat" id="jenis_hasil_rapat">
    				<option value="Publish">Publikasikan</option>
    				<option value="Draft">Simpan sebagai draft</option>
    			</select>
    			<input type="hidden" name="id_user" id="id_user" value="1">
    		</p>
    		<p >
    			<input type="submit" name="submit" id="submit" value="Submit">
    			<input type="reset" name="submit2" id="submit2" value="Reset">
    		</p>
    	</form>
        
    	<p>&nbsp;</p>
        
    </div>

</div>