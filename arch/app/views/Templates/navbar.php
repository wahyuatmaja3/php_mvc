<?php 

$home = 'home.png';
$bookmark = 'bookmark.png';

switch ($data['judul']) {
	case 'Home':
	$home = 'Home-fill.png';
	break;
	
	case 'bookmark':
	$bookmark = 'bookmark-fill.png';
	break;
}

$username = $data['user']['username'];

$img = $data['user']['img'];

if ( trim($data['user']['img']) == '' ) {
	$img = 'user.png';
}

?>


<div class="nav">
	<a href="<?php echo BASEURL ?>" class="logo-nav">
		<img src="<?php echo BASEURL ?>assets/img/icon/arch.png" alt="">
	</a>

	<div class="menu-nav">
		<a href="<?php echo BASEURL ?>Home">
			<img src="<?php echo BASEURL ?>assets/img/icon/<?php echo $home ?>" alt="">
		</a>
		<a href="<?php echo BASEURL ?>Bookmark">
			<img src="<?php echo BASEURL ?>assets/img/icon/<?php echo $bookmark ?>" alt="">
		</a>

		<div class="line-menu-nav"></div>

		<a href="<?php echo BASEURL ?>Write">
			<img src="<?php echo BASEURL ?>assets/img/icon/writing.png" alt="">
		</a>

	</div>

	<a href="<?php echo BASEURL ?>Account/<?php echo $username?>" class="account-nav">
		<img src="<?php echo BASEURL ?>assets/img/user/<?php echo $img ?>" alt="">
	</a>
</div>