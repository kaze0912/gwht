<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>简单的查询</title>
</head>

<body>

<?php
	session_start();
	if(isset($_SESSION['login'])){
		if(!$_SESSION['login']){
			echo "<script>alert('Please login!')</script>";
			header("Refresh:1;url=index.php");
			exit();
		}
	}else{
		echo "<script>alert('Please login!')</script>";
		header("Refresh:1;url=index.php");
		exit();
	}

?>

<div  align="center" style="margin:40px auto;border:20px; background-color:white; text-align:center; width:400px; height:150px;">

	<div style="padding-top:10px; font-size:15px;">
	 
		<form action="" method="post">
			<div style="margin-top:15px; height:30px;">No: &nbsp;&nbsp;&nbsp;
			    <input type="text"  name="no" value=""/>
			</div>  
			<div> Name: &nbsp;&nbsp;&nbsp;
				<input type="text" name="name" value=""/>
			</div></br>
			<div style=" margin-top:9px;margin-left:90px;">
				<input type="submit" name="submit" value="Submit" />
			</div>
		</form>
		<!-- 1 	admin 	
		2 	bomb 	
		3 	chris 	
		4 	dog 	
		5 	eve 	
		6 	finger 	
		7 	goods 	
		8 	hulk 	
		9 	ice 	
		10 	jean -->
	</div>

</div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
	<font size="5" color="black">

	<?php

	include("connect.php");

	function no_waf($no){
		$no = strtolower($no);
		return preg_match('/\=|\#|\`|regexp|like|in|\/\*.*\*\/|\-\- /', $no);
	}

	function name_waf($name){
		return preg_match('/\'/',$name);
	}

	header('Tips: escape Single Quotes');

	if(isset($_POST['no']) && isset($_POST['name']))
	{
		$no=$_POST['no'];
		$name=$_POST['name'];

		if(no_waf($no)||name_waf($name)){
			echo "Attack!";
			exit();
		}

		@$sql="SELECT score FROM gwhtno WHERE no='$no' and name='$name' LIMIT 0,1";
		echo $sql;
		$result=mysql_query($sql);
		$row = mysql_fetch_array($result);

		if($row)
		{
			echo "<br>";
			echo '<font size="6" color="red">';	
			echo $row['score'];
			echo "<br>";
			echo "</font>";
	  		
	  	}else{
			echo "<br>";
			echo '<font size="6" color="red">';	
			echo "search fail!";
			echo "<br>";
			echo "</font>";
		}
	}

	?>

	</font>
</div>
</body>
</html>