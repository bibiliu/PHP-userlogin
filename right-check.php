//验证邮箱
<?php
	//编写checkEmail()函数，输出电子邮箱格式校验的结果
	function checkEmail($email){
	$email_pattern="/^[\w]+(\.[\w]*@[a-z0-9]+(\.[a-z0-9]+)+$/";
	//preg_match()函数来校验格式正确性
	if(preg_match($email_pattern,$email)==1){
	$result=$email."是合法的邮箱格式.<br>";
	}else if(preg_match($email_pattern,$email)==0{
	$result=$email."不是合法的邮箱格式.<br>";
	}
	echo $result;
	}
	//案例验证
	checkEmail("1027519576@qq.com");
?>
//验证手机号
<?php
	//编写checkMobile()函数，输出手机号格式校验的结果
	function checkMobile($mobile){
	$mobile_pattern="/^[1][358]\d{9}$/";
	//preg_match()函数来校验格式正确性
	if(preg_match($mobile_pattern,$mobile)==1){
	$result=$mobile."是合法的手机号码.<br>";
	}else if(preg_match($mobile_pattern,$mobile)==0{
	$result=$mobile."不是合法的手机号码.<br>";
	}
	echo $result;
	}
	//案例验证
	checkMobile("13723788721");
?>
//验证身份证号码
<?php
	//编写checkID()函数，输出身份证格式校验的结果
	function checkID($id){
	$id_pattern="/^(\d{6}(18|19|20)?(\d{2})([01]\d)([0123]\d)(\d{3})(\d|x)?$/";
	//preg_match()函数来校验格式正确性
	if(preg_match($id_pattern,$id)==1){
	$result=$id."是合法的身份证格式.<br>";
	}else if(preg_match($id_pattern,$id)==0{
	$result=$id."不是合法的身份证格式.<br>";
	}
	echo $result;
	}
	//案例验证
	checkID("430624199503039711");
?>
//验证QQ号码
<?php
	//编写checkQQ()函数，输出QQ格式校验的结果
	function checkQQ($qq){
	$qq_pattern="/^[1-9][0-9]{4,}$/";
	//preg_match()函数来校验格式正确性
	if(preg_match($qq_pattern,$qq)==1){
	$result=$qq."是合法的邮箱格式.<br>";
	}else if(preg_match($qq_pattern,$qq)==0{
	$result=$qq."不是合法的邮箱格式.<br>";
	}
	echo $result;
	}
	//案例验证
	checkQQ("1027519576");
?>
//验证网址url
<?php
	//编写checkURL()函数，输出网址url格式校验的结果
	function checkURL($url){
	$url_pattern="/^(http:\/\/)?[\w]+(\.[\w.\/]+)+$/i";
	//preg_match()函数来校验格式正确性
	if(preg_match($url_pattern,$url)==1){
	$result=$url."是合法的网址URL格式.<br>";
	}else if(preg_match($url_pattern,$url)==0{
	$result=$url."不是合法的网址URL格式.<br>";
	}
	echo $result;
	}
	//案例验证
	checkURL("https://github.com/bibiliu");
?>
