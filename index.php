
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PET SHOP Website</title>

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
    <nav class="navbar navbar-expand-lg bg-body navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 bgimg">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-info"><i class="bi bi-shop fs-1  me-3 favic"></i>Pet Shop</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="product.php" class="nav-item nav-link">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="bg-info dropdown-menu m-0">
                        <a href="price.php" class=" bg-info dropdown-item">Pricing Plan</a>
                        <a href="team.php" class="dropdown-item">The Team</a>
                        <a href="Order.php" class="dropdown-item">Order</a>
                        <a href="blog.php" class="dropdown-item">Blog Grid</a>
                        <a href="subscribe.php" class="bg-info dropdown-item">Subscription</a>

                        
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link nav-contact bg-info text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-info py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    
                    <h1 class=" bg-transparent text-dark  mb-lg-4 text-black-100">Make Your Pets Happy</h1>
                    <p class="fs-4 bg-transparent text-dark  mb-lg-4 text-carousel text-black-70">Pets provide companionship and emotional support, enhancing overall well-being and reducing stress. They can also promote physical activity through walks and play, improving our health.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="about.php" class="bg-transparent btn btn-outline-info border-3 py-md-3 px-md-5 me-5  text-info-50">Read More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="vedio.mp4" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-info m-0 ms-4 d-none d-sm-block text-info-50">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/orderrrbg.jpg" style="object-fit: cover;"height="200px",width="200px">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-info ps-5 mb-5">
                        <h6 class="text-info text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-1">Our Shop keeps your pets safely with healthy environment and treatment...</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="bg-info nav-link text-uppercase text-dark w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class=" bg-info nav-link text-uppercase text-dark w-100" id="pills-2-tab" data-bs-toggle="pill"
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
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Services</h6>
                <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-house display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                            <p class="bg-transparent">Our Pet boarding provides a safe and caring environment for pets when their owners are away, ensuring their well-being and peace of mind</p>
                            <a class="text-info text-uppercase" href="service.php">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-food display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Feeding</h5>
                            <p class="bg-transparent">Our Pet feeding provides essential information on proper nutrition, feeding schedules, and dietary needs for pets, helping owners to maintain their animals.</p>
                            <a class="text-info text-uppercase" href="service.php">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-grooming display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                            <p class="bg-transparent">Pet grooming offers guidance on grooming techniques,practices to maintain pets hygiene and appearance, promoting their health and enhancing their bond with owners</p>
                            <a class="text-info text-uppercase" href="service.php">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-cat display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Training</h5>
                            <p class="bg-transparent">Pet training provides guidance and techniques to help pet owners effectively train their animals, good behavior, and a strong human-pet bond</p>
                            <a class="text-info text-uppercase" href="service.php">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-dog display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Exercise</h5>
                            <p class="bg-transparent">Pet exercise offers insights into the importance of physical activity and provides ideas for engaging exercises to keep pets healthy, happy, and active.</p>
                            <a class="text-info text-uppercase" href="service.php">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                            <p class="bg-transparent">Pet treatment provides information on medical care, first aid, and remedies for common pet health issues, helping owners address their pets' well-being and safety.</p>
                            <a class="text-info text-uppercase" href="service.php">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/fud1.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/fud3.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/fud2.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


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
                    <a href="product.php" class="btn btn-outline-dark py-md-3 px-md-5 me-3">Shop Now</a>
                    <a href="about.php" class="btn btn-outline-dark py-md-3 px-md-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Team Members</h6>
                <h1 class="display-5 text-uppercase mb-0">Qualified Pets Care Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Luca Ethics</h5>
                        <p class="m-0">Dog groomer</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Hesia Kia</h5>
                        <p class="m-0">Trainer</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/root.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Joy root</h5>
                        <p class="m-0">Sales Associative</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Sania gyan</h5>
                        <p class="m-0">Veterinarian</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/haseen.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Royals Haseen </h5>
                        <p class="m-0">Pet Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="https://freewebsitecode.com/">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white" href="https://freewebsitecode.com">VSM College Students</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


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
<?php
?>