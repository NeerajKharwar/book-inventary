<?php
session_start();

include('db_conn.php');

$id = $_SESSION['id'];

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

  <title>
  My Book Inventary</title>



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
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="dashboard.php">
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
                      <a href="nventary.php">My Book Inventary</a>
                    </div>
                  </div>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <div class="dropdown">
                    <label class="dropbtn">My Account</lebel>
                    <div class="dropdown-content">
                      <a href="logout.php">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
              
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->


  <table>
  <tr>
    <th>Book Image</th>
    <th>Book Name</th>
    <th>Author Name</th>
    <th>Publisher</th>
    <th>Action</th>
  </tr>
<?php
$fetch = "SELECT * from myinventry where userId = '$id'";
$res = mysqli_query($conn,$fetch);
if(mysqli_num_rows($res) == 0){
  echo "<center>No books in your inventary!..</center>";
} else {

  while($row = mysqli_fetch_array($res))
  {

?>
  <tr>
    <td><img src="<?= $row['bookImg'] ?>" width="100px"></td>
    <td><a href="<?= $row['url'] ?>"><?= $row['title'] ?></a></td>
    <td><?= $row['author'] ?></td>
    <td><?= $row['publisher'] ?></td>
    <td><a href="deleteBook.php?isbn=<?= $row['bookIsbn'] ?>">Delete Book</a></td>
  </tr>
<?php
  }
}
?>
</table>
</body>

</html>