<?php require "include/head.php" ?>

<body id="page-top" class="home">

    <nav>
        <div class="container">
            <div class="relative">
                <a class="autoscroll nav__logo" href="#page-top">SamVK</a>
                <img class="fa fa-bars nav__hamburger" src="img/hamburger.png" alt="menu">
            </div>
            <ul class="nav-list">
                <li class="nav-list__item"><a class="autoscroll nav-list__item--a" href="#about">About Me</a></li>
                <li class="nav-list__item"><a class="autoscroll nav-list__item--a" href="#projects">Projects</a></li>
                <li class="nav-list__item"><a class="autoscroll nav-list__item--a" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <header>
        <div class="container">
            <h1 class="header__title">Hi, I'm Sam.</h1>
            <p class="header__sub-title">(Actually, Samuel VanDellen Nelson Kauffman. But the name was already taken.)</p>
            <p class="h3">This is my growing portfolio.</p>
        </div>
    </header>
    
    <section id="about">

        <h2>About Me</h2>
        <hr class="redline">
        
        <div class="container">
            <div class="col-md-9 center center-content">
                <img class="circle about__headshot" src="img/headshot.jpg" alt="headshot">
				
				<p>Hi, my name's Sam. I'm a twenty-something year old front-end web developer who loves building apps and bringing others' designs to life. My go-to technologies right now are HTML5, CSS3, Sass(SCSS), and JavaScript(ES7) + jQuery.  I'm in the process of learning PHP &amp; MySQL to become a better front-end coder and future full-stack developer.</p>
				<p>On a personal note: I love metal detecting, watching movies, the theatre, and building things.</p>
                <p>You can <a href="https://github.com/samvk" target="_blank">check me out on GitHub<sup><span class="fa fa-external-link"></span></sup></a>, <a href="https://linkedin.com/in/samvk" target="_blank">find me on LinkedIn<sup><span class="fa fa-external-link"></span></sup></a>, <a href="docs/SamKauffman_Resume.pdf" target="_blank">take a look at my resume</a>, or view some of my projects below.</p>

				<a class="autoscroll button" href="#projects">View my projects</a>
            </div>
        </div>

    </section>
	
	<section id="projects">

		<h2>Projects</h2>
        <hr class="greyline">

		<div class="container">
			
			<div class="row">
				
				<h3>For The Web</h3>
				<hr class="redline">

				<div class="col-sm-4 project is-featured">
					<a class="project__link" href="https://postcard.samvk.com" target="_blank">
						<p class="project__button">See Project &rarr;</p>
						<img class="project__pic" src="img/projects/greetingsworld.png" alt="GreetingsWorld.us">
					</a>
					<ul class="list--inline-block center-content">
						<li><a class="project__icon" title="GitHub" href="https://github.com/samvk/postcard-creator" target="_blank"><span class="fa fa-github-square"></span></a></li>
						<li><a class="project__icon" title="See local version" href="https://postcard.samvk.com" target="_blank"><span class="fa fa-external-link-square"></span></a></li>
					</ul>
				</div>

				<div class="col-sm-4 project">
					<a class="project__link" href="https://cttreasurehunter.com" target="_blank">
                        <p class="project__button">See Project &rarr;</p>
                        <img class="project__pic" src="img/projects/cttreasurehunter.png" alt="ctTreasureHunter.com">
                    </a>
                    <ul class="list--inline-block center-content">
						<li><a class="project__icon" title="GitHub" href="https://github.com/samvk/cttreasurehunter" target="_blank"><span class="fa fa-github-square"></span></a></li>
						<li><a class="project__icon" title="See local version" href="https://cttreasurehunter.samvk.com" target="_blank"><span class="fa fa-external-link-square"></span></a></li>
                    </ul>
                </div>

				<div class="col-sm-4 project">
					<a class="project__link" href="https://readeverydayclub.com" target="_blank">
                        <p class="project__button">See Project &rarr;</p>
                        <img class="project__pic" src="img/projects/readeveryday.png" alt="ReadEveryDayclub.com">
                    </a>
                    <ul class="list--inline-block center-content">
						<li><a class="project__icon" title="GitHub" href="https://github.com/samvk/readeveryday" target="_blank"><span class="fa fa-github-square"></span></a></li>
						<li><a class="project__icon" title="See local version" href="https://readeveryday.samvk.com" target="_blank"><span class="fa fa-external-link-square"></span></a></li>
					</ul>
                </div>

			</div>

			<div class="row">

				<div class="col-sm-4 project">
					<a class="project__link" href="https://daterussell.com" target="_blank">
                        <p class="project__button">See Project &rarr;</p>
                        <img class="project__pic" src="img/projects/daterussell.png" alt="DateRussell.com">
                    </a>
                    <ul class="list--inline-block center-content">
						<li><a class="project__icon" title="GitHub" href="https://github.com/samvk/daterussell" target="_blank"><span class="fa fa-github-square"></span></a></li>
						<li><a class="project__icon" title="See local version" href="https://daterussell.samvk.com" target="_blank"><span class="fa fa-external-link-square"></span></a></li>
					</ul>
                </div>

				<div class="col-sm-4 project">
					<a class="project__link" href=".">
						<p class="project__button">See Project &rarr;</p>
						<img class="project__pic" src="img/projects/samvk.png" alt="samvk.com">
					</a>
					<ul class="list--inline-block center-content">
						<li><a class="project__icon" title="GitHub" href="https://github.com/samvk/samvk" target="_blank"><span class="fa fa-github-square"></span></a></li>
					</ul>
				</div>

			</div>
			
			<div class="row">
				
				<h3>Just for Fun</h3>
				<hr class="redline">

				<div class="col-sm-4 project">
					<a class="project__link" href="https://teamfortress2.samvk.com" target="_blank">
                        <p class="project__button">See Project &rarr;</p>
                        <img class="project__pic" src="img/projects/teamfortress2.png" alt="teamfortress2.samvk.com">
                        <span class="fa fa-volume-up project__audio-warning"></span>
                    </a>
                    <ul class="list--inline-block center-content">
						<li><a class="project__icon" title="GitHub" href="https://github.com/samvk/teamfortress2" target="_blank"><span class="fa fa-github-square"></span></a></li>
					</ul>
                </div>

				<div class="col-sm-4 project">
					<a class="project__link" href="https://snake.samvk.com" target="_blank">
                        <p class="project__button">See Project &rarr;</p>
                        <img class="project__pic" src="img/projects/snake.png" alt="snake.samvk.com">
                    </a>
                    <ul class="list--inline-block center-content">
						<li><a class="project__icon" title="GitHub" href="https://github.com/samvk/snake" target="_blank"><span class="fa fa-github-square"></span></a></li>
					</ul>
                </div>
                
                <div class="col-sm-4 project">
                    <a class="project__link" href="https://cttreasurehunter.com/metaldetecting" target="_blank">
                        <p class="project__button">See Project &rarr;</p>
                        <img class="project__pic" src="img/projects/metaldetecting.png" alt="metaldetecting.samvk.com">
                    </a>
                    <ul class="list--inline-block center-content">
                        <li><a class="project__icon" title="GitHub" href="https://github.com/samvk/metaldetecting" target="_blank"><span class="fa fa-github-square"></span></a></li>
                        <li><a class="project__icon" title="See local version" href="http://cttreasurehunter.samvk.com/metaldetecting" target="_blank"><span class="fa fa-external-link-square"></span></a></li>
                    </ul>
                </div>

			</div>
			
		</div>

	</section>
	
	<section id="contact">

		<h2>Contact</h2>
		<hr class="redline">
        
		<div class="container">
            
            <p class="h5">Let's work together.</p>
            
            <div class="row">
                
                <div class="col-sm-4 contact-card__container">
                    
                    <div class="contact-card">
                        <span class="fa fa-fw fa-map-marker contact-card__icon"></span>
                        <p class="contact-card__text">
                            101 Four Mile Road<br>
                            West Hartford, CT<br>
                            06107
                        </p>
                    </div>
                    
                    <div class="contact-card">
                        <span class="fa fa-fw fa-mobile contact-card__icon"></span>
                        <p class="contact-card__text">
                            +1 860.878.8669
                        </p>
                    </div>
                    
                    <div class="contact-card">
                        <a href="mailto:hello@samvk.com">
                            <span class="fa fa-fw fa-envelope contact-card__icon"></span>
                            <p class="contact-card__text">
                                hello@samvk.com
                            </p>
                        </a>
                    </div>
  
                </div>
                
                <div class="col-sm-8">
                    <form id="contact-form" action="php/contact.php" method="post">
                        <label>
                            <span class="input__placeholder">Name</span>
                            <input type="text" name="name" placeholder="Name" maxlength="100" required>
                        </label>
                        <label>
                            <span class="input__placeholder">Email Address</span>
                            <input type="email" name="email" placeholder="Email Address" maxlength="100" required>
                        </label>
                        <label>
                            <span class="input__placeholder">Phone Number</span>
                            <input type="tel" name="phone" placeholder="Phone Number (optional)" maxlength="100">
                        </label>
                        <label>
                            <span class="input__placeholder">Message</span>
                            <textarea name="message" placeholder="Message" maxlength="2000" required></textarea>
                        </label>
                        <!-- Spam bot honeypot -->
                        <label style="display:none">
                            <span class="input__placeholder">Skip me</span>
                            <input type="text" name="address" placeholder="Please leave this field blank" maxlength="100">
                        </label>
                        <!-- End -->
                        <button class="contact-form__submit" type="submit">Send</button>
                    </form>
                </div>
                
            </div>
		</div>

	</section>
	
	<footer>
	
		<ul class="list--inline-block list--no-spacing social__links">
			<li><a href="https://github.com/samvk" target="_blank" title="GitHub"><span class="fa fa-fw fa-github"></span></a></li>
            <li><a href="https://linkedin.com/in/samvk" target="_blank" title="LinkedIn"><span class="fa fa-fw fa-linkedin"></span></a></li>
			<li><a href="docs/SamKauffman_Resume.pdf" target="_blank" title="My resume"><span class="fa fa-fw fa-file-text-o"></span></a></li>
			<li><a href="mailto:hello@samvk.com" target="_blank" title="Email me"><span class="fa fa-fw fa-envelope"></span></a></li>
		</ul>
		
		<hr class="redline">
		
		<p class="footer__copyright"><?php echo date("Y") ?> &copy; <strong>SamVK</strong></p>
	
	</footer>
    
<!--**************************************************-->

	<!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery.min.js'><\/script>")</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	<!-- Javascript -->
	<script src="js/contact.min.js"></script>
	<script src="js/script.min.js"></script>

</body>

</html>