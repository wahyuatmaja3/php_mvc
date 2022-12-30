<?php 
$user= $data['user'];
?>

<div class="container1">

	<div class="profile">
		<div class="profile-img">
			<img src="<?php echo BASEURL ?>img/user/<?php echo $user['profile'] ?>" alt="" class="profile">	
		</div>
		<h1 class="display-6"><?php echo $user['name_user'] ?></h1>
	</div>
	
</div>