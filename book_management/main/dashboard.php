<?php 
session_start();

 ?>
 <!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Book Inventary Management</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <link rel="stylesheet" type="text/css" href="../main/css/dropdownStyle.css">

</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Book Inventary Management
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  
                  <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <div class="dropdown">
                      <label class="dropbtn">Books</lebel>
                      <div class="dropdown-content">
                        <a href="inventary.php">My Book Inventary</a>
                      </div>
                    </div>
                  </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <div class="dropdown">
                      <label>Hello, <?php echo $_SESSION['name']; ?></label>
                      <div class="dropdown-content">
                        <a href="logout.php">Logout</a>
                      </div>
                    </div>
                  </li>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                <li>
                  <div class="input-group">
  <input id="search-box" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button id="search" type="button" class="btn btn-outline-primary" onclick="">search</button>
</div>
                </li>
                </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Welcome to <br>
            Book Inventary
          </h3>
          <h1>
            school
          </h1>
          <p>
            There are many variations of Books, Novels, etc. of Differents wirters, poets, but the majority have same both readers and writers.
          </p>
          <div class="hero_btn-continer">
            <a href="inventary.php" class="call_to-btn btn_white-border">
              <span>
                My Inventary
              </span>
              <img src="images/right-arrow.png" alt="">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="book-list">
        <h2>Search Results</h2>
        <div id="list-output">
          <div class="row">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header section -->

  

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/app.js"></script>

</body>

</html>
<?php 

 ?>
