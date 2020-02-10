<!DOCTYPE html>
<html lang="en">

<head>
	<title>Creamy Doughnuts | Home Page</title>
    <?php require_once 'includes/header.html'; ?>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans|Montserrat|Kavivanar" rel="stylesheet">
	<style>
		.form-container {
			position: absolute;
			margin-top: 35px;
			margin-bottom: 30px;
			right: 5px;
			display: inline-block;
            height: auto;
			width: 250px;
            padding: 10px 20px 20px;
            border: 3px dashed #d94e67;
        }

		.errorReporter {
			position: relative;
			padding-left: 5px;
			padding-right: 2px;
			bottom: 5px;
			font-family: 'Work Sans', sans-serif;
			font-size: 8px;
			color: #ff0000;
		}

		#first_name {
			position: relative;
            border: 1px solid #d94e67;
            width: 140px;
			height: 25px;
			border-radius: 3px;
		}

		#last_name {
			position: relative;
            border: 1px solid #d94e67;
            width: 140px;
			height: 25px;
			border-radius: 3px;
		}

		#email_address {
			position: relative;
            border: 1px solid #d94e67;
            width: 190px;
			height: 25px;
			border-radius: 3px;
		}

		::placeholder {
			padding-left: 2px;
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 10px;
		}

		#message {
			position: relative;
            border: 1px solid #d94e67;
            width: 200px;
			height: 80px;
			resize: none;
			border-radius: 3px;
		}

		#character_counter {
			position: relative;
			bottom: 10px;
			padding-left: 2px;
			padding-right: 2px;
			font-family: 'Work Sans', sans-serif;
			font-size: 8px;
		}

		#submit-button {
			color: #d94e67;
			cursor: pointer;
			margin-top: 10px;
            background: linear-gradient(to right, #d94e67 50%, #ffffff 50%) right bottom;
            background-size: 200% 100%;
            border: 2px solid #d94e67;
            border-radius: 3px;
			width: 150px;
			height: 40px;
			transition: all 300ms ease;
		}

		#submit-button:hover {
			color: #ffffff;
			background-position: left bottom;
		}

		#t_and_c {
			position: relative;
			width: 15px;
			height: 15px;
		}

		.form-elements {
			font-family: 'Work Sans', sans-serif;
			margin-top: 2px;
			margin-bottom: 10px;
			display: block;
		}

		.labels {
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 14px;
		}

		.labels strong {
			color: #ff0000;
		}

		#tnc {
			position: relative;
			bottom: 28px;
			font-size: 10px;
			margin-left: 20px;
		}

		#tnc a {
			color: #d94e67;
		}

		#check_error {
			position: relative;
			bottom: 30px;
		}

		#social-feed {
			position: absolute;
			margin-top: 70px;
			margin-left: 50px;
			height: 200px;
			width: 400px;
			background-color: #ffffff;
			align-items: center;
            z-index: 1;
            outline: #1ba3e1 inset 2px;
        }

		#social-feed-background {
			position: absolute;
			width: 100%;
			height: 100%;
			bottom: 0;
			z-index: -1;
			opacity: 0.8;
			transition: all 1000ms;
		}

		#social-feed h2 {
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 18px;
			text-align: center;
		}

		#social-feed h4 {
			font-family: 'Kavivanar', cursive;
			font-size: 8px;
			text-align: center;
		}

		.social-buttons {
			margin: 0 auto;
			z-index: 10;
		}

		.social-buttons a {
			color: #ffffff;
			text-decoration: none;
		}

		#gplus-button {
			margin: 5px 50px;
			cursor: pointer;
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 14px;
			color: #ffffff;
			background-color: #d34836;
			width: 300px;
			height: 45px;
            border: 2px none;
            transition: all 350ms;
		}

		#fb-button {
			margin: 5px 50px;
			cursor: pointer;
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 14px;
			color: #ffffff;
			background-color: #3b5998;
			width: 300px;
			height: 45px;
            border: 2px none;
            transition: all 350ms;
		}

		#tweet-button {
			margin: 5px 50px;
			cursor: pointer;
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 14px;
			color: #ffffff;
			background-color: #1ba3e1;
			width: 300px;
			height: 45px;
            border: 2px none;
            transition: all 350ms;
		}

		#gplus-button:hover~#social-feed-background {
			background-color: #d34836;
		}

		#fb-button:hover~#social-feed-background {
			background-color: #3b5998;
		}

		#tweet-button:hover~#social-feed-background {
			background-color: #1ba3e1;
		}

		#gplus-button:hover {
			background-color: #ffffff;
			color: #d34836;
			border: 1px solid #d34836;
			border-radius: 5px;
		}

		#fb-button:hover {
			background-color: #ffffff;
			color: #3b5998;
			border: 1px solid #3b5998;
			border-radius: 5px;
		}

		#tweet-button:hover {
			background-color: #ffffff;
			color: #1ba3e1;
			border: 1px solid #1ba3e1;
			border-radius: 5px;
		}

		#main-img {
			width: 100%;
			height: 600px;
            background: url(./img/contact-us-page-main-img.jpg) center;
            background-size: cover;
			filter: grayscale(100%);
			transition: filter 1000ms;
		}

		#main-caption {
			position: relative;
			width: 380px;
			top: 30%;
			left: 65%;
			margin-right: 10px;
		}

		#main-caption h1 {
			font-family: 'Kavivanar', cursive;
			font-size: 55px;
			color: #ffffff;
		}

		#caption-button {
			cursor: pointer;
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 20px;
			color: #000000;
			background-color: #ffffff;
			width: 300px;
			height: 45px;
			margin-left: 30px;
            border: 2px none;
            transition: all 350ms;
		}

		#caption-button:hover {
			background-color: transparent;
            border: solid #ffffff;
            color: #ffffff;
		}

		#bottom_toast {
			position: fixed;
			visibility: hidden;
			min-width: 250px;
			margin-left: -125px;
			background-color: #d94e67;
			border: 2px solid #1ba3e1;
			color: #fff;
			text-align: center;
			font-family: 'Montserrat', 'verdana', sans-serif;
			font-size: 12px;
			border-radius: 5px;
			padding: 16px;
			z-index: 10;
			left: 50%;
			bottom: 30px;
		}

		#bottom_toast.visible {
			visibility: visible;
			animation: fadein 500ms, fadeout 500ms 2500ms;
		}

		@keyframes fadein {
			from {
				bottom: 0;
				opacity: 0;
			}
			to {
				bottom: 30px;
				opacity: 1;
			}
		}

		@keyframes fadeout {
			from {
				bottom: 30px;
				opacity: 1;
			}
			to {
				bottom: 0;
				opacity: 0;
			}
		}

		main {
			padding-bottom: 100px;
		}

		.footer {
			bottom: -400px;
		}
	</style>
