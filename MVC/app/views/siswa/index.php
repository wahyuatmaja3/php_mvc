<div class="container mt-5">
	
	<div class="row">
		<div class="col-6">
			<p class="display-6">Daftar Siswa</p>

			<?php foreach ($data['siswa'] as $siswa): ?>

				<div class="card mb-3" style="max-width: 600px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?php echo BASEURL ?>img/<?php echo $siswa['img'] ?>" class="card-img" alt="img" style="max-height: 155px;">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?php echo $siswa['nama'] ?></h5>
								<p class="card-text">Saya seorang siswa jurusan <?php echo $siswa['jurusan'] ?>. Saya kelas <?php echo $siswa['kelas'] ?></p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>

			<?php endforeach ?>

		</div>
	</div>

</div>