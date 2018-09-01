<table class="table table-hover">
	<thead>
		<tr>
			<th>username</th>
			<th>password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		{user}
		<tr>
			<td>{username}</td>
			<td>{password}</td>
			<td>
				<a href="<?=site_url('hapus/user/{pk_user}') ?>">Hapus</a>
				<a href="<?=site_url('ubah/user/{pk_user}') ?>">Ubah</a>
			</td>
		</tr>
		{/user}
	</tbody>
</table>