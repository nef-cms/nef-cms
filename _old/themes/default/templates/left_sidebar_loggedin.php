<?php
if(empty($nefcms_userName) && empty($nefcms_userLoginTime)) {
	if(empty($_POST['login_user_name']) or empty($_POST['login_time'])) {
		$nefcms_userName=$_SESSION['nefcms_user_name'];
		$nefcms_userLoginTime=$_SESSION['nefcms_user_logintime'];
	}

	if(empty($_SESSION['nefcms_user_name']) or empty($_SESSION['nefcms_user_logintime'])) {
		$nefcms_userName=$_POST['login_user_name'];
		$nefcms_userLoginTime=$_POST['login_time'];
	}
}
?>
<div class="ribbon-wrapper">
 <div class="ribbon-front">
	<h2><?php print $nefcms_userName ?></h2>
 </div>
 <div class="ribbon-edge-bottomleft"></div>
 <div class="ribbon-back-left"></div>
</div>
<div class="ribbon-box">
 <p>
 You last logged in at: 
 </p>
 <?php print date('m/d/y @ h:iA',$nefcms_userLoginTime); ?>
 <ul>
 <li><a href="#">Edit Profile</a></li>
 <li><a href="#">Control Panel</a></li>
 <li><a href="#">Logout</a></li>
 <ul>
</div>