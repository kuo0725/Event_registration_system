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
	  <h1><font color="#D3CC13"><!-- InstanceBeginEditable name="EditRegion1" --><font color="#D3CC13">title</font><!-- InstanceEndEditable --></font></h1>
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
		echo "<center>";
		if($_FILES['upload_file']['type']!="image/png")
		{
			die("上傳檔案僅限png格式圖檔");
		}
		if($_FILES['upload_file']['size'>30])
		{
			die("上傳檔案必須小於3Mb");
		}
		echo "檔案名稱:".$_FILES['upload_file']['name']."<br>";
		echo "檔案大小:".$_FILES['upload_file']['size']."<br>";
		echo "檔案格式:".$_FILES['upload_file']['type']."<br>";
		echo "站存檔名稱:".$_FILES['upload_file']['tmp_name']."<br>";
		echo "上傳狀態代碼:".$_FILES['upload_file']['error']."<br>";
		
		echo $_SERVER["PHP_SELF"]."<br>";
		echo $_SERVER["SCRIPT_FILENAME"].",<br>";
		echo __FILE__."<br>";
		echo dirname(__FILE__)."<br>";
		echo basename(__FILE__)."<br>";
		
		if(is_dir("pictures")){echo "pictures資料夾存在";}else{echo "pictures資料夾 不存在";}
		
		if(is_uploaded_file($_FILES['upload_file']['tmp_name'])){
			$dest_upload_file=dirname(__FILE__)."\\pictures\\".$_FILES['upload_file']['name'];
			echo $dest_upload_file;
			move_uploaded_file($_FILES['upload_file']['tmp_name'],$dest_upload_file);
		}
	?>
	</center>
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>