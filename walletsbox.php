<?php
    

include('functions.php');
    $home = getenv("HOME");
    $licz = 0;

if ($_POST['action'] == 'refresh') {

              $walletdir = $home.'/eosio-wallet';
              $walletfiles = array_slice(scandir("$walletdir"), 2);
        
              exec('./cleos wallet list',$walletlist,$rwl);
              $walletlist = shell_exec('./cleos wallet list');
        
        
        foreach ($walletfiles as $wid=>$wall){
            $wallet = explode('.',$wall);
            if ($wallet[1] == 'wallet'){
                $licz++;
                print("<span style=\"font-size:25px;min-width:200px;\">$wallet[0]</span>");
        
                if (strpos($walletlist,$wallet[0].' *') !== false)  { 
                    
                    print("<span style=\"font-size:0.8em;color:#009900;\"> (unlocked)</span>");
                    print("<div class=\"row\">");
                    print("<input class=\"\" id=\"impass-$wallet[0]\" name=\"walletprivkey\" type=\"text\" placeholder=\"type private key\" />");
                    print("<input class=\"lockbtn bt/n btn-default \" type=\"button\" value=\"lock wallet\" id=\"$wallet[0]\" />");
                    print("<input class=\"importbtn bt/n btn-default \" type=\"button\" value=\"import private key\" id=\"$wallet[0]\" autocomplete=\"off\" />");
                    print("<input class=\"delbtn bt/n btn-default\" type=\"button\" value=\"delete wallet\" id=\"$wallet[0]\" />");
                    print("</div>");
                }
                else if (strpos($walletlist,$wallet[0]) !== false) { 
                    print("<span style=\"font-size:0.8em;color:red;\"> (locked)</span>");
                    print("<div class=\"row\">");
                    print("<input id=\"pass-$wallet[0]\" name=\"walletpass\" type=\"text\" placeholder=\"wallet password\" value=\"\" />");
                    print("<input class=\"unlockbtn bt/n btn-default\" type=\"button\" value=\"unlock wallet\" id=\"$wallet[0]\" />");
                    if (file_exists($home.'/'.$wallet[0].'_wallet_password.txt')){
                        print("<input class=\"insertpass bt/n btn-default \" type=\"button\" value=\"pass from file\" id=\"$wallet[0]\" />");
                    }
                    print("<input class=\"delbtn bt/n btn-default\" type=\"button\" value=\"delete wallet\" id=\"$wallet[0]\" />");
                    print("</div>");
                }
                else {
                    print("<span style=\"font-size:0.8em;color:red;\"> (closed)</span>");
                    print("<div class=\"row\">");
                    print("<input class=\"openbtn bt/n btn-default\" type=\"button\" value=\"open wallet\" id=\"$wallet[0]\" />");
                    print("<input class=\"delbtn bt/n btn-default\" type=\"button\" value=\"delete wallet\" id=\"$wallet[0]\" />");
                    print("</div>");
                    }
                print("<br />");
            }//if
        }//foreach
        if ($licz == 0) { print("<br /><br /><h5>You not have any wallets!</h5>"); }

}
?>
