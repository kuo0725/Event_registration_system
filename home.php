<?php
	session_start();
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<!-- InstanceParam name="title" type="boolean" value="true" -->
<!-- InstanceParam name="main" type="boolean" value="true" -->
</head>
<!--<body bgcolor="#888888">-->
<body background="5.jpg">
	<center>
	<h1><font color="#D3CC13"><!-- InstanceBeginEditable name="EditRegion1" --><font color="#D3CC13">首頁</font><!-- InstanceEndEditable --></font></h1>
		<hr width = "60%" color=#563DD7>
		<style>a{text-decoration:none;}</style>
		<big>
			<b>
				<a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="introduce.php">介紹</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="lecture.php">講義</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="register.php">報名</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="picture.php">照片</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="whatthef.php">乾我什麼事</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
				if($_SESSION["check_status"]=="login_ok"){
					echo $_SESSION["name"]."你好";
				}
				else{
				}
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="login.php"><u>登入</u></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="logout.php"><u>登出</u></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</b>
			</b>
		</big>
		<br>
		
		
		
		<marquee scrollamount="10" width="70%" behavior="alternate"><font color=#563DD7><big><b>吃漢堡</b></big></marquee>	</table>
</center>
	<!-- InstanceBeginEditable name="EditRegion2" -->
	<center>
		<?php
			echo "檢查:".$_SESSION["check_status"];
			srand((double)microtime()*1000000);
			$i=rand(1,3);
			$smart_sentence=array("愛吃的人運氣不會太差","吃飽了有力氣減肥","吃飽睡睡飽吃");
			echo $smart_sentence[$i-1];
		?>
	<table border="1" width="50%">
		<tr>
			<td>
				<h1>傳說對決說明</h1>
				<font size="6"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;傳說對決:</b></font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<p><small>5v5組隊競技手遊</p>
			</td>
		</tr>
	</table>
	
	<?php
		echo "<hr>不想上課<hr>";
	?>
	</center>
	
	
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>