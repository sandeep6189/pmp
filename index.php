<?php

include "Mobile_Detect.php";
$detect = new Mobile_Detect();

//check for any mobile device
if($detect->isMobile())
  {
?>
   

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
     <link rel="stylesheet" type="text/css" href="jquery.mobile.custom.theme.min.css">
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
                      Protect My Privacy
                  </div>
                    <div class="col-xs-6 pull-right">
                      <button class="btn btn-info btn-primary btn-sm" style="margin-top: -40px;margin-right:10px;background-image: linear-gradient(to bottom, #424242, #1A1919);width:50px;margin-top:-24px;" id="info_button">Info</button>
                    </div>
                </div>
                <div class="row mobile-row">
                  <div class="col-xs-6" style="text-align:center;font-weight:bolder;margin-top:15px">
                      <div class="right-inner-addon ">
                          <i class="icon-search"></i>
                          <input type="search" class="form-control" placeholder="Search" style="height:3px;line-height:10px" id='mobile_search'>
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



<?php

}

else
  {


?>
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
    <link href="css/style.css" rel="stylesheet">
    <link href="font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
        <link type="text/css" rel="stylesheet" href="css/touchslider.css" />
       <link rel="stylesheet" type="text/css" href="css/jquery.mobile.custom.theme.min.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/touchslider.js"></script>
  
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    </head>
    <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container"> 
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span> 
                 <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </a> 
            <a class="brand" href="index.html"><img src="img/user.jpg"/></a>
            <ul class="nav nav-collapse pull-right">
              <li><a href="index.html" class="active"><i class="icon-user"></i> Profile</a></li>
              <!--li><a href="skills.html"><i class="icon-trophy"></i> Skills</a></li>
              <li><a href="work.html"><i class="icon-picture"></i> Work</a></li>
              <li><a href="resume.html"><i class="icon-doc-text"></i> Resume</a></li-->
            </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav nav-collapse pull-right">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
           
                   
                <input type="text" class="form-control" placeholder="Search" style="width:100%;height:20px;margin-top:12%" name="query" id="query">
                <span class="glyphicon glyphicon-star"></span>
              
          </div>
        </div>
      </div>
    </div>
    <!--Profile container-->
    <div class="container profile" style="width:100%;">

      <div class="span5"> 
       
        <div id="case">
            <div id="earsection">
            <div id="camera"></div>
            <div id="speaker"></div>
            </div>
            <div id="app_drop" ondrop="drop(event)" ondragover="allowDrop(event)" style="overflow-y:scroll">
                <div class="row mobile-row">
                  <div class="col-xs-6" style="text-align:center;font-weight:bolder;margin-top:15px">
                      Protect My Privacy
                  </div>
                    <div class="col-xs-6 pull-right">
                      <button class="btn btn-info btn-primary btn-sm" style="margin-top: -40px;margin-right:10px;background-image: linear-gradient(to bottom, #424242, #1A1919);" id="info_button">Info</button>
                    </div>
                </div>
                <div class="row mobile-row">
                  <div class="col-xs-6" style="text-align:center;font-weight:bolder;margin-top:15px">
                      <div class="right-inner-addon ">
                          <i class="icon-search"></i>
                          <input type="search" class="form-control" placeholder="Search" style="height:3px;line-height:10px" id="mobile_search">
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
                  <div class="row mobile-row" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont">                    
                      <div id="slidebar"></div>   
                  </div>
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Top Paid Apps</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='paid_apps'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont2">                    
                      <div id="slidebar2"></div>                     
                  </div>                
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Entertainment</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='fun'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont3">                    
                      <div id="slidebar3"></div>                    
                  </div>
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Games</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='games'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont3">                    
                      <div id="slidebar4"></div>                    
                  </div>
                  <div class="row mobile-row">
                    <div class="col-xs-6" style="font-weight:bolder;margin:5px">
                       <span>Photo and Videos</span><span class="pull-right" style="border-left: solid 1px white;
  padding-left: 15px;" id='photo'> See All ></span>
                    </div>
                  </div>
                  <div class="row mobile-row" style="width: auto;overflow: hidden;height: 95px;white-space: nowrap;-webkit-touch-overflow:scroll;" id="slidecont3">                    
                      <div id="slidebar5"></div>                    
                  </div>
              </div>
            </div>
            <div id="button">
            <div id="buttonsquare"></div>
            </div>
            </div>

       </div>
      <div class="hidden-md hidden-lg span3" id="apps_tray">
            <div class="row social">

              <h1>Popular Apps</h1>
              <ul class="social-icons">
                <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
                <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
                <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
                <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
                <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
                <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
            </ul>
          </div>
      </div>
      <div class="span4" id="pmp_desc">
        <h1>Protect my Privacy !</h1>
        <h3>App Scanner</h3>
        <p> Checks for malicious content retrieval from apps </p>
        <!--a href="#" class="hire-me"><i class="icon-paper-plane"></i> Hire Me </a-- > 
        </div>
    </div>
    <!--END: Profile container-->
    <!-- Social Icons -->
    
    <!-- END: Social Icons -->
    <!-- Footer -->
    <div class="footer" style="left:0;height:50px">
      <div class="container">
        <p class="pull-left" style="margin-top:10px"><a href="#">Copyright &#169; SynergyLabs</a></p>
        <p class="pull-right" style="margin-top:10px"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" placeholder="Yopur Name">
          <input type="text" placeholder="Your Email">
          <input type="text" placeholder="Website (Optional)">
          <textarea rows="3" style="width:80%"></textarea>
          <br/>
          <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/copy_main.js"></script>
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
</div>
<div id="menu" class="ui-grid-b">
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

<?php
}

?>