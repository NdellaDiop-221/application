
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../css/secr.css">


<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fullcalendar.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='../js/jquery.js'></script>
<script src='../js/bootstrap.js'></script>
<script src='../js/moment.min.js'></script>
<script src='../js/fullcalendar.min.js'></script>


</head>
<body>
<!--header-->
<ul>
    <li><a class="active" href="#">Acceuil</a></li>
    <li><a href="#patient">Patients</a></li>
    <li><a href="#medecin">Medecins</a></li>
    <li><a href="#rv">Rendez-vous</a></li>
    <li style="float:right"><a href="../deconnexion.php">Deconnexion</a></li>

</ul>

<div class=calendar>
    <?php require  '../../controller/fullcalendar/rvcalendar.php'?>
</div>

</body>
</html>