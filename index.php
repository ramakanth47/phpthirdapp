<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel To Vizag - Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Top Navbar Styles */
        .top-navbar {
            background-color: #0000ff80;
            color: white;
            font-size: 0.9rem;
            padding-left: 15px;
        }

        .top-navbar .contact-info {
            margin-right: 20px;
        }

        .top-navbar .contact-info span {
            margin-right: 15px;
            color: white;
        }

        .top-navbar .contact-info i {
            color: orange;
            margin-right: 5px;
        }

        .social-icons a {
            margin-left: 10px;
        }

        /* Main Navbar Styles */
        .navbar-nav .nav-link {
            color: #4b0082;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link.default-active {
            color: #ff4500;
            font-weight: bold;
            border-bottom: 2px solid #ff4500;
        }

        .navbar-nav .nav-link:hover {
            color: #ff4500;
        }

        .dropdown-item {
            color: #4b0082;
            transition: color 0.3s;
        }

        .dropdown-item:hover {
            color: #ff4500;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }
       
        .btn-book {
            background-color: #ff4500;
            color: #fff;
            font-weight: bold;
        }
        .dropdown-item{
            margin-bottom:-8px
        }
        li ul#submenu {
            left:0;
            opacity:0;
            z-index: 1;
            display:inline-block;
            padding-bottom:0px
            
            
        }
       
        li:hover ul#submenu{
           opacity: 1;
            top:100%;
            visibility: visible;
            margin-left:200px;
            list-style-type: none;
        }
        li:hover ul #submenu2{
            margin-left:200px;
            list-style-type:none
        } 
        /* Best Popular Packages Section */
        .section-title {
            color: #ff6347;
            font-style: italic;
            text-align: center;
            margin-bottom: 10px;
        }

        .section-heading {
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .card-title {
            color: black;
            font-weight: bold;
        }

        .card:hover .card-title {
            color: #ff4500;
        }

        .btn-enquiry {
            background-color: white;
            color: #ff4500;
            border: 2px solid #ff4500;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-enquiry:hover {
            background-color: #ff4500;
            color: white;
        }

        .review-text {
            color: green;
            font-size: 0.9rem;
        }

        .review-stars {
            color: #ff6347;
        }

        .more-btn {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            display: block;
            margin: 20px auto;
            width: fit-content;
        }
    </style>
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar top-navbar py-2">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="d-flex contact-info">
            <span class="navbar-text"><i class="fas fa-mobile-alt"></i> +91 6309309730</span>
            <span class="navbar-text"><i class="fas fa-envelope"></i> traveltovizg@gmail.com</span>
            <span class="navbar-text"><i class="fas fa-map-marker-alt"></i> Visakhapatnam</span>
        </div>
        <div class="d-flex social-icons">
            <a href="https://www.facebook.com/groups/2509675302504935" target="_blank"><i class="fab fa-facebook-f" style="color: #1877F2;"></i></a>
            <a href="https://www.instagram.com/traveltovizag/" target="_blank"><i class="fab fa-instagram" style="color: #E4405F;"></i></a>
            <a href="https://www.youtube.com/channel/UCA9dUIxyPYQgdt7SIL2fmBg" target="_blank"><i class="fab fa-youtube" style="color: #FF0000;"></i></a>
            <a href="https://in.pinterest.com/traveltovizag/" target="_blank"><i class="fab fa-pinterest" style="color: #E60023;"></i></a>
        </div>
    </div>
</nav>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Travel To Vizag" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link default-active" href="#" onclick="setActive(this)">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="setActive(this)">About us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="tourPackagesDropdown" role="button" aria-expanded="false">Tour Packages</a>
                    <ul class="dropdown-menu" aria-labelledby="tourPackagesDropdown">
                           <li><a class="dropdown-item" href="#">Domestic-tour-packages</a>
                           <ul id = "submenu">
                              <li><a class="dropdown-item" href="#">Vizag </a></li>
                              <li><a class="dropdown-item" href="#">Araku</a></li>
                              <li><a class="dropdown-item" href="#">Kerala</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">International Tour Packages</a>
                            <ul id = "submenu2">
                               <li><a class="dropdown-item" href="#">Bangkok</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Devotional Tour Packages</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="setActive(this)">Book a Cab</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="setActive(this)">Shop now</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="setActive(this)">Resorts</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="setActive(this)">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="setActive(this)">Contact Us</a></li>
            </ul>
            <a href="#" class="btn btn-book">Book Now</a>
        </div>
    </div>
</nav>

<!-- Trending Destinations Section -->
<div class="container my-5">
    <div class="text-center">
        <h2 class="mb-4" style="font-family: 'Cursive'; color: #ff4500;">Explore Great Places</h2>
        <h3 class="fw-bold">Trending Destinations</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="images/1.jpg" class="card-img-top" alt="Vizag">
                <div class="card-body text-center">
                    <h5 class="card-title">Vizag</h5>
                    <a href="#" class="btn btn-outline-primary">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="images/2.jpg" class="card-img-top" alt="Kerala">
                <div class="card-body text-center">
                    <h5 class="card-title">Kerala</h5>
                    <a href="#" class="btn btn-outline-primary">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="images/3.jpg" class="card-img-top" alt="Bangkok">
                <div class="card-body text-center">
                    <h5 class="card-title">Bangkok</h5>
                    <a href="#" class="btn btn-outline-primary">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="#" class="btn btn-primary">More Destinations</a>
    </div>
</div>

<!-- Best Popular Packages Section -->
<div class="container my-5">
    <h2 class="section-title">Best Popular Packages</h2>
    <h3 class="section-heading">Check out our exclusive deals</h3>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/4.jpg" class="card-img-top" alt="Package 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Araku</h5>
                    <p class="review-text"><span class="review-stars">★★★★☆</span> </p>
                    <a href="#" class="btn btn-enquiry">Enquiry Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/5.jpg" class="card-img-top" alt="Package 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Goa</h5>
                    <p class="review-text"><span class="review-stars">★★★★☆</span></p>
                    <a href="#" class="btn btn-enquiry">Enquiry Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/6.jpg" class="card-img-top" alt="Package 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Maldives</h5>
                    <p class="review-text"><span class="review-stars">★★★★☆</span></p>
                    <a href="#" class="btn btn-enquiry">Enquiry Now</a>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn more-btn">More Packages</a>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
<script>
    function setActive(link) {
        document.querySelectorAll(".nav-link").forEach(item => {
            item.classList.remove("active");
        });
        link.classList.add("active");
    }
</script>

</body>
</html>
