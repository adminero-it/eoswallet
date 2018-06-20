<?php

include('functions.php');
    //print_r($_POST);
    $home = getenv("HOME");
    $who = shell_exec('whoami');
    $pwd = trim(shell_exec('pwd'));



if ($_POST['action'] == 'command') {

    $i = exec('./cleos '.$_POST['commandtxt'].' 2>&1',$o,$r);


    if ($o) { $o = implode(" ",$o); }

    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        $kom = ("ERROR: $o[1]");
        $status = 'ERROR';
    } else {
        $status = 'OK';
        $kom = $o;
    }


    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    

}


if ($_POST['action'] == 'stake') {

    $i = exec('./cleos system undelegatebw '.$_POST['sender'].' '.$_POST['receiver'].' "'.$_POST['unstakenet'].' EOS" "'.$_POST['unstakecpu'].' EOS" -p '.$_POST['sender'].' 2>&1',$o,$r);


    if ($o) { $o = implode(" ",$o); }

    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        $kom = ("ERROR: $o[1]");
        $status = 'ERROR';
    } else {
        $status = 'OK';
        $kom = $o;
    }


    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    

}


if ($_POST['action'] == 'unstake') {
//./cleos system delegatebw [OPTIONS] from receiver stake_net_quantity stake_cpu_quantity -p from
//print_r($_POST);


    $i = exec('./cleos system delegatebw '.$_POST['sender'].' '.$_POST['receiver'].' "'.$_POST['stakenet'].' EOS" "'.$_POST['stakecpu'].' EOS" -p '.$_POST['sender'].' 2>&1',$o,$r);


    if ($o) { $o = implode(" ",$o); }

    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        $kom = ("ERROR: $o[1]");
        $status = 'ERROR';
    } else {
        $status = 'OK';
        $kom = $o;
    }


    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    


}


if ($_POST['action'] == 'transfer') {
//./cleos transfer [OPTIONS] sender recipient amount [memo]


    $i = exec('./cleos transfer '.$_POST['sender'].' '.$_POST['receiver'].' "'.$_POST['amount'].' EOS" "'.$_POST['memo'].'" 2>&1',$o,$r);


    if ($o) { $o = implode(" ",$o); }

    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        $kom = ("ERROR: $o[1]");
        $status = 'ERROR';
    } else {
        $status = 'OK';
        $kom = $o;
    }


    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    


}

if ($_POST['action'] == 'bidname') {

    //./cleos.sh system bidname emergepoland truemanner "0.0001 EOS" 
    $i = exec('./cleos system bidname '.$_POST['bidder'].' '.$_POST['name'].' "'.$_POST['value'].' EOS" 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        print("ERROR: $o[1]");
    } else {
        $o = clear($o);
        $z = explode("}}",$o);
        $o = explode('#',$z[1]);
        $n = explode('warning:',$o[0]);
        $t = explode(" ",$n[0]);
        
        print("$t[0] $t[1] $t[2] $t[3]<br />$o[1] <br /> $o[2] <br />$o[3] <br />$o[4] <br />$o[5] <br />$o[6] <br />warning: $n[1]");
    }


}


if ($_POST['action'] == 'bidnameinfo') {

    $i = shell_exec('./cleos system bidnameinfo '.$_POST['name']);
    //print($i);
    $info = explode(" ",preg_replace('!\s+!', ' ', $i));
    //print_r($info);
    if ($info[1] != $_POST['name']){
        print('sorry, bid name: '.$_POST['name'].' not found.');
    }else{
        print("found! bidname: $info[1] <br />highest bidder: $info[4] <br />highest bid: $info[7] <br />last bid time: $info[11]");
    }

}



