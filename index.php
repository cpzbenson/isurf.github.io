<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:image" content="http://isurf.talkin.cc/images/firstBG.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:description" content="Life Is Better When You Surf">
	<title>iSurf</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/ripples.min.css" rel="stylesheet">
	<link href="css/material-wfont.min.css" rel="stylesheet">
	<link href="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-41598623-1', 'talkin.cc');
		ga('send', 'pageview');
	</script>

</head>

<body data-spy="scroll" data-target=".navbar-example">
	<nav id="nav_container" class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="logo" href="./">iSurf</a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar-example" id="bs-example-navbar-collapse-1"> 
	      <ul class="nav navbar-nav" id="narbar_list" style="float: right;">
		      <li class="active">
		        <a id="drop4" href="#weather" >
		        	天氣
		        </a>
		      </li>
		      <li><a href="#wave">
		      	浪況
		      </a></li>
		      <li><a href="#road">
		      	路況
			  </a></li>
			  <li><a href="#checklist">
		      	必帶物品
			  </a></li>
		      <li><a href="#spot">
		      	浪點
			  </a></li>
		      <li><a href="#gogogo">
		      	GO !
			  </a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	</nav>
	
	<div id="weather" style="//background-position: 50% -320px;">
		<div class="story" style="margin: 20px auto 0px auto; overflow-x: hidden">
	    	<div style="padding: 130px 0 0 0;">
	    		<div style="width: 60%;">
	    			<iframe id="forecast_embed" type="text/html" frameborder="0" height="250px" width="700px" src="http://forecast.io/embed/#lat=24.9297269&lon=121.8884853&color=#404040&name=蜜月灣&units=uk"> </iframe>
	    			<!--
		            <iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="700px" style="margin-top: -40px;" src="http://forecast.io/embed/#lat=24.888775&lon=121.849183&color=#404040&name=宜蘭烏石&units=uk"> </iframe>-->
		        </div>

		        <div style="text-align: left;">
		        	<div class="fb-like" data-href="http://isurf.talkin.cc/" data-send="false" data-width="250" data-show-faces="true" data-font="arial"></div>
		        </div>

		        <div style="position: relative; top: -70px; left: 630px;">
		        	<a style="color: white" href="http://goo.gl/fZhE15" target="_blank">宜蘭天氣</a>&nbsp;&nbsp;
		        	<a style="color: white" href="http://www.cwb.gov.tw/V7/observe/rainfall/Plot/plotChart_All2.php?stid=C1U58&xid=16" target="_blank">24H 雨量</a>
		        </div>
		        <!--
		        <div style="margin: 150px 0px 0px 250px; ">
		        	<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="700px" style="margin-top: 0px;" src="http://forecast.io/embed/#lat=21.946034&lon=120.794831&color=#404040&name=墾丁&units=uk"> </iframe>
		        </div>
		    	-->
	        </div>
	    </div> <!--.story-->
        <div class="slogan">	
    		<div style="font-size: 100px;line-height: 80px;">LIFE</div>
        	<div style="font-size: 58px;line-height: 26px; margin-top: 30px;font-weight: 100;">is better</div> 
        	<div style="font-size: 48px;font-weight: 100;">when</div> 
        	<div style="font-size: 75px; color: orange">iSURF</div>
        </div>
	</div> <!--#weather-->
	
	<div id="wave">
		<div class="story">
			<div style="margin-top: 200px; float:right; text-align: right;" class="margin_adjust">
				<div>
					<div class="page_title wow slideInRight" style="float: right">
	    				<i class="fa fa-certificate fa-4"></i>
						浪況
					</div>
				</div>
        		<img class="img-polaroid wow slideInLeft" style="opacity: 0.9;" src="http://www.imocwx.com/cwm/cwm_ljp.gif">
			</div>
	    </div> <!--.story-->
	    
	</div> <!--#wave-->
	
	<div id="road">
		<div class="story">
			<div style="margin-top: 100px; float:left; text-align: left;" class="margin_adjust">
				<div>
					<div class="page_title wow slideInLeft" style="float: left">
	    				<i class="fa fa-random fa-4"></i>
	    				路況
	    			</div>
				</div>
        		<img class="img-polaroid wow slideInRight" style="opacity: 0.9;" src="http://210.241.131.249/m2/map_public/map_n_3_<?php echo intval(date('i'));?>.jpg">
			</div>
	    </div> <!--.story-->
	    
	</div> <!--#wave-->

	<div id="checklist">
		<div class="story">
	    	<div class="margin_adjust">
	    		<div class="page_title wow slideInLeft">
	    			<i class="fa fa-check-square fa-4"></i>
	    			必帶物品
	    		</div>
	    		<div style="background: rgba(49,49,49,0.55); padding-left: 15px; border-radius: 4px;" class=" wow slideInDown">
	    			<div class="btn btn-warning" style=" margin: 20px; width: 300px; float: right; font-size: 16px;">
				    	衝浪租版一日約 500 元 (不含午餐)		
				    </div>
	    			<label class="checkItem"><input type="checkbox">手機</label> 
					<label class="checkItem"><input type="checkbox">錢包</label> 
					<label class="checkItem"><input type="checkbox">鑰匙</label> <br>

					<label class="checkItem"><input type="checkbox">海灘褲</label> 
					<label class="checkItem"><input type="checkbox">拖鞋</label> 
					<label class="checkItem"><input type="checkbox">外套 or 長袖</label> <br>

					<label class="checkItem"><input type="checkbox">一套換洗衣服</label> <br>

					<label class="checkItem"><input type="checkbox">毛巾 ( 2-3 條, 有些剛上岸用會有沙子，有些洗完澡用 ), 有浴巾最好</label> <br>

					<label class="checkItem"><input type="checkbox">海灘褲裡面建議穿泳褲或內褲</label>
					<label class="checkItem"><input type="checkbox">裝濕海灘褲的袋子</label> <br>

					<label class="checkItem"><input type="checkbox">衛生紙</label> 
					<label class="checkItem"><input type="checkbox">帽子</label> <br>

					<label class="checkItem"><input type="checkbox">洗面乳</label> 
					<label class="checkItem"><input type="checkbox">洗髮乳</label> 
					<label class="checkItem"><input type="checkbox">沐浴乳</label> 
					<label class="checkItem"><input type="checkbox">飲用水</label> 
					<label class="checkItem"><input type="checkbox">傘</label> 
					<label class="checkItem"><input type="checkbox">防曬</label>  <br>

					<label class="checkItem"><input type="checkbox">凡士林</label> 
					<label class="checkItem"><input type="checkbox">小護士</label>
					<label class="checkItem"><input type="checkbox">防磨衣</label> 
					<label class="checkItem"><input type="checkbox">隱形眼鏡</label> 
					<label class="checkItem"><input type="checkbox">墨鏡</label>
	    		</div>

	    		<br>
	        </div>
	    </div> <!--.story-->
	</div> <!--#checklist-->

	<div id="spot">
		<div class="story">
			<div style="float:right; text-align: right;" class="margin_adjust">
				<div>
					<div class="page_title wow slideInRight" style="float:right; ">
	    				<i class="fa fa-info-circle fa-4"></i>
						宜蘭浪點
					</div>
				</div>
				<iframe class="img-polaroid wow slideInLeft" width="555" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.tw/maps/ms?ie=UTF8&amp;t=m&amp;brcurrent=3,0x3467e03d6b232f5b:0xcfbb529e13d307ac,1&amp;oe=UTF8&amp;msa=0&amp;z=13&amp;msid=217329065639747565370.0004d07476b8e14755836&amp;ll=24.899226,121.86315&amp;spn=0.364837,0.150853&amp;output=embed"></iframe>
			</div>
	    </div> <!--.story-->
	</div> <!--#spot-->

	<div id="gogogo">
		<div class="story" style="height: 640px; overflow: hidden"> 
			<div style="text-align: center; overflow: hidden" class=" wow lightSpeedIn">
				<div class="page_title" style="margin-left: 410px;">
					<i class="fa fa-hand-o-up fa-4"></i>
					GO!
				</div>
				<!--<video src="http://cpz.talkin.cc/isurf/film/140906_imovie.mp4"></video>-->
				<div id="player" class="wow slideInDown"></div>

				<div style="text-align: right; color: white; font-family: cursive; font-size: 30px; letter-spacing: 6px;margin-top: 10px;">- surfing is a lifestyle.</div>
			</div>	
	    </div> <!--.story-->
	    <div style="text-align: center;background-color: rgba(0, 0, 0, 0.6);padding: 30px; text-align: center; font-size: 20px;">
	    	應該可以有更多功能 <br>
	    	<a class="btn btn-warning" style="margin-top: 10px; font-size: 20px; font-size: 14px;" id="tellmemore">告訴我吧</a>
	    </div>
	</div> <!--#gogogo-->
	
	<div id="advice" style="color: black; text-align: left; width: 470px; margin: 50px auto; display: none">
		<div class="page_title" style="text-align: center; margin-left: 130px;">
			<i class="fa fa-lightbulb-o fa-4"></i>
			小建議
		</div>
		<div class="ss-form">
			<form action="https://docs.google.com/forms/d/1z4bZ41BYvRQzt5-EbI0X1sdYuOxoRDdN9UpWwvXT_00/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""><div role="list">
				<div class="ss-form-question errorbox-good" role="listitem">
				<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_1232023541"><div class="ss-q-title">姓名
				<label for="itemView.getDomIdToLabel()" aria-label="(必填欄位)"></label>
				<span class="ss-required-asterisk">*</span></div>
				<div class="ss-q-help ss-secondary-text" dir="ltr">不用留全名，讓我知道怎麼稱呼您就好了</div></label><br/>
				<input placeholder="王小明" type="text" name="entry.1232023541" value="" class="ss-q-short" id="entry_1232023541" dir="auto" aria-label="姓名 不用留全名，讓我知道怎麼稱呼您就好了 " aria-required="true" required="" title="">
				<div class="error-message"></div>
				<div class="required-message">這是必填問題</div>
				</div></div></div> <br/>
				<div class="ss-form-question errorbox-good" role="listitem">
				<div dir="ltr" class="ss-item  ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_1316758342"><div class="ss-q-title">email
				</div>
				<div class="ss-q-help ss-secondary-text" dir="ltr">或許讓我之後方便聯絡您</div></label>
				<input placeholder="gogogo@surf.com" type="text" name="entry.1316758342" value="" class="ss-q-short" id="entry_1316758342" dir="auto" aria-label="email 或許讓我之後方便聯絡您 " title="">
				<div class="error-message"></div>
				</div></div></div> <br/>

				<div class="ss-form-question errorbox-good" role="listitem">
				<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_402110243"><div class="ss-q-title">對網站建議
				<label for="itemView.getDomIdToLabel()" aria-label="(必填欄位)"></label>
				<span class="ss-required-asterisk">*</span></div>
				<div class="ss-q-help ss-secondary-text" dir="ltr">不管什麼樣建議，你覺得 iSurf 應該可以有，都很歡迎告訴我<br>只要時間允許，我們盡力做出來的，感謝您的支持與鼓勵</div></label>
				<textarea placeholder="我覺得..." name="entry.402110243" rows="8" cols="73" class="ss-q-long" id="entry_402110243" dir="auto" aria-label="對網站建議 不管什麼樣建議，你覺得 iSurf 應該可以有，都很歡迎告訴我，若時間允許，我們盡力做出來的 " aria-required="true" required=""></textarea>
				<div class="error-message"></div>
				<div class="required-message">這是必填問題</div>

				</div></div></div>
				<input type="hidden" name="draftResponse" value="[,,&quot;7888758349037541671&quot;]
				">
				<input type="hidden" name="pageHistory" value="0">
				<input type="hidden" name="fromEmail" value="false">

				<input type="hidden" name="fbzx" value="7888758349037541671">

				<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
				<input type="submit" name="submit" value="提交" id="ss-submit">
				</td>
				</tr></tbody></table></div></div></form>
		</div>
	</div>	

	<div id="footer">
		<a href="mailto:benson@talkin.cc">Benson Chen</a> production © 2014 <a target="_blank" href="http://inc.talkin.cc">Talkin</a> 歡迎任何形式合作
	</div>


	<!--<link rel="stylesheet" media='screen and (min-width: 701px)' href="http://mynameismatthieu.com/WOW/css/libs/animate.css">-->
	<script media='screen and (min-width: 701px)' src="http://mynameismatthieu.com/WOW/dist/wow.min.js"></script>

	<script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
	<script src="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
	<script> 
	 new WOW().init();
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function(){
			$(".slogan").addClass("slogan_aftTrans");
		}, 3000);
		
		$( "input[type=checkbox]" ).on( "click", function(){
			if($(this).is(":checked")){
				$(this).parent().css("color", "gray");
			}else{
				$(this).parent().css("color", "");
			}					
		});
		$("#tellmemore").click(function(){
			$("#advice").slideDown();
			$("body").animate({ scrollTop: $(document).height() }, "slow");
		});

		$("ul.nav li a[href^='#']").on('click', function(e) {
		   	var hash = this.hash;
		   	$('html, body').animate({
		    	scrollTop: $(this.hash).offset().top
		    }, 500);
			return false;
		});
	})
	</script>
	<script>
		$(function() {
            $.material.init();
            $(".slider").noUiSlider({
                start: 40,
                connect: "lower",
                range: {
                    min: 0,
                    max: 100
                }
            });
        });
	</script>
	<script>
	var tag = document.createElement('script');
	tag.src = "http://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	// 3. This function creates an <iframe> (and YouTube player)
	//    after the API code downloads.
	var player;
	function onYouTubePlayerAPIReady() {
	    player = new YT.Player('player', {
	        height: '500',
	        width: '837',
	        videoId: 'jEW0v6xvcKc',
	        events: {
		        'onReady': onPlayerReady
		    }
	    });
	    function onPlayerReady(event) {
		    event.target.setPlaybackQuality('hd1080');
		}
	}
	var ytPlayed = false;
	$(window).scroll(function(){
		if($('body').scrollTop()>100){
			$("#nav_container").addClass("nav_container_aft_scrl");
		}else if($('body').scrollTop()<100){
			$("#nav_container").removeClass("nav_container_aft_scrl");
		}

		if($('body').scrollTop()>3000 && ytPlayed == false){
        	//player.playVideo();
        	ytPlayed = true;
        }
	});
	</script>
</body>
</html>
