function refreshwalletlist(){
         $.post(
                "walletsbox.php", 
                { id: $(this).attr('id'), 
                  action: 'refresh', },
                function(data) { 
                                $('#walletsbox').html(data);
                                $('#infobox').prepend("&bullet; Refreshing wallets<br />");
                                });    
}
function showhidecreate(){
            $("#create").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhidechangeaccount(){
            if($('#findaccountfrm').is(':visible')){ $("#findaccountfrm").toggle(); }
            $("#chgaccountfrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhidefindaddress(){
            if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }
            $("#findaccountfrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhidegeneratekey(){
            if($('#newaccountfrm').is(':visible')){ $("#newaccountfrm").toggle(); }
            if($('#transferfrm').is(':visible')){ $("#transferfrm").toggle(); }
            if($('#stakefrm').is(':visible')){ $("#stakefrm").toggle(); }
            if($('#unstakefrm').is(':visible')){ $("#unstakefrm").toggle(); }
            if($('#bidnamesfrm').is(':visible')){ $("#bidnamesfrm").toggle(); }
            if($('#commandfrm').is(':visible')){ $("#commandfrm").toggle(); }
            if($('#updatefrm').is(':visible')){ $("#updatefrm").toggle(); }
            $("#generatekeyfrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhidenewaccount(){
            if($('#generatekeyfrm').is(':visible')){ $("#generatekeyfrm").toggle(); }
            if($('#transferfrm').is(':visible')){ $("#transferfrm").toggle(); }
            if($('#stakefrm').is(':visible')){ $("#stakefrm").toggle(); }
            if($('#unstakefrm').is(':visible')){ $("#unstakefrm").toggle(); }
            if($('#bidnamesfrm').is(':visible')){ $("#bidnamesfrm").toggle(); }
            if($('#commandfrm').is(':visible')){ $("#commandfrm").toggle(); }
            if($('#updatefrm').is(':visible')){ $("#updatefrm").toggle(); }
            $("#newaccountfrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhidetransfer(){
            if($('#generatekeyfrm').is(':visible')){ $("#generatekeyfrm").toggle(); }
            if($('#newaccountfrm').is(':visible')){ $("#newaccountfrm").toggle(); }
            if($('#stakefrm').is(':visible')){ $("#stakefrm").toggle(); }
            if($('#unstakefrm').is(':visible')){ $("#unstakefrm").toggle(); }
            if($('#bidnamesfrm').is(':visible')){ $("#bidnamesfrm").toggle(); }
            if($('#commandfrm').is(':visible')){ $("#commandfrm").toggle(); }
            if($('#updatefrm').is(':visible')){ $("#updatefrm").toggle(); }
            $("#transferfrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhidestake(){
            if($('#generatekeyfrm').is(':visible')){ $("#generatekeyfrm").toggle(); }
            if($('#newaccountfrm').is(':visible')){ $("#newaccountfrm").toggle(); }
            if($('#transferfrm').is(':visible')){ $("#transferfrm").toggle(); }
            if($('#unstakefrm').is(':visible')){ $("#unstakefrm").toggle(); }
            if($('#bidnamesfrm').is(':visible')){ $("#bidnamesfrm").toggle(); }
            if($('#commandfrm').is(':visible')){ $("#commandfrm").toggle(); }
            if($('#updatefrm').is(':visible')){ $("#updatefrm").toggle(); }
            $("#stakefrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhideunstake(){
            if($('#generatekeyfrm').is(':visible')){ $("#generatekeyfrm").toggle(); }
            if($('#newaccountfrm').is(':visible')){ $("#newaccountfrm").toggle(); }
            if($('#transferfrm').is(':visible')){ $("#transferfrm").toggle(); }
            if($('#stakefrm').is(':visible')){ $("#stakefrm").toggle(); }
            if($('#bidnamesfrm').is(':visible')){ $("#bidnamesfrm").toggle(); }
            if($('#commandfrm').is(':visible')){ $("#commandfrm").toggle(); }
            if($('#updatefrm').is(':visible')){ $("#updatefrm").toggle(); }
            $("#unstakefrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhidebidnames(){
            if($('#generatekeyfrm').is(':visible')){ $("#generatekeyfrm").toggle(); }
            if($('#newaccountfrm').is(':visible')){ $("#newaccountfrm").toggle(); }
            if($('#transferfrm').is(':visible')){ $("#transferfrm").toggle(); }
            if($('#stakefrm').is(':visible')){ $("#stakefrm").toggle(); }
            if($('#unstakefrm').is(':visible')){ $("#unstakefrm").toggle(); }
            if($('#commandfrm').is(':visible')){ $("#commandfrm").toggle(); }
            if($('#updatefrm').is(':visible')){ $("#updatefrm").toggle(); }
            $("#bidnamesfrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}function showhidecommand(){
            if($('#generatekeyfrm').is(':visible')){ $("#generatekeyfrm").toggle(); }
            if($('#newaccountfrm').is(':visible')){ $("#newaccountfrm").toggle(); }
            if($('#transferfrm').is(':visible')){ $("#transferfrm").toggle(); }
            if($('#stakefrm').is(':visible')){ $("#stakefrm").toggle(); }
            if($('#unstakefrm').is(':visible')){ $("#unstakefrm").toggle(); }
            if($('#bidnamesfrm').is(':visible')){ $("#bidnamesfrm").toggle(); }
            if($('#updatefrm').is(':visible')){ $("#updatefrm").toggle(); }
            $("#commandfrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function showhideupdate(){
            if($('#generatekeyfrm').is(':visible')){ $("#generatekeyfrm").toggle(); }
            if($('#newaccountfrm').is(':visible')){ $("#newaccountfrm").toggle(); }
            if($('#transferfrm').is(':visible')){ $("#transferfrm").toggle(); }
            if($('#stakefrm').is(':visible')){ $("#stakefrm").toggle(); }
            if($('#unstakefrm').is(':visible')){ $("#unstakefrm").toggle(); }
            if($('#bidnamesfrm').is(':visible')){ $("#bidnamesfrm").toggle(); }
            if($('#commandfrm').is(':visible')){ $("#commandfrm").toggle(); }
            $("#updatefrm").toggle( "slow", function() {
                                        // Animation complete.
                                                    });
}
function checkinstallation(){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      action: 'check', },
                    function(data) { 
                                    $('#cleosinfobox').prepend(data+'<br /><br />');
                                    });
}

function removekey(){
    setTimeout(function(){
    if ($('#securediv').length > 0) { $('#securediv').remove(); }
    }, 10000)
}

function countvoted(){
    var zzz = $(".voted:checked").length;
    alert(zzz);    
}
function checkstoredaccount(){
         $.post(
                "vote.php", 
                { id: $(this).attr('id'), 
                  action: 'checkstoredaccount', },
                function(data) { 
                                if (data.status == 'OK') {
                                    $('#storedaccounttxt').html('using EOS account:<br /><span style="font-size:1.5em;"><strong>'+data.eosaddress+'</strong></span>');
                                    $('#accountbox').html('<span style="font-size:1.8em;"><strong>'+data.eosaddress+'</strong><input id="cleosaccountinfo" name="" class="bt/n btn-default" type="button" value="info" style="verti/cal-align:text-bottom;margin:10px;" /></span>');
                                    $('#storedaccount').val(data.eosaddress);
                                    $('#accountinfo').attr('name',data.eosaddress);
                                    $('#cleosaccountinfo').attr('name',data.eosaddress);
                                    if($('#accountinfo').is(':visible')){ } else { $('#accountinfo').toggle(); }
                                    $('#voteinfobox').prepend("&bullet; found stored account<br /><br />");
                                } else {
                                    $('#storedaccount').val(data);
                                    $('#voteinfobox').prepend("&bullet; account not stored<br /><br />");
                                }
                                });    
}
function getproducers(){
             $.post(
                    "vote.php", 
                    { id: $(this).attr('id'),
                      action: 'getproducers', },
                    function(data) { 
                                    $('#producers').html(data);
                                    $('#voteinfobox').prepend("&bullet; producers list loaded<br /><br />");
                                    });
}

$(document).ready(function() {
    
    refreshwalletlist();
    checkstoredaccount();
    getproducers();

});



setInterval(function(){
    $.get("https://dc1.eosemerge.io:5443/v1/chain/get_info", function(data, status){
        //alert("Data: " + data['server_version'] + " Status: " + status);
        if (status == 'success') {
            $('#infobox').prepend('<span style="color:#009900;">&bullet; dc1.eosemerge.io ONLINE (https)</span><br />version: <strong>'+data['server_version']+'</strong>   **   head block: <strong>'+
            data['head_block_num']+'</strong><br />block date: <strong>'+data['head_block_time']+'</strong>  **  producer: <strong>'+data['head_block_producer']+'</strong><br /> irreversible block: <strong>'+data['last_irreversible_block_num']+'</strong>  <br /><br />');
        }
        else {
            $('#infobox').prepend('<span style="color:red;">&bullet; dc1.eosemerge.io OFFLINE (https)<br /></span>');
        }
    });
}, 300000);
setInterval(function(){
    refreshwalletlist();
}, 60000);

$(function () {

        $('#producers').on('click', '.voted', function (){
        //$(".voted").click(function () {
            //countvoted();
            var zzz = $(".voted:checked").length;
            var ccvoted = zzz;
            var ccremain = 30 - zzz;
            $('#cvoted').html(ccvoted);
            $('#cremainig').html(ccremain);
            var what = $(this).attr('name')+',';
            
            if ($(this).is(':checked'))  { $('#bpselected').text( $('#bpselected').text() +what); }
            if (!$(this).is(':checked')) { var myselected=$('#bpselected').text(); myselected = myselected.replace(what,''); $('#bpselected').text(myselected); }
            if (ccvoted == 0){ 
                $('#votebtn').html('VOTE:');
                if($('#votereminder').is(':visible')){ $("#votereminder").toggle(); }
            }
            else { 
                $('#votebtn').html('<input id="votebtngenerated" class="bt/n btn-default" type="button" value="VOTE:" style="vertical-align:text-bottom;" />'); 
                if($('#votereminder').is(':visible')){ } else { $("#votereminder").toggle(); }
            }
        });

        $("#showcreate").click(function () {
            showhidecreate();
        });
        $("#changeaccount").click(function () {
            showhidechangeaccount();
        });
        $("#findaddress").click(function () {
            showhidefindaddress();
        });
        $("#generatekey").click(function () {
            showhidegeneratekey();
        });
        $("#createaccount").click(function () {
            showhidenewaccount();
        });
        $("#transfer").click(function () {
            showhidetransfer();
            var actaccount = $('#cleosaccountinfo').attr('name');
            $('#sender').val(actaccount);
        });
        $("#stake").click(function () {
            showhidestake();
            var actaccount = $('#cleosaccountinfo').attr('name');
            $('#stsender').val(actaccount);
        });
        $("#unstake").click(function () {
            showhideunstake();
            var actaccount = $('#cleosaccountinfo').attr('name');
            $('#unstsender').val(actaccount);
        });
        $("#bidnames").click(function () {
            showhidebidnames()
        });
        $("#command").click(function () {
            showhidecommand();
        });
        $("#updateapp").click(function () {
                    checkinstallation();
                    $('#cleosinfobox').prepend('checking git repository ... <br /><br />');
                     $.post(
                            "program.php", 
                            { id: $(this).attr('id'),
                              action: 'updateusingversion', },
                            function(data) { 
                                            $('#updateusingversion').html(data.kom);
                                            
                                            });
            showhideupdate();
        });

        $('#newbtn').click(function(){ 
             var chkbox = $('#savepass').prop('checked');
             $.post(
                    "wallet.php", 
                    { name: $('#newname').val(),
                      savepass: chkbox,
                      action: 'new', },
                    function(data) { 
                                    $('#newname').val('');
                                    $('#savepass').prop('checked', false);
                                    $('#infobox').prepend(data+'<br /><br />');
                                    });
              refreshwalletlist();
              $("#create").toggle();
              });

        $('#walletsbox').on('click', '.unlockbtn', function (){
        //$('.unlockbtn').click(function(){ 
            var idd = '#pass-'+$(this).attr('id');
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'),
                      pass: $(idd).val(),
                      action: 'unlock', },
                    function(data) { 
                                    $('#infobox').prepend(data+'<br /><br />');
                                    });
              refreshwalletlist();
              });

        $('#walletsbox').on('click', '.lockbtn', function (){
        //$('.lockbtn').click(function(){ 
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'),
                      action: 'lock', },
                    function(data) { 
                                    $('#infobox').prepend(data+'<br /><br />');
                                    });
              refreshwalletlist();
              });

        $('#walletsbox').on('click', '.importbtn', function (){
        //$('.importbtn').click(function(){ 
            var idd = '#impass-'+$(this).attr('id');
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'),
                      impass: $(idd).val(),
                      action: 'import', },
                    function(data) { 
                                    $('#infobox').prepend(data.kom+'<br /><br />');
                                    $(data.wallet).val('');
                                    });
                    refreshwalletlist();
              });

        $('#keylistbtn').click(function(){ 
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'),
                      action: 'keylist', },
                    function(data) { 
                                    $('#infobox').prepend(data+'<br /><br />');
                                    });
              });

        $('#lockallbtn').click(function(){ 
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'),
                      action: 'lockall', },
                    function(data) { 
                                    $('#infobox').prepend(data+'<br /><br />');
                                    });
              refreshwalletlist();
              });

        $('#walletsbox').on('click', '.delbtn', function (){
        //$('.delbtn').click(function(){ 
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'), 
                      action: 'del', },
                    function(data) { 
                                    $('#infobox').prepend(data+'<br /><br />');
                                    });
              refreshwalletlist();
              });

        $('#walletsbox').on('click', '.openbtn', function (){
        //$('.openbtn').click(function(){ 
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'), 
                      action: 'open', },
                    function(data) { 
                                    $('#infobox').prepend(data+'<br /><br />');
                                    });
              refreshwalletlist();
              });


        $('#walletsbox').on('click', '.insertpass', function (){
        //$('.openbtn').click(function(){ 
            var vid=$(this).attr('id');
             $.post(
                    "wallet.php", 
                    { id: $(this).attr('id'), 
                      action: 'insertpass', },
                    function(data) { 
                                    $('#pass-'+vid).attr('value',data);
                                    $('#infobox').prepend('password inserted - click "unlock wallet" <br /><br />');
                                    });
              });

        $('#refreshwallets').click(function(){ 
                    refreshwalletlist();
              });




        $('#accountinfo').click(function(){ 
             $.post(
                    "vote.php", 
                    { id: $(this).attr('id'), 
                      address: $('#accountinfo').attr('name'),
                      action: 'accountinfo', },
                    function(data) { 
                                    if (data.voter_info === null) { data.voter_info = ''; }
                                    $('#voteinfobox').prepend('INFO: '+data.account_name+' created: '+data.created+'<br />NET: '+data.total_resources.net_weight+' CPU: '+data.total_resources.cpu_weight+'<br />VOTED: '+data.voter_info.producers+'<br /><br />');
                                    });
              });

        $('#findstringbtn').click(function(){ 
             $.post(
                    "vote.php", 
                    { id: $(this).attr('id'), 
                      address: $('#findstring').val(),
                      action: 'findaddress', },
                    function(data) { 
                                    if (data.status == 'OK')        { 
                                                                        if($('#findaccountsavebtn').is(':visible')){ } else { $("#findaccountsavebtn").toggle(); }
                                                                        $('#voteinfobox').prepend(data.kom+'<br />EOS address: <strong>'+data.eosaddress+'</strong><br />ETH address: '+data.ethaddress+'<br />EOS pubkey: '+data.eospubkey+'<br />Tokens: '+data.tokens+'<br /><br />');
                                                                    } 
                                    else if (data.status == 'NOOK') {  
                                                                        if($('#findaccountsavebtn').is(':visible')){ $("#findaccountsavebtn").toggle(); }
                                                                        $('#voteinfobox').prepend(data.kom+'<br />EOS address: <strong>'+data.eosaddress+'</strong><br />ETH address: '+data.ethaddress+'<br />Tokens: '+data.tokens+'<br /><br />');
                                                                    }
                                    else                            {
                                                                        if($('#findaccountsavebtn').is(':visible')){ $("#findaccountsavebtn").toggle(); }
                                                                        $('#voteinfobox').prepend(data.kom+'<br /><br />');
                                                                    }
                                    });
              });

        $('#findaccountsavebtn').click(function(){ 
             $.post(
                    "vote.php", 
                    { id: $(this).attr('id'), 
                      address: $('#findstring').val(),
                      action: 'storefoundaccount', },
                    function(data) {    
                                        if (data.status == 'OK'){ checkstoredaccount(); }
                                        $('#voteinfobox').prepend(data.kom+'<br /><br />');
                                    });
              });

        $('#changeaddressbtn').click(function(){ 
             $.post(
                    "vote.php", 
                    { id: $(this).attr('id'), 
                      address: $('#newaddress').val(),
                      action: 'changeaddress', },
                    function(data) {    
                                        if (data.status == 'OK'){ checkstoredaccount(); if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }  }
                                        $('#voteinfobox').prepend(data.kom+'<br /><br />');
                                    });
              });

        $('#vote').on('click', '#votebtngenerated', function (){
                var voter = $('#storedaccount').attr('value');

             $.post(
                    "vote.php", 
                    { id: $(this).attr('id'), 
                      bplist: $('#bpselected').text(),
                      voter: voter,
                      action: 'vote', },
                    function(data) {    
                                        if (data.status == 'OK'){   }
                                        $('#voteinfobox').prepend(data+'<br /><br />');
                                    });
              });


        $('#checkbtn').click(function(){ 
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      action: 'check', },
                    function(data) { 
                                    $('#cleosinfobox').prepend(data+'<br /><br />');
                                    });
              });


        $('#cleos').on('click', '#cleosaccountinfo', function (){
             $.post(
                    "vote.php", 
                    { id: $(this).attr('id'), 
                      address: $('#cleosaccountinfo').attr('name'),
                      action: 'accountinfo', },
                    function(data) { 
                                    if (data.voter_info === null) { data.voter_info = ''; }

                                    $('#accountbox').append('<br />created: '+data.created+'<br />NET: '+data.total_resources.net_weight+' CPU: '+data.total_resources.cpu_weight+' RAM: '+data.total_resources.ram_bytes+'<br />Net limit:<br />used: '+data.net_limit.used+' available: '+data.net_limit.available+' max: '+data.net_limit.max+'<br />CPU limit:<br />used: '+data.cpu_limit.used+' available: '+data.cpu_limit.available+' max: '+data.cpu_limit.max+'<br />Ram usage: '+data.ram_usage+'<br />staked: '+data.voter_info.staked+'<br />last unstake time: '+data.voter_info.last_unstake_time+'<br />unstaking: '+data.voter_info.unstaking+'<br />');
                                    $('#cleosinfobox').prepend('Account '+data.account_name+' voted: '+data.voter_info.producers+'<br />you can change active account on "VOTE" page<br /><br />');
                                    });
              });


        $('#generatekey').click(function(){ 
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      action: 'generatekey', },
                    function(data) { 
                                    $('#cleosinfobox').prepend(data+'<br /><br />');
                                    removekey();
                                    });
              });


        $('#clinterface').on('click', '#newaccountbtn', function (){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      name: $('#newaccountname').val(),
                      stakenet: $('#newaccountstakenet').val(),
                      stakecpu: $('#newaccountstakecpu').val(),
                      buyram: $('#newaccountbuyram').val(),
                      ownerkey: $('#newaccountownerpubkey').val(),
                      activekey: $('#newaccountactivepubkey').val(),
                      creator: $('#cleosaccountinfo').attr('name'),
                      action: 'newaccount', },
                    function(data) {    
                                        $('#cleosinfobox').prepend(data.kom+'<br /><br />');
                                    });
              });



        $('#clinterface').on('click', '#bidnameinfobtn', function (){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      name: $('#bidnameinfo').val(),
                      action: 'bidnameinfo', },
                    function(data) {    
                                        //if (data.status == 'OK'){  if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }  }
                                        //$('#cleosinfobox').prepend(data.kom+'<br /><br />');
                                        $('#cleosinfobox').prepend(data+'<br /><br />');
                                    });
              });

        $('#clinterface').on('click', '#bidnamenewbtn', function (){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      name: $('#bidnamenew').val(),
                      value: $('#bidvalue').val(),
                      bidder: $('#cleosaccountinfo').attr('name'),
                      action: 'bidname', },
                    function(data) {    
                                        //if (data.status == 'OK'){  if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }  }
                                        //$('#cleosinfobox').prepend(data.newname+'<br /><br />');
                                        $('#cleosinfobox').prepend(data+'<br /><br />');
                                    });
              });

        $('#clinterface').on('click', '#transferbtn', function (){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      active: $('#cleosaccountinfo').attr('name'),
                      sender: $('#sender').val(),
                      receiver: $('#receiver').val(),
                      amount: $('#amount').val(),
                      memo: $('#memo').val(),
                      action: 'transfer', },
                    function(data) {    
                                        //if (data.status == 'OK'){  if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }  }
                                        //$('#cleosinfobox').prepend(data.newname+'<br /><br />');
                                        $('#cleosinfobox').prepend(data.kom+'<br /><br />');
                                    });
              });

        $('#clinterface').on('click', '#stakebtn', function (){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      active: $('#cleosaccountinfo').attr('name'),
                      sender: $('#stsender').val(),
                      receiver: $('#streceiver').val(),
                      stakenet: $('#stakenet').val(),
                      stakecpu: $('#stakecpu').val(),
                      action: 'stake', },
                    function(data) {    
                                        //if (data.status == 'OK'){  if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }  }
                                        //$('#cleosinfobox').prepend(data.newname+'<br /><br />');
                                        $('#cleosinfobox').prepend(data.kom+'<br /><br />');
                                    });
              });

        $('#clinterface').on('click', '#unstakebtn', function (){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      active: $('#cleosaccountinfo').attr('name'),
                      sender: $('#unstsender').val(),
                      receiver: $('#unstreceiver').val(),
                      unstakenet: $('#unstakenet').val(),
                      unstakecpu: $('#unstakecpu').val(),
                      action: 'unstake', },
                    function(data) {    
                                        //if (data.status == 'OK'){  if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }  }
                                        //$('#cleosinfobox').prepend(data.newname+'<br /><br />');
                                        $('#cleosinfobox').prepend(data.kom+'<br /><br />');
                                    });
              });


        $('#clinterface').on('click', '#commandbtn', function (){
             $.post(
                    "program.php", 
                    { id: $(this).attr('id'), 
                      active: $('#cleosaccountinfo').attr('name'),
                      commandtxt: $('#commandtxt').val(),
                      action: 'command', },
                    function(data) {    
                                        //if (data.status == 'OK'){  if($('#chgaccountfrm').is(':visible')){ $("#chgaccountfrm").toggle(); }  }
                                        //$('#cleosinfobox').prepend(data.newname+'<br /><br />');
                                        $('#cleosinfobox').prepend(data.kom+'<br /><br />');
                                    });
              });




});
