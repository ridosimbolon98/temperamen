<style type="text/css">
	div #form_konsultasi{
		margin-left: 33%;
	}
		
	#jk{
		width: 100%;
		padding: 8px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=text] {
	    width: 100%;
	    padding: 8px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	}
		
	button[type=submit] {
	    width: 100%;
	    background-color: #4CAF50;
	    color: white;
	    padding: 8px 20px;
	    margin: 8px 0;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	}

	h2{
		text-align: center;
}
</style>

<div style="height: 550px;">
	<br>
	<br>
	<h2 class="text-primary pb-3">Isi Data Konsultasi</h2>
	<form id="form_konsultasi" action="<?php echo base_url(). 'index.php/konsultasi/tambah_konsultasi'; ?>" method="post" class="form-check">
		<div class="col-md-6">			
			<div class="form-group">
				<span class="lead pb-3">Nama Lengkap:</span>
				<input class="form-control requiered" name="nama" placeholder="Nama Pasien" type="text" autocomplete="off">
			</div>
		</div>

		<div class="col-md-6 col-centered">			
			<div class="form-group">
				<span class="lead pb-3">Jenis Kelamin :</span>
				<select id="jk" name="jk" class="form-control requiered" autocomplete="off">
					<option value="" selected>--Pilih Salah Satu--</option>
					<option >Pria</option>
					<option >Wanita</option>
				</select>
			</div>
		</div>

		<div class="col-md-6 col-centered">			
			<div class="form-group">
				<span class="lead pb-3">Usia (dalam tahun):</span>
				<input class="form-control requiered" name="usia" placeholder="Usia" type="text" data-type="integer" autocomplete="off">
			</div>
		</div>
	
		<div class="col-md-6 col-centered">
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary form-control" value="submit">Mulai Konsultasi</button>
			</div>
		</div>
	</form>
	<br>
	<br>
</div>
<script type="text/javascript">
$("form.form-check").submit(function(e) {
	e.preventDefault();
	var inputs = $(this).find('.requiered');
	var success = 0;
	for (var i = 0; i < inputs.length; i++) {
		var _in = $(inputs[i]);
		var _val = _in.val();
		if (_val == '') {
			_in.focus();
			break;
		}
		else
		{
			success = success + 1;
		}
	}
	if (success >= inputs.length) {
		var $input = $("<input type='hidden' name='session_id_valid requiered' value='<?php echo @$session_id_valid;?>'/>")
		$(this).append($input);
		$(this).unbind();

	};
});
</script>
