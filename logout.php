<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>

</head>
<!--<body bgcolor="#888888">-->
<body background="5.jpg">
	<center>
		 <h1><font color="#D3CC13"><font color="#D3CC13">
			 <font color="#D3CC13">登出</font>
			 </font></font></h1>
		<hr width = "60%" color=#563DD7>
	  <h1><font color="#D3CC13">
		<hr width = "60%" color=#563DD7>
		<style>a{text-decoration:none;}</style>
		<big>
			<b>
				<a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="introduce.php">介紹</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="lecture.php">講義</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="register.php">報名</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=whatthef.php>乾我什麼事</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=login.php><u>登入</u></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=logout.php><u>登出</u></a>&nbsp;&nbsp;&nbsp;&nbsp;
			</b>
		</big>
		<br>
		<?php
		  $_SESSION["check_status"]="login_not_ok";
		  //session_destroy();
		  //echo "登出成功,5秒後跳轉到報名網頁";
		  	//header("refresh:5;URL=register.php");
		  ?>
		
		
		<marquee scrollamount="10" width="70%" behavior="alternate"><font color=#563DD7><big><b>吃漢堡</b></big></marquee>	</table>
</center>
	

	
</body>
</html>