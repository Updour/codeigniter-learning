<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		{profil}
		<tr>
			<td>{nama}</td>
			<td>{alamat}</td>
			<td>
				<a href="<?=site_url('admin/hapus/profil/{pk_profil}') ?>">Hapus</a>
				<a href="<?=site_url('admin/ubah/profil/{pk_profil}') ?>">Ubah</a>
			</td>
		</tr>
		{/profil}
	</tbody>
</table>