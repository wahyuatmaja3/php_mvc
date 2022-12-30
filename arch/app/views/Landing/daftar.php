<div class="daftar">
	<a href="<?php echo BASEURL ?>" class="logo">
		<img src="<?php echo BASEURL ?>assets/img/icon/arch.png" alt="">
	</a>

	<div class="daftar-form">
		<h1 class="judul-daftar">Daftar</h1>
		<form action="" method="POST" class="daftar">
			<div class="input-section">
				<label for="daftar-input-username">Username</label>
				<input class="form-control" type="text" name="username" placeholder="Username tidak boleh mengandung spasi" required>
			</div>
			<div class="input-section">
				<label for="daftar-input-password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password minimal 8 karakter" required minlength="8">
			</div>

			<button class="btn" type="submit" name="daftar">Buat Akun</button>
			
		</form>
	</div>
</div>