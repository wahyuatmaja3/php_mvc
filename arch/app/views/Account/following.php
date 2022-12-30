<div class="following">
	<div class="top">
		<h1><?php echo $data['user']['username'] ?></h1>
		<div class="right">
			<form action="" method="POST" class="search">
				<input type="text" placeholder="Search" class="form-control" name="keyword" value="<?php echo $data['keyword'] ?>">
				<button class="btn btn-light" type="submit" name="cari">Search</button>
			</form>
			<a href="<?php echo BASEURL ?>account/<?php echo $data['user']['username'] ?>">
				<img src="<?php echo BASEURL ?>assets/img/user/<?php echo $data['user']['img'] ?>" alt="">
			</a>
		</div>	
	</div>
	<div class="content">
		<h1><?php echo count($data['user']['following']) ?> User ditemukan:</h1>
		<?php foreach ($data['user']['following'] as $f): ?>
			<?php $user = $this->model('User_model')->getUserByName($f);
			if (!$user) {
				continue;
			}
			$img = $user['img'];
			if ( trim($user['img']) == '' ) {
				$img = 'user.png';
			}
			?>

			<a href="<?php echo BASEURL ?>Account/<?php echo $user['username'] ?>" class="user-follow">
				<img src="<?php echo BASEURL ?>assets/img/user/<?php echo $img ?>" alt="">
				<p><?php echo $user['username'] ?></p>
				<button class="btn">Following</button>
			</a>
		<?php endforeach ?>
	</div>
</div>