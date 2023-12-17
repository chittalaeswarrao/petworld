
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Pet Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-body navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5 bgimg">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-info"><i class="bi bi-shop fs-1 text-info me-3"></i>Pet Shop</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="product.php" class="nav-item nav-link">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="bg-info dropdown-menu m-0">
                        <a href="price.php" class="bg-info dropdown-item">Pricing Plan</a>
                        <a href="team.php" class="bg-info dropdown-item">The Team</a>
                        <a href="Order.php" class="bg-info dropdown-item active">Order</a>
                        <a href="blog.php" class="bg-info dropdown-item">Blog Grid</a>
                        <a href="subscribe.php" class="bg-info dropdown-item">Subscription</a>

                        
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link nav-contact bg-info text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <div class="subimg">
      <h1 style="text-align: center;">Order Here </h1>
      <!-- Your HTML form -->
<form action="#" method="POST">
    <!-- Your form fields go here -->


        <div class="form-group text-dark">
          <label for="Name">Name:</label>
          <input type="text" id="Name" name="Name" required>
        </div>
        <div class="form-group text-dark">
            <label for="Mobile">Mobile:</label>
            <input type="text" id="Mobile" name="Mobile" required>
          </div>
          <div class="form-group text-dark">
            <label for="Address">Address:</label>
            <input type="text" id="Address" name="Address" required>
          </div>
          <div class="form-group text-dark">
            <label for="State">State:</label>
            <input type="text" id="State" name="State" required>
          </div>
          <div class="form-group text-dark">
            <label for="City">City:</label>
            <input type="text" id="City" name="City" required>
          </div>
          <div class="form-group text-dark">
            <label for="Village">Village:</label>
            <input type="text" id="Village" name="Village" required>
          </div>
        <div class="form-group text-dark">
          <label for="Email">Email:</label>
          <input type="email" id="Email" name="Email" required>
        </div>
        <div class="form-group text-dark">
          <label for="Message">Message:</label>
          <textarea id="Message" name="Message" rows="4" required></textarea>
        </div>
        <button type="submit" name="insert" class="submit-button">Submit</button>
      </form>
      <div id="submission-response"></div>
      <script src="script.js"></script>
</div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-info py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <?php

// php code to Insert data into MySQL database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = ""; // Remove the space in your password field
    $databaseName = "petshop";
    
    // get values from input text and number
    $Name = $_POST['Name'];
    $Mobile = $_POST['Mobile'];
    $Address = $_POST['Address'];
    $State = $_POST['State'];
    $City = $_POST['City'];
    $Village = $_POST['Village'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    
    // connect to MySQL database using mysqli
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    if(!$connect){
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // mysql query to insert data
    $query = "INSERT INTO orders(Name,Mobile,Address,State,City,Village,Email,Message) VALUES ('$Name','$Mobile','$Address','$State','$City','$Village','$Email','$Message')";
    
    $result = mysqli_query($connect, $query);
    
    // check if MySQL query successful
    if($result)
    {
        echo 'Data Inserted';
    }
    else{
        echo 'Data Not Inserted: ' . mysqli_error($connect);
    }
    
    mysqli_close($connect);
}

?>

</body>

</html>