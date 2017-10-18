<?php Session::session_start();


?>

<title>Sign up</title>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Pruchha</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index">Home</a></li>
          <li><a href="contactus">Contact us</a></li>
          <!-- <li><a href="#">Admin</a></li> -->
          <li><a href="about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Sign Up</h1>
        <p class="lead">Sign up, create account </p>
        <a href="#" class="btn btn-primary btn-lg">Login</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">


            <title>Register</title>

                  <div class="col-md-3"></div>
                  <div class="col-md-6">

                   <form class="form_register" action="signup/signup_user" method="post" >
              <div class="message"><span> <?php echo $_SESSION['message']; unset($_SESSION['message']);?></span></div>
                    <div class="jumbotron">

                      <p>Register</p>

                      <div class="form-group">
                        <div class="input-group">

                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                          </div>
                          <input type="text" class="form-control"name="first_name" value="" placeholder="first name" required></div>
                        </div>

                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                          </div>
                        <input type="text"class="form-control" name="last_name" value="" placeholder="last name" required></div>
                        </div>

                       <div class="form-group">
                         <div class="input-group">
                           <div class="input-group-addon">
                             <span class="glyphicon glyphicon-envelope"></span>
                           </div>
                           <input type="email"class="form-control" name="email" value="" placeholder="email" required></div>
                         </div>

                         <div class="form-group">
                           <div class="input-group">
                             <div class="input-group-addon">
                               <span class="glyphicon glyphicon-lock"></span>
                             </div>
                               <input type="password" class="form-control" id="password" name="pwd" value="" placeholder="password" min="6" required></div>
                           </div>

                           <div class="form-group">
                             <div class="input-group">
                               <div class="input-group-addon">
                                 <span class="glyphicon glyphicon-lock"></span>
                               </div>
                                 <input type="password" class="form-control" id="confirm_password" name="cnf-pwd" value="" min="6"placeholder="confirm password"required></div>
                                 <span id="message" style="padding:5px;"></span>
                             </div>

                      <div class="form-group ">
                         <input type="radio" name="gender" value="Male" checked>Male
                         <input type="radio" name="gender" value="Female" >Female</div>
                          <p style="font-size:14px;"> By creating an account you agree to our <a href="./terms-and-conditions.php">Terms & Privacy</a>.</p>
                       <div class="form-group">
                          <button type="submit" class="btn btn-primary"name="button" value="sign up">Sign up</button></div>

                      <div class="form-group">
                        <p style="font-size:15px;">Already have an account? Please sign in</p>
                        <a href="login">Sign In</a></div>
                      </div>
                     </form>

                     </div>

                    <div class="col-md-3"></div>

        <script type="text/javascript">
        $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
          $('#message').html('Password Matching').css('color', 'green');
        } else
          $('#message').html('Passwords not matching').css('color', 'red');
        });
        </script>

        </html>

    </div>
    <!-- /.container -->
