<title>Contact us</title>

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
          <li class="active"><a href="contactus">Contact us</a></li>
          <!-- <li><a href="#">Admin</a></li> -->
          <li><a href="about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if(!empty(session::session_get('email'))){ ?>

          <li><a href="login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php }else{ ?>
          <li><a href="signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Contact us</h1>
        <p class="lead">Feel free to use this application to create online draft and save draft as pdf, doc, text on one click,
          anywhere everywhere! Log in now and start writing...</p>
        <a href="#" class="btn btn-primary btn-lg">Login</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Write anytime, anywhere!</h4>
              <p class="card-text">Just login and start writing</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Save draft on one click</h4>
              <p class="card-text">Save draft, edit draft</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Save Draft</h4>
              <p class="card-text">Save draft as pdf, word document, text</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Share Draft</h4>
              <p class="card-text">Share draft on email, facebook, twitter</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
