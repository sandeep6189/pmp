    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>PmP For Android</title>
    <meta name="description" content="Flat Design Mini Portfolio">
    <meta name="keywords" content="responsive, bootstrap, Privacy, Android, App Scanner">
    <meta name="author" content="Dzyngiri">
    <meta name="description" content="This is an app to protect your privacy and act against the apps which take illegal data from your phone ">
    <!-- styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
     <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.mobile.custom.structure.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="css/touchslider.css" />

  <script src="js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
   <script type="text/javascript" src="js/swipe.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    </head>
    <body>
    <!--Profile container-->
    <div class="container profile" style="width:100%;padding:0px">

            <div id="app_drop" ondrop="drop(event)" ondragover="allowDrop(event)" class="span12" style="width:100%;margin:0px">
                <div class="row mobile-row">
                  <div class="col-xs-6" style="text-align:center;font-weight:bolder;margin-top:15px">
                      <!--button class="btn btn-info btn-sm" style="margin-top: -40px;margin-right:10px;background-image: linear-gradient(to bottom, #424242, #1A1919);width:70px;margin-top:2%;" id="info_button">Info</button>
                    <-->
                    <span id='back-main' data-type='horizontal' style="margin-top:-18px;position:absolute;float:left;margin-left:-25%;display:none">
                        <div class='arrow-left'>
                        </div>
                        <div class='rect' style='padding-top:5px'>
                       <span class='rect-text'>Back</span>
                    </div>
                  </span>
                    <span data-type='horizontal'>Protect My Privacy</span><span style="float:right;margin-top:-15px"><a href="#" data-type="horizontal" data-role="button" data-inline="true" data-mini='true' id="info_button" data-theme="c">Info</a></span>
                    </div>
                </div>
                <div class="row mobile-row">
                  <div class="col-xs-6" style="text-align:center;font-weight:bolder;margin-top:15px">
                      <div>
                          <input placeholder='Search' data-icon='search' style="width:100%;margin:0" type="search" name="search" value="" id="mobile_search">
                      </div>
                  </div>
                </div>
                <div id="search_panel"> 
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Top Free Apps</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='free_apps'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row swipe" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont">                    
                      <div class="swipe-wrap" id="slidebar"></div>   
                  </div>
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Top Paid Apps</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='paid_apps'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row swipe" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont2">                    
                      <div id="slidebar2"></div>   
                  </div>
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Entertainment</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='fun'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row swipe" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont3">                    
                      <div id="slidebar3"></div>   
                  </div>
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Games</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='games'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row swipe" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont4">                    
                      <div id="slidebar4"></div>   
                  </div>
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Photo and Videos</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='photo'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row swipe" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont5">                    
                      <div  id="slidebar5"></div>   
                  </div>
                </div>



            </div>
          </div>
          <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/synergy.js"></script>
    </body>
<div id="screen_data" style="display:none">
<div id="mainContent" data-iscroll="" data-role="content" class="ui-content iscroll-wrapper" role="main" style="padding: 0px; height: 418px; overflow: hidden;">     
    <div>
    <div class="iscroll-content" style="padding: 0px;">
    <div class="appMainWrapDetails">
            <div class="mainWrapStars" style="margin-top: -35px;" id="">
              <p id="app_ratings">
                <img src="img/full.png" alt="" style="height:15px">
                <img src="img/full.png" alt="" style="height:15px">
                <img src="img/empty.png" alt="" style="height:15px">
                <img src="img/empty.png" alt="" style="height:15px">
                <img src="img/empty.png" alt="" style="height:15px">
              </p>
            </div>
        </div>
    </div>
</div><div id="menu" class="ui-grid-b">
    <div class="ui-block-a bold"><a href="overview-com.fifa.fifaappiphone.html" class="ui-link">Overview</a></div>
    </div><div class="overviewListWrapper">
        <div id="overviewList"> 
            <ul>
                <li style="line-height:0px">
                    <p style="font-size:12px;margin-top:0px;line-height:12px">Tracks usage (Flurry analytics)</p>               
                </li>    
                <li  style="line-height:0px"> 
                    <p style="font-size:12px;margin-top:0px;line-height:12px">Can read your Calendar</p>
                </li>    
                <li  style="line-height:0px"> 
                    <p style="font-size:12px;margin-top:0px;line-height:12px">Could track your location</p>
                </li>    
                <li  style="line-height:0px"> 
                    <p style="font-size:12px;margin-top:0px;line-height:12px">May drain battery tracking location</p>
                </li>    
                <li  style="line-height:0px"> 
                    <p style="font-size:12px;margin-top:0px;line-height:12px">Connects to Facebook</p>
                </li>    
                <li  style="line-height:0px"> 
                    <p style="font-size:12px;margin-top:0px;line-height:12px">Connects to Twitter</p>
                </li>    
            </ul>
        </div>
    </div></div></div>
</div>
    </html>


