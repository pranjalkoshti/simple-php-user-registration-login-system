<?php

?>

<title>Dashboard</title>


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
          <?php if(!empty(session::session_get('email'))){ ?>

          <li><a href="login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

<h1>Dashboard</h1>

</body>
