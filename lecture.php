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
	  <h1><font color="#D3CC13"><!-- InstanceBeginEditable name="EditRegion1" --><font color="#D3CC13">講義</font><!-- InstanceEndEditable --></font></h1>
		<hr width = "60%" color=#563DD7>
		<style>a{text-decoration:none;}</style>
		<big>
			<b>
				<a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="introduce.php">介紹</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="lecture.php">講義</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="register.php">報名</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=whatthef.php>乾我什麼事</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
				if($_SESSION["check_status"]=="login_ok"){
					echo $_SESSION["name"]."你好";
				}
				else{
				}
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=login.php><u>登入</u></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=logout.php><u>登出</u></a>&nbsp;&nbsp;&nbsp;&nbsp;
			</b>
		</big>
		<br>
		
		
		
		<marquee scrollamount="10" width="70%" behavior="alternate"><font color=#563DD7><big><b>吃漢堡</b></big></marquee>	</table>
</center>
	<!-- InstanceBeginEditable name="EditRegion2" -->main<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>