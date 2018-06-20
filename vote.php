<?php

include('functions.php');
    //print_r($_POST);
    $home = getenv("HOME");
    $who = shell_exec('whoami');
    $pwd = trim(shell_exec('pwd'));




if ($_POST['action'] == 'vote') {


    $bptovote=str_replace(',', ' ', $_POST['bplist']);
    $voter = $_POST['voter'];
    
    exec('./cleos system voteproducer prods '.$voter.' '.$bptovote.' -p '.$voter.' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
    if (strpos($o,'Error') !== false) {
        $o = clear($o);
        $o = explode('Error', $o);
        print("ERROR: $o[1]");
    } else {
        print("$o");
    }

}

if ($_POST['action'] == 'changeaddress') {

    $s = shell_exec('grep -Ei '.$_POST['address'].' ./snapshot.csv ');
    if ($s){
        
            $storefilename = $pwd.'/your_snapshot_record.txt';
            $r = file_put_contents($storefilename,$s);
            if ($r === false) {
                $status = 'ERROR';
                $kom = "ERROR - something went wrong, try again";
            }else{
                $status = 'OK';
                $kom = "OK - your data is stored now";
            }

    }else{

        $s = shell_exec('./cleos get account -j '.$_POST['address']);

        if ($s){
            $storefilename = $pwd.'/your_snapshot_record.txt';
            $rec = '"","'.$_POST['address'].'","",""';
            $r = file_put_contents($storefilename,$rec);
            if ($r === false) {
                $status = 'ERROR';
                $kom = "ERROR - something went wrong, try again";
            }else{
                $status = 'OK';
                $kom = "OK - your data is stored now";
            }

        }else {
                $status = 'ERROR';
                $kom = "ERROR - address not exist!";
        }

    }
    
    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    

}




if ($_POST['action'] == 'storefoundaccount') {

    $s = shell_exec('grep -Ei '.$_POST['address'].' ./snapshot.csv ');
    $storefilename = $pwd.'/your_snapshot_record.txt';
    $r = file_put_contents($storefilename,$s);
    if ($r === false) {
        $status = 'ERROR';
        $kom = "ERROR - something went wrong, try again";
    }else{
        $status = 'OK';
        $kom = "OK - your data is stored now";
    }
    $data = [status => $status,
            kom => $kom,];

    header('Content-Type: application/json');
    echo json_encode($data);    

}

if ($_POST['action'] == 'findaddress') {

    //print("Checking, please wait .... <br />");
    $s = shell_exec('grep -Ei '.$_POST['address'].' ./snapshot.csv ');
    if ($s) {
        $status = 'OK';
        $kom = "Found record!";
        $s = str_replace('"', '', $s);
        $s = str_replace("\n", '', $s);
        $s = explode(',',$s);
        $ethaddress = $s[0];
        $eosaddress = $s[1];
        $eospubkey = $s[2];
        $tokens = $s[3];
        $data = [ethaddress => $ethaddress,
                eosaddress => $eosaddress,
                eospubkey => $eospubkey,
                tokens => $tokens,
                status => $status,
                kom => $kom,
                registered => $$registered,];

        header('Content-Type: application/json');
        echo json_encode($data);    
        //exit();
    }else{
        $kom = "Not found - checking unregistered accounts <br />";
        $s = shell_exec('grep -Ei '.$_POST['address'].' ./snapshot_unregistered.csv ');
        if ($s){
        $status = 'NOOK';
        $kom .= "Found unregistered account!";
        $s = str_replace('"', '', $s);
        $s = str_replace("\n", '', $s);
        $s = explode(',',$s);
        $ethaddress = $s[0];
        $eosaddress = $s[1];
        $eospubkey = '';
        $tokens = $s[2];
        $data = [ethaddress => $ethaddress,
                eosaddress => $eosaddress,
                eospubkey => $eospubkey,
                tokens => $tokens,
                status => $status,
                kom => $kom,
                registered => $$registered,];

        header('Content-Type: application/json');
        echo json_encode($data);    
        //exit();

        }else{
            $kom = "Not found - checking unregistered accounts.<br />Not found - try again.<br />";
            $status = "ERROR";
            $data = [status => $status,
                    kom => $kom,
                    registered => $$registered,];
    
            header('Content-Type: application/json');
            echo json_encode($data);    
            //exit();
        }
    }
}


if ($_POST['action'] == 'accountinfo') {

    $info = shell_exec('./cleos get account -j '.$_POST['address']);

    header('Content-Type: application/json');
    echo $info;
}




if ($_POST['action'] == 'getproducers') {

    $list = exec('./cleos system listproducers -j -l 500'.' 2>&1',$o,$r);

    if ($o) { $o = implode(" ",$o); }
       print('<span class="producerrow">
                <span style="width:30%;display:inline-block;">emergepoland</span>
                <span style="width:50%;display:inline-block;">http://eosemerge.io</span>
                <span style="width:10%;display:inline-block;">PL</span>
                <input type="checkbox" class="voted" id="v-emergepoland" name="emergepoland" /></span><br />');

    $z = json_decode($o);
    foreach($z->rows as $info)
    {
        unset($s);
        unset($slocation);
        if ($info -> location > 0){
            $s = shell_exec('grep -Ei '.$info -> location.' ./country.csv ');
            if ($s) {
                $s = str_replace('"', '', $s);
                $s = str_replace("\n", '', $s);
                $s = explode(';',$s);
                $slocation = strtoupper($s[1]);
                } else {$slocation = ''; }
        }

        if ($info -> owner != 'emergepoland'){
           $rec = array('owner' => $info -> owner, 'total_votes' => $info -> total_votes, 'producer_key' => $info -> producer_key, 'is_active' => $info -> is_active, 'url' => $info -> url, 'unpaid_blocks' => $info -> unpaid_blocks, 'last_claim_time' => $info -> last_claim_time, 'location' => $info -> location, 'slocation' => $slocation);
        }
       $producer_list[$info -> owner] = $rec;
    }//foreach

    shuffle($producer_list);

    foreach ($producer_list as $a => $b){
       print('<span class="producerrow">
                <span style="width:30%;display:inline-block;">'.$b['owner'].'</span>
                <span style="width:50%;display:inline-block;">'.$b['url'].'</span>
                <span style="width:10%;display:inline-block;">'.$b['slocation'].'</span>
                <input type="checkbox" class="voted" id="v-'.$b['owner'].'" name="'.$b['owner'].'" /></span><br />');
    }//foreach
}//function


if ($_POST['action'] == 'checkstoredaccount') {

    $storefilename = $pwd.'/your_snapshot_record.txt';
    if (is_file($storefilename)) {
        $s = file_get_contents($storefilename);
        $s = str_replace('"', '', $s);
        $s = str_replace("\n", '', $s);
        $s = explode(',',$s);
        if (count($s) == 4){
            $ethaddress = $s[0];
            $eosaddress = $s[1];
            $eospubkey = $s[2];
            $tokens = $s[3];
            $registered = 'OK';
        } else {
            $ethaddress = $s[0];
            $eosaddress = $s[1];
            $eospubkey = '';
            $tokens = $s[2];
            $registered = 'error';
        }
        $status = 'OK';
    }else{
        $ethaddress = '';
        $eosaddress = '';
        $eospubkey = '';
        $tokens = '';
        $status = 'error';
        $registered = '';
    }
    $data = [ethaddress => $ethaddress,
            eosaddress => $eosaddress,
            eospubkey => $eospubkey,
            tokens => $tokens,
            status => $status,
            registered => $$registered,];

    header('Content-Type: application/json');
    echo json_encode($data);    
} 


?>