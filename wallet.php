<?php

include('functions.php');
    //print_r($_POST);
    $home = getenv("HOME");

if ($_POST['action'] == 'new') {

    if($_POST['name']!=''){
        exec('./cleos wallet create -n '.$_POST['name'].' 2>&1',$o,$r);
        $fname = $_POST['name'];
        if ($o) { $o = implode(" ",$o); }
    } else {
        exec('./cleos wallet create'.' 2>&1',$o,$r);
        $fname = 'default';
        if ($o) { $o = implode(" ",$o); }
    }
    if ($_POST['savepass']==true){
        $filename = $home.'/'.$fname.'_wallet_password.txt';
        $fnametxt = $fname.'_wallet_password.txt';
        $passtext = explode('"', $o);
        file_put_contents($filename, $passtext[1]);
        $o .="\n\nyour password is saved to file $fnametxt in your home directory.\n";
    } else {
        $o .='<br /><span style="color:red;">your password is *NOT* saved!!!</span>';
    }

$o = clear("$o");
print("$o"); 
}

if ($_POST['action'] == 'del') {

    $walletdirdel = $home.'/eosio-wallet/'.$_POST['id'].'.wallet';
    $passfilename = $home.'/'.$_POST['id'].'_wallet_password.txt';
    unlink($walletdirdel);
    if (is_file($passfilename)) { unlink($passfilename); }
    $o = 'Wallet '.$_POST['id'].' deleted';
    
    $o = clear("$o");
    print("$o"); 
    
}

if ($_POST['action'] == 'insertpass') {

    $passfilename = $home.'/'.$_POST['id'].'_wallet_password.txt';
    $o = file_get_contents($passfilename);
    
    $o = clear("$o");
    print("$o"); 
    
}

if($_POST['action'] == 'unlock'){
    exec('./cleos wallet unlock --name '.$_POST['id'].' --password '.$_POST['pass'].' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    $o = clear("$o");
    print("$o"); 
}


if($_POST['action'] == 'lock'){
    exec('./cleos wallet lock -n '.$_POST['id'].' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    $o = clear("$o");
    print("$o"); 
}

if($_POST['action'] == 'open'){
    exec('./cleos wallet open -n '.$_POST['id'].' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    $o = clear("$o");
    print("$o"); 
}

if($_POST['action'] == 'keylist'){
    exec('./cleos wallet keys '.' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    $o = clear("$o");
    print("$o"); 
}

if($_POST['action'] == 'lockall'){
    exec('./cleos wallet lock_all '.' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    $o = clear("$o");
    print("$o"); 
}

if($_POST['action'] == 'import'){
    exec('./cleos wallet import --name '.$_POST['id'].' '.$_POST['impass'].' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    $o = clear("$o");
    
    $status = 'OK';
    $kom = $o;
    //print("$o"); 



    $data = [status => $status,
            wallet => 'impass-'.$_POST['id'],
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    

}

?>