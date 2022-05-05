<?php
    $ssid=$_POST["ssid"];
    $pass=$_POST["pass"];
    if($ssid!=""&&$pass!=""){
        $passstr=$ssid.$pass;
        $passstr2=encode($passstr);
        //echo($passstr2);
        setcookie("passstr","",time()-3600);
        setcookie("passstr",$passstr2,time()+3600,"/");
        setcookie("ssid","",time()-3600);
        setcookie("ssid",$ssid,time()+3600,"/");
        setcookie("pass","",time()-3600);
        setcookie("pass",$pass,time()+3600,"/");
        echo("<head>
            <meta charset=\"utf-8\">>
            <meta http-equiv=\"refresh\" content=\"1;./index.php\">
        </head>");
        echo("<body>
            <p>Redirecting...</p>
        </body>");
    }else{
        echo("未傳送任何資料，請<a href=\"./index.php\"重試</a>");
    }
    function encode($a){
        $a=base64_encode(base64_encode($a));
        return($a);
    }
?>