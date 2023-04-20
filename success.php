<?php

$title = 'Success';
require_once 'includes/header.php';

function getSpecialityName($value){

	switch($value){
		
		case 0:
			return 'Database Admin';
			break;
		case 1:
			return 'Software Developer';
			break;
		case 2:
			return 'Web administrator';
			break;
		case 3:
			return 'Others';
			break;
		default:
			return 'Others';
			break;
	}
}

?>

<h1 class="text-center text-success">You have been registered</h1>

  <!-- from taking values from get method we use $_GET['name of the input field']
  and from post method we use $_POST['name of the input field'] -->
	<div 
	style="display:flex;justify-content: center;
    align-items: center;margin-top: 20px;"
	>
		<div class="card" style="width: 28rem;">
			<div class="card-body">
				<h5 class="card-title">
				<?php 
				echo $_POST['firstname']." ".$_POST['lastname'];	
				?>
				</h5>

				<h6 class="card-subtitle mb-2 text-muted"> <?php  echo getSpecialityName($_POST['specialty']) ?></h6>
				<p class="card-text">Date of Birth: <?php echo $_POST['dob']; ?></p>
				<p class="card-text">Email: <?php echo $_POST['email']; ?></p>
				<p class="card-text">Contact Number: <?php echo $_POST['phone']; ?></p>
				
			</div>
		</div>
	</div>




<?php require_once 'includes/footer.php'; ?>
