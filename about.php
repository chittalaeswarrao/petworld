<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Pet Shop Website Template</title>
    <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description"> -->

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
        <a href="index.php" class="navbar-brand ms-lg-5"></a>
        <h1 class="m-0 text-uppercase text-info"><i class="bi bi-shop fs-1 text-info me-3"></i>Pet Shop</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="product.php" class="nav-item nav-link">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class=" bg-info dropdown-menu m-0">
                        <a href="price.php" class="dropdown-item">Pricing Plan</a>
                        <a href="team.php" class="dropdown-item">The Team</a>
                        <a href="Order.php" class="dropdown-item">Order</a>
                        <a href="blog.php" class="dropdown-item">Blog Grid</a>
                        <a href="subscribe.php" class="dropdown-item">Subscription</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link nav-contact bg-info text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/aboutus.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-info ps-5 mb-5">
                        <h6 class="text-info text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-4">Our Shop keeps your pets safely with healthy environment and treatment...</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class=" bg-info nav-link text-uppercase text-dark w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class=" bg-info  nav-link text-uppercase text-dark w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Our Vission</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0 bg-transparent">Our mission is to provide a welcoming and caring environment where pet lovers can find the highest quality products, expert advice, and adorable companions. We are committed to promoting the well-being of pets and strengthening the bond between humans and their furry, feathered, or scaly friends. Through our dedication to ethical sourcing, responsible pet ownership, and community engagement, we aim to be the trusted resource for all things pet-related in our community.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0 bg-transparent">Our vision is to become the ultimate destination for pet enthusiasts, setting the industry standard for exceptional pet care, customer service, and community involvement. We aim to create a haven for pets and their owners, offering a wide range of innovative and responsibly sourced products, services, and educational resources. We envision a future where our pet shop is not only a retail space but a hub for fostering the love and well-being of all pets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div>
         <h1 style="text-align: center;color:rgb(34, 185, 245);">Read More about Us</h1>
        <div class="about border-start border-5 border-info ps-5 mb-5">
        <h2>Our Passion for Pets</h2>
        <p class="mb-0 bg-transparent" >Our dedicated team shares a deep passion for animals and their well-being. We believe that pets are not just companions; they are family. That's why we strive to provide the best products, services, and advice to help you care for your beloved pets.</p>
        </div>

        <div class="about border-start border-5 border-info ps-5 mb-5">
        <h2>Our Pets</h2>
        <p class="mb-0 bg-transparent">From cuddly puppies and kittens to exotic reptiles and colorful fish, we offer a diverse range of pets for you to choose from. All our pets are healthy, well-cared for, and ready to bring joy to your home.</p>
        </div>

        <div class="about border-start border-5 border-info ps-5 mb-5">
        <h2>Premium Pet Supplies</h2>
        <p class="mb-0 bg-transparent">We stock only the highest quality pet supplies, including food, toys, bedding, and grooming products. You can trust us to provide everything your pet needs to live a happy and healthy life.</p>
        </div>
        <div class="about border-start border-5 border-info ps-5 mb-5">
            <h2>What we offer</h2>
            <p class="mb-0 bg-transparent">A Wide Selection of Pets: From cuddly puppies and kittens to exotic reptiles and colorful fish, we offer a diverse range of pets for you to choose from. All our pets are healthy, well-cared for, and ready to bring joy to your home.

                Premium Pet Supplies: We stock only the highest quality pet supplies, including food, toys, bedding, and grooming products. You can trust us to provide everything your pet needs to live a happy and healthy life.
                
                Knowledgeable Staff: Our team is well-informed and ready to assist you with any questions or concerns you may have about pet care. We're here to offer advice and recommendations to ensure your pet receives the best care possible.
                
                Grooming and Health Services: We offer grooming services to keep your pets looking and feeling their best. Additionally, our in-house veterinarian can provide vaccinations, health check-ups, and more to ensure your pets stay in top-notch condition.
                
                Pet Adoption: We promote responsible pet ownership and encourage adoption from local shelters and rescue organizations. We frequently host adoption events to help pets in need find loving homes.</p>
        </div>
        <div class="about border-start border-5 border-info ps-5 mb-5">
            <h2>Community involvement</h2>
            <p class="mb-0 bg-transparent">We believe in giving back to the community and supporting pet-related causes. We actively participate in local pet adoption drives, charity events, and educational programs to promote the welfare of animals.</p>
                
        </div>
        <div class="about border-start border-5 border-info ps-5 mb-5">
            <h2>Visit us Today</h2>
            <p class="mb-auto bg-transparent">Visit our Pet shop and experience a pet shop that's more than just a store; it's a place where pet lovers come together to celebrate the joy and companionship that animals bring to our lives. Our doors are always open, and we can't wait to meet you and your furry friends.</p>
                
        </div>
        <h2 style="text-align: center;color:rgb(34, 185, 245);">.....Thank You.....</h2>
    </div>

    




    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-info ps-5 mb-5">
                        <h4 class="text-dark text-uppercase text-black-100">Special Offer</h4>
                        <h1 class="display-5 text-uppercase text-dark mb-0 text-black-60">Save 50% on all items your first order</h1>
                    </div>
                    <p class="text-dark mb-4 text-black-50">Our pet shop is a retail establishment that sells various pets, pet supplies, and accessories to meet the needs of pet owners and animal lovers.</p>
                    <a href="product.php" class="btn btn-dark py-md-3 px-md-5 me-3">Shop Now</a>
                    <a href="about.php" class="btn btn-outline-dark py-md-3 px-md-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


   


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
</body>

</html>