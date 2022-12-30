<?php  
$img = $data['user']['img'];
if ( trim($data['user']['img']) == '' ) {
	$img = 'user.png';
}

?>

<div class="base account">
	<div class="profile">
		<div class="left">
			<img src="<?php echo BASEURL ?>assets/img/user/<?php echo $img?>" alt="">
			<div class="title">
				<p><?= $data['user']['username'] ?></p>

				<?php if ( $data['user']['username'] == $_SESSION['user']): ?>
					<a href="<?php echo BASEURL ?>Account/following" class="following">Following</a>
				<?php endif ?>
			</div>
		</div>
		<?php if ( $data['user']['username'] == $_SESSION['user']): ?>
			<div class="right">
				<a href="<?php echo BASEURL ?>account/logout">Logout</a>
			</div>
		<?php endif; ?>
	</div>
	<div class="post">
		<h1>Post</h1>
		<?php if (count($data['user']['post']) > 0): ?>
			<?php foreach ($data['user']['post'] as $post): ?>
				<a href="">
					<div class="post-box">
						<h2><?php echo $post['judul'] ?></h2>
						<p>
							<?php 
							echo substr($post['content'], 0, 340) . "...";

							?>
						</p>
						<div class="option">
							<a href="">...</a>
						</div>
					</div>
				</a>
			<?php endforeach ?>
		<?php endif ?>
	</div>
</div>														