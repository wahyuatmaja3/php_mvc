<div class="container">

	<div class="row">

		<div class="side col-2">
			<button class="btn btn-light">+ Create Spaces</button>
			<?php foreach ($data['spaces'] as $space): ?>
				
			<a href="" class="spaces">
				<img src="<?php echo BASEURL ?>img/spaces/<?php echo $space['name_spaces'] ?>/icon.png" alt="">
				<p><?php echo $space['name_spaces'] ?></p>
			</a>

			<?php endforeach ?>
		</div>

		<div class="content col-7">
			<div class="content-box add-ans">
				<div class="profile">
					<img src="<?php echo BASEURL ?>img/icon/user.png" alt="">
					<p>Name</p>
				</div>
				<a href="">What do you want to ask or share?</a>
			</div>
			<div class="content-box">
				
			</div>
			<div class="content-box">
				
			</div>
			<div class="content-box">
				
			</div>
			
		</div>

	</div>

</div>
<?php var_dump($data) ?>