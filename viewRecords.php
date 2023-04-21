<?php $title="View Attendee" ?>


<?php require_once 'includes/header.php'; 
        require_once 'db/conn.php';
        $results=$crud->getAttendees();

        

 ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Area of Expertise</th>
            <th scope="col">Contact Number</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php 

        while($r = $results->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            echo '<th scope="row">'.$r['attendee_id'].'</th>';
            echo '<td>'.$r['firstname'].'</td>';
            echo '<td>'.$r['lastname'].'</td>';
            echo '<td>'.$r['dateofbirth'].'</td>';
            echo '<td>'.$r['name'].'</td>';
            echo '<td>'.$r['contactnumber'].'</td>';
            echo '</tr>';
        }
        
        
        ?>
       
    </tbody>
</table>





<?php require_once 'includes/footer.php'; ?>