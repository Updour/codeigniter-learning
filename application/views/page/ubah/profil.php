{form_ubah}
	<legend>Form Input profil</legend>
	{ubah}
	<div class="form-group">
		<label for="">nama</label>
		<input type="text" class="form-control" name="nama" value="{nama}" placeholder="Input nama">
	</div>

	<div class="form-group">
		<label for="">Alamat</label>
		<textarea name="alamat" class="form-control" rows="3">{alamat}</textarea>
	</div>
	{/ubah}
	<button type="submit" class="btn btn-primary">Submit</button>
</form>