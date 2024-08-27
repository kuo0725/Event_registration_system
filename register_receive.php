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
		<marquee scrollamount="10" width="70%" behavior="alternate"><font color=#563DD7><big><b>吃漢堡</b></big></font></marquee>
	<table border="1" width="50%"><center>
		
		<tr>
			<td>
				
				<h1>報名結果</h1><center>
				<?php
				$people_num=$_GET['people_num'];
				$name=$_GET['name'];
				
				if($name=="")
				{
					header("refresh:5;URL=register.php");
					echo "<center><font size=\"+2\">";
					echo "<font color=\"red\">姓名必填，5秒後返回重填頁面</font>";
				}
				else
				{
					echo "<h2>報名成功</h2>";
					echo "<table border=\"1\">";
					echo "<tr><td><big><b>姓名:".$name."</td></tr>";
					echo "<tr><td><big><b>學號:".$_GET['number']."</td></tr>";
					echo "<tr><td><big><b>性別:".$_GET['gender']."</td></tr>";
					echo "<tr><td><big><b>人數:".$_GET['people_num']."</td></tr>";
					
					echo "用餐:".$_GET['meal']."<br>";
					echo "備註:".$_GET['remark']."<br>";
					if(($people_num-1)*300==0){
							echo "<font color=\"red\">總報名費: ".(($people_num-1)*1000)."元,不用交錢</font>";
					}
					else{
						echo "<font color\"red\">總報名費:".(($_GET['people_num']-1)*1000)."元</font>";
					}
				}
				 $w=fopen("register.txt","a");
				fputs($w,$name.",".$_GET['number'].",".$people_num.",".$_GET['meal']."\r\n");
				fclose($w);
				?>
			</td>
		</tr>
		</center>	
	</table></center>
	
	
</body>
</html>