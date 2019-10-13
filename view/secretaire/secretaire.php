<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="#" class="active">Acceuil</a>
    <div class="dropdown">
    <button class="dropbtn">Les Services
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="#">Heure</a>
        <a href="#">Patient</a>
        <a href="#">Medecin</a>
    </div>
</div> 
<div class="dropdown">
    <button class="dropbtn">Les Rendez-Vous
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="#">Date</a>
        <a href="#">Patient</a>
        <a href="#">Medecin</a>
    </div>
</div> 
<div class="dropdown">
    <button class="dropbtn">Nouveau rendez-Vous
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="clendrier.php">Heure</a>
        <a href="#">Patient</a>
        <a href="#">Medecin</a>
    </div>
</div> 

    <a href="#about">Modifier un RV</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
    <h2>Interface Secretaire</h2>
    <p>Resize the browser window to see how it works.</p>
    <p>Hover over the dropdown button to open the dropdown menu.</p>
</div>
<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../img/1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../img/hopital.jpg" style="width:100%">
    <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../img/doc.jpg" style="width:100%">
    <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
	max-width: 1000px;
	position: relative;
	margin: auto;
}

/* Hide the images by default */
.mySlides {
	display: none;
}

/* Next & previous buttons */
.prev, .next {
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	margin-top: -22px;
	padding: 16px;
	color: white;
	font-weight: bold;
	font-size: 18px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
	user-select: none;
	}

/* Position the "next button" to the right */
.next {
	right: 0;
	border-radius: 3px 0 0 3px;
	}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
	background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
	color: #f2f2f2;
	font-size: 15px;
	padding: 8px 12px;
	position: absolute;
	bottom: 8px;
	width: 100%;
	text-align: center;
	}

/* Number text (1/3 etc) */
.numbertext {
	color: #f2f2f2;
	font-size: 12px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
}

/* The dots/bullets/indicators */
.dot {
	cursor: pointer;
	height: 15px;
	width: 15px;
	margin: 0 2px;
	background-color: #bbb;
	border-radius: 50%;
	display: inline-block;
	transition: background-color 0.6s ease;
}
.active, .dot:hover {
	background-color: #717171;
}
/* Fading animation */
.fade {
	-webkit-animation-name: fade;
	-webkit-animation-duration: 1.5s;
	animation-name: fade;
	animation-duration: 1.5s;
}
@-webkit-keyframes fade {
	from {opacity: .4} 
	to {opacity: 1}
}
@keyframes fade {
	from {opacity: .4} 
	to {opacity: 1}
}
<script>

*function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
    x.className += " responsive";
} else {
    x.className = "topnav";
}
}
</script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
	showSlides(slideIndex += n);
}
// Thumbnail image controls
	function currentSlide(n) {
	showSlides(slideIndex = n);
	}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1} 
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none"; 
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block"; 
	dots[slideIndex-1].className += " active";
	}

</body>
</html>