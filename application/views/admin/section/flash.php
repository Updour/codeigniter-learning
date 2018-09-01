<?php if ($this->session->flashdata('sukses')): ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Sukses!!!</strong> <?php $this->session->flashdata('sukses'); ?>
	</div>
<?php endif ?>