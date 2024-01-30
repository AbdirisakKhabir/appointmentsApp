<?php
// Include Your HEader and Sidebar Components
include 'sidebar.php';
include 'header.php';

include '../config/conn.php';
// Check if the user ID is provided in the URL

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Retrieve user information from the database based on the user ID
    $sql = "SELECT name, email, role, date FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data and assign it to $user_data array
        $user_data = $result->fetch_assoc();

        // Access individual fields from $user_data array
        $name = $user_data['name'];
        $email = $user_data['email'];
        $role = $user_data['role'];
        $date = $user_data['date'];
    } else {
        echo "No user found with ID: " . $user_id;
    }
} else {
    // Handle the case where the user ID is not provided
    echo "User ID not provided.";
}


?>

        <div class="row">
                    
                    <div class="col-lg-8 mx-auto border rounded">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register New User</h1>
                            </div>
                            <form class="user" method="POST" action="../api/users.php">
                                <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control rounded-pill p-4" id="name" value="<?php echo $name; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control rounded-pill p-4" id="email" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="role" class="form-label">Role</label>
                                        <select name="role" id="role" class="form-control rounded-pill">
                                            <option value="Administrator" <?php if ($role == 'Administrator') echo 'selected'; ?>>Administrator</option>
                                            <option value="User" <?php if ($role == 'User') echo 'selected'; ?>>User</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" name="update_user" class="btn btn-primary btn-user btn-block">Update User</button>
                                <hr>
                            </form>
                          
                        </div>
                    </div>
                </div>

                <?php

                include 'footer.php';
                ?>
