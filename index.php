<!DOCTYPE html>
<html class="ng-scope" ng-app=""><head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
       
        <title>Simple Rating System in JQuery, CSS, PHP, MySQL :devzone.co.in</title>
        <style type="text/css">.main { 
                width: 900px; 
                margin: 0 auto; 
                height: 700px;
                border: 1px solid #ccc;
                padding: 20px;
            }

            .header{
                height: 100px;    
            }
            .content{    
                height: 700px;
                border-top: 1px solid #ccc;
                padding-top: 15px;
            }
            .footer{
                height: 100px;  
                bottom: 0px;
            }
            .heading{
                color: #FF5B5B;
                margin: 10px 0;
                padding: 10px 0;
                font-family: trebuchet ms;
            }

            #dv1, #dv0{
                width: 408px;
                border: 1px #ccc solid;
                padding: 15px;
                margin: auto;

            }
           
            /*downloaded from http://devzone.co.in*/
        </style>
        <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>

    </head>
    <body>

        <!-- ad1 start -->
        <div style="width:170px;margin:0 auto;float: left;position:fixed;">

            <script async="" src="index_files/adsbygoogle.js"></script>
            <!-- 160x600_verticle -->
            <ins data-adsbygoogle-status="done" class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-2074772727795809" data-ad-slot="3439042376"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><ins id="aswift_0_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"></ins></ins></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <!-- ad1 end http://DevZone.co.in-->

        <div class="main">
            <div class="header"><a href="http://devzone.co.in/" title="devzone.co.in"><img alt="devzone.co.in" src="index_files/tn_mesocolumn_header_logo.png"></a></div>


            <div class="content">
                <div class="heading">Simple Rating System in JQuery, CSS, PHP, MySQL</div>

                <div id="dv0"></div>
                <div id="dv1">

                    <!-- Demo 1 start -->
                    <h1>Demo 1</h1>
                    <script>
                        $(document).ready(function () {
                            $("#demo1 .stars").click(function () {
                           
                                $.post('rating.php',{rate:$(this).val()},function(d){
                                    if(d>0)
                                    {
                                        alert('You already rated');
                                    }else{
                                        alert('Thanks For Rating');
                                    }
                                });
                                $(this).attr("checked");
                            });
                        });
                    </script>
                    <fieldset id='demo1' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                    </fieldset>

                    <!-- Demo 1 end -->
                    <br><br><br>
                    
                    <h5>Few More Examples:</h5>
                    <!-- Demo 2 start -->
                    <h1>Demo 2</h1>
                    <script>
                        $(document).ready(function () {
                            $("#demo2 .stars").click(function () {
                                alert($(this).val());
                                $(this).attr("checked");
                            });
                        });
                    </script>
                    <fieldset id='demo2' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="rating" value="4.5" />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating" value="3.5" />
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating" value="2.5" />
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating" value="1.5" />
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating" value="0.5" />
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    <!-- Demo 2 end -->

                    <br><br><br>





                    <!-- Demo 3 start -->
                    <h1>Demo 3</h1>
                    <script>
                        $(document).ready(function () {
                            $("#demo3 .stars").click(function () {

                                var label = $("label[for='" + $(this).attr('id') + "']");
                                
                                $("#feedback").text(label.attr('title'));
                                $(this).attr("checked");
                            });
                        });
                    </script>
                    <fieldset id='demo3' class="rating">
                        <input class="stars" type="radio" id="star53" name="rating" value="5" />
                        <label class = "full" for="star53" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half3" name="rating" value="4.5" />
                        <label class="half" for="star4half3" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star43" name="rating" value="4" />
                        <label class = "full" for="star43" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half3" name="rating" value="3.5" />
                        <label class="half" for="star3half3" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star33" name="rating" value="3" />
                        <label class = "full" for="star33" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half3" name="rating" value="2.5" />
                        <label class="half" for="star2half3" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star23" name="rating" value="2" />
                        <label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half3" name="rating" value="1.5" />
                        <label class="half" for="star1half3" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star13" name="rating" value="1" />
                        <label class = "full" for="star13" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf3" name="rating" value="0.5" />
                        <label class="half" for="starhalf3" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    <div id='feedback'></div>

                    <!-- Demo 3 end -->

<div style='clear:both;'></div>
                </div>

                <div class="cfmonitor" style="width:700px;margin-top:50px;">
                    <div style="width:340px;float:left;">
                        <script async="" src="index_files/adsbygoogle.js"></script>
                        <!-- 336x280 -->
                        <ins data-adsbygoogle-status="done" class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-2074772727795809" data-ad-slot="3475973578"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"><ins id="aswift_1_anchor" style="display:block;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"></ins></ins></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div style="width:340px;float:left;">
                        <script async="" src="index_files/adsbygoogle.js"></script>
                        <!-- 336x280 -->
                        <ins data-adsbygoogle-status="done" class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-2074772727795809" data-ad-slot="3475973578"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"><ins id="aswift_2_anchor" style="display:block;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"></ins></ins></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                    </div>
                </div>




            </div>
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-43091346-1', 'devzone.co.in');
                ga('send', 'pageview');

            </script></div>


    </body></html>