</head>

<body>
<?php include_once('includes/signInStrip.html'); ?>
	<div class="page-container">
		<header>
            <?php include_once('includes/navigation.html'); ?>
		</header>
		<main>
			<div id="main-img">
				<div id="main-caption">
					<h1>Got a Question?</h1><br><button id="caption-button" onclick="return false;" onmousedown="smoothScrollTo('submit-button');">we are happy to help!</button>
				</div>
			</div>

			<div id="social-feed">
				<h2>Find us in here</h2>
				<h4>*and get a chance to win a free doughnut*</h4>
				<button class="social-buttons" id="gplus-button"><a href="https://plus.google.com" target="_blank">Follow us on Google+</a></button>
				<button class="social-buttons" id="fb-button"><a href="https://www.facebook.com/" target="_blank">Follow us on Facebook</a></button>
				<button class="social-buttons" id="tweet-button"><a href="https://twitter.com/" target="_blank">Follow us on Twitter</a></button>
				<div id="social-feed-background"></div>
			</div>

			<div class="form-container" id="form-container">
				<form name="contact_form" onsubmit="">
					<label for="first_name" class="labels">First Name<strong>*</strong></label><span id="first_name_error" class="errorReporter"></span>
					<input id="first_name" name="first_name" class="form-elements"  title="Your First Name Here" type="text">
					<label for="last_name" class="labels">Last Name<strong>*</strong></label><span id="last_name_error" class="errorReporter"></span>
					<input id="last_name" name="last_name" class="form-elements"  type="text" title="Your Last Name Here">
					<label for="email_address" class="labels">Email Address<strong>*</strong></label><span id="email_error" class="errorReporter"></span>
					<input id="email_address" name="email_address" class="form-elements" type="email" placeholder="eg: someone@example.com" title="Your Primary Email Address Here">
					<label for="message" class="labels">Message</label><span id="message_error" class="errorReporter"></span>
					<textarea id="message" name="message" class="form-elements"  title="Your Feedback Here" placeholder="Shoot us a message!"></textarea>
					<span id="character_counter" class="character_counter">1024 characters remaining</span><br>
					<input id="t_and_c" name="t_and_c" class="form-elements" type="checkbox">
					<label id="tnc" for="t_and_c" class="labels">I accept the <a href="terms.php">Terms &amp; Conditions</a><strong>*</strong></label>
					<br>
					<span id="check_error" class="errorReporter"></span>
					<input id="submit-button" name="submit-button" value="submit" type="button" onclick="validateForm();" title="Send us your Feedback!">
				</form>
			</div>
			<div id="bottom_toast">Your Message has been delivered...</div>
		</main>
		<footer>
            <?php include_once('includes/footer.html'); ?>
		</footer>
	</div>
	<script>
		function smoothScrollTo(element) {
			let distance = 15;
            let speed = 25;
            let scrollY = 0;
            let currentY = window.pageYOffset; //the number of pixels the user has scrolled from the top
            let targetY = document.getElementById(element).offsetTop; //the number of pixels from top that the specified element is positioned
            let bodyHeight = document.body.offsetHeight; //gets the total height of the body
            let posY = currentY + window.innerHeight; //the innerheight is the height of the outer viewport(including the scrollbars) which is added to the currentY to get the total number of pixels the user has scrolled from the top
            let animation = setTimeout(function() {
				smoothScrollTo(element);
			}, speed); //the animation interval is run very fastly specified by the speed variable in milliseconds, so we see the smooth scrolling effect
			//the speed variable decides how long it takes for the functions to go from one position to next

			//this one stops the scrolling animation when the user scrolls to the bottom of the page or when it reaches the desired location
			if (posY > bodyHeight) {
				clearTimeout(animation);
			} else {
				//this activity below is taken place many times (according to the animation timeout) where the scroll bar is moved by the amount specified in the distance variable every few milliseconds (specified by the speed variable)
				//thus this repetitive succession of scrolls produce a smooth scrolling feel
				if (currentY < (targetY - distance)) { // this checks if the current scroll position exceeds the target's position (examine that we minus the distance from the calculation)
					scrollY = currentY + distance; //then we calculate the new scroll position by
					window.scroll(0, scrollY);
				} else {
					clearTimeout(animation);
				}
			}
		}
	</script>
	<script>
		document.getElementById("caption-button").onmouseover = function() {
			document.getElementById("main-img").style.filter = "grayscale(0%)";
		};
		document.getElementById("caption-button").onmouseout = function() {
			document.getElementById("main-img").style.filter = "grayscale(100%)";
		};
	</script>
	<script>
		document.getElementById("message").onkeyup = function(event) {
            let message_Element = document.getElementById("message");
            let length = message_Element.value.length;
			if (length > 1024) {
				event.preventDefault();
			} else {
                let remainingCharacters = 1024 - length;
				document.getElementById('character_counter').innerHTML = remainingCharacters + " characters remaining";
			}
		};
		document.getElementById("message").onkeydown = function(event) {
            let message_Element = document.getElementById("message");
            let length = message_Element.value.length;
			if (length > 1024) {
				message_Element.value = message_Element.value.substring(0, 1024);
				event.preventDefault();
			} else {
                let remainingCharacters = 1024 - length;
				document.getElementById('character_counter').innerHTML = remainingCharacters + " characters remaining";
			}
		};
		document.getElementById("message").onpaste = function() {
            let message_Element = document.getElementById("message");
            let length = message_Element.value.length;
			if (length > 1024) {
				message_Element.value = message_Element.value.substring(0, 1024);
			} else {
                let remainingCharacters = 1024 - length;
				document.getElementById('character_counter').innerHTML = remainingCharacters + " characters remaining";
			}
		};
		document.getElementById("t_and_c").onchange = function() {
            let checked = document.getElementById("t_and_c").checked;
			if (checked) {
				document.getElementById('check_error').innerHTML = "";
				return false;
			}
		};
	</script>
	<script>
		function showToast() {
            let toast = document.getElementById("bottom_toast");

			toast.className = "visible";

			setTimeout(function() {
				toast.className = toast.className.replace("visible", "");
			}, 3000);
		}
	</script>
	<script>
		function validateForm() {
			if (validation()) {
				showToast();
			} else {
				return false;
			}
		}
	</script>
	<script>
		function validation() {
            let fname = document.contact_form.first_name;
            let lname = document.contact_form.last_name;
            let uemail = document.contact_form.email_address;
            let umessage = document.contact_form.message;
            let check = document.contact_form.t_and_c;

			if (emptyField(fname, lname, uemail)) {
				if (alphabetCheck(fname) || alphabetCheck(lname)) {
					if (emailFormat(uemail)) {
						if (inputLength(umessage)) {
							if (checkTnC(check)) {
								return true;
							}
						}
					}
				}
			}
			return false;
		}

		function emptyField(fname, lname, uemail) {
			let fname_len = fname.value.length;
            let lname_len = lname.value.length;
            let email_len = uemail.value.length;

			if (fname_len === 0 || lname_len === 0 || email_len === 0) {
				if (fname_len === 0) {
					document.getElementById('first_name_error').innerHTML = "The marked fields are required";
					document.getElementById('first_name').style.borderColor = "#ff0000";
				} else {
					document.getElementById('first_name_error').innerHTML = "";
					document.getElementById('first_name').style.borderColor = "#d94e67";
				}
				if (lname_len === 0) {
					document.getElementById('last_name_error').innerHTML = "The marked fields are required";
					document.getElementById('last_name').style.borderColor = "#ff0000";
				} else {
					document.getElementById('last_name_error').innerHTML = "";
					document.getElementById('last_name').style.borderColor = "#d94e67";
				}
				if (email_len === 0) {
					document.getElementById('email_error').innerHTML = "The marked fields are required";
					document.getElementById('email_address').style.borderColor = "#ff0000";
				} else {
					document.getElementById('email_error').innerHTML = "";
					document.getElementById('email_address').style.borderColor = "#d94e67";
				}
				return false;
			} else {
				return true;
			}
		}

		function alphabetCheck(uname) {
            let letters = /^[a-zA-Z]+$/;
			if (uname.value.match(letters)) {
				document.getElementById(uname.id).style.borderColor = "#d94e67";
				return true;
			} else {
				document.getElementById('' + uname.id + '_error').innerHTML = "Field should only contain letters";
				document.getElementById(uname.id).style.borderColor = "#ff0000";
				uname.focus();
				return false;

			}
		}

		function emailFormat(uemail) {
            let format = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (uemail.value.match(format)) {
				document.getElementById('email_address').style.borderColor = "#d94e67";
				document.getElementById('email_error').innerHTML = "";
				return true;
			} else {
				document.getElementById('email_error').innerHTML = "Enter a valid E-mail address";
				document.getElementById('email_address').style.borderColor = "#ff0000";
				uemail.focus();
				return false;
			}
		}

		function inputLength(umessage) {
            let message_len = umessage.value.length;
			if (message_len > 1024) {
				document.getElementById('message').style.borderColor = "#ff0000";
				document.getElementById('message_error').innerHTML = "Max Characters: 1024";
				return false;
			} else {
				document.getElementById('message').style.borderColor = "#d94e67";
				document.getElementById('message_error').innerHTML = "";
				return true;
			}
		}

		function checkTnC(checkbox) {
            let checked = document.getElementById("t_and_c").checked || checkbox.checked;
			if (!checked) {
				document.getElementById('check_error').innerHTML = "Please accept the Terms and Conditions to Submit";
				return false;
			} else {
				document.getElementById('check_error').innerHTML = "";
				return true;
			}
		}
	</script>
</body>

</html>
