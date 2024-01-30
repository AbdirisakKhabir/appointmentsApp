<?php
include 'sidebar.php';
include 'header.php';
include '../config/conn.php';

// Query
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>
     <!-- Begin Page Content -->
     <div class="container-fluid">

<!-- Table For Dsplaying Data -->
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                              
                                        
                                  
                                    <tbody>
                                    <?php
                                        foreach($result as $row){
                                            ?>
                                            <tr>
                                                <td> <?php echo $row['id'] ?></td>
                                                <td> <?php echo $row['name'] ?></td>
                                                <td> <?php echo $row['email'] ?></td>
                                                <td> <?php echo $row['role'] ?></td>
                                                <td> <?php echo $row['date'] ?></td>
                                                <td> 
                                                <a href="update_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                                                    <a class="btn btn-danger">Delete</a>
                                                </td>
                                            
                                                
                                            </tr>
                                            
                                            <?php
                                                
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<!-- Search Script -->
<script>

$(document).ready(function() {
$('#usersTable').DataTable();
});








<?php
include 'footer.php';

?>