<?php
    $verify=$_COOKIE["emailconfirm"];
    if($verify==""){
        echo("Error1:Cookie expired.");
    }else{
        $dd=exec("cat /root/userrequest/requestmail.txt|grep ".$verify);
        if($dd!=$verify){
            echo("Error2:Email doesn't match with which you registered.");
        }else{
            exec("echo '".$verify."'>>/root/userrequest/acceptmail.txt");
            setcookie("emailconfirm","",time()-900);
            echo("Verify success!!Please wait for artificial check: )");
        }
    }
?>