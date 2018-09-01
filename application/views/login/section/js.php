
<!-- jQuery 3 -->
<script src="<?=base_url('assets/admin')?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/admin')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
	var form_login   = $('#form')
		submit_login = $('#submit_login');

	submit_login.click(function (e) {
		e.preventDefault();
		$.post(
			form_login.attr('action'),
			form_login.serialize(),
			function (ket) {
				if (ket==1) {
					alert('berhasil login');
					location.href = '{index}admin';
				} else {
					alert('gagal login');
					location.href = '{index}login';
				}
			}
		);
	});
</script>