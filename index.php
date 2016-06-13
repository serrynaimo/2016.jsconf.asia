<?php
  date_default_timezone_set('Asia/Singapore');
?>
<!doctype html>
<!--

  

//-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title>JSConf.Asia Singapore 2016</title>
	<link href='//fonts.googleapis.com/css?family=Doppio+One|Open+Sans:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	<link rel="stylesheet" type="text/css" href="css/colours.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500, user-scalable=no" />
	<?php } ?>
	<meta property="og:title" content="JSConf.Asia - 25+26 Nov 2016, Singapore"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="//2016.jsconf.asia/"/>
	<meta property="og:image" content="//2016.jsconf.asia/assets/og_jsconfasia.png"/>
	<meta property="og:site_name" content="JSConf.Asia"/>
	<meta property="og:description" content="5 years of Southeast Asia's largest web developer conference. Spread the word. Follow us on Twitter @jsconfasia"/>
	<meta name="title" content="JSConf.Asia - 25+26 Nov 2016, Singapore"/>
	<meta name="description" content="5 years of Southeast Asia's largest web developer conference. Spread the word. Follow us on Twitter @jsconfasia"/>
</head>
<body>
  <section id="intro"></section>

  <section id="body">

    <section id="about">
      <p>
        5 years of Southeast Asia's largest web developer conference.
      </p>
      <div>
        <a href="https://jsconfasia.wufoo.com/forms/cssconf-and-jsconfasia" class="button">Submit your talk proposal</a><br/>
        <!-- <a href="https://www.youtube.com/playlist?list=PL37ZVnwpeshGpDJn60AwbJ6xegSHe_cDh" class="hint">Watch our videos</a> -->
      </div>
    </section>

    <form id="subscribeForm" action="https://2012.jsconfasia.com/addsubscriber.php" method="get">
      <div class="input"><span><input type="text" name="fname" placeholder="Enter your first name and" /><input type="email" name="email" placeholder="email address for updates" /><input type="submit" value="Subscribe" /></span></div>
      <div class="msg"><span></span></div>
    </form>

  </section>


<section id="footer">
    <p>
      <a href="https://2016.devfest.asia"><img src="./img/devfest2016.png" height="100" alt="Singapore DevFest.Asia 2016"/></a>
    </p>
    <p>
      <br/>
      JSConf.Asia 2016 Singapore is part of DevFest.Asia,<br/>Asia’s community organized web developer festival.<br/><br/><br/><br/>
      Check out our past conferences:<br/><a href="https://2015.jsconf.asia" target="_blank">2015</a>
       - <a href="https://2014.jsconf.asia" target="_blank">2014</a>
       - <a href="https://2013.jsconf.asia" target="_blank">2013</a>
       - <a href="https://2012.jsconf.asia" target="_blank">2012</a><br/><br/>

      <a href="http://jsconf.com">JSConf around the world</a><br/><br/>
      <br/><br/><br/>
      A Nerdherd Pte. Ltd. event<br/><br/>
      <a href="https://2015.devfest.asia/terms-and-conditions.html">Terms &amp; Conditions</a><br/>
      <a href="https://2015.devfest.asia/code-of-conduct.html">Code of Conduct</a>
    </p>
  </section>


  <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
  <script type="text/javascript">window.jQuery || document.write('<script src="./js/jquery.min.js">\x3C/script>')</script>
  <script type="text/javascript" src="./js/jquery.form.min.js"></script>
  <script src="./js/app.js"></script>

  <script src="./js/three.min.js"></script>

  <script src="./js/TextGeometry.js"></script>
  <script src="./js/FontUtils.js"></script>
  <script src="./js/regular.typeface.js"></script>
  <script src="./js/animation.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-31025490-9', 'auto');
    ga('send', 'pageview');


   // CountDownTimer('Wed, 20 Jun 2016 14:00:00 +0800', 'countdown');

    function CountDownTimer(dt, id)
    {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var start = new Date('<?php echo date("r"); ?>');
        var startjs = new Date();
        var diff = startjs - start;
        var timer;

        function showRemaining() {
            var now = new Date();
            var passed = now - startjs;
            var distance = end - start - passed;
            if (distance < 0) {

                clearInterval(timer);
                document.getElementById(id).innerHTML = '';

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = days * 24 + Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

          if(seconds < 10)
            seconds = "0" + seconds;

          if(minutes < 10)
            minutes = "0" + minutes;

            document.getElementById(id).innerHTML = hours + ':';
            document.getElementById(id).innerHTML += minutes + ':';
            document.getElementById(id).innerHTML += seconds;
        }

        timer = setInterval(showRemaining, 1000);
    }

  </script>
</body>
</html>
