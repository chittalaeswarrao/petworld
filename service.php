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
                <a href="service.php" class="nav-item nav-link active">Services</a>
                <a href="product.php" class="nav-item nav-link">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="bg-info dropdown-menu m-0">
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
                            <p class="mb-0 bg-transparent">Our Pet boarding provides a safe and caring environment for pets when their owners are away, ensuring their well-being and peace of mind</p>
                            <a class="text-info text-uppercase" href="#board">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-food display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Feeding</h5>
                            <p class="mb-0 bg-transparent">Our Pet feeding provides essential information on proper nutrition, feeding schedules, and dietary needs for pets, helping owners to maintain their animals.</p>
                            <a class="text-info text-uppercase" href="#feed">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-grooming display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                            <p class="mb-0 bg-transparent">Pet grooming offers guidance on grooming techniques,practices to maintain pets hygiene and appearance, promoting their health and enhancing their bond with owners</p>
                            <a class="text-info text-uppercase" href="#groom">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-cat display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Training</h5>
                            <p class="mb-0 bg-transparent">Pet training provides guidance and techniques to help pet owners effectively train their animals, good behavior, and a strong human-pet bond</p>
                            <a class="text-info text-uppercase" href="#train">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-dog display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Exercise</h5>
                            <p class="mb-0 bg-transparent">Pet exercise offers insights into the importance of physical activity and provides ideas for engaging exercises to keep pets healthy, happy, and active.</p>
                            <a class="text-info text-uppercase" href="#Exce">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 text-info me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                            <p class="mb-0 bg-transparent">Pet treatment provides information on medical care, first aid, and remedies for common pet health issues, helping owners address their pets' well-being and safety.</p>
                            <a class="text-info text-uppercase" href="#Treat">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    
    <div id="board">
        <div class="boardingg bg-light">
           <img src="img/boardingg.jpg"class="pic" alt="Your Image Description">
           <div class="content">
               <h1 class="text-capitalize text-info">Pet Boarding</h1>
               <p>Discuss the significance of providing pets with a balanced and nutritious diet. Explain how it contributes to their overall health, longevity, and well-being.</p>
              

               <h6>Types of Pet Boarding Facilities</h3>
               <p>There are various types of pet boarding facilities, including kennels, catteries, doggy daycares, and upscale pet resorts. Each type of facility may offer different services and accommodations.</p>

               <h6>Services Offered</h6>
               <p>Pet boarding facilities typically offer services such as feeding, exercise, playtime, grooming, and, in some cases, training. Some facilities also provide medical care or have an on-site veterinarian.</p>
               <h6>Benefits of Pet Boarding</h6>
               <p>Pet boarding provides a safe and controlled environment for pets when their owners are unavailable. It ensures that pets receive proper care, socialization, and attention.</p>
            </div>
        </div>
       </div>
       <br>
       <br>
    <div id="feed">
     <div class="feeding bg-light">
        <img src="img/feeding.jpg"class="pic" alt="Your Image Description">
        <div class="content">
            <h1 class="text-capitalize text-info">Pet feeding</h1>
            <p>Discuss the significance of providing pets with a balanced and nutritious diet. Explain how it contributes to their overall health, longevity, and well-being.</p>
            <h6>Pet Feeding and Nutrition</h6>
            <p>Proper pet nutrition is essential for the health and well-being of your furry friends. Learn about the importance of feeding your pets the right way.</p>

            <h6>Understanding Pet Dietary Needs</h6>
            <p>Different pets have different dietary requirements. Learn about the specific dietary needs of dogs, cats, rabbits, birds, and reptiles.</p>

            <h6>Choosing the Right Pet Food</h6>
            <p>Discover how to select the most suitable pet food, including dry kibble, wet food, raw diets, or homemade recipes. Understand the pros and cons of each option.</p> 
        </div>
     </div>
    </div>
    <br>
       <br>
    <div id="groom">
        <div class="grooming bg-light">
           <img src="img/grooming.jpg"class="pic" alt="Your Image Description">
           <div class="content">
               <h1 class="text-capitalize text-info">Pet grooming</h1>
               <p>Discuss the significance of providing pets with a balanced and nutritious diet. Explain how it contributes to their overall health, longevity, and well-being.</p>
               <h6>Pet Grooming Services</h6>
               <p>Keeping your pet clean and well-groomed is essential for their health and happiness. Learn more about our pet grooming services and the benefits of regular grooming.</p>
       
               <h6>Why Pet Grooming Matters</h6>
               <p>Explore the reasons why pet grooming is important, from maintaining a healthy coat to preventing skin issues and providing a stress-free experience for your pet.</p>
       
               <h6>Our Grooming Services</h6>
               <p>Discover the range of grooming services we offer, including bathing, brushing, nail trimming, ear cleaning, and special treatments. We tailor our services to suit your pet's needs.</p>
           
            </div>
        </div>
       </div>
       <br>
       <br>
       <div id="train">
        <div class="training bg-light">
           <img src="img/train.jpg"class="pic" alt="Your Image Description">
           <div class="content">
               <h1 class="text-capitalize text-info">Pet Training</h1>
               <p>Discuss the significance of providing pets with a balanced and nutritious diet. Explain how it contributes to their overall health, longevity, and well-being.</p>
               <h6>Pet Training and Obedience</h6>
               <p>Training your pet is essential for a harmonious relationship and a well-behaved companion. Explore our pet training services and the benefits of a trained pet.</p>
       
               <h6>Why Pet Training is Important</h6>
               <p>Learn about the significance of pet training, from improving communication with your pet to ensuring their safety and the well-being of your family and community.</p>
       
               <h6>Our Training Services</h6>
               <p>Discover the range of training services we offer, including obedience training, behavior modification, and specialized training programs. Our certified trainers are here to help your pet reach their full potential.</p>
            </div>
        </div>
       </div>
       <br>
       <br>
       <div id="Exce">
        <div class="Excercise bg-light">
           <img src="img/excercise.jpg"class="pic" alt="Your Image Description">
           <div class="content">
               <h1 class="text-capitalize text-info">Pet Excercise</h1>
               <p>Discuss the significance of providing pets with a balanced and nutritious diet. Explain how it contributes to their overall health, longevity, and well-being.</p>
               <h6>Pet Exercise and Activity</h6>
               <p>Regular exercise is vital for your pet's health and well-being. Learn about the importance of keeping your pet active and explore exercise tips and ideas.</p>
       
               <h6>Benefits of Pet Exercise</h6>
               <p>Discover the numerous advantages of exercising your pet, from maintaining a healthy weight and preventing health issues to providing mental stimulation and bonding opportunities.</p>
       
               <h6>Exercise Tips and Ideas</h6>
               <p>Get practical tips on how to keep your pet active, including daily walks, playtime, interactive toys, and exercise routines for different pet types. Find what works best for your furry friend.</p>
       
               <!-- Add more content sections as needed -->
            </div>
        </div>
       </div>
       <br>
       <br>
       <div id="Treat">
        <div class="Treatment bg-light">
           <img src="img/treatment.jpg"class="pic" alt="Your Image Description">
           <div class="content">
               <h1 class="text-capitalize text-info">Pet Treatment</h1>
               <p>Discuss the significance of providing pets with a balanced and nutritious diet. Explain how it contributes to their overall health, longevity, and well-being.</p>
               <h6>Pet Exercise and Activity</h6>
               <p>Regular exercise is vital for your pet's health and well-being. Learn about the importance of keeping your pet active and explore exercise tips and ideas.</p>
       
               <h6>Benefits of Pet Exercise</h6>
               <p>Discover the numerous advantages of exercising your pet, from maintaining a healthy weight and preventing health issues to providing mental stimulation and bonding opportunities.</p>
       
               <h6>Exercise Tips and Ideas</h6>
               <p>Get practical tips on how to keep your pet active, including daily walks, playtime, interactive toys, and exercise routines for different pet types. Find what works best for your furry friend.</p>
       
               <!-- Add more content sections as needed -->
           
            </div>
        </div>
       </div>
    

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-info ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-info text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Basic</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-info p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Pet Food Package</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Grooming Essentials</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Pet Accessories Bundle</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Membership Benefits</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="subscribe.php" class="btn btn-info text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">Standard</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-info p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>99<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Premium Pet Food Package</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Full Grooming Services</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Pet Insurance Discount</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Membership Benefits</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="subscribe.php" class="btn btn-info text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Extended</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-info p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>149<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Full Spa Day Grooming</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Comprehensive Pet Wellness</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Pet Spa Membership</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Exclusive Events and Services</span>
                                <i class="bi bi-check2 fs-4 text-info"></i>
                            </div>
                            <a href="subscribe.php" class="btn btn-info text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    

    


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