<!DOCTYPE html>
<html>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-6QDEP0H0ZJ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-6QDEP0H0ZJ');
	</script>
        <head>
			
            <meta charset="utf-8"/>
	        <title>Homepage首頁</title>
	        <link href="/module/style.css" rel="stylesheet" >
			<meta name="google-site-verification" content="wckxJU1daLfK2yDVIT6UCxz-rm2UXiye6-nG_5onam0" />
        </head>
        <body>
			
            <div class="wrap">
                <div class="header" id="top">
                    <h1>歡迎來到Blacktech server!</h1>
                </div>
                <div class="content">
                    <div class="left">
						
                    </div>
                    <div class="center">
						<h2>此伺服器正在努力開發:)</h2>
						<p style="font-size:35px">
							&emsp;&emsp;此處將會放置圖片幻燈秀，供大家做參考圖片，點進去即可連結到指定的教學文喔<br>
							&emsp;&emsp;敬請期待~~
						</p>
						<p style="font-size:23px">
							&emsp;&emsp;如果能夠對此網站的開發提出意見，就可以將你的名字或暱稱公布到貢獻者名單上:) :)
						</p>
						
						<p style="font-size:25px"><a href="#footer">滑至底部</a></p>
						<form action="index.php" method="post" style="font-size: 20px;">
							登入帳號:<input type="text" name="ssid">
							登入密碼:<input type="password" name="pass">
							<input type="submit" value="登入!">
						</form>
						<?php
							$ssid=$_POST[ssid];
							$pass=$_POST[pass];
							//echo $ssid;
							//echo $pass;
							if($ssid==="tseng"&& $pass==="tseng0512"){
								echo "<p style='font-size:25px'>登入成功!!!</p>";
							}else{
								echo "<p style='font-size:25px'>登入失敗???</p>";
							}
						?>
					</div>
                </div>
                
                <div class="clearfix"></div>
                <div class="footer" id="footer">
				</div>
            </div>
			<script src="/module/jquery.min.js"></script>
			<script>
				$(function(){
					/*公共部分
					 * 導航欄
					 * footer CopyRight
					 */
					$(".left").load("/module/content.html");
					$(".footer").load("/module/footer.html");
					
				});
			</script>
        </body>
</html>