<?php $title="Index" ?>

 
 <?php require_once 'includes/header.php'; ?>


    <h1 class="text-center">Registration for IT  Conference</h1>

  
    <form>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter first name" >
          
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter last name" >
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob" >
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" aria-label="Default select example" id="specialty">
                <option value="0" selected>Database Admin</option>
                <option value="1">Software Developer</option>
                <option value="2">Web administrator</option>
                <option value="3">Others</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
  

        <div class="d-grid gap-2">
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </div>  

    </form>




<?php require_once 'includes/footer.php'; ?>
