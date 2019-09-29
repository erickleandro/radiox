<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="webthemez.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') }}</title>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/flexslider.css">
<link rel="stylesheet" href="/assets/css/jquery.fancybox.css">
<link rel="stylesheet" href="/assets/css/main.css"> 
<link href="/assets/jPlayer-2.9.2/dist/skin/pink.flag/css/jplayer.pink.flag.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/assets/css/responsive.css">
<link rel="stylesheet" href="/assets/css/font-icon.css">
<link rel="stylesheet" href="/assets/css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner" id="banner">
  <header id="header">
    <div class="header-content clearfix">
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		  <li><a href="#banner">Início</a></li>
          <li><a href="#services">Programas</a></li>
          <li><a href="#Playlist">Playlist</a></li>
          <li><a href="#package">Mural de recados</a></li>
		      <li><a href="#gallery">Galeria</a></li>
          <li><a href="#tours">Eventos</a></li>
          <li><a href="#teams">Nossa equipe</a></li> 
          <li><a href="#contact">Escrever no mural</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10">
      <div class="banner-text text-center">
        <h1>{{ config('app.name') }}</h1>
        <p>Ouça nossa rádio</p>
		<div><strong>102.3 FM</strong></div>
		</div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 

<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated">Nossos programas</h2>
                <p class="wow fadeInDown animated">Confira a nossa programação</p>
            </div>
    <div class="row"> 
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-recycle"></span>
        <div class="services-content">
          <h5>Albuns de fotos</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
        <div class="services-content">
          <h5>MUSIC PLAYLIST</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div> 
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
        <div class="services-content">
          <h5>GALLERY</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div> 
    </div>
  </div>
</section>
<!-- services section --> 

<section id="Playlist" class="playlistList">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Playlist</h2>
                <p class="wow fadeInDown animated">As tops da rádio</p>
            </div>
    <div class="row">  
         <div id="jquery_jplayer_2" class="jp-jplayer"></div>
<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface">
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-controls-holder">
				<div class="jp-controls">
					<button class="jp-previous" role="button" tabindex="0">previous</button>
					<button class="jp-play" role="button" tabindex="0">play</button>
					<button class="jp-stop" role="button" tabindex="0">stop</button>
					<button class="jp-next" role="button" tabindex="0">next</button>
				</div>
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				<div class="jp-toggles">
					<button class="jp-repeat" role="button" tabindex="0">repeat</button>
					<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
				</div>
			</div>
		</div>
		<div class="jp-playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>	
	 </div>
</section>	 
<!-- package section -->
<section id="package" class="packageList">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Mural de recados</h2>
                <p class="wow fadeInDown animated">Veja o que as pessoas estão dizendo</p>
            </div>
    <div class="row">  
            <div class="col-md-6">
            
            	<div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                	<h5>Earth Alive</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>38</strong>
                </div><!-- end package -->
                
                <div class="package wow fadeInLeft animated" data-wow-offset="200" data-wow-delay="300m">
                	<h5>Light Blue</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>75</strong>
                </div><!-- end package -->
                
                <div class="package no-border wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m" >
                	<h5>Rock n Roll</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>46</strong>
                </div><!-- end package -->
                
            </div><!-- end col-md-6 -->
            <div class="col-md-6">
            
            	<div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="500m" >
                	<h5>Love Life</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>15</strong>
                </div><!-- end package -->
                
                <div class="package wow fadeInRight animated" data-wow-offset="200" data-wow-delay="600m">
                	<h5>Back Street</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>84</strong>
                </div><!-- end package -->
                
                <div class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
                	<h5>Golden Days</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>95</strong>
                </div><!-- end package -->
                
            </div><!-- end col-md-6 -->
        </div><!-- end row -->    
  </div>
</section>
<!-- package section --> 

<!-- gallery section -->
<section id="gallery" class="gallery section">
  <div class="container-fluid">
    <div class="section-header">
                <h2 class="wow fadeInDown animated">Galeria de fotos</h2>
                <p class="wow fadeInDown animated">Veja o que aconteceu</p>
            </div>
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/01.jpg" class="work-box"> <img src="/assets/images/portfolio/01.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/02.jpg" class="work-box"> <img src="/assets/images/portfolio/02.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/03.jpg" class="work-box"> <img src="/assets/images/portfolio/03.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/04.jpg" class="work-box"> <img src="/assets/images/portfolio/04.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption"> 
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/05.jpg" class="work-box"> <img src="/assets/images/portfolio/05.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/06.jpg" class="work-box"> <img src="/assets/images/portfolio/06.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/07.jpg" class="work-box"> <img src="/assets/images/portfolio/07.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/08.jpg" class="work-box"> <img src="/assets/images/portfolio/08.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- gallery section --> 

