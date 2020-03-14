<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/partials/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("admin/partials/sidebar.php") ?>
		<div id="content-wrapper">

			<div class="container-fluid">
				<?php $this->load->view("admin/partials/breadcrumb.php") ?>

		<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>

	<div class="card mb-3">
		<div class="card-header">

			<a href="<?php echo site_url('admin/aset/') ?>"><i class="fas fa-arrow-left"></i>Back</a>

		</div>
		<div class="card-body">
			<form action="<?php echo site_url('admin/aset/add') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="kode">Kode</label>
					<input class="form-control <?php echo form_error('kode') ? 'is-invalid': '' ?>" type="text" kode="kode" placeholder=" kode aset" /> 
					<div class="invalid-feedback">
						<?php echo form_error('kode') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input class="form-control <?php echo form_error('nama') ? 'is-invalid': '' ?>" type="text" nama="nama" placeholder=" nama aset" /> 
					<div class="invalid-feedback">
						<?php echo form_error('nama') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori</label>
					<input class="form-control <?php echo form_error('kategori') ? 'is-invalid': '' ?>" type="text" kategori="kategori" placeholder=" kategori aset" /> 
					<div class="invalid-feedback">
						<?php echo form_error('kategori') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="ruangan">Ruangan</label>
					<input class="form-control <?php echo form_error('ruangan') ? 'is-invalid': '' ?>" type="text" ruangan="ruangan" placeholder=" ruangan aset" /> 
					<div class="invalid-feedback">
						<?php echo form_error('ruangan') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="tanggal inventaris">Tanggal Inventaris</label>
					<input class="form-control <?php echo form_error('tanggal inventaris') ? 'is-invalid': '' ?>" type="text" tanggal inventaris="tanggal inventaris" placeholder=" tanggal inventaris aset" /> 
					<div class="invalid-feedback">
						<?php echo form_error('tanggal inventaris') ?>
					</div>
				</div>
					<div class="form-group">
					<label for="batas pemakaian">Batas Pemakaian</label>
					<input class="form-control <?php echo form_error('batas pemakaian') ? 'is-invalid': '' ?>" type="text" batas pemakaian="batas pemakaian" placeholder=" batas pemakaian aset" /> 
					<div class="invalid-feedback">
						<?php echo form_error('batas pemakaian') ?>
					</div>
				</div>
			<input class="btn btn-success" type="submit" name="btn" value="save" />
		</form>
	</div>

	<div class="card-footer small text-muted">
		= required fields
	</div>

</div>
<!--container fluid -->
<!--sticky footer-->
<?php $this->load->view("admin/partials/footer.php") ?>
</div>
<!--content wrapper-->
</div>
<!--wrapper-->
<?php $this->load->view("admin/partials/scrolltop.php") ?>
<?php $this->load->view("admin/partials/js.php") ?>
</body>
</html>