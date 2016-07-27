<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include("authentication.php");

include("head.php");
?>
<body>
	<div class="load-screen">
			<div class="tm-loader"><div class="spinner"></div></div>
	</div>

	<div class="project-container">

	<?php
		include "nav.php";


	?>
		<div class="content">



			<div>
				<h1 class="portHead1">Kasa<br><div class="divider-line"></div></h3>

				<h2 class="portHead2 trueBlack">Enabling smart home users to <br>automate daily routines </h2>

				<p>Kasa is a smart home ecosystem developed by TP-Link Research America, where I interned during summer 2016. Kasa ecosystem includes an app that provides integrated control as well as a multitude of smart home devices. The smart home aims to provide a new way of interacting with traditional home devices and automation is an essential part of providing a convenient and care-free experience for the users, to make the home actually smart.
				</p>

				<h4 class="portHead4 darkGray">The apparent "dumbness" of a <i>smart</i> home</h3>
				<p>The two problems that the smart home is facing right now is its apparent "dumbness" and fragmentation. First of all, it is rather "dumb" in its current stage: most of the companies define a "smart" device basically as using a phone app to control some features on a traditional device. Well, I would say, if I simply moved my light switch from the wall to my phone, that does not seem to make my lightbulb that much <i>smarter</i>.
				Some companies realized the important role of automation in a smart home: if my lightbulb turns up automatically after sunset when I'm at home, or if all the lights in my house turn off with my bedroom light after 11, then that is something smart and takes away some of my frustrations of repeating my brainless but necessary daily routines.</p>

				<h3 class="portHead3 darkGray">How to improve on existing smart home automation products</h3>
				<h4 class="portHead4 darkGray">It works great - in most cases.</h3>
				<p>I researched a few applications that offer either smart home automation or a broader sense of everyday automation. In terms of apps specifically for home automation, major companies brands like Samsung Smart Things or Philips Hue provide very simple automations such as a simple timer for devices. </p>
			</div>


		</div>
	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
