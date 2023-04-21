<?php $title="Index" ?>

 
 <?php require_once 'includes/header.php'; 
        require_once 'db/conn.php';

        $results=$crud->getSpecialties();
 
 ?>


    <h1 class="text-center">Registration for IT  Conference</h1>

  
    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname" >
          
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter last name"  name="lastname">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob" >
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
                <!-- <option value="1" selected>Database Admin</option>
                <option value="0">Software Developer</option>
                <option value="1">Web administrator</option>
                <option value="3">Others</option> -->
                <?php 
                    while($r= $results->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <option value="<?php echo $r['specialty_id'];  ?>">  <?php echo $r['name']; ?> </option>
         
                    <?php } ?>
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  placeholder="name@example.com" name="email">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="submit" name="submit">Submit</button>
        </div>  

    </form>




<?php require_once 'includes/footer.php'; ?>
