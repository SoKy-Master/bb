<?php 
    if (isset($_POST['playid'])) {
            $token = "ShagitzMidasBuy";
            $playid = $_POST['playid'];
            $url  = "http://api.shagitz.io";
            $data = "playid=".$playid."&token=".$token;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
            curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $result = curl_exec($ch);
            curl_close($ch);
            if (preg_match("#Token Error#", $result)) {
                print "Error_Token";
            }else if (preg_match("#Wrong_UserId#", $result)) {
                print "Wrong_UserId";
            }else if (preg_match("#System_Error#", $result)) {
                print "System_Error";
            }else{
                $decode = json_decode($result,true);
                // print $decode['Playid'];
                // print $decode['Apikey'];
                print $decode['Nickname'];
            }
    }
    else{
        print '{"Response":"Please input Playid"}';
    }
?>