<!DOCTYPE html>
<html lang="en">

<head>
	<title>Creamy Doughnuts | Home Page</title>
    <?php require_once 'includes/header.html'; ?>
	<script src="http://use.edgefonts.net/righteous:n4:all.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Josefin+Sans" rel="stylesheet">

	<style>
		main {
			padding-bottom: 100px;
		}

		#side_bar {
			position: relative;
			background-color: #d94e67;
			display: block;
			width: 250px;
			height: 250px;
			top: 50px;
		}

		#side_bar_title {
			position: relative;
			top: 50px;
			background-color: #d94e67;
			color: #ffffff;
			text-align: left;
			padding-top: 5px;
			padding-bottom: 5px;
			display: block;
			width: 300px;
			height: 40px;
			border-top-right-radius: 15px;
			border-bottom-right-radius: 15px;
		}

		#side_bar_title span {
			position: relative;
			top: 8px;
			font-family: 'Josefin Sans', sans-serif;
			font-size: 25px;
			line-height: 1;
		}

		#side_bar span {
			font-family: 'Abril Fatface', sans-serif;
		}

		#side_bar li a:hover span {
			text-decoration: overline;
		}

		#side_bar ul {
			position: relative;
			top: 15px;
			list-style-type: none;
			margin: 0;
			padding: 0;
			background-color: #d94e67;
			width: 100%;
			height: 100%;
			overflow: auto;
		}

		#side_bar li a {
			display: block;
			font-size: 14px;
			color: #ffffff;
			padding: 10px 8px;
			text-decoration: none;
		}

		#side_bar li a.active {
			background-color: #4CAF50;
			color: white;
		}

		#side_bar li a:hover:not(.active) {
			background-color: #ffffff;
			color: #d94e67;
			border-right: 1px solid #d94e67;
		}

		#map_container {
			position: absolute;
			top: 100px;
			right: 0;
			width: calc(100% - 200px);
			height: 80%;
			background-color: transparent;
            border: 5px solid;
            border-bottom-width: 0;
            border-image: linear-gradient(to right, #d94e67 14%, #ffffff 67%) 1 0%;
			overflow: hidden;
			margin: 0 auto;
		}

		#map_main_wrapper {
			position: relative;
			top: 0;
			right: 0;
			left: 100px;
			width: 80%;
			height: 100%;
			background-color: transparent;
		}

		.map_wrappers {
			position: relative;
			left: 15px;
			display: inline-block;
			background-color: #333333;
			width: 30%;
			height: 40%;
			margin: 10px 10px 40px 10px;
		}

		.location_names {
			position: relative;
			z-index: 100;
			top: 10px;
			left: 5px;
			width: 100%;
			height: 30px;
			cursor: pointer;
			background-color: transparent;
			color: #d94e67;
			padding: 5px;
			border-radius: 5px;
            border: 0 #ffffff;
            transition: border 800ms;
		}

		.location_names:hover {
			border: 1px solid #d94e67;
			background-color: #ffffff;
		}

		.footer {
			position: relative;
			background: linear-gradient(to left, #1ba3e1, #d94e67);
			width: 100%;
			height: 250px;
			bottom: -400px;
		}

		.footer p {
			position: absolute;
			bottom: 5px;
			color: #ffffff;
			font: 0.55em "Arial";
			padding-top: 4px;
			padding-left: 4px;
		}

		#footer_social_icons {
			position: absolute;
			top: 50px;
			left: 30px;
		}

		#footer_social_icons h2 {
			text-align: center;
			cursor: default;
			color: #ffffff;
			font-family: 'josefin sans' , sans-serif;
		}

		.social_icons {
			height: 50px;
			width: 50px;
			margin: 5px;
			border-radius: 50%;
			border-width: 0;
			background-color: transparent;
		}

		.social_icons img {
			width: 50px;
			height: 50px;
			border-radius: 50%;
		}

		#fb_icon img {
			background-color: #3b5998;
		}

		#fb_icon:hover img {
			background-color: #d94e67;
		}

		#gp_icon img {
			background-color: #d34836;
		}

		#gp_icon:hover img {
			background-color: #d94e67;
		}

		#tw_icon img {
			background-color: #1ba3e1;
		}

		#tw_icon:hover img {
			background-color: #d94e67;
		}



		#bottom-nav {
			float: right;
			height: 100%;
			width: 150px;
			top: 0;
			margin-right: 5px;
			margin-top: 10px;
			overflow-x: hidden;
		}

		#bottom-nav a,
		#drop_button {
			font-family: 'josefin sans', sans-serif;
			padding: 5px 0;
			text-decoration: none;
			font-size: 20px;
			color: #ffffff;
			display: block;
			border: none;
			background: none;
			width: 100%;
			text-align: center;
			cursor: pointer;
			outline: none;
		}

		#bottom-nav a:hover,
		#drop_button:hover {
			color: #d94e67;
			background: #ffffff;
			text-decoration: line-through;
		}

		#drop_button #down_arrow_hover,
		#drop_button #down_arrow {
			position: absolute;
			right: 35px;
			top: 47px;
		}

		#drop_button #down_arrow_hover {
			opacity: 1;
		}

		#drop_button:hover #down_arrow {
			opacity: 0;
		}

		.active {
			background-color: #d94e67;
			color: white;
		}

		#dropdown {
			display: none;
			background-color: #ffffff;
			transition: all 500ms;
		}

		#dropdown a {
			color: #d94e67;
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
			<div id="side_bar_title"><span>Find our stores in here</span></div>
			<div id="side_bar">
				<ul>
					<li><a href="#">Great Cambridge, London <span id="country_location">UK</span></a></li>
					<li><a href="#">Penn Plaza, New York <span id="country_location">USA</span></a></li>
					<li><a href="#">Khalidiyah Mall, Abu Dhabi <span id="country_location">UAE</span></a></li>
					<li><a href="#">Auburn, New South Wales <span id="country_location">Australia</span></a></li>
					<li><a href="#">Avenue K, Kuala Lampur <span id="country_location">Malaysia</span></a></li>
					<li><a href="#">Market City, Chennai <span id="country_location">India</span></a></li>
				</ul>
			</div>
			<div id="map_container">
				<div id="map_main_wrapper">
					<div id="map_wrapper_1" class="map_wrappers"><span id="location_name_1" class="location_names">Great Cambridge, London</span></div>
					<div id="map_wrapper_2" class="map_wrappers"><span id="location_name_2" class="location_names">Penn Plaza, New York</span></div>
					<div id="map_wrapper_3" class="map_wrappers"><span id="location_name_3" class="location_names">Khalidiyah Mall, Abu Dhabi</span></div>
					<div id="map_wrapper_4" class="map_wrappers"><span id="location_name_4" class="location_names">Auburn, New South Wales</span></div>
					<div id="map_wrapper_5" class="map_wrappers"><span id="location_name_5" class="location_names">Avenue K, Kuala Lampur</span></div>
					<div id="map_wrapper_6" class="map_wrappers"><span id="location_name_6" class="location_names">Market City, Chennai</span></div>
				</div>
			</div>
		</main>
		<footer>
            <?php include_once('includes/footer.html'); ?>
		</footer>
	</div>
	<script>
        gMaps();
		function gMaps() {
			let latArray = [51.652338, 40.749915, 24.470406, -33.845047, 3.159319, 12.990765];
            let lngArray = [-0.059318, -73.992179, 54.351761, 151.041194, 101.712978, 80.217048];

			for (let i = 0; i < 6; i++) {
                let elementName = 'map_wrapper_' + (i + 1);
                let mapWrapper = document.getElementById(elementName);
                let location = {
					lat: latArray[i],
					lng: lngArray[i]
				};
                let mapOptions = {
					center: location,
					zoom: 15
				};
                let map = new google.maps.Map(mapWrapper, mapOptions);
                let marker = new google.maps.Marker({
					position: location,
					map: map
				});
			}
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsJJwTff1Xj_0KCAv7UwMMbUjIx7SZU90&callback=gMaps"></script>
	<script>
        let location_names = ["Great Cambridge, London", "Penn Plaza, New York", "Khalidiyah Mall, Abu Dhabi", "Auburn, New South Wales", "Avenue K, Kuala Lampur", "Market City, Chennai"];
		for (let i = 0; i < 6; i++) {
            let j = i + 1;
            let elementName = 'map_wrapper_' + (j);
			console.log('<span id="location_name_' + j + '" class="location_names">' + location_names[i] + '</span>');
			document.getElementById(elementName).innerHTML = '<span id="location_name_' + j + '" class="location_names">' + location_names[i] + '</span>';
		}
	</script>
</body>

</html>
