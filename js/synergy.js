                $( document ).ready(function() {

                    main_page();

                     //make a call to search.php onchange
                      $('#query').keypress(function(){

                          var query = $("#query").val();
                          $.post("search.php",{query:query}, function( data ) {

                            var apps = eval('('+data+')');
                            var names = [];
                            var icon_links = [];
                            var track_url = [];
                            var rating = [];
                            for(var i=0;i<apps.length;i++)
                            {
                                //console.log(apps[i]["app_name"]);
                                names[i] = apps[i]["app_name"];
                                icon_links[i] = apps[i]["icon"];
                                track_url[i] = apps[i]["track_url"];
                                rating[i] = apps[i]["avg_rating"];
                            }

                            //the following function helps us to enable auto complete in the query input box

                            $( "#query" ).autocomplete({
                              source: names
                            });                            

                          //now place the icons in the apps_tray 
                          var str ="<div class='row social'><h1>Searched Apps</h1><ul class='social-icons'>";

                          for (var i = 0;i<icon_links.length ;i++) {
                              var alt_json = {};
                              alt_json.url = track_url[i];
                              alt_json.rating = rating[i];

                              str+="<li><a href='"+track_url[i]+"'><img src='"+icon_links[i]+"'width='50' height='50' alt='"+JSON.stringify(alt_json)+"' draggable='true' ondragstart='drag(event)' id='drag"+(i+1)+"'></a></li>";                                  
                          }
                          str+="</ul></div>";
                          $('#apps_tray').html(str);
                          //$('#app_drop').html(str);    
                          });
                        
                            
                      });
                  // Info button click
                  var dump_screen = "";

                    $(document).delegate('#info_button', 'click', function()
                    {
                        //id screen_id is app_drop , so we need to replace it when click back
                        //take the current dump of the files and store it in a global variable 
                        dump_screen = $('#app_drop').html();
                        //now we can replace it with info screen 
                        $.get('js/info.php',function(data){

                            $('#app_drop').html(data);

                        });

                    });

                    $(document).delegate('#info_button', 'tap', function()
                    {
                        //id screen_id is app_drop , so we need to replace it when click back
                        //take the current dump of the files and store it in a global variable 
                        dump_screen = $('#app_drop').html();
                        //now we can replace it with info screen 
                        $.get('js/info.php',function(data){
                            $('#app_drop').html(data);
                        });

                    });

                     $(document).delegate('#back', 'tap', function() {
                        window.location.href = "index.php";
                      });

                     $(document).delegate('.curve', 'click', function() {
                        
                        dump_screen = $('#app_drop').html();
                        //now we can give the id , track_url and img source to the next u.i screen
                        var div_id = $(this).closest('div').parents('div').attr('id');
                        //alert(div_id);
                         $.post('app_details.php',{img_src:this.src,url:this.alt,id:this.id,div_id:div_id},function(data){
                              $('#app_drop').html(data);
                         });
                           $('div#app_drop').scrollTop(0);

                      });

                     $(document).delegate('.curve', 'tap', function() {
                        
                        dump_screen = $('#app_drop').html();
                        //now we can give the id , track_url and img source to the next u.i screen
                        var div_id = $(this).closest('div').parents('div').attr('id');
                        //alert(div_id);
                         $.post('app_details.php',{img_src:this.src,url:this.alt,id:this.id,div_id:div_id},function(data){
                              $('#app_drop').html(data);
                         });

                          $('div#app_drop').scrollTop(0);

                      });

                     $(document).delegate('#mobile_search','keypress',function(){
                        var panel_data =  $('#search_panel').html();
                        $('#search_panel').html("");
                        var query = $('#mobile_search').val();
                        $.post('search.php',{query:query},function(data){
                            var s = eval('('+data+')');
                            var str = "";
                            for(var i =0;i<s.length;i++)
                              {
                                str+="<div class='mobile-row2' style='width:100%;height:75px;text-align:center;position:relative;margin-top:0px'><ul style='margin:0px'><li class='mob_lis' style='left:0px'><img src='"+s[i]['icon']+"' class='expa' width=50 height=50 style='margin:10px;border-radius: 6px;border: 2px solid beige;' alt="+s[i]['track_url']+" id='"+s[i]['bundle_id']+"'></li><li class='mob_lis' style='left:18%;top:10px;font-weight:bolder;font-size:smaller;width:80%;'><div style='margin-left:16%;float:left'>"+s[i]['app_name']+"</div><br><div style='font-weight:100;margin-left:16%;float:left'>"+s[i]['version']+"</div><br><div style='font-weight:100;margin-left:16%;float:left;font-size:10px'>"+s[i]['genre']+"</div></li></div>";
                              } 
                          $('#search_panel').html(str);
                        });
                        $('div#app_drop').scrollTop(0);

                     });

                    $(document).delegate('.expa', 'tap', function() {
                        //now we can give the id , track_url and img source to the next u.i screen
                        //var div_id = $(this).closest('div').parents('div').attr('id');
                        //alert(div_id);
                         $.post('search_results.php',{img_src:this.src,url:this.alt,id:this.id},function(data){
                              $('#app_drop').html(data);

                         }); 
                         $('div#app_drop').scrollTop(0); 

                      });

                    $(document).delegate('ul#ind_app_details>li', 'click', function() {
                        var i = $(this).index();
                        //alert(i);
                        $('.arrow_down>li').each(function(){
                            //$(this).css("display:none");
                            $(this).hide();
                        });
                      $('.arrow_down>li:eq('+i+')').show();
                        
                      });

                    //attach see all functions to its respective activities

                    var see_all = ["free_apps","paid_apps","fun","games","photo"];

                      $.each(see_all,function(index,value)
                        {
                          $(document).delegate("#"+value,"tap",function(){
                              var data = localStorage.getItem(value);
                              var top_apps = eval('('+data+')');

                              var str = parse_search(top_apps);
                              $('#search_panel').html(str);
                            });
                          $('div#app_drop').scrollTop(0);
                        });



                  });

                  function main_page()
                  {
                  $.get('top_free_apps.php',function(data){
                      localStorage.setItem("free_apps",data);
                      var top_apps = eval('('+data+')');
                      //alert(top_apps[0]["app_name"]);

                          var str = parse_data(top_apps);

                          $('#slidebar').html(str);                       
                           window.mySwipe = new Swipe(document.getElementById('slidecont'), {
                          //startSlide: 2,
                          //speed: 400,
                          //auto: 3000,
                          continuous: false,
                          //disableScroll: false,
                          stopPropagation: true,
                          //callback: function(index, elem) {},
                          //transitionEnd: function(index, elem) {}
                        });
                         in_row('#slidebar', 16, 8);

                    });
                    $.get('top_paid_apps.php',function(data){
                      localStorage.setItem("paid_apps",data);
                      var top_apps = eval('('+data+')');
                      //alert(top_apps[0]["app_name"]);
                          
                          var str = parse_data(top_apps);

                          $('#slidebar2').html(str);
                         // in_row('#slidebar2', 16, 8);
                         window.mySwipe = new Swipe(document.getElementById('slidecont2'), {
                          //startSlide: 2,
                          //speed: 400,
                          //auto: 3000,
                          continuous: false,
                          //disableScroll: false,
                          stopPropagation: true,
                          //callback: function(index, elem) {},
                          //transitionEnd: function(index, elem) {}
                        });
                         in_row_2('#slidebar2', 16, 8);
                    });

                var categories = ["Entertainment","Games","Photo & Video"]
                var c_all = ["fun","games","photo"];
                $.each(categories,function(index,value)
                {
                  console.log(index);
                  $.post('categories.php',{category:value},function(data){
                      localStorage.setItem(c_all[index],data);
                      var top_apps = eval('('+data+')');
                      //alert(top_apps[0]["app_name"]);
                          var str = parse_data(top_apps);

                          var div= '#slidebar'+(index+3);
                          $(div).html(str);
                          var div_parent_id = $(div).parent().attr('id');
                          console.log(div_parent_id);

                          window.mySwipe = new Swipe(document.getElementById(div_parent_id), {
                          //startSlide: 2,
                          //speed: 400,
                          //auto: 3000,
                          continuous: false,
                          //disableScroll: false,
                          stopPropagation: true,
                          //callback: function(index, elem) {},
                          //transitionEnd: function(index, elem) {}
                        });
                         in_row_2(div, 16, 8);

                         //in_row('#slidebar'+(index+3), 16, 8);
                    });

                  });
                  }

                  function in_row(gridid,cellWidth,padding)
                  {
                    //var cellWidth = 50;
                    var x = padding;
                    var counter = 1;
                    $(gridid+"> .one_window").each(function() {
                    
                    //$(this).parent().css('overflow', 'hidden');
                    $(this).children('.cell').each(function() {
                        $(this).css({
                            width: cellWidth + '%',
                            height: '14%',
                            position: 'absolute',
                            left: x +'%',
                            top: padding + 'px'
                            });
                        x += cellWidth+7;
                        if(counter%4==0)
                          x=padding;
                        counter+=1;
                          
                        });
                    $(this).children().first().css("position","inherit");
                      
                  });

                }

                function parse_search(s)
                  {
                            var str = "";
                            for(var i =0;i<s.length;i++)
                              {
                                str+="<div class='mobile-row2' style='width:100%;height:75px;text-align:center;position:relative;margin-top:0px'><ul style='margin:0px'><li class='mob_lis' style='left:0px'><img src="+s[i]['icon']+" class='expa' width=50 height=50 style='margin:10px;border-radius: 6px;border: 2px solid beige;' alt="+s[i]['track_url']+" id='"+s[i]['bundle_id']+"'></li><li class='mob_lis' style='left:18%;top:10px;font-weight:bolder;font-size:smaller;width:80%;'><div style='margin-left:16%;float:left'>"+s[i]['app_name']+"</div><br><div style='font-weight:100;margin-left:16%;float:left'>"+s[i]['version']+"</div><br><div style='font-weight:100;margin-left:16%;float:left;font-size:10px'>"+s[i]['genre']+"</div></li></div>";
                              }
                            return str; 
                  }

                function parse_data(top_apps)
                  {
                    var names = [];
                            var icon_links = [];
                            var track_url = [];
                            var rating = [];
                            var bundle_id = [];
                            for(var i=0;i<top_apps.length;i++)
                            {
                                //console.log(apps[i]["app_name"]);
                                names[i] = top_apps[i]["app_name"];
                                icon_links[i] = top_apps[i]["icon"];
                                track_url[i] = top_apps[i]["track_url"];
                                rating[i] = top_apps[i]["avg_rating"];
                                bundle_id[i] = top_apps[i]["bundle_id"];
                            }
                          var str = "<div class='one_window'>";
                          var t  = 0;
                          for (var i =0;i < top_apps.length; i++) {
                            //first slice the name a bit to accomodate in the screen 
                            var name;
                            if(names[i].length>9)
                            {
                              name = names[i].slice(0,7);
                              name = name+"...";
                            }
                            else
                            {
                              name = names[i];
                            }
                            if(t!=0 && t%4==0)
                              str = str+" </div><div class='one_window'><div class='cell'><img src="+icon_links[i]+" alt='"+track_url[i]+"' class='curve' id='"+bundle_id[i]+"'><br><span class ='icon-text'>"+name+"</span></div>";
                            else
                              str = str+"<div class='cell'><img src="+icon_links[i]+" alt='"+track_url[i]+"' class='curve' id='"+bundle_id[i]+"'><br><span class ='icon-text'>"+name+"</span></div>";
                            t+=1;
                          };
                          str = str+"</div>";

                          return str;
                  }
                function in_row_2(gridid,cellWidth,padding)
                  {
                    //var cellWidth = 50;
                    var x = padding;
                    var counter = 1;
                    $(gridid+"> .one_window").each(function() {
                    
                    //$(this).parent().css('overflow', 'hidden');
                    $(this).children('.cell').each(function() {
                        $(this).css({
                            width: cellWidth + '%',
                            height: '14%',
                            position: 'absolute',
                            left: x +'%',
                            top: padding + 'px'
                            });
                        x += cellWidth+7;
                        if(counter%4==0)
                          x=padding;
                        counter+=1;
                          
                        });
                    //$(this).children().first().css("position","inherit");
                      
                  });

                }



          //$('#myModal').modal('hidden');
