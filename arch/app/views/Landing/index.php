<?php  

if ( isset($_POST['masuk'])) {
	
}

?>

<div class="landing">
	<div class="container">
		<div class="top">
			<img src="<?php echo BASEURL ?>assets/img/icon/arch.png" alt="undefined">
			<h1>Arch</h1>
			<p>A place to share stories</p>
		</div>
		<div class="content">
			<div class="daftar">
				<p>Daftar</p>
				<hr>
				<a class="btn btn-light" href="<?php echo BASEURL ?>landing/daftar">Daftar</a>
			</div>
			<div class="masuk">
				<p>Masuk</p>
				<hr>
				<form action="<?php echo BASEURL ?>landing/masuk" method="POST" class="masuk">
					<li>
						<label for="">Username</label>
						<input type="text" id="username" name="username" required placeholder="Masukkan Username anda!" class="form-control">
					</li>
					<li>
						<label for="">Password</label>
						<input type="password" id="password" name="password" required placeholder="Masukkan Password" class="form-control">
					</li>
					<button type="submit" name="masuk">Masuk</button>
				</form>
			</div>
		</div>
	</div>
</div>