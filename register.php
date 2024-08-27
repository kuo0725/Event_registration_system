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
	<table border="1" width="50%">
		<tr>
			<td><center>
				<h1>報名表</h1>
				<font size="6"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;報名幹飯大賽:</b></font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<!--<?php
					 echo $_GET['table_color'];

				?>-->
				
				<a href="register.php?table_color=blue"><img src="blue.png" width="15"></a>&nbsp;&nbsp;
				<a href="register.php?table_color=red"><img src="red.png" width="15"></a>&nbsp;&nbsp;
				<a href="register.php?table_color=yellow"><img src="yellow.png" width="15"></a>
				
												
				<form action="register_receive.php" method="get">
					<?php
						echo "檢查session:".$_SESSION["check_status"];
						echo "<table border=\"1\" bordercolor=\"".$_GET['table_color']."\"bgcolor=\"".$_GET['back_color']."\">";
					?>
					<table border="1">
							<?php
					if($_GET['table_color']==blue){$_SESSION["table_color"]="blue";}
					
					elseif($_GET['table_color']==red){$_SESSION["table_color"]="red";}
					
					elseif($_GET['table_color']==yellow){$_SESSION["table_color"]="yellow";}
					
					
					echo "<table border=\"1\" bordercolor=\"".$_SESSION["table_color"]."\"
					bgcolor=\"".$_SESSION["back_color"]."\">";
					
				
					
				?>	
						<tr><td><small>姓名:</small></td><td><input type='text' name='name'></input></td></tr>
						<tr><td><small>學號:</small></td><td><input type='text' name='number'></input></td></tr>
						<tr><td><small>性別:</small></td>			
							<td><small>
								<input type="radio" name="gender" value="男" checked>男</input>
								<input type="radio" name="gender" value="女" >女</input>
								</small>
							</td>
		
						<tr><td>人數:</td>			
						<td>
							<select name="people_num">
								<option value="1">1人</option>
								<option value="2">2人</option>
								<option value="3">3人</option>
								<option value="4">4人</option>
								<option value="5">5人</option>
								</select>
							<font size="=-1">第一人免費.<font color="red">第二人起每人1000元</font>
							</td>
						</td>
						<tr><td><small>用餐:</small></td>			
							<td><small>
								<input type="radio" name="meal" value="葷食" checked>葷食</input>
								<input type="radio" name="meal" value="素食" >素食</input>
								</small>
							</td>
						</tr>
						<tr>
							<td>備註:</td><td><textarea name="remark" cols="40" rows="10"></textarea></td>
						</tr>	
						<tr><td colspan="2">
							<?php
								if($_SESSION['check_status']=="login_ok")
								{
									echo "<Button Type=\"Submit\"><Img Src=\"3.jpg\"></Button>";
								}
								else
								{echo "必須登入成功才可報名";}
							?>
							</td></tr>
					</table>
					</center>
				</form>
	<p><small></p>
			</td>
		</tr>
		
	</table>
	</center>
	<!-- InstanceEndEditable -->

	
</body>
<!-- InstanceEnd --></html>