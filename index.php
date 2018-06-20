<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EOS Emerge Poland - Mac OS Wallet</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cabin:700" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
    <script src="js/func.js"></script>
    <link href="css/my.css" rel="stylesheet">

  </head>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/eosemergelogo-m.png" alt="eosemergelogo-m" width="100" height="100">EOS Emerge Poland</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#wallet">Wallet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#vote">Vote</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#cleos">Cleos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">EOS Mac Wallet</h1>
              <p class="intro-text" style="margin-top: 60px;">A secure, local and free Wallet for EOS blockchain
                <br>based on official EOSIO cleos </p>
              <a href="#wallet" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Wallet Section -->
    <section id="wallet" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto" style="text-align:left;">
            <p>
                <input id="showcreate" class="bt/n btn-default" type="button" value="create new wallet" />
                <input id="keylistbtn" class="bt/n btn-default" type="button" value="list keys (from all unlocked wallets)" />
                <input id="lockallbtn" class="bt/n btn-default" type="button" value="lock all wallets" />
            </p>
          </div>

          <div id="create" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
            <p>Create new wallet name (empty for default): 
                <input id="newname" name="walletname" type="text" placeholder="wallet name" />
                <input id="newbtn" type="button" value="create" class="bt/n btn-default" />
                <input id="savepass" type="checkbox" name="savepass" /> <span style="font-size:0.8em;">save password to local file</span>
            </p>
          </div>

          <div class="col-8 mx-auto" align="left" style="text-align: left;">
                <h3 id="refreshwallets">List of Your WALLETS:<span style="font-size:0.2em;vertical-align:text-top;"><br />[click to refresh]</span></h3>
          </div>
          <div id="walletsbox" class="col-8 mx-auto" align="left">
                <br />
          </div>
          <div class="col-4 mx-auto" align="left" style="border:1px solid white;width:100%;height:100%;min-height:350px;max-height:350px;overflow:auto;">
              <h4 style="border-bottom:1px solid white;margin-bottom: 5px;">infobox</h4>
              <span id="infobox" style="font-size: 0.7em;">
                &nbsp;
              </span>
          </div>

        </div>
      </div>
    </section>

    <!-- Vote Section -->
    <section id="vote" class="content-section text-center">
      <div class="container">
        <div class="row">

            <div class="col-lg-12 mx-auto" align="left" style="text-align: left;vertical-align: middle;">
                <span id="storedaccounttxt" style="padding-right:20px;vertical-ali/gn: text-bottom;"></span>
                <input id="storedaccount" type="hidden" value="" />
                <input id="accountinfo" name="" class="bt/n btn-default" type="button" value="get account info" style="vertical-align:text-bottom;display:none;" />
                <input id="findaddress" class="bt/n btn-default" type="button" value="find address" style="vertical-align:text-bottom;" />
                <input id="changeaccount" class="bt/n btn-default" type="button" value="change account" style="vertical-align:text-bottom;" />
            </div>

          <div id="chgaccountfrm" class="col-lg-12 mx-auto" style="text-align:left;margin-top:20px;display:none;">
            <p>please enter EOS address: 
                <input id="newaddress" name="newaddress" type="text" placeholder="12 char EOS address" />
                <input id="changeaddressbtn" type="button" value="change account" class="bt/n btn-default" /> <span style="font-size: 0.8em;"> (it will be locally stored)</span></span>
            </p>
          </div>

          <div id="findaccountfrm" class="col-lg-12 mx-auto" style="text-align:left;margin-top:20px;display:none;">
            <p>please enter ETH address / EOS public key / EOS address: 
                <input id="findstring" name="findstring" type="text" placeholder="ETH, EOS Pubkey, EOS address" />
                <input id="findstringbtn" type="button" value="find account" class="bt/n btn-default" /> 
                <input id="findaccountsavebtn" type="button" value="store this" class="bt/n btn-default" style="display: none;" /> </span>
            </p>
          </div>
    
            <div class="col-lg-12 mx-auto">
              <h2 style="margin: 5px;"><span id="votebtn">VOTE:</span> <span style="font-size: 0.7em;">selected <span id="cvoted">0</span> producers <span id="cremainig">30</span> remainig</span></h2>
              <span id="bpselected" style="font-size: 0.6em;margin: 5px;"></span>
              <h5 id="votereminder" style="font-size:0.6em;display:none;color:yellow;margin:2px;">please check your wallet! it must be unlocked, and keys imported</h5>
            </div>
              
            <div class="col-6 mx-auto" align="left" style="border:1px solid white;width:100%;height:100%;min-height:250px;max-height:350px;overflow:auto;">
            <h4 style="border-bottom:1px solid white;margin-bottom: 5px;">Registered producers<span style="font-size: 0.5em;"> [random order]</span></h4>
            <span id="producers" style="fo/nt-size: 0.7em;">
                &nbsp;
              </span>
            </div>

            <div class="col-4 mx-auto" align="left" style="border:1px solid white;width:100%;height:100%;min-height:350px;max-height:350px;overflow:auto;">
              <h4 style="border-bottom:1px solid white;margin-bottom: 5px;">infobox</h4>
              <span id="voteinfobox" style="font-size: 0.7em;">
                &nbsp;
              </span>
            </div>

        </div>
      </div>
    </section>

    <!-- Cleos Section -->
    <section id="cleos" class="content-section text-center">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto" align="left" style="text-align: left;vertical-align: middle;">
                <input id="generatekey" class="bt/n btn-default" type="button" value="generate new keypar" style="vertical-align:text-bottom;" />
                <input id="createaccount" class="bt/n btn-default" type="button" value="create account" style="vertical-align:text-bottom;" />
                <input id="transfer" class="bt/n btn-default" type="button" value="transfer" style="vertical-align:text-bottom;" />
                <input id="stake" class="bt/n btn-default" type="button" value="stake" style="vertical-align:text-bottom;" />
                <input id="unstake" class="bt/n btn-default" type="button" value="unstake" style="vertical-align:text-bottom;" />
                <input id="bidnames" class="bt/n btn-default" type="button" value="bid names" style="vertical-align:text-bottom;" />
                <input id="command" class="bt/n btn-default" type="button" value="write command" style="vertical-align:text-bottom;" />
                <input id="updateapp" class="bt/n btn-default" type="button" value="check app" style="vertical-align:text-bottom;" /> 
            </div>


          <div class="col-lg-12 mx-auto">
            <h2 style="margin:5px;margin-top:10px;">cleos interface</h2>
          </div>

          <div id="activeaccount" class="col-lg-3 mx-auto" align="left" style="mar/gin: 5px;border:1px solid white;width:100%;height:100%;min-height:350px;max-height:350px;overflow:auto;">
              <h4 style="border-bottom:1px solid white;margin-bottom: 5px;">active account</h4>
                  <span id="accountbox" style="font-size: 0.7em;line-height: normal;">
                    &nbsp;
                  </span>

          </div>

          <div id="cleosworkspace" class="col-lg-9 mx-auto" align="left" style="width:100%;height:100%;min-height:350px;max-height:350px;overflow:auto;">


                  <div id="clinterface" class="col-12 mx-auto" align="left" style="margin-bottom: 5px;border:1px solid white;width:100%;height:100%;min-height:200px;max-height:200px;overflow:auto;">

                      <div id="generatekeyfrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                          <span id="generatekeyinfo" style="margin-top:20px;">keys below are not stored or saved or sent - only displayed 10 seconds</span>
                      </div>

                      <div id="newaccountfrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                        <span style=""></span>
                            <p style="font-size:0.8em;margin:3px;margin-top:10px;">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">new EOS account name: </label>
                                <input id="newaccountname" name="newaccountname" type="text" placeholder="12 char [a-z,1-5]" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;">
                                
                                <label for="colFormLabel" class="col-sm-2 col-form-label">stake NET: </label>
                                <input id="newaccountstakenet" name="newaccountstakenet" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;" /> EOS  
                                
                                <label for="colFormLabel" class="col-sm-2 col-form-label">stake CPU:  </label>
                                <input id="newaccountstakecpu" name="newaccountstakecpu" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;" /> EOS 
                                
                                <label for="colFormLabel" class="col-sm-2 col-form-label">buy RAM:  </label>
                                <input id="newaccountbuyram" name="newaccountbuyram" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;" /> EOS
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;">
                                 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">owner pub key:  </label>
                                <input id="newaccountownerpubkey" name="newaccountownerpubkey" type="text" placeholder="owner public key" style="width:350px;" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;">
                                 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">active pub key:  </label>
                                <input id="newaccountactivepubkey" name="newaccountactivepubkey" type="text" placeholder="active public key" style="width:350px;" />
                                <input id="newaccountbtn" type="button" value="create" class="bt/n btn-default" /> 
                            </p>
                      </div>

                      <div id="transferfrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                        <span style=""></span>
                            <p style="font-size:0.8em;margin:3px;margin-top:15px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">sender: </label>
                                <input id="sender" name="sender" type="text" placeholder="[a-z,1-5] max 12chr" style="wi/dth:30%;" />
                                <label for="colFormLabel" class="col-sm-2 col-form-label">receiver: </label>
                                <input id="receiver" name="receiver" type="text" placeholder="[a-z,1-5] max 12chr" style="wid/th:30%;" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">amount: </label>
                                <input id="amount" name="amount" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;margin-top:10px;" /> EOS</p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">memo: </label>
                                <input id="memo" name="memo" type="text" placeholder="optional memo" style="widt/h:30%;" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <input id="transferbtn" type="button" value="transfer" class="bt/n btn-default" style="marg/in-left: 50px;" />
                            </p>
                      </div>

                      <div id="stakefrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                        <span style=""></span>
                            <p style="font-size:0.8em;margin:3px;margin-top:15px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">from: </label>
                                <input id="stsender" name="stsender" type="text" placeholder="[a-z,1-5] max 12chr" style="wi/dth:30%;" />
                                <label for="colFormLabel" class="col-sm-2 col-form-label">receiver: </label>
                                <input id="streceiver" name="streceiver" type="text" placeholder="[a-z,1-5] max 12chr" style="wid/th:30%;" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">stake NET: </label>
                                <input id="stakenet" name="stakenet" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;margin-top:10px;" /> EOS</p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">stake CPU: </label>
                                <input id="stakecpu" name="stakecpu" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;margin-top:10px;" /> EOS</p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <input id="stakebtn" type="button" value="stake" class="bt/n btn-default" style="marg/in-left: 50px;" />
                            </p>
                      </div>

                      <div id="unstakefrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                        <span style=""></span>
                            <p style="font-size:0.8em;margin:3px;margin-top:15px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">from: </label>
                                <input id="unstsender" name="unstsender" type="text" placeholder="[a-z,1-5] max 12chr" style="wi/dth:30%;" />
                                <label for="colFormLabel" class="col-sm-2 col-form-label">receiver: </label>
                                <input id="unstreceiver" name="unstreceiver" type="text" placeholder="[a-z,1-5] max 12chr" style="wid/th:30%;" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">unstake NET: </label>
                                <input id="unstakenet" name="unstakenet" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;margin-top:10px;" /> EOS</p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <label for="colFormLabel" class="col-sm-2 col-form-label">unstake CPU: </label>
                                <input id="unstakecpu" name="unstakecpu" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;margin-top:10px;" /> EOS</p>
                            <p style="font-size:0.8em;margin:3px;margin-top:5px;"> 
                                <input id="unstakebtn" type="button" value="unstake" class="bt/n btn-default" style="marg/in-left: 50px;" />
                            </p>
                      </div>

                      <div id="bidnamesfrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                        <span style="">Bid for short names:
                            <p style="font-size:0.8em;margin:3px;margin-top:15px;"> <input id="bidnameinfo" name="bidnameinfo" type="text" placeholder="[a-z,1-5] max 12chr" style="width:30%;" />
                                <input id="bidnameinfobtn" type="button" value="get info about name" class="bt/n btn-default" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:25px;">
                                name to bid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="bidnamenew" name="bidnamenew" type="text" placeholder="[a-z,1-5] max 12chr" style="width:30%;" /><br />
                                amount to bid:&nbsp;<input id="bidvalue" name="bidvalue" type="text" placeholder="x.xxxx" style="width:60px;text-align:right;margin-top:10px;" /> EOS 
                                <input id="bidnamenewbtn" type="button" value="bid name!" class="bt/n btn-default" style="margin-left: 50px;" />
                            </p>
                        </span>
                      </div>

                      <div id="commandfrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                        <span style="padding-top:20px;">write below your own command for cleos (without cleos):</span>
                            <p style="font-size:0.8em;margin:3px;margin-top:15px;"> ./cleos <input id="commandtxt" name="commandtxt" type="text" placeholder="type command i.e. system delegatebw xxxx xxxx xxxx" style="width:90%;" />
                            </p>
                            <p style="font-size:0.8em;margin:3px;margin-top:25px;">
                                <input id="commandbtn" type="button" value="send command" class="bt/n btn-default" style="margin-left: 50px;" />
                      </div>

                      <div id="updatefrm" class="col-lg-12 mx-auto" style="text-align:left;display:none;">
                        <span style="">
                            <p style="margin:5px;margin-top:10px;">
                                <span id="updateusingversion"></span><br />
                                <input id="checkgitkupdate" type="button" value="check update" class="bt/n btn-default" /> 
                            </p>
                                
                        </span>
                      </div>


                  </div>
        
                  <div class="col-12 mx-auto" align="left" style="margin-top: 10px;border:1px solid white;width:100%;height:100%;min-height:140px;max-height:140px;overflow:auto;">
                      <h4 style="border-bottom:1px solid white;margin-bottom: 5px;">infobox</h4>
                      <span id="cleosinfobox" style="font-size: 0.7em;">
                        &nbsp;
                      </span>
                  </div>


          </div>





        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Feel free to contact us</h2>
            <p>We are a group of strong IT and blockchain enthusiasts from Poland with background and IT experience in private companies (precious metals - idfmetale.pl, mutual funds, insurance), with a 14-yr history in the financial market and extensive knowledge about most of the financial instruments that appeared in the last decade, indicating our ability to adapt to the changing environments of business.</p>
            <p>As such, we are extremely excited and ready to use our financial background, IT knowledge, and innovation skills to serve the EOS project.</p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/eos_emerge" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://gitlab.com/emergepoland/" class="btn btn-default btn-lg">
                  <i class="fa fa-gitlab fa-fw"></i>
                  <span class="network-name">Gitlab</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://t.me/eosemerge" class="btn btn-default btn-lg">
                  <i class="fa fa-telegram fa-fw"></i>
                  <span class="network-name">Telegram</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; EOS Emerge Poland 2018</p>
      </div>
    </footer>


  </body>
</html>