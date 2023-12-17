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
    <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5 bgimg">
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
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="product.php" class="nav-item nav-link active">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class=" bg-info dropdown-menu m-0">
                        <a href="price.php" class="dropdown-item">Pricing Plan</a>
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


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Food Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Food for Dogs</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/dog1.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/dog2.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-4.png" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/fud1.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
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
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
    <div class="container-fluid py-5">
        <div class="container">
            
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/fud2.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/cat3.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/dog2.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
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
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/cat4.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Food Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Food Products for Cats</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/cat1.png" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/cat2.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/cat3.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/cat4.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
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
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Best products for your pets</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
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
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-3.png" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-4.png" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
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
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Medicines</h6>
                <h1 class="display-5 text-uppercase mb-0">Medicine Products</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med1.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med2.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med10.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med7.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med3.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med4.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med5.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med9.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med6.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/med8.jpg" alt="">
                        <h6 class="text-uppercase">Quality Pet Foods</h6>
                        <h5 class="text-info mb-0">$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-info py-2 px-3" href="Order.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <a href="" class="btn btn-dark py-md-3 px-md-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-outline-dark py-md-3 px-md-5">Read More</a>
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