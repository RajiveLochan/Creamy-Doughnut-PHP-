
/* Toggle between hiding and showing its dropdown content */
function toggleDropdown(element) {
	element.classList.toggle("active");
    let dropdownContent = element.nextElementSibling;
	if (dropdownContent.style.display === "block") {
		dropdownContent.style.display = "none";
	} else {
		dropdownContent.style.display = "block";
	}
}

if(typeof bannerCount === undefined) {
    let bannerCount = 3;
} else if (typeof bannerTimer === undefined) {
    let bannerTimer = 2000; //ie.4 seconds
}

function bannerLeft() {
	if (bannerCount === 3) {
		document.getElementById("location_2").style.opacity = '0.5';
		setTimeout(function () {
			document.getElementById("location_1").style.zIndex = "1500";
			document.getElementById("location_1").style.right = "0px";
			document.getElementById("location_1").style.left = "0px";
			document.getElementById("location_3").style.zIndex = "1000";
			document.getElementById("location_3").style.right = "200px";
			document.getElementById("location_3").style.left = "-200px";
			document.getElementById("location_2").style.zIndex = "500";
			document.getElementById("location_2").style.right = "-200px";
			document.getElementById("location_2").style.left = "200px";
		}, 500);
		setTimeout(function () {
			document.getElementById("location_2").style.opacity = '1';
		}, 1000);
		bannerCount = 1;
	} else if (bannerCount === 2) {
		document.getElementById("location_1").style.opacity = '0.5';
		setTimeout(function () {
			document.getElementById("location_3").style.zIndex = "1500";
			document.getElementById("location_3").style.right = "0px";
			document.getElementById("location_3").style.left = "0px";
			document.getElementById("location_2").style.zIndex = "1000";
			document.getElementById("location_2").style.right = "200px";
			document.getElementById("location_2").style.left = "-200px";
			document.getElementById("location_1").style.zIndex = "500";
			document.getElementById("location_1").style.right = "-200px";
			document.getElementById("location_1").style.left = "200px";
		}, 500);
		setTimeout(function () {
			document.getElementById("location_1").style.opacity = '1';
		}, 1000);
		bannerCount = 3;
	} else if (bannerCount === 1) {
		document.getElementById("location_3").style.opacity = '0.5';
		setTimeout(function () {
			document.getElementById("location_2").style.zIndex = "1500";
			document.getElementById("location_2").style.right = "0px";
			document.getElementById("location_2").style.left = "0px";
			document.getElementById("location_1").style.zIndex = "1000";
			document.getElementById("location_1").style.right = "200px";
			document.getElementById("location_1").style.left = "-200px";
			document.getElementById("location_3").style.zIndex = "500";
			document.getElementById("location_3").style.right = "-200px";
			document.getElementById("location_3").style.left = "200px";
		}, 500);
		setTimeout(function () {
			document.getElementById("location_3").style.opacity = '1';
		}, 1000);
		bannerCount = 2;
	}
}

function bannerRight() {
	if (bannerCount === 3) {
		document.getElementById("location_1").style.opacity = '0.5';
		setTimeout(function () {
			document.getElementById("location_2").style.zIndex = "1500";
			document.getElementById("location_2").style.left = "0px";
			document.getElementById("location_2").style.right = "0px";
			document.getElementById("location_3").style.zIndex = "1000";
			document.getElementById("location_3").style.left = "200px";
			document.getElementById("location_3").style.right = "-200px";
			document.getElementById("location_1").style.zIndex = "500";
			document.getElementById("location_1").style.left = "-200px";
			document.getElementById("location_1").style.right = "200px";
		}, 500);
		setTimeout(function () {
			document.getElementById("location_1").style.opacity = '1';
		}, 1000);
		bannerCount = 2;
	} else if (bannerCount === 2) {
		document.getElementById("location_3").style.opacity = '0';
		setTimeout(function () {
			document.getElementById("location_1").style.zIndex = "1500";
			document.getElementById("location_1").style.left = "0px";
			document.getElementById("location_1").style.right = "0px";
			document.getElementById("location_2").style.zIndex = "1000";
			document.getElementById("location_2").style.left = "200px";
			document.getElementById("location_2").style.right = "-200px";
			document.getElementById("location_3").style.zIndex = "500";
			document.getElementById("location_3").style.left = "-200px";
			document.getElementById("location_3").style.right = "200px";
		}, 500);
		setTimeout(function () {
			document.getElementById("location_3").style.opacity = '1';
		}, 1000);
		bannerCount = 1;
	} else if (bannerCount === 1) {
		document.getElementById("location_2").style.opacity = '0';
		setTimeout(function () {
			document.getElementById("location_3").style.zIndex = "1500";
			document.getElementById("location_3").style.left = "0px";
			document.getElementById("location_3").style.right = "0px";
			document.getElementById("location_1").style.zIndex = "1000";
			document.getElementById("location_1").style.left = "200px";
			document.getElementById("location_1").style.right = "-200px";
			document.getElementById("location_2").style.zInleftdex = "500";
			document.getElementById("location_2").style.left = "-200px";
			document.getElementById("location_2").style.right = "200px";
		}, 500);
		setTimeout(function () {
			document.getElementById("location_2").style.opacity = '1';
		}, 1000);
		bannerCount = 3;
	}
}

//Cross-Browser Support Code
function ajaxFunction() {
    let ajaxRequest;  // The ajax request object
    try {
        // Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer Browsers
        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                console.log('Browser not supported');
                return false;
            }
        }
    }
    return ajaxRequest;
}

function ajaxFormPost(data, url, callback) {
    let ajaxRequest = ajaxFunction(); //initializing the ajax object
    ajaxRequest.onreadystatechange = callback;
    ajaxRequest.open('POST', url, true);
    ajaxRequest.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    ajaxRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajaxRequest.send(data);
}

function ajaxFormGet(url, callback) {
    let ajaxRequest = ajaxFunction(); //initializing the ajax object
    ajaxRequest.onreadystatechange = callback;
    ajaxRequest.open('GET', url, true);
    ajaxRequest.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    ajaxRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajaxRequest.send(null);
}