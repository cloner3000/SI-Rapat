<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Undangan Rapat</h1>
        </div>
    </div>
    <?php require_once('tinymce.php'); ?>
    <?php echo validation_errors(); ?>
    <div class="row">
    	
    		<form name="form1" method="post" action="<?php echo base_url() ?>admin/email/" class="myform">
    		<p>
    			<label for="email">Email Tujuan</label>
    			<input type="email" name="email" placeholder="xxx@gmail.com">
    		</p>	
    		<p>
    			<label for="perihal">Perihal</label>
                <input type="text" name="perihal" placeholder="Perihal">
    		</p>
            <p class="col-lg-6">
                <label for="nomor_undangan" >Nomor Undangan</label>
                <input type="number" name="nomor_undangan" >
            </p>
            <p class="col-lg-6">
                <label for="kepada">Kepada</label>
                <input type="text" name="kepada" placeholder="nama">
            </p>
            <p>
                <label for="pesan">Pesan</label>
                <textarea name="pesan" required class="form-control">
                    <p>Nomor    : .../UN.16.15.5.2/PP/2015</p>
                    <p>Lampiran : -</p>
                    <p>Hal      : Undangan Rapat</p>
                    <br>
                    <br>
                    <p>Kepada Yth,</p>
                    <p>Bapak/Ibu ........</p>
                    <p>Di</p>
                    <p>     Tempat.</p>
                    <p><b><i>Assalamu’alaikum Wr.Wb.</i></b></p>
                    <br>
                    <p>Semoga Bapak/Ibu dalam keadaan sehat dan selalu dalam limpahan kasih sayang Allah SWT. </p>
                    <br>
                    <p>Dengan ini Kami mengundang Bapak/Ibu untuk dapat menghadiri rapat yang akan diadakn pada:</p>
                    <br>
                    <p>Hari/Tgl         :</p>
                    <p>Waktu            :</p>
                    <p>Tempat           :</p>
                    <p>Agenda           :</p>
                    <br>
                    <p>Demikian disampaikan, atas perhatiannya diucapkan terima kasih.</p>


                </textarea>
            </p>
    		<p >
    			<input type="submit" name="submit" id="submit" value="Submit">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" name="id_event_rapat" placeholder="idEvent" style="width:58px;">
    		</p>
    	</form>
    	
    </div>
</div>