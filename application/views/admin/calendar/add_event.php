<?php 
	$h = '<select name="hour" id="hour">';
	$m = '<select name="minute" id="minute">';
	for($i = 0; $i< 60; $i++){
		if($i < 24){
			$h .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
		}
		$m .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
	}
	$h .= '</select>';
	$m .= '</select>';
?>
<div style="width:700px; height:200px; overflow:auto; color:#000000; margin-bottom:20px;" align="center">
	<h4>Adding event for <?php echo "$day $month $year"?></h4>
	<div class="spacer"></div>
	<form name="form1" class="myform">
	<table>
		<tr>
			<td>Time Start <span class="require">*</span></td>
			<td>:</td>
			<td>
				<?php echo "$h&nbsp;:&nbsp;$m";?>&nbsp;:&nbsp;<select name="second" disabled><option value="00">00</option></select>
				<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user; ?>" maxlength="20" size="20" />
			</td>
		</tr>
		<!-- <tr>
			<td>Time End <span class="require">*</span></td>
			<td>:</td>
			<td><input type="time" name="event_end" id="event_end"></td>
		</tr> -->
		<tr>
			<td>Event <span class="require">*</span></td>
			<td>:</td>
			<td><input type="text" name="event" id="event" maxlength="40" size="40" /></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td>
				<input type="button" name="cancel" value="Cancel" class="cancel">&nbsp;&nbsp;
				<input type="button" name="save" value="Save" class="save"></td></tr>
			</td>
		</tr>
	</table>
	</form>
	<script>	
	$('.cancel').click(function(){
		var data = false;
		$.fn.colorbox.close(data);
	});
	
	$('.save').click(function(){
		if($('#event').val().length > 0){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: "<?php echo site_url("admin/evencal/do_add");?>",
				data:{<?php echo "year:$year,mon:$mon,day:$day";?>, hour:$('#hour').val(), minute: $('#minute').val(), id_user:$('#id_user').val(), event:$('#event').val()},
				success: function(data) {
					if(data.status){
						//$.fn.colorbox.close(data);
						window.location = '<?php echo site_url("admin/evencal/detail/$year/$mon/$day")?>';
					}else{
						$('.spacer').html(data.message);
					}
				}
			});
		}else{
			$('.spacer').html('Please complete the field')
			$('#event').attr('class','error_require');
		}
	});
	</script>
</div>