<?php Session::session_start();


?>
<title>Login</title>

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
        <h1 class="display-3">Log in</h1>
        <p class="lead">Log in now </p>

      </header>

      <!-- Page Features -->
      <div class="row text-center">

                  <div class="col-sm-3"></div>
                  <div class="col-sm-6">
        <div class="message"><span><?php echo $_SESSION['message'];unset($_SESSION['message']);?></span></div>

                   <form class="form_register" action="login/login_user" method="post">
                    <div class="jumbotron">
                      <p>Log in</p>
                       <div class="form-group">
                         <div class="input-group">
                           <div class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                          </div>
                           <input type="text" class="form-control" name="email" value="" placeholder="Email " ></div>
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <span class="glyphicon glyphicon-lock"></span>
                            </div>
                              <input type="password" class="form-control"name="pwd" value="" placeholder="Password" ></div>
                          </div>


                       <div class="form-group">
                          <button type="submit" class="btn btn-primary"name="button">Log in</button></div>

                      <div class="form-group">
                        <h4 style="font-size:15px;">Don't have an account? Please sign in</h4>
                        <a href="signup">Sign up</a></div>
                      </div>
                     </form>
                     </div>
                    <div class="col-sm-3"></div>


        </html>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
