<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <a href="#news">Ajouter Medecin</a>
    <a href="ajoutsecretaire.php">Ajouter Secretaire</a>
<div class="dropdown">
    <button class="dropbtn">Dropdown 
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
</div> 
    <a href="#about">About</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
    <h2>Espace admin</h2>
    <p>Vos taches</p>
    <p></p>
</div>

<div class="header">
        <h1>ADMINISTRATEUR</h1>
        <p></p>
</div>

<script>
//php 
/*function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
    x.className += " responsive";
} else {
    x.className = "topnav";
}
}
</script>

</body>
</html>
