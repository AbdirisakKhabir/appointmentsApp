<?php
// Include Your HEader and Sidebar Components
include 'sidebar.php';
include 'header.php';

?>

        <div class="row">
                    
                    <div class="col-lg-8 mx-auto border rounded">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register New User</h1>
                            </div>
                            <form class="user" method="POST" action="../api/users.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control rounded-pill p-4" id="name"
                                        placeholder="Full Name">
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control rounded-pill p-4" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password"  class="form-control rounded-pill p-4" id="password"
                                        placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="password" class="form-label">Role</label>
                                       <select name="role" id="role" class="form-control rounded-pill">
                                        <option value="Select User Role" selected>Select User Role</option>
                                        <option value="Administator">Administator</option>
                                        <option value="User">User</option>
                                       </select>
                                    </div>
                                </div>
                                <button type="submit" name="register_user" class="btn btn-primary btn-user btn-block">
                                    Register User
                                </button>
                                <hr>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

                include 'footer.php';
                ?>
