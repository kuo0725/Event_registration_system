<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<!--<body bgcolor="#888888">-->
<body background="5.jpg">
	<center>
		<h1><font color="#D3CC13">線上報名</font></h1>
		<h2>報名</h2>
		<hr width = "60%" color=#563DD7>
		<style>a{text-decoration:none;}</style>
		<big>
			<b>
				<a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="introduce.php">介紹</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="lecture.php">講義</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="register.php">報名</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=whatthef.php>乾我什麼事</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</b>
		</big>
		<br>
		
		
		<?php
			echo "<hr width=\"60%\" color=\"red\">";
			$name='訪客';
			echo $name."你好<br>";
			echo "你的IP為:".$_SERVER['REMOTE_ADDR']."<br>";
		?>
		<marquee scrollamount="10" width="70%" behavior="alternate"><font color=#563DD7><big><b>吃漢堡</b></big></marquee>
	<table border="1" width="50%">
		<tr>
			<td><center>
				<h1>登入</h1>
			
				<form action="login_receive.php" method="post">
					<table border="1">
						<tr><td><small>帳號:</small></td><td><input type='text' name='account'></input><small><small><font color = "#903E40">*必填</font></small></small></td></tr>
						<tr><td><small>密碼:</small></td><td><input type='password' name='password'></input></td></tr>
						
						<tr><td colspan="2"><center>
							
							<input type="submit" value="登入"></input>
							</center></td></tr>
					</table>
				</form>
	<p><small></p>
			</td>
		</center>
		</tr>
	</table>
	</center>
	
</body>
</html>