<!DOCTYPE html>
<html>
        <head>
			
            <meta charset="utf-8"/>
	        <title>tcirc judge AC answer</title>
	        <link href="/module/style.css" rel="stylesheet" >
			<meta name="google-site-verification" content="wckxJU1daLfK2yDVIT6UCxz-rm2UXiye6-nG_5onam0" />
        </head>
        <body>
			
            <div class="wrap">
                <div class="header" id="top">
                    <h1>tcirc judge 的AC詳解</h1>
                </div>
                <div class="content">
                    <div class="left">
						
                    </div>
                    <div class="center">
						<h3>這裡是用來存放我在tcirc judge網站裡面題目的AC解，可以提供參考</h3>
						<h3>&emsp;By the way,這個是tcircjudge的網站，也歡迎大家來這裡寫程式哦~~
							<br/><a href="https://judge.tcirc.tw" target="_blank">https://judge.tcirc.tw</a>
						</h3>
						<h4>但是要看這個其實是有一點小限制啦~!</h4>
						<h4>就是要記得登入你的帳號呦: )</h4>
						<?php
							//echo($_COOKIE["passstr"]);

							if($_COOKIE["passstr"]==""){
								echo("<h4>看來你還沒有登入自己的帳號呢?!</h4>");
								echo("<form action=\"/listurl/tcircjudge_AC_ans/login.php\" method=\"post\" style=\"font-size: 20px;\">
									登入帳號:<input type=\"text\" name=\"ssid\"><br/>
									登入密碼:<input type=\"password\" name=\"pass\"><br/>
									<input type=\"submit\" value=\"登入!\"><br/>
									沒有帳號嗎? <a href=\"/register\" target=\"_blank\">立即註冊!</a>
								</form>");
							}else{
								$cc=$_COOKIE["passstr"];
								$dd=exec("cat /root/userrequest/accepted/accepted_encode.txt|grep ".$cc);
								if($dd==$cc){
									echo("<h3>成功登入</h3>");
									$ee=$_COOKIE["passstr"];
									$ff;
									for($a=0;$a<4;$a++){
										$ff[$a]=$ee[$a];
									}
									$ff=implode($ff);
									echo("歡迎使用者代號:".$ff."登入<br/>
										<form action=\"/logout.php\" method=\"post\" style=\"font-size: 23px;\">
										<input type=\"submit\" value=\"登出\"><br/>
									</form>");
									//echo($_COOKIE["passstr"]);
								}else{
									echo($cc."<br/>");
									echo($dd."<br/>");
									echo("<h4>帳號或密碼錯誤?!</h4>");
									echo("<form action=\"/listurl/tcircjudge_AC_ans/login.php\" method=\"post\" style=\"font-size: 20px;\">
										登入帳號:<input type=\"text\" name=\"ssid\"><br/>
										登入密碼:<input type=\"password\" name=\"pass\"><br/>
										<input type=\"submit\" value=\"登入!\"><br/>
										沒有帳號嗎? <a href=\"/register\" target=\"_blank\">立即註冊!</a>
									</form>");
								}
							}
						?>
						<a href="#footer">滑至底部</a>
						
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