<?php
  date_default_timezone_set('Asia/Singapore');
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title>JSConf.Asia Singapore 2016</title>
	<link href='//fonts.googleapis.com/css?family=Doppio+One|Open+Sans:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/app3.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500,max-width=500" />
	<?php } ?>
	<meta property="og:title" content="JSConf.Asia - 25+26 Nov 2016, Singapore"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://2016.jsconf.asia/"/>
	<meta property="og:image" content="https://2016.jsconf.asia/assets/og_jsconfasia.png"/>
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
        <span style="color: #fff">5 years of Southeast Asia's largest web developer conference</span>
        <br/><br/>
        JSConf.Asia starts<br/>
        <span id="countdown"></span>
      </p>
      <div>
        <a href="https://www.eventnook.com/event/devfestasia2016/home" class="button">Get your tickets</a>
      </div>

      <p>
        Sponsored by<br/><br/>
        <a href="https://www.sc.com/technology/" target="_blank"><img src='img/scb.svg' alt='Standard Chartered Bank' style='margin: 0 auto; width: 200px;'/></a>
      </p>
    </section>


    <section id="speakers" class="thursday">
      <div class="day thursday">
          <h4>Friday 25th</h4>
          <div class="speaker break open">
            <span>8 AM</span>
            <h3>Registration</h3>
            <h4>Capitol Theatre at 11 Stamford Rd</h4>
            <p>Please bring your order confirmation PDF with the QR code and a photo ID 🙏</p>
          </div>
          <div class="speaker break">
            <span>9 AM</span>
            <h3>Opening</h3>

          </div>
          <div class="speaker">
            <span>9:15 AM</span>
            <img src="img/chengzhao.jpg" />
            <h3>Electron - A Community Story</h3>
            <h4>Cheng Zhao, Github <a href="https://twitter.com/zcbenz" target="_blank">@zcbenz</a></h4>
            <p>
              I will share how Electron managed to attract users and contributors through the shear power of community, from the early days with just one user to now with a new app everyday.
            </p>
            <p>
              Cheng is working at GitHub developing the Electron framework.
            </p>
          </div>
          <div class="speaker">
            <span>9:45 AM</span>
            <img src="img/kelsey.jpg" />
            <h3>How To Talk To Hardware</h3>
            <h4>Kelsey Bresemann, Tessel <a href="https://twitter.com/SelkeyMoonbeam" target="_blank">@SelkeyMoonbeam</a></h4>
            <p>
              I'll introduce hardware communication as a how-to-walkthrough from digital signals up to a practical application through a series of code and signal demonstrations. This talk is aimed at web developers seeking to learn more about how to connect miscellaneous sensors to microcontrollers. No hardware experience is required.
            </p>
            <p>
              Kelsey is an engineer and Steering Committee member of the Tessel Project —an open source organization whose aim is to empower web developers to enter the connected-devices space.<br/>
              Previously, Kelsey has been involved in developing consumer drones, research on sleep and temperature, implantable vision devices, and devices for lung cancer diagnosis.<br/>
              She has a degree in neural engineering, and is interested in prosthetics, speculative fiction, circus arts, and really long walks.
            </p>
          </div>
          <div class="speaker break">
              <span>10:15 AM</span>
              <h3>C<sub>8</sub> H<sub>10</sub> N<sub>4</sub> O<sub>2</sub> by Braintree</h3>
          </div>
          <div class="speaker">
            <span>10:45 AM</span>
            <img src="img/kenneth.jpg" />
            <h3>DevTools Of The Future</h3>
            <h4>Kenneth Auchenberg, Microsoft <a href="https://twitter.com/auchenberg" target="_blank">@auchenberg</a></h4>
            <p>
              The web has gained the capabilities to offer app-like experience, and with the recent additions the web is ready to replace many native apps. What does that mean for our developer tools? In this talk I‘ll share Microsoft‘s view on web tooling and what we do to make building for the web easier and more productive, regardless of the platform.
            </p>
            <p>
              Kenneth is a Program Manager, focused on DevTools and Remote Debugging at Microsoft, and is obsessed with tooling.<br/>
              He started the RemoteDebug initiative to unify remote debugging and lives in Vancouver, Canada and is the organizer of the ColdFront Conference in Copenhagen, Denmark. <br/>
              Kenneth blogs occasionally at kenneth.io, and tweets as @auchenberg
            </p>
          </div>
          <div class="speaker">
            <span>11:15 AM</span>
            <img src="img/chengxili.jpg" />
            <h3>Bootstrapping A Live Streaming React Web App</h3>
            <h4>Chengxi Li, Tencent</h4>
            <p>
                Nowadays, live streaming is an essential feature of an internet product. There are tons of examples that show when live streaming can enrich a product: Super-stars connecting with fans, professors broadcasting vivid live courses and live video shopping experiences. <br/>
                In this talk, I‘m going to use React, a component based framework which makes it easy to build and maintain the bricks and blocks for a live streaming web-app. He'll dive into performance optimizations and how you can migrate your product to offer similar functionality and keep up with this trend.
            </p>
            <p>
              Lee is part of the AlloyTeam at Tencent, China. He is working on bootstrapping a live video web-app with React and HLS in order to win over market-share for their product in China.</p>
            </p>
          </div>
          <div class="speaker break">
              <span>11:45 AM</span>
              <h3>Highly distributed lunch</h3>
          </div>
          <div class="speaker">
            <span>1:15 PM</span>
            <img src="img/simon.jpg" />
            <h3>Rats Of The Maze</h3>
            <h4>Simon Swain <a href="https://twitter.com/simon_swain" target="_blank">@simon_swain</a></h4>
            <p>
              The year is 2048. Thirty years ago, we outsourced the very runnings of our lives to machines.
              Machines that learn... The machines learnt... too well...
            </p>
            <p>
              Simon is an institution at JSConf.Asia by now and has blown away our audiences in the past 3 years with gripping stories and mesmerizing visual effects in the browser. He has been building the web since the beginning, somehow surviving through it's many iterations.<br/>
              Currently he is building cloud services for connected devices.
            </p>
          </div>
          <div class="speaker">
            <span>1:45 PM</span>
            <img src="img/vito.jpg" />
            <h3>Automate Your Electronic Life With The JS Ecosystem</h3>
            <h4>Vito Chin <a href="https://twitter.com/vitoc" target="_blank">@vitoc</a></h4>
            <p>
                Bots and machine learning are all the rave these days. But does it feel like we’re being force-fed pre-packaged AI that we do not have much autonomy over? The greatest potential in leveraging computer-based automation for the individual should be one that we can teach to serve the need of its personal owner. Sometimes, we may need robots that drives for us less than an automated process that helps us with the increasing chores that we do online, repetitively and sometimes seemingly futile. For example, how many times had you wondered if the computer can just download the CSV of your bank statement for you (in the absence of proper APIs), process it and augment it to your ledger automatically? Or the times where you wish there could be an easier way to tell the computer to do something on bash than to issue a command with 5 parameters? Javascript has all the answer for you, with tools such as Nightmare.JS to automate browser-based activities, CLI frameworks such as Vorpal and of course the biggest collection of packages in the world that is npm. The trick to continuous harmony is to find something that can gel all of these cool Javascript tech together and run itself as a continuous concern, essentially becoming a simpler computer-based version of yourself, augmented. In this quick talk, I will share my little adventure and experiment trying to automate the boring bits of my electronic life with such a JavaScript tool called Jodot.
            </p>
            <p>
              Vito had been looking for that special something that can maximise his code and family time for quite some number of years. Recently, he believe he might just had found it within the asynchronous nature of JavaScript and npm. That aside, he’s into cloud and software development stuffs. He co-authored PHP Development in the Cloud and maintains Gmagick (pecl.php.net/gmagick)
            </p>
          </div>
          <div class="speaker">
            <span>2 PM</span>
            <img src="img/jan.jpg" />
            <h3>Run Your JS App For Years On A Coin Cell</h3>
            <h4>Jan Jongboom, ARM <a href="https://twitter.com/janjongboom" target="_blank">@janjongboom</a></h4>
            <p>
              In the past years we have seen a number of initiatives to bring JavaScript to Internet of Things devices. The idea seems great: one language for both device, server and the web application. But IoT devices are a different beast... They have to run for years on a battery, have rock-solid security and networking stacks built in, and there needs to be a story to go from development board to production. We have seen various approaches: from running node.js on an embedded Linux box, to cross-compiling JavaScript to Lua to machine code, to ripping out motherboards out of phones. None of them with much success.<br/>
              If we want JavaScript on IoT devices we need to start thinking small. IoT devices generally run on microcontrollers. Tiny computers, with processing power measured in MHz and RAM measured in kilobytes. What they lack in processing power, they make up in power consumption - they can easily run for years on a coin cell - and in peripherals, some chips have over a hundred Input/Output ports to connect sensors, actuators and radios. And from there, we need to look at a library ecosystem that is already proven on microcontrollers... Well-tested middleware, that has both security and battery consumption as top priorities. <br/>
              In this presentation I‘ll talk about microcontrollers, JavaScript, and tiny beacons; and will probably play with lasers through JavaScript.
            </p>
            <p>
              Jan keeps following JSConf.Asia around. And we're glad he does! He is now working as Developer Evangelist IoT for ARM, and is always on the lookout on how to connect the web with the real world.<br/>
              He loves doing unexpected stuff with sensors, flying drones from the browser, and breaking phones.<br/>
              Before ARM he was a core contributor to Firefox OS, and he wrote hundreds of patches to various open source projects.<br/>He's also a Google Developer Expert for Web technologies.
            </p>
          </div>
          <div class="speaker">
            <span>2:15 PM</span>
            <img src="img/khang.jpg" />
            <h3>Vision - Improve Your Workflow</h3>
            <h4>Khang Hoang, Employment Hero <a href="https://twitter.com/khanght" target="_blank">@khanght</a></h4>
            <p>
              Remember the times when you needed to hardcode an API response because the actual APIs are still to be implemented? Making it impossible to simulate edge cases with the real APIs or the network?
              The wait is over! Khang has created just the tool for those situations.
            </p>
            <p>
              Khang works as React Native developer at Employment Hero by day. He is a JavaScript hacker &amp; open source contributor by night. He organizes the React Native facebook community group for Vietnam.
            </p>
          </div>
          <div class="speaker">
            <span>2:30 PM</span>
            <img src="img/tyson.jpg" />
            <img src="img/hemanth.jpg" />
            <h3>Panel: Application Programmable Interfaces in 2017</h3>
            <h4>
              Tyson Hackwood, Braintree <a href="https://twitter.com/tysonius" target="_blank">@tysonius</a><br/>
              Hemanth HM, Paypal <a href="https://twitter.com/GNUmanth" target="_blank">@GNUmanth</a>
            </h4>
            <p>
              Let’s talk developer programs, standards, scale, SDKs, REST, good and bad practices, documentation, security, and regulation. Let's talk APIs.
            </p>
            <p>
              Tyson has been actively involved in both Online Payments and Mobile
              Payments for 15 Years, with extensive experience working with both
              traditional and next generation businesses. He has worked with many
              of these organisations through his time in Braintree, PayPal and
              Vodafone.<br/>
              He is excited by projects and businesses that are trying to enhance
              ‘mobile’ experiences and drive commerce by using the ‘invisible
              payments’ like Uber, Hotel Quickly, Hailo and many others in the Asia
              region.<br/>
              Currently expanding the Asia footprint of Braintree, is involved with
              expanding access to the traditional payment methods as well as the
              emerging payment technologies. Is an avid mentor and educationalist,
              spending much of his time explaining ‘payments’ and how they can be
              used to grow commerce. Related to this is his love of ‘start-up’ t-
              shirts and stickers.<br/><br/>
              Hemanth ...<br/>
              is a computer polyglot CLI, web and unix philosophy <3'r.<br/>
              works as a Senior software engineer at PayPal Bangalore.<br/>
              blog's about his experiments and experiences in programming.<br/>
              contributes to FOSS via  Github and is a part of the Yeoman, Webpack and many other notable teams.<br/>
              curates  Node Module Of The Week,  JSfeatures.in. Coordinates BangaloreJS meetups.<br/>
              mentors at GeeksKool.<br/>
              is a community leader at DuckDuckGo and<br/>
              is a Google Developer Expert.
            </p>
          </div>
          <div class="speaker break">
              <span>3 PM</span>
              <h3>Refreshments outside</h3>
          </div>
          <div class="speaker">
            <span>4 PM</span>
            <img src="img/marcocecconi.jpg" />
            <h3>High Perf Architecture at Stack Overflow</h3>
            <h4>Marco Cecconi, Stack Overflow<a href="https://twitter.com/sklivvz" target="_blank">@sklivvz</a></h4>
            <p>
              Stack Overflow is a website that helps millions of developers every day. On the other hand, not many developers realize that this site serves them with incredible efficiency. For example, a question and answer page is typically served in 10ms.<br/>
              How do you serve so many requests in so little time while running on 9 web servers? In this new talk, I will explain how this is planned, implemented and measured.
            </p>
            <p>
              Marco is a developer in the core​ Q&amp;A​ team of Stack Overflow since 2013.<br/>
              While not creating bugs and fixing them in a hurry, he enjoys blogging on sklivvz.com, covering computers topics from transistors to tech leadership.<br/>
              He frequently speaks on architecture, engineering and Stack Overflow.
            </p>
          </div>
          <div class="speaker">
            <span>4:30 PM</span>
            <img src="img/cheeaun.jpg" />
            <h3>Bridging Connections</h3>
            <h4>Lim Chee Aun <a href="https://twitter.com/cheeaun" target="_blank">@cheeaun</a></h4>
            <p>
              We always hear about the word "community" all the time, from companies, meetups, and sometimes groups of like-minded people. It has quite a broad meaning yet pretty vague at the same time. I‘ll walk you through my personal experience in defining the true meaning behind all of this.
            </p>
            <p>
              Chee Aun is a Front-End Engineer from Malaysia, and currently based in Singapore.<br/>
              He enjoys working on many side projects, like HackerWeb, Life and BusRouter SG.<br/>
              He also organises KopiJS, a casual social gathering for engineers, designers and makers in Singapore.
            </p>
          </div>
          <div class="speaker break">
              <span>5 PM</span>
              <h3>Break</h3>
          </div>
          <div class="speaker">
            <span>6 PM</span>
            <img src="img/ruthjohn.jpg" />
            <img src="img/martin.jpg" />
            <img src="img/mattmckegg.jpg" />
            <h3>{ Live : JS }</h3>
            <h4>
              <br/><br/><br/>
              Ruth John <a href="https://twitter.com/rumyra" target="_blank">@rumyra</a><br/>
              Martin Schuhfuss <a href="https://twitter.com/usefulthink" target="_blank">@usefulthink</a><br/>
              Matt McKegg <a href="https://twitter.com/mattmckegg" target="_blank">@mattmckegg</a>
            </h4>
            <p>
              Are you ready Asia?! Are you really really ready?! You‘d better be cos it‘s { Live : JS } time!
              We‘re going to bring you JavaScript powered music, visuals *and* interactive lights!
              It‘s been a incredible day of talks, so grab a drink, relax and let Ruth, Martin and Matt entertain you: JavaScript style!
            </p>
            <p>
              Ruth is a web technologist and Google Developer Expert. She likes to educate people about new web technologies and inspire them to try them, coming up with exciting and engaging ways to use them. Her favourite things include interactive audio/visual installations and 80s cartoons, usually at the same time!<br/><br/>
              Martin works as a creative developer at ubilabs in Hamburg, focusing on WebGL, Data-Visualization and interactive website experiences. In his spare time he plays around at the intersection of electronics and JavaScript and loves to connect random things from the physical world into the web.<br/><br/>
              Back for his second time at JSConf.Asia, Matt is a JavaScript hacker and backyard musician from Wellington, New Zealand. He is a lover of all things open and modular and spends most of his time pressing buttons of various shapes, sizes and colours. Sometimes these buttons make sounds.
            </p>
          </div>
      </div>
      <div class="day friday">
              <h4>Saturday 26th</h4>
              <div class="speaker break">
                <span>8 AM</span>
                <h3>The early bird catches Braintree‘s coffee</h3>
              </div>
              <div class="speaker">
                <span>9 AM</span>
                <img src="img/fazli.jpg" />
                <img src="img/eugene.jpg" />
                <h3>GPU.JS - GPU Accelerated JavaScript</h3>
                <h4>
                  Fazli Sapuan<br/>
                  Eugene Cheah
                </h4>
                <p>
                  Run your JS code on the GPU! This project is the result of a fun hackathon story of achieving the impossible in 24 hours.
                  YMMV for your actual performance profit through parallelization.
                </p>
                <p>
                  As a GPU computing and JavaScript enthusiast, Fazli envisioned an easy way to perform GPU inside the browser. Thus, working with a few fellow engineers, gpu.js was created as an online platform that could be used to teach parallel computing concepts to beginners. He is presently working as a software engineer at Garena, and enjoys hacking random stuff together in his free time.<br/><br/>
                  In his free time, Eugene is constantly tinkering around with technology. From GPU.JS coding, reading up HTML5 specifications, experimenting with his own programming language, etc. For fun. In his work time, he runs his own website and mobile applications development company Picoded Pte Ltd that makes apps for others on demand, for profit.
                </p>
              </div>
              <div class="speaker">
                <span>9:30 AM</span>
                <img src="img/fhinkel.jpg" />
                <h3>Performance Profiling for V8</h3>
                <h4>Franziska Hinkelmann, Google <a href="https://twitter.com/fhinkel" target="_blank">@fhinkel</a></h4>
                <p>
                    Do you care about performance? Memory leaks, megamorphic cache misses, garbage collection jank, and deoptimizations can slow your app down. Chrome’s JavaScript engine, V8, ships with its own profiling tools that can identify such problems. We’ll dive deep into the inner workings of V8 to better understand what these terms mean - and how to avoid them. You’ll learn to identify and fix low-level JavaScript performance issues using several V8 developer tools.
                </p>
                <p>
                  Franziska is a software engineer at Google Germany. She works on the Chrome V8 team, focusing on anything related to Node.js.<br/>
                  She regularly teaches Node.js courses at the International Summer University for Women in Informatics and is a former organizer of the PHP User Group Munich.
                </p>
              </div>
              <div class="speaker break">
                <span>10 AM</span>
                <h3>Breakpoint</h3>
              </div>
              <div class="speaker">
                <span>10:30 AM</span>
                <img src="img/jameskyle.jpg" />
                <h3>From Zero To Binary Search Tree</h3>
                <h4>James Kyle, Facebook <a href="https://twitter.com/thejameskyle" target="_blank">@thejameskyle</a></h4>
                <p>
                  We don’t have a whole lot of data structures here in JavaScript world, but there’s a whole world of super useful data structures out there. In this talk we're going to learn all about the fundamental data structures. Hash Tables, Arrays, Stacks, Queues, Linked Lists, and Binary Search Trees, we won’t just learn them, we’re going to build them. When we’re done you’ll be impressing all your friends with your mad structured data skills.
                </p>
                <p>
                  James is an engineer at Facebook as well as a core contributor to projects like Yarn, BabelJS and Lerna. Outside of work James is trying to make computer science more approachable to front-end developers.
                </p>
              </div>
              <div class="speaker">
                <span>11 AM</span>
                <img src="img/lian.jpg" />
                <h3>Applying The Magic Of Neural Networks</h3>
                <h4>Lian Li <a href="https://twitter.com/chimney42" target="_blank">@chimney42</a></h4>
                <p>
                  Have you ever been in a betting pool for your local football league? Then you might know, how exhausting it is, to come up with sensible results for every single game and most of us are not using the scientific method... at all. No need to fret about it anymore! I’ll show you how to write a program that learns to predict football scores with the help of the nodejs library synaptic.
                </p>
                <p>
                  Lian is working as Jack of all trades at the interface between development and support.
                  She completed her apprenticeship as IT specialist in early 2014, after a failed attempt at becoming a lawyer.
                </p>
              </div>
              <div class="speaker break">
                  <span>11:30 AM</span>
                  <h3>npm install food --plenty</h3>
              </div>
              <div class="speaker">
                <span>1 PM</span>
                <img src="img/alexcastillo.jpg" />
                <h3>NeuroJS: Capturing And Visualizing Brainwaves With Angular 2</h3>
                <h4>Alex Castillo, Netflix <a href="https://twitter.com/castillo__io" target="_blank">@castillo__io</a></h4>
                <p>
                    Come and see a demonstration on how to interact with an open-source brain-computer interface via JavaScript. I have been working with the OpenBCI team in order to visualize brainwaves in the browser with Angular 2. Find out how your thoughts are captured and how to get involved in the NeuroTech community.
                </p>
                <p>
                    Alex is a Software Engineer at Netflix and specializes in enterprise single-page applications.<br/>
                    He is very passionate about the human brain and how we can use technology to understand it better.<br/>
                    Alex has contributed to the open source community and focuses on Angular and NeuroTech. In his spare time, he likes experimenting with guitars and IoT.
                </p>
              </div>
              <div class="speaker">
                <span>1:30 PM</span>
                <img src="img/raquel.jpg" />
                <h3>Wombat-Driven Understanding: An Interactive Guide To Using npm</h3>
                <h4>Raquel Veléz, npm <a href="https://twitter.com/rockbot" target="_blank">@rockbot</a></h4>
                <p>
                    So you want to write some software. And you decide to use npm, because everyone’s saying it’s the coolest thing ever. Great!<br/>
                    But... where do you start? And once you’ve started, how do you take advantage of the advanced features?<br/>
                    Let’s write an app together! Whether you’re brand new to using npm or have been using it for years, I guarantee you’ll learn a new trick or two - or at least get a good laugh!
                </p>
                <p>
                  Raquel cares about code and culture at npm, Inc. in Oakland, CA. She has previously worked at institutions such as Caltech, NASA JPL, the MIT Lincoln Laboratory, and various universities in Europe. She is a co-author of the book &quot;Make: JavaScript Robotics.&quot;<br/>
                  In her off time, you can find her baking, teaching NodeBots not to fall off of tables, and speaking. ... also, hanging out with her hilarious husband and two cats dressed in dog suits.
                </p>
              </div>
              <div class="speaker">
                <span>2 PM</span>
                <img src="img/sebdeckers.jpg" />
                <h3>Bundling With H2 Server Push</h3>
                <h4>Sebastiaan Deckers <a href="https://twitter.com/sebdeckers" target="_blank">@sebdeckers</a></h4>
                <p>
                    Tools and techniques to optimise website delivery beyond Webpack and Browserify using the new worlds of HTTP/2.
                </p>
                <p>
                  Seb is is a software engineer with a passion for front-end web development and open-source software. With over 15 years of experience, he has expertise in bringing startups from idea to a launched minimum viable product and growing technical teams.<br/>
                  As a freelance front-end engineer, he has worked with various startups in Singapore, including RedMart, Migme, Adz (now CtrlShift), and Nugit.<br/>
                  When he’s not busy coding, you can find him cultivating the local developer community. Seb is the co-organiser of the Front End Developers Singapore (FEDS) meetup and regularly speaks at SingaporeJS events.
                </p>
              </div>
              <div class="speaker">
                <span>2:15 PM</span>
                <img src="img/ashwin.jpg" />
                <h3>JS In The Enterprise - Lessons Learnt</h3>
                <h4>Ashwin Vombatkere, ThoughtWorks</h4>
                <p>
                  I will share my learnings and practices from implementing JavaScript in large enterprises. The intent is to bake these learnings into your planning and development process and help you build sustainable applications for enterprise companies using JavaScript as well.
                </p>
                <p>
                  Ashwin is a Lead Consultant developer with ThoughtWorks. He started his journey over 12 years ago as a developer helping to build enterprise scale Java applications for the leasing industry. Over the years, he has experienced Ruby and had an extended tryst with .net building micro services for the rail industry.<br/>
                  Over the last few years Ashwin spent most of his time building single page JavaScript applications for large enterprises. During this period he has gained experience with Angular, Node.js and a whole suite of other JavaScript utilities to help champion agile delivery.
                </p>
              </div>
              <div class="speaker">
                <span>2:30 PM</span>
                <img src="img/steven.jpg" />
                <h3>The Opportunities in Tech</h3>
                <h4>Steven Gong, Hired</h4>
                <p></p>
                <p>
                  Steven Gong is the Market Manager for Singapore at Hired, an online marketplace that brings together top tech talent with the companies who want to hire them. Steven led the expansion of San Francisco-based Hired to Singapore, and prior to Hired he worked at tech startups in Singapore for 8 years including as a founder, and started his career in management consulting.
                </p>
              </div>
              <div class="speaker break">
                  <span>2:45 PM</span>
                  <h3>Lightning Talks / Break</h3>
              </div>
              <div class="speaker">
                <span>4 PM</span>
                <img src="img/myles.jpg" />
                <h3>Node.js Versions: How Do They Work?</h3>
                <h4>Myles Borins, IBM <a href="https://twitter.com/thealphanerd" target="_blank">@thealphanerd</a></h4>
                <p>
                Node.js is growing up, and with that comes the responsibility of delivering proper legacy support. From Node.js Argon (v4.2.0) onwards, there is an official Long Term Support release cycle that lasts for 30 months. How does a project moving at the pace of Node maintain multiple release lines? How does a commit get backported? How is a release actually made? You will learn all this and more in this talk.
                </p>
                <p>
                  Myles is an artist, musician, developer, and inventor. He works for IBM spending most of his time contributing to the node.js ecosystem. He graduated with a Master of Music Science and Technology from c.c.r.m.a. a.k.a the center for computer research in music and acoustics.
                </p>
              </div>
              <div class="speaker">
                <span>4:30 PM</span>
                <img src="img/kahwee.jpg" />
                <h3>Coding Chat Bots</h3>
                <h4>KahWee Teng</h4>
                <p>
                  Bots are a new way to interface with services and businesses. In today’s landscape, there’s Alexa, Facebook Messenger, Slack and more. Let’s see how we can code and test chat bots efficiently using natural language tools.
                </p>
                <p>
                  KahWee is a Singaporean web technologist in the ad industry and is living in San Francisco.
                </p>
              </div>
              <div class="speaker">
                <span>5 PM</span>
                <img src="img/yosuke.jpg" />
                <h3>Exploring Future Node</h3>
                <h4>Yosuke Furukawa <a href="https://twitter.com/yosuke_furukawa" target="_blank">@yosuke_furukawa</a></h4>
                <p>
                  In this talk I want to take a look at the current and future versions of Node.js and touch on the following items:<br/><br/>
                  - Node inspector<br/>
                  - Internationalization support<br/>
                  - improving stability<br/>
                  - improving performance<br/>
                  - ES2015+<br/>
                  - ES Modules interop<br/>
                  - HTTP/2<br/>
                  - Web Standard<br/>
                  - Async Hook<br/>
                  - isTypes
                </p>
                <p>
                  Yosuke leads the Japan Node.js User Group and is an organizer of NodeFest. Yosuke has an interest in ESNext, new protocols like HTTP/2, WebRTC, and testing tools. He built the tower-of-babel, ES2015 tutorial tool and is now getting into universal web applications using React and Redux.
                </p>
              </div>
              <div class="speaker">
                <span>5:30 PM</span>
                <img src="img/alexg.jpg" />
                <img src="img/daniel.jpg" />
                <h3>Evolution Of The Web</h3>
                <h4>
                  Dr. Alexander Gouaillard <a href="https://twitter.com/agouaillard" target="_blank">@agouaillard</a><br/>
                  Daniel C. Burnett<a href="https://twitter.com/danielcburnett" target="_blank">@danielcburnett</a>
                </h4>
                <p>
                  The web has disrupted the way developer approach software development. It is Fast, almost FTL. It’s not rare to hear people saying they want their own project to scale like the web, and to evolve as fast as the web. But how does it evolves so fast without being (too) chaotic? The W3C, short for world wide web consortium, is the body in charge of defining the web, the JavaScript APIs that all applications (wether browser or framework rendering web pages) should support to be web-compliant. That process is not well know to web developers which is a pity as their feedback is THE MOST important thing in the evolution of the web.
                  Two W3C Invited Experts will provide insights into the W3C. What is the process through which the web evolve? What are the advantages you, as web developers, could have by following the process, or even becoming an active member? How to make a difference? What is the difference in terms of evolution between the web and the internet? Both will provide feedback from their respective point of view, and will answer questions from the audience.
                </p>
                <p>
                  As a member of the W3C, IETF and IMTC, Dr Alex is an active participant in the WebRTC community.
                  Among other projects he co-led the WebRTC-in-Webkit project and maintains his "WebRTC by Dr Alex" blog with the goal to reduce the barrier of entry into the field for students and individual developers. He holds a Ph.D. in signal, image and video processing at the French INSA and in his free-time helps his previous students from Harvard Medical and Pasteur as a Scientific Advisor to develop in-silico modeling solutions to complement trials of cancer drugs.<br/><br/>
                  Dan Burnett is a web veteran who has been participating in the evolution of the web since its early days and has been charing severe of W3C’s working groups. He is the writer of the reference book on WebRTC.
                </p>
              </div>
              <div class="speaker break">
                <span>7 PM</span>
                <h3>5 year anniversary party</h3>
                <h4>at The Great Escape, Golden Mile Complex</h4>
              </div>
            </div>
      </div>
    </section>

    <section id="sponsors">

      <p>
        With additional support from
      </p>
      <a href="https://carousell.com" target="_blank"><img src="img/carousell.png" style="height: 26px;" /></a>
      <a href="https://paypal.com" target="_blank"><img src="img/paypal.png" /></a>
      <a href="https://braintreepayments.com" target="_blank"><img src="img/braintree.png" /></a>
      <a href="https://hired.com" target="_blank"><img src="img/hired.png" /></a>
      <a href="https://mozilla.com" target="_blank"><img src="img/mozilla.png" /></a>
      <a href="https://www.microsoft.com/en-sg/windows/microsoft-edge" target="_blank"><img src="img/microsoft.png" /></a>
      <a href="http://www.clubmate.sg" target="_blank"><img src="img/clubmate.png" style="height: 55px;"/></a>


      <br/><br/><br/>
       <a href="https://www.eventnook.com/event/devfestasia2016/home" class="button">Get your tickets</a><br/>

    </section>

    <section id="updates">
      <br/><br/>

      <form id="subscribeForm" action="https://2012.jsconfasia.com/addsubscriber.php" method="get">
      <div class="input"><span><input type="text" name="fname" placeholder="First name" /><input type="email" name="email" placeholder="Email" /><input type="submit" value="Subscribe" /></span></div>
      <div class="msg"><span></span></div>
      </form>

      <p>
      <a href="https://twitter.com/jsconfasia">Follow us on Twitter</a> &nbsp; <a href="https://facebook.com/jsconfasia">Like us on Facebook</a>
      </p>

    </section>

  </section>

  <section id="footer">
    <div>
      <div>
        <p>
          <a href="https://2016.devfest.asia" style="border: none"><img src="./img/devfest2016.png" height="100" alt="Singapore DevFest.Asia 2016"/></a>
          <br/><br/>
          JSConf.Asia 2016 Singapore is part of DevFest.Asia,<br/>Southeast Asia’s community organized<br/>web developer festival
        </p>
      </div>
      <div>
        <p>
          <a href="http://jsconf.com" target="_blank" style="border: none"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="logo" viewBox="0 0 630 630">
          <g>
            <rect id="background" x="0" y="0" width="630" height="630" fill="none"></rect>
            <path id="j" fill="#888" d="m 165.65,526.47375 48.2125,-29.1775 C 223.16375,513.7875 231.625,527.74 251.92,527.74 c 19.45375,0 31.71875,-7.60975 31.71875,-37.21 l 0,-201.3 59.20375,0 0,202.1375 c 0,61.32 -35.94375,89.23125 -88.385,89.23125 -47.36125,0 -74.8525,-24.52875 -88.8075,-54.13"></path>
            <path id="s" fill="#888" d="m 375,520.13 48.20625,-27.91125 c 12.69,20.72375 29.1825,35.9475 58.36125,35.9475 24.53125,0 40.17375,-12.26475 40.17375,-29.18125 0,-20.29875 -16.06875,-27.48875 -43.135,-39.32625 l -14.7975,-6.3475 c -42.715,-18.18125 -71.05,-41.0175 -71.05,-89.2275 0,-44.40375 33.83125,-78.2375 86.695,-78.2375 37.6375,0 64.7025,13.11125 84.15375,47.36625 l -46.09625,29.60125 c -10.15,-18.1825 -21.1425,-25.37125 -38.0575,-25.37125 -17.33875,0 -28.335,10.995 -28.335,25.37125 0,17.7625 10.99625,24.9525 36.3675,35.94875 l 14.8,6.3425 c 50.325,21.56875 78.66,43.5575 78.66,93.03375 0,53.2875 -41.86625,82.465 -98.11,82.465 -54.97625,0 -90.5,-26.2175 -107.83625,-60.47375"></path>
          </g>
          </svg></a><br/><br/>
          Check out our past conferences:<br/><a href="https://2015.jsconf.asia" target="_blank">2015</a>
           - <a href="https://2014.jsconf.asia" target="_blank">2014</a>
           - <a href="https://2013.jsconf.asia" target="_blank">2013</a>
           - <a href="https://2012.jsconf.asia" target="_blank">2012</a>
        </p>
      </div>
    </div>
    <p>
      A Nerdherd Pte. Ltd. event<br/><br/>
      <a href="mailto:sponsors@jsconf.asia?subject=JSConf.Asia 2016 Sponsorship">Sponsorship Inquiry</a><br/>
      <a href="https://2016.devfest.asia/code-of-conduct">Code of Conduct</a>
    </p>
  </section>


  <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
  <script type="text/javascript">window.jQuery || document.write('<script src="./js/jquery.min.js">\x3C/script>')</script>
  <script type="text/javascript" src="./js/jquery.form.min.js"></script>
  <script src="./js/app2.js"></script>

  <script src="./js/three.min.js"></script>

  <script src="./js/TextGeometry.js"></script>
  <script src="./js/FontUtils.js"></script>
  <script src="./js/regular.typeface.js"></script>
  <script src="./js/animation.js"></script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31025490-12', 'auto');
  ga('send', 'pageview');


   CountDownTimer('Fri, 25 Nov 2016 09:00:00 +0800', 'countdown');

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
                document.getElementById(id).innerHTML = 'now!';

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

          if(seconds < 10)
            seconds = "0" + seconds;

          if(minutes < 10)
            minutes = "0" + minutes;

            document.getElementById(id).innerHTML = (days > 0) ? days + ' days ' : ''
            document.getElementById(id).innerHTML += hours + ':' + minutes + ':' + seconds;
        }

        timer = setInterval(showRemaining, 1000);
    }

  </script>
</body>
</html>
