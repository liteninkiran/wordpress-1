<?php

    /* Template Name: Login Page */

    global $user_ID;
    global $wpdb;

    get_header();

    if($user_ID)
    {
        echo "Logged In";
    }
    else
    {
        if($_POST)
        {
            $email = $wpdb->prepare($_POST['username']);
            $password = $wpdb->prepare($_POST['password']);

            $loginArray = array();
            $loginArray['user_login'] = $email;
            $loginArray['user_password'] = $password;

            $verifyUser = wp_signon($loginArray, true);

            // Check if sign-in errored
            if(is_wp_error($verifyUser))
            {
                echo "<p>Invalid Credentials</p>";
            }
            else
            {
                echo "<script>window.location = '" . site_url() . "'</script>";
            }
        }
        else
        {
?>
            <div class="container">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h3>Sign In</h3>
<!-- 
                            <div class="d-flex justify-content-end social_icon">
                                <span><i class="fab fa-facebook-square"></i></span>
                                <span><i class="fab fa-google-plus-square"></i></span>
                                <span><i class="fab fa-twitter-square"></i></span>
                            </div>
-->
                        </div>

                        <div class="card-body">
                            <form method="post">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Email address">
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row align-items-center remember">
                                    <input type="checkbox">Remember Me
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                Don't have an account?<a href="#" class="links">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center links">
                                <a href="#" class="links">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?
        }
    }

    get_footer();

?>