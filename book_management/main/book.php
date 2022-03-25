<?php
session_start();

include('db_conn.php');

$id = $_SESSION['id'];

if (isset($_POST['read'])) {
  $bookImg = $_POST['bookImg'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $url = $_POST['url'];
  $publisher = $_POST['publisher'];
  $bookIsbn = $_POST['bookIsbn'];

  $check = "SELECT * from myinventry where userId = '$id' and bookIsbn = '$bookIsbn'";
  $resp = mysqli_query($conn,$check);
  if(mysqli_num_rows($resp) > 0){

  } else {
    $insert = "INSERT into myinventry (userId, bookIsbn, bookImg, title, author, url, publisher) values ('$id', '$bookIsbn', '$bookImg', '$title', '$author', '$url', '$publisher')";
    $rest = mysqli_query($conn,$insert);

  }
}
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

  <title>Read Book</title>



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

  <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>
    <script type="text/javascript">
      google.books.load();
      function initialize() {
        var viewer = new google.books.DefaultViewer(document.getElementById('viewerCanvas'));
        var index = document.URL.indexOf('?');
        if (index > 0) {
            var bookIsbn = document.URL.substring(index, document.URL.length).split("=")[1]
            console.log(bookIsbn);
        }
        //viewer.load('ISBN:0738531367'); //for test purpose
        viewer.load('ISBN:'+bookIsbn);
      }
      google.books.setOnLoadCallback(initialize);
    </script>  
</head>

<body>
  <div class="top_container sub_pages">
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
                      <a href="add_new_book.php">Add Book</a>
                    </div>
                  </div>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <div class="dropdown">
                    <label class="dropbtn">My Account</lebel>
                    <div class="dropdown-content">
                      <a href="href=logout.php">Logout</a>
                    </div>
                  </div>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
              </ul>
              
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->

  <div class="container">
    <div class="text-center" id="viewerCanvas" style="width: 800px; height: 600px"></div>
  </div>


  
</body>

</html>