if ($_POST['action'] == 'bidnameinfoext') {

    $i = exec('./cleos system bidnameinfo '.$_POST['name'].' -j ',$o,$r);


    if ($o) { $o = implode(" ",$o); }
    if ($r) {

        $r = clear($r);
        $kom = ($r);
        $status = 'ERROR';

    } else {
        $status = 'OK';

        $z = json_decode($o);
        foreach($z->rows as $info){
            if ($info -> newname != $_POST['name']){

                $status = 'ERROR';
                $kom ='bid name info not found';

            }else{

                $status = 'OK';
                $kom = 'found bid name info: '.$info -> newname.'<br />high bidder: '.$info -> high_bidder.'<br />high bid: '.$info -> high_bid.'<br />last date bid: '.date('Y-m-d H:i:s',$info -> last_bid_time);

            }
        }//foreach

    }

    $data = [status => $status,
             kom => $kom,];


    header('Content-Type: application/json');
    echo json_encode($data);    

}

if ($_POST['action'] == 'newaccount') {
//print_r($_POST);
    //./cleos.sh system newaccount --transfer --stake-net "0.4500 EOS" --stake-cpu "0.4500 EOS" --buy-ram "0.1000 EOS" hezdsmrwgyge emergepoland EOS6q7cb72sZuU71cXHTNtkDaexQUKX8NXeotZY13QH9okH1tzDwH EOS7ghyBJsLyNiyJBwLDnRBUCfNcYENeqiZb1hAjS5yhHA4KmpMRn
    $i = exec('./cleos system newaccount --transfer --stake-net "'.$_POST['stakenet'].' EOS" --stake-cpu "'.$_POST['stakecpu'].' EOS" --buy-ram "'.$_POST['buyram'].' EOS" '.$_POST['creator'].' '.$_POST['name'].' '.$_POST['ownerkey'].' '.$_POST['activekey'].' 2>&1',$o,$r);


    if ($o) { $o = implode(" ",$o); }

    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        $kom = ("ERROR: $o[1]");
        $status = 'ERROR';
    } else {
        $status = 'OK';
        $kom = $o;
    }


    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    

}



if ($_POST['action'] == 'updateusingversion') {
    exec('git checkout 2>&1',$o,$r);
    

    if ($o) { $cntr = count($o); }
    $out = $o[$cntr-1];
    $out = clear("$out");
    if ($o) { $o = implode(" ",$o); }

    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        $kom = ("ERROR: $o[1]");
        $status = 'ERROR';
    } else {
        $status = 'OK';
        $kom = $out;
    }



    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    

}



if ($_POST['action'] == 'generatekey') {

    exec('./cleos create key 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        print("ERROR: $o[1]");
    } else {
        $o = explode(" ",$o);
        print('<div id="securediv"><br />'.$o[0].' '.$o[1].' '.$o[2].'<br />'.$o[3].' '.$o[4].' '.$o[5].'</div>');
    }
}

if ($_POST['action'] == 'check') {

    if (file_exists("/usr/local/opt/llvm@4/lib/libc++.1.dylib")){
        print('<span style="color:#009900;">&bullet; libc++ OK<br /></span>');
    } else { 
        print('<span style="color:red;">&bullet; libc++ FAIL<br /></span>');
        $error=true; }

    if (file_exists("/usr/local/opt/gettext/lib/libintl.8.dylib")){
        print('<span style="color:#009900;">&bullet; libintl OK<br /></span>');
    } else { 
        print('<span style="color:red;">&bullet; libintl FAIL<br /></span>');
        $error=true; }

    if (file_exists($pwd."/bin/cleos")){
        print('<span style="color:#009900;">&bullet; cleos OK<br /></span>');
    } else { 
        print('<span style="color:red;">&bullet; cleos FAIL<br /></span>');
        $error=true; }

    if (file_exists($pwd."/bin/keosd")){
        $keosdrun = shell_exec("ps auxw|pgrep 'keosd'");
        print('<span style="color:#009900;">&bullet; keosd OK');
        if ($keosdrun) {
            print('<span style="color:#009900;"> ... and running PID: '.$keosdrun.'</span>');
        }else{
            print('<span style="color:red;"> ... but not running<br /></span>');
        }
        print('<br /></span>');
    } else { 
        print('<span style="color:red;">&bullet; keosd FAIL<br /></span>');
        $error=true; }

    if ($error) { print("Ooops, something is wrong, you may run install-opt script again<br /<br />"); }
    else { print("Everything looks good :)<br /<br />"); }
    
}

?>