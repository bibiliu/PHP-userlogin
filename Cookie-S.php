//需求：运用Cookie技术实现保存用户浏览历史，浏览历史最多保存4个，当超过4个时，自动删除最早的浏览历史。
<?php
//1.模拟通过数组获取数据
	$all_data = array(1=>php,2=>python,3=>java,4=>c++);
//2.通过GET传递制定id的内容，所以获取id
	$id=isset($_GET['id'])?intval($_GET['id']):1;
	$id_prev=$id-1;
	$id_next=$id+1;
	//id最低为1，最高为4
	if($id<1){$id=1;};
	if($id>4){$id=4;};
	if($id_prev<1){$id_prev=1;};
	if($id_next>4){$id_next=4;};
//3.cookie保存浏览历史
	if(isset($_COOKIE['history']){
	//存在时，通过$cookie_arr接收文章id
	$cookie_arr=intval($_COOKIE['history']);
	}else{
	//不存在时，向COOKIE种保存会story记录，将文章id保存到cookie种
	setcookie('history',$id);
	}
//4.由于COOKIE中只能保存字符串，当存入多个文章id，构造一个使用逗号隔开的字符串
	if(isset($_COOKIE['history'])){
	//获取COOKIE，保存到数组中，限制数组最多只能有4个元素
	$cookie_arr=explode(','$_COOKIE['history'],4);
	//遍历数组
		foreach($cookie_arr as $k=>$v){
		//将数组中的每个元素转换为整型
		$cookie_arr[$k]=intval($cookie_arr[$k]);
		}
		//如果当前文章id在数组中已经存在，则删除
			if($v==$id){
			unset($cookie_arr[$k]);
			}
		//当数组元素达到4个时，删除第一个元素
			if(count($cookie_arr)>3){
			array_shif($cookie_arr);
			//将当前访问的文章id添加到数组末尾
			$cookie_arr[]=$id;
			//将数组转换为字符串，重新保存到COOKIE中
			setcookie('history',implode(',',$cookie_arr));
			}else{
			$cookie_arr=array($id);//通过数组保存浏览历史id
			setcookie('history',$id);//将当前文章id保存到cookie中
			}
//5.获取文章数据并显示到HTML中
	//$data保存但钱页对应的文章数据
	$data=$all_data[$id];
	//$data1_history保存cookie中历史巨鹿
	$data_history=array();
	foreach($cookie_arras$v){
	if(isset($all_data[$v]){
	//$data1_history[文章id]=文章标题
	$data_history[$v]=$all_data[$v][0];
	}
	}
	
//6.编写html页面部分内容
	<div class="content">
	<!--文章标题--><?php echo $data[0];?>
	<!--文章内容--><p><?pho echo $data1[1];?></p>
	</div>
	<div class="page'>
	<a href="?id=<?php echo $id_prev;?>">上一篇</a>
	<a href="?id=<?php echo $id_next;?>">下一篇</a>
	</div>
	<div class="history">
	浏览历史：(<ahref=?action=clear">)清除历史</a>)
	<ul><?php
	foreach($data_history as $k=>$v{
	echo"<li><a href=\"?id=$k\"$v</a></li>";
	}
	?></ul>
	</div>
//7.清除浏览历史功能
	if(isset($_GET['action']=='clear'){
	$cookie_arr=array();//清除历史纪录数组
	setcookie('history','',time()-1;)//清除cookie
	}
	)
	
	
	
	