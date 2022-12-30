<div class="base home">
	<div class="top">
		<form action="" method="POST" class="search-bar">
			<input type="text" class="form-control" placeholder="Search" name="keyword" value="<?php echo $data['keyword'] ?>">
			<button class="cari btn" name="cari">
				<img src="<?php echo BASEURL ?>assets/img/icon/search.png" alt="">
			</button>
		</form>
	</div>
	<div class="content">
		<div class="menu">
			<p>Following</p>
		</div>
		<?php if (count($data['post']) == 0): ?>
			<div class="tidak-ada">
				<p>Tidak ditemukan!</p>
			</div>

		<?php else: ?>
			<?php foreach ($data['post'] as $post): ?>
				<?php 
				$user = $this->model('User_model')->getUserById($post['id_penulis']);
				?>
				<div class="post-box">
					<a href="<?php echo BASEURL ?>Account/<?php echo $user['username'] ?>" class="penulis">
						<img src="<?php echo BASEURL ?>assets/img/user/<?php echo $user['img'] ?>" alt="">
						<p><?php echo $user['username'] ?></p>
					</a>
					<?php  
						$page_judul = str_replace(" ", "_", $post['judul']);
						$page_judul = $post['id_post'] . "|" . $page_judul;
					?>
					<a href="<?php echo BASEURL ?>post/<?php echo $page_judul ?>" class="detail">
						<p class="judul"><?php echo $post['judul'] ?></p>
						<?php  
						$post['content'] = substr($post['content'], 0, 300) . "..."
						?>
						<p class="isi"><?php echo $post['content'] ?></p>
					</a>
			 	<!-- <div class="menu">
			 		<a href="" class="mark">
			 			<img src="" alt="">
			 		</a>
			 		
			 	</div> -->

			 </div>
			<?php endforeach ?>
		<?php endif ?>
	</div>
</div>
