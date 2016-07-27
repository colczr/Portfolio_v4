<?php

session_start();
if (!isset($_SESSION['id'])) {
		header("Location: login.php");
		exit();
	}

include("head.php");

?>

	<body>
		<div class="load-screen">
		    <div class="tm-loader"><div class="spinner"></div></div>
		</div>

		<div class="out-container">

			<nav>
				<div class="divider">
				</div>
				<ul>
					<li class="navItem"><a href="#home">Home</a></li>
					<li class="navItem"><a href="#portfolio">Portfolio</a></li>
					<li class="navItem"><a href="#about">About</a></li>
					<li class="navItem"><a href="#contact">Contact</a></li>
				</ul>
			</nav>

			<div class="section-container">
				<div class="section" id="home">

					<div class="home-container">

						<img class="hero-1" src="img/logo_text.png"/>
					</div>
				</div>


					<!-- <div id="wave">
					</div> -->

				<div id="portfolio" class="section">

					<div class="portfolio-container reg-container grid">
						<h2>I design things.</h2>
						<div class="portfolio">
							<div class="project" style="background-color: #3ff">
								<a href="kasa.php" style="display: block; width: 100%; height: 100%;"></a>
							</div>

							<div class="project" style="background-color: #f76">
							</div>

							<div class="project" style="background-color: #81f">
							</div>

							<div class="project" style="background-color: #1ff">
							</div>
						</div>


					</div>

					</div>
				<div id="inTrigger">

				</div>

				<div id="about">
					<div class="about-container">
						<div class="about-content reg-container">
							<div id="fadeBox">
									<img id="portrait" src="img/portrait.png"/>
									<p class="aboutText1"><span>Empathy. Feasibility. Simplicity.</span><br>I am a first-year Master's student at the University of Michigan studying Human-Computer Interaction. I value simplicity, feasibility and creativity in my work. Aside from being a UX designer, I am a classical musician. I play the piano and the violin.
									<span class="resume"><a href="Chen_Resume.pdf" target="_blank">View Resume</a></span>
									</p>

							</div>

						</div>
						<div id="fadeTrigger">
						</div>
						<div id="contact">
							<p class="contact-container"><img src="img/logo_gray.png"/><br>
								Welcome to my portfolio, 100% hand-crafted. <br><br>
								cchent [at] umich.edu<br>
								②06 · 307 · 1269<br><br>
								<a href="http://www.dribbble.com/colinchen" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
								<a href="https://www.linkedin.com/in/colintychen" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
								<a href="https://www.github.com/colczr" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
							</p>

						</div>
						<div class="gray-bg">
						</div>
					</div>

				</div>









			</div>
		</div>




		<?php
			include('foot.php');
		 ?>
		<script type="text/javascript" src="js/mainScMa.js"></script>
		<script type="text/javascript" src="js/three.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/renderers/Projector.js"></script>
		<script type="text/javascript" src="js/renderers/CanvasRenderer.js"></script>
		<script type="text/javascript" src="js/libs/stats.min.js"></script>
		<script type="text/javascript" src="js/obj/Bird.js"></script>
		<script type="text/javascript" src="js/canvas.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
