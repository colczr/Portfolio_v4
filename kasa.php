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
				<h4 class="portHead4 darkGray">It works great - but not always.</h4>
				<p>I researched a few applications that offer either smart home automation or a broader sense of everyday automation. The most notable logic-based automation app might be IFTTT. However, it is fairly inflexible and allows very little customizability. Its logic also proves to be very simple and one-dimensional. A lot of the reviews from the appstore complained about IFTTT not being customizable. In terms of apps specifically for home automation, major companies brands like Samsung Smart Things or Philips Hue provide very simple automations such as a timer for devices. In a few other smaller apps that I researched, such as Home app by Matthias Hochgatterer, which is used by a lot of smart home review videos and articles, is highly praised for its home automation routines, such as turning on the heater when you leave work. Even though somewhat limited and convoluted, the users and reviews praised it for its flexibility and customizability.
				<br><br>insert comparative analysis table for apps.<br><br>
				In summary, the simple apps like Hue and Smarthings give little <i>flexibility</i>, however, even with an app like Home, although more powerful, it's complicated to set up and still does not give users that many choices.</p>

				<h3 class="portHead3 darkGray">The iteration process</h3>
				<br>
				<p>The research offered me insight into how apps take on the process of creating a "routine" or a "rule" for the house.I laid out the essential structure of a smarthome "rule" summarized from my research. It contains three parts:
				<br><br>
					 when (trigger) happens, if (condition), then (action).
				<br><br>
				The triggers and conditions differ in the fact that triggers is a point in time where something happens (When I arrive home), but condition is a fact that can be tested true or false over period of time (If I am at home). Both triggers and conditions can be time-based, presence-based, or device-based.
				<br><br>
				insert table of examples for both.
				<br><br>
				I reviewed the use cases and previous user research done by TP-LINK. Our users are all fairly tech-savvy and most of them have more than one smart-home appliance at home. 15,000 out of the 18,000 people who owned a smart device from us also have an Amazon Echo at home. Based on the previous research, I summarized the information I have and created a persona:
				<br><br>
				<h4 class="portHead4 darkGray">First iteration<br>(Wrong) Emphasis - Customizable and simple</h4>
				<p>
				The persona's familiarity with smart home and his tech-savvy-ness pointed me to a design direction: it should be very customizable yet simple. I want to make the users feel they can do a lot with very few steps so they would want to actually create these routines. I produced the first iteration of wireframe according to the emphasis obtained from previous research.</p>

				<h4 class="portHead4 darkGray">Usability test proved me wrong</h4>
				<p>After completing the wireframe, I conducted a usability test with 6 users, whose result proved my previous emphasis wrong. I found that<br><br>
				1) most users indeed feel the need of using this feature, but<br>
				2) cannot think of a very complicated case when asked about how they would use this feature, and<br>
				3) most users do not understand the meaning of the industry-specific words without explanation.<br>

				</p>


				<h4 class="portHead4 darkGray">Final iteration<br> Emphasis - Logical and intuitive</h4>


			</div>


		</div>
	</div>




	<?php
		include('foot.php');
	 ?>
</body>
</html>

<?php
