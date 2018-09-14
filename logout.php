<?php
	header("Content-Type:text/html;charset:utf8");
	seesion_start();
	//清除Session
	$username=$__SESSION['username'];
	$__SESSION=array();
	session_destroy();
	//清除Cookie
	setcookie("username",'',time()-1);
	setcookie("code",'',time()-1);
	echo"$username,欢迎下次光临！";
	echo"重新<a href='login.html'>登录</a>";
?>