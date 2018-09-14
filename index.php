<?php
	header("Content-Type:text/html;charset:utf8");
	session_start();
	//首先判断Cookie是否记住用户信息
	if(isset($__COOKIE['username'])){
		$__SESSION['username']=$__COOKIE['username'];
		$__SESSION['islogin']=1;
	}
	if(isset($__SESSION['islogin'])){
		//已经登录
		echo $__SESSION['username']."，您好，欢迎来到个人中心！<br/>";
		echo"<a href='logout.php'>注销</a>";
	}else{
		//未登录
		echo"您还未登录您的账号，请<a href='login.html'>登录</a>";
	}
?>