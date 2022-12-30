<div class="base post">
	<?php if (!$data['post_undefined']): ?>
		<div class="kesalahan">
			<h1>Post tidak Ditemukan!!</h1>
			<a href="<?php echo BASEURL ?>">Kembali ke Home</a>
		</div>
	<?php else: ?>
	<a href="<?php echo BASEURL ?>Account/<?php echo $data['user']['username'] ?>" class="profile">
		<img src="<?php echo BASEURL ?>assets/img/user/<?php echo $data['penulis']['img'] ?>" alt="">
		<span class="detail">
			<p><?php echo $data['penulis']['username'] ?></p>
			<p class="tgl"><?php echo $data['post']['date'] ?></p>
		</span>
	</a>
	<div class="content">
		<h1><?php echo $data['post']['judul'] ?></h1>
		<p align="justify"><?php echo $data['post']['content'] ?></p>
	</div>
	<?php endif ?>
</div>