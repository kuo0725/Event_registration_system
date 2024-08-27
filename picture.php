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
	  <h1><font color="#D3CC13"><!-- InstanceBeginEditable name="EditRegion1" -->
		  <font color="#D3CC13">線上報名</font>
		  <!-- InstanceEndEditable --></font></h1>
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
		<table border="0" width="70%">
			<tr>
				<td>這是活動照片</td>
				<?php
				echo "網頁載入時間: ".date('Y-m-j')."<br>";
				$datestr1="2025-05-19 00:00:00";
				echo "報名截止時間: ".$datestr1."<br>";
				echo "剩餘時間: ".round((strtotime($datestr1)-mktime())/(60*60*24),1)."天"."<br>";
				echo strtotime($datestr1)." ".mktime();
				$handle=opendir("pictures");
				while($file = readdir($handle)){
					if($file!="."and $file!=".."and $file!="picture_receive.php"){
						echo"<a href=\"pictures\\".$file."\"><img src=\"pictures\\".$file."\" width=\"15%\" height=\"40%\" <br>";
					}
				}
				?>
			</tr>
		</table>
		<form action="picture_receive.php" method="post" enctype="multipart/form-data">
			<input type="file" name="upload_file"><br>
			<?php
				if($_SESSION["check_status"]=="login_ok")
				{
					echo "<input Type=\"Submit\" value=\"照片上傳\">";
				}
				else
					{echo "<small>必須登入成功才可上傳照片</small>";}
			?>
		</form>
	</center>
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>