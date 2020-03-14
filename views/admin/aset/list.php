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

	<!--DataTables-->

<div class="card mb-3">
		<div class="card-header">

			<a href="<?php echo site_url('admin/aset/add') ?>"><i class="fas fa-plus-left"></i>Add New</a>
		</div>

		<div class="card-body">

			<div class="table-responsive">
				<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Kode</th>
							<th>Nama</th>
							<th>Kategori</th>
							<th>Ruangan</th>
							<th>Tanggal Inventaris</th>
							<th>Batas Pemakaian</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($aset as $aset): ?>
							<tr>
								<td width="150">
									<?php echo $aset->kode ?>
								</td>
								<td>
									<?php echo $aset->nama ?>
								</td>
								<td>
									<?php echo $aset->kategori?>
								</td>
								<td>
									<?php echo $aset->ruangan ?>
								</td>
								<td>
									<?php echo $aset->tanggal inventaris ?>
								</td>
								<td>
									<?php echo $aset->batas pemakaian ?>
								</td>
							<td width="250">
								<a href="<?php echo site_url('admin/aset/edit/'.$aset->aset_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
								<a onclick="deleteconfirm('<?php echo site_url('admin/aset/delete/'.$aset->aset_id ) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>

					<script>
						function deleteConfirm(url){
							$('#btn-delete').attr('href', url);
							$('#deleteModal').modal();
						}
					</script>
				</tbody>
			</table>
						
		</div>
<!--container fluid -->
<!--sticky footer-->
<?php $this->load->view("admin/partials/footer.php") ?>
</div>
<!--content wrapper-->
</div>
<!--wrapper-->
<?php $this->load->view("admin/partials/scrolltop.php") ?>
<?php $this->load->view("admin/partials/modal.php") ?>
<?php $this->load->view("admin/partials/js.php") ?>
</body>
</html>