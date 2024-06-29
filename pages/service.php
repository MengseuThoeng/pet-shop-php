<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <?php include_once '../layout/styleInPage.php'; ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php include_once '../components/topbar.php'; ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
        <a href="../index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="../index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link active">Service</a>
                <a href="product.php" class="nav-item nav-link">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blogs</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.php" class="dropdown-item">Blog Grid</a>
                        <a href="detail.php" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Services</h6>
            <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-house display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                        <p>Our comfortable and safe boarding facilities ensure your pets feel at home while you're away.</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-food display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Feeding</h5>
                        <p>We provide nutritious meals tailored to your pet's dietary needs and preferences.</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-grooming display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                        <p>Our grooming services keep your pets clean, healthy, and looking their best.</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-dog display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Training</h5>
                        <p>Our professional trainers help your pets learn good behavior and new tricks.</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-dog display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Exercise</h5>
                        <p>We ensure your pets get the exercise they need to stay healthy and active.</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                        <p>Our veterinary services provide comprehensive care to keep your pets healthy.</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel bg-white p-5">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-4">
                            <img class="img-fluid mx-auto" src="../img/testimonial-1.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                <i class="bi bi-chat-square-quote text-primary"></i>
                            </div>
                        </div>
                        <p>I couldn't be happier with the care my dog receives at Happy Paws. The staff is incredibly friendly and knowledgeable. My dog always comes home happy and well-groomed.</p>
                        <hr class="w-25 mx-auto">
                        <h5 class="text-uppercase">John Doe</h5>
                        <span>Graphic Designer</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-4">
                            <img class="img-fluid mx-auto" src="../img/testimonial-2.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                <i class="bi bi-chat-square-quote text-primary"></i>
                            </div>
                        </div>
                        <p>Happy Paws has been a lifesaver for us. We travel frequently and knowing our dog is in good hands makes all the difference. The team is professional and truly loves animals.</p>
                        <hr class="w-25 mx-auto">
                        <h5 class="text-uppercase">Jane Smith</h5>
                        <span>Travel Blogger</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-4">
                            <img class="img-fluid mx-auto" src="../img/user.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                <i class="bi bi-chat-square-quote text-primary"></i>
                            </div>
                        </div>
                        <p>Our puppy loves going to Happy Paws for daycare. The facilities are clean, and the staff is always attentive. We've noticed a positive change in our pup's behavior since starting here.</p>
                        <hr class="w-25 mx-auto">
                        <h5 class="text-uppercase">Emily Johnson</h5>
                        <span>Teacher</span>
                    </div>
                </div>
            </div>
        </div>
         </div>
    </div>
    <!-- Testimonial End -->


    <!-- Pricing Plan Start -->
    <?php include_once '../components/pricePlan.php'; ?>
    <!-- Pricing Plan End -->
    

    <!-- Footer Start -->
    <?php include_once '../components/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <?php include_once '../layout/script.php'; ?>
</body>

</html>