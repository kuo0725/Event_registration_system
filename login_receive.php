<?php
	session_start();
?>
<!doctype html>
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
				<a href=whatthef.php>乾我什麼事</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
				if($_SESSION["check_status"]=="login_ok"){
					echo $_SESSION["name"]."你好";
				}
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=login.php><u>登入</u></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=logout.php><u>登出</u></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
		<br>資料-程式設計暫放<br>
		<?php
			$check_status=false;
			//$account_cor=array("aaa", "bbb", "ccc");
			//$password_cor=array("111", "222", "333");
			$_SESSION["check_status"]="login_not_ok";
			//echo "檢查:".$_SESSION["check_status"];
			require("login-old-2.php");
			//echo count($account_cor);
			for($i=0;$i<count($account_cor);$i++){
			//echo $account_cor[$i]." ";
			//echo $password_cor[$i]."<br>";
				if($_POST['account']==$account_cor[$i] and $_POST['password']==$password_cor[$i])
				{
					//$check_status=true;
					$_SESSION["check_status"]="login_ok";
					$_SESSION["name"]=$_POST['account'];
					if($_POST['account']=="aaa"){
						$_SESSION["name"]="郭耘瑑";
						$_SESSION["admin"]="admin_ok";
					}
					
					
					//echo "檢查:".$_SESSION["check_status"];
				}
			}
			if($_SESSION["check_status"]=="login_ok")
			{
				//echo "登入成功,5秒後跳轉報名網頁";
				//header("refresh:5;URL=register.php");
				if($_SESSION["admin"]=="admin_ok")
				{
					echo "<a href=\"admin.php\">管理頁面</a>";
					
				}
				else{
					echo "";
					header("refresh:5;URL=register.php");
				}
			}
			/* if($check_status==true){
			//echo "登入成功";
				echo "<form action=\"register.php\" method=\"post\">";
				echo "<input type=\"hidden\" name=\"login_status\" value=\"login_ok\">";
				echo "<input type=\"submit\" value=\"登入成功 按此報名\">";
				echo "</form>";
			}*/
			else{
				//echo "帳密錯誤，5秒後跳回登錄畫面";
				header("refresh:5;URL=login.php");
			}
			?>
	<p><small></p>
			</td>
		</center>
		</tr>
	</table>
	</center>
	
</body>
</html>