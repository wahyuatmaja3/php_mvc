<div class="write">
	<div class="top">
		<a href="<?php echo BASEURL ?>" class="logo">
			<img src="<?php echo BASEURL ?>assets/img/icon/arch.png" alt="">
		</a>
		<a href="<?php echo BASEURL ?>Account/<?php echo $data['user']['username'] ?>" class="account">
			<img src="<?php echo BASEURL ?>assets/img/user/<?php echo $data['user']['img'] ?>" alt="">
		</a>
	</div>
	<form action="" method="POST" class="create">
		<div class="paper">
			<input type="text" class="judul" name="judul" placeholder="Title..." required>
			<textarea name="content" id="" placeholder="Tell your story here..." minlength="100" required></textarea>
			<!-- <input type="text" class="content form-control" name="content" > -->
		</div>
		
		<div class="button-publish">
			<button class="btn btn-dark px-4" type="submit" name="publish">Publish</button>
		</div>
	</form>
		
</div>