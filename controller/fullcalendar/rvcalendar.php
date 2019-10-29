<?php
	$bdd = new PDO('mysql:host=localhost;dbname=hosto;charset=utf8', 'root', '');

	$sql = "SELECT id, patient, start, color FROM rendezVous ";

	$req = $bdd->prepare($sql);
	$req->execute();

	$events = $req->fetchAll();

	$requete = $bdd->prepare("SELECT * FROM user WHERE id_role = 3");
	$requete->execute();

	$medecin = $requete->fetchAll();

?>

    <style>
		#calendar {
			max-width: 800px;
		}
		.col-centered{
			float: none;
			margin: 0 auto;
		}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Rendez-vous</h1>
                <p class="lead">Plannifier, Modifier ou Supprimer un rv</p>
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Ajouter un Rendez-vous</h4>
			  </div>
			  <div class="momodaldal-body">
				
				  <div class="form-group">
					<label for="patient" class="col-sm-2 control-label">Patient</label>
					<div class="col-sm-10">
					  <input type="text" name="patient" class="form-control" id="patient" placeholder="patient">
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
						<select name="color" class="form-control" id="color">
							<option value="">Choose</option>
							<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
							<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
							<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
							<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
							<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
							<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
							<option style="color:#000;" value="#000">&#9724; Black</option>
							
							</select>
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
						<select name="color" class="form-control" id="color">
							<option value="">Choose</option>
							<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
							<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
							<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
							<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
							<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
							<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
							<option style="color:#000;" value="#000">&#9724; Black</option>
							
							</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Annuler le rendez-vous</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">

				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

	<script>
	dateauj = new Date();
	today = dateauj.getFullYear()+"-"+(dateauj.getMonth()+1)+"-"+dateauj.getDate()

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: today,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start) {
				if(start.isBefore(moment())) {
					$('#calendar').fullCalendar('unselect');
					return false;
				}
					$('#ModalAdd #date').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
					$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
					$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #patient').val(event.patient);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['patient']; ?>',
					start: '<?php echo $start; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
		
	});

</script>