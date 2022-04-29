<?php
    $ssid=$_POST["ssid"];
    $mail=$_POST["mail"];
    $pass=$_POST["pass"];
    $realn=$_POST["realn"];
    $tele=$_POST["tele"];
    //echo($ssid);
    //echo($pass);
    $com1="echo '".$ssid."'>>/root/userrequest/request.txt";
    $com2="echo '".$mail."'>>/root/userrequest/request.txt";
    $com3="echo '".$pass."'>>/root/userrequest/request.txt";
    $com4="echo '".$realn."'>>/root/userrequest/request.txt";
    $com5="echo '".$tele."'>>/root/userrequest/request.txt";
    //$com1=escapeshellcmd($com1);
    //$com2=escapeshellcmd($com2);
    //$com3=escapeshellcmd($com3);
    //$com4=escapeshellcmd($com4);
    //$com5=escapeshellcmd($com5);
    //echo($com1);
    system($com1);
    system($com2);
    system($com3);
    system($com4);
    system($com5);
    setcookie("emailconfirm",$ssid.",".$mail,time()+900,"/");
    system("echo '".$ssid.",".$mail."'>>/root/userrequest/requestmail.txt");
    system("echo  '\\n'>>/root/userrequest/request.txt");
    system("cd /root");
    system("sudo echo 'Hello ".$ssid.",you have just joined Blacktechserver.Please click the link: http://blacktechserver.ddnsking.com:8080/register/confirmmail.php to confirm your email'|mutt -s 'email confirm Note:Please confirm Email on same device' ".$mail);
    echo("<!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"utf-8\">
        </head>
        <body>
            <h1>資料填寫成功，感謝您的支持!!</h1>
            <h2>驗證郵件已傳送至您剛剛填入的email內，請在15分鐘內收信並點擊郵件內連結驗證電子郵件</h2>
            <form method=\"post\" action=\"register.php\" style=\"font-size: 23px;\">
                沒有收到驗證信或驗證信無效嗎?<br/>
                &emsp;1.請確認cookie在此網頁是否被禁止，如被禁止請解除封鎖後<a href=\"./index.html\">重新註冊</a><br/>
                &emsp;2.若是超過15分鐘未確認，請<a href=\"./index.html\">重新註冊</a><br/>
                &emsp;3.若完全沒收到，請確認您的電子郵件並<a href=\"./index.html\">重新註冊</a><br/>
                &emsp;或者刷新此頁面可能有用?
            </form>
            <a href=\"/\">回首頁</a>
        </body>
    </html>");
?>

