<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>简单的登录</title>
</head>

<body>

<div  align="center" style="margin:40px auto;border:20px; background-color:white; text-align:center; width:400px; height:150px;">

	<div style="padding-top:10px; font-size:15px;">
	 
		<form action="" method="post">
			<div style="margin-top:15px; height:30px;">Username : &nbsp;&nbsp;&nbsp;
			    <input type="text"  name="uname" value=""/>
			</div>  
			<div> Password  : &nbsp;&nbsp;&nbsp;
				<input type="password" name="passwd" value=""/>
			</div></br>
			<div style=" margin-top:9px;margin-left:90px;">
				<input type="submit" name="submit" value="Submit" />
			</div>
		</form>

	</div>

</div>
<!-- 	?php
		$sql="SELECT password FROM gwusers WHERE username='$uname' LIMIT 0,1";
		$result=mysql_query($sql);
		$row = mysql_fetch_array($result);

		if($row){
			if($row['password'] == md5($passwd)){
				echo "login success!";
			}else{
				echo "login fail!";
			}
	  	}else{
			echo "login fail!";
		} -->
	

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
	<font size="5" color="black">

	<?php

	include("connect.php");

	if(isset($_POST['uname']) && isset($_POST['passwd']))
	{
		$uname=$_POST['uname'];
		$passwd=$_POST['passwd'];

		@$sql="SELECT password FROM gwusers WHERE username='$uname' LIMIT 0,1";
		echo $sql;
		$result=mysql_query($sql);
		$row = mysql_fetch_array($result);

		if($row)
		{
			if($row['password'] == md5($passwd)){
				session_start();
				$_SESSION['login'] = true;
				header("Refresh:0;url=search.php"); 
			}else{
				echo "<br>";
				echo '<font size="6" color="red">';	
				echo "login fail!";
				echo "<br>";
				echo "</font>";
			}
	  		
	  	}else{
			echo "<br>";
			echo '<font size="6" color="red">';	
			echo "login fail!";
			echo "<br>";
			echo "</font>";
		}
	}

	?>

	</font>
</div>
</body>
</html>