<!-- our team section -->
<section id="tours" class="section teams"> 
	<div class="container">
	    <div class="section-header">
                <h2 class="wow fadeInDown animated">Eventos</h2>
                <p class="wow fadeInDown animated">Veja o que vai acontecer na cidade</p>
            </div>
		<div class="row">
			<div class="col-md-6">
				<img src="/assets/images/pic2.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6">
				<div class="col-md-11">
					<h3>Our Tours</h3>
					<ul class="tour-list">
						<li>
							<div class="tour-date">16<span>Feb<br><em>2016</em></span></div>
							<div class="tour-info">NewYork, US - <a href="#">Music Area</a></div>
							<div class="tour-ticket"><a href="#">Buy Ticket</a></div>
						</li>
						<li>
							<div class="tour-date">22<span>Mar<br><em>2016</em></span></div>
							<div class="tour-info">Delhi, Ind - <a href="#">Open Theater</a></div>
							<div class="tour-ticket"><a href="#">Buy Ticket</a></div>
						</li>
						<li>
							<div class="tour-date">12<span>April<br><em>2016</em></span></div>
							<div class="tour-info">Texas, US - <a href="#">Eden Gardens</a></div>
							<div class="tour-ticket"><a href="#">Buy Ticket</a></div>
						</li>
						<li>
							<div class="tour-date">26<span>April<br><em>2016</em></span></div>
							<div class="tour-info">England, UK - <a href="#">BNK Stadium</a></div>
							<div class="tour-ticket"><a href="#">Buy Ticket</a></div>
						</li>
						<li>
							<div class="tour-date">10<span>June<br><em>2016</em></span></div>
							<div class="tour-info">Tokiyo, Japan - <a href="#">KMT Grounds</a></div>
							<div class="tour-ticket"><a href="#">Buy Ticket</a></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
 </section>

<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Nossa equipe</h2>
                <p class="wow fadeInDown animated">Veja quem faz parte da rádio</p>
            </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="/assets/images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Jonh Dow</h4>
            <h5 class="role">Founder</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="/assets/images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Markus Linn</h4>
            <h5 class="role">Music</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="/assets/images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Chris Jemes</h4>
            <h5 class="role">Singer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="/assets/images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Vintes Mars</h4>
            <h5 class="role">Singler</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Mural de recados</h2>
                <p class="wow fadeInDown animated">Deixe sua mensagem</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">       
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Seu nome..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="E-mail (opcional)" >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Mensagem..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Enviar">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 
<!-- Footer section -->
<footer class="footer">
<div class="container-fluid">
<div id="map-row" class="row">
    <div class="col-xs-12">    
    	<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe> 
      
          <div id="map-overlay" class="col-xs-5 col-xs-offset-6" style="">
    		<h2 style="margin-top:0;color:#fff;">Entre em contato</h2>
    		<address style="color:#fff;">
    			<strong>Company name</strong><br>
    			1234 Street Dr.<br>
    			Vancouver, BC<br>
    			Canada<br>
    			V6G 1G9<br>
    			<abbr title="Phone">Tel:</abbr> (604) 555-4321
    		</address>
			  © 2018 Company Name. <br/>A <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Theme</a> by <a target="_blank" href="http://webthemez.com/" title="Bootstrap Themes">WebThemez.com</a>
    	</div>
    </div>
	 </div>
</div>
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="/assets/js/bootstrap.min.js"></script> 
<script src="/assets/js/jquery.flexslider-min.js"></script> 
<script src="/assets/js/jquery.fancybox.pack.js"></script> 
<script src="/assets/js/retina.min.js"></script> 
<script src="/assets/js/modernizr.js"></script> 
<script src="/assets/js/main.js"></script> 
<script type="text/javascript" src="/assets/js/jquery.contact.js"></script> 

<script type="text/javascript" src="/assets/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/assets/jPlayer-2.9.2/dist/add-on/jplayer.playlist.min.js"></script> 
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
 
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_2",
		cssSelectorAncestor: "#jp_container_2"
	}, [
		{
			title:"Cro Magnon Man",
			mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
			oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
		},
		{
			title:"Your Face",
			mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
			oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
		},
		{
			title:"Cyber Sonnet",
			mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
			oga:"http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
		},
		{
			title:"Tempered Song",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
		},
		{
			title:"Hidden",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"
		},
		{
			title:"Lentement",
			free:true,
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg"
		},
		{
			title:"Lismore",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
		},
		{
			title:"The Separation",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg"
		},
		{
			title:"Beside Me",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-06-Beside-me.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-06-Beside-me.ogg"
		},
		{
			title:"Bubble",
			free:true,
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
		},
		{
			title:"Stirring of a Fool",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-08-Stirring-of-a-fool.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-08-Stirring-of-a-fool.ogg"
		},
		{
			title:"Partir",
			free: true,
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg"
		},
		{
			title:"Thin Ice",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-10-Thin-ice.ogg"
		}
	], {
		swfPath: "../../dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
});
//]]>
</script>
</body>
</html>