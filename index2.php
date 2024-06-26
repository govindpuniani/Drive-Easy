<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <title>
            Drive Easy
        </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Car Rental Company</title>
    <!--Link to CSS-->
    <link rel="stylesheet" href="CSS/style.css">
    <!--Link to Boxicons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!--Header-->
    <header>
        <a href="#" class="logo"><img src="img/jeep.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><h1>Drive Easy</h1></li>
            <li><a href="#home">HOME</a></li>
            <li><a href="#ride">RIDE</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#reviews">REVIEWS</a></li>
        </ul>

        <div class="header-btn">
        <ul class="nav justify-content-end">
                <li class="nav-item">
                    <?php
                    session_start();
                    // Check if the user is logged in
                    if (isset($_SESSION['name'])) {
                        // User is logged in, display their name and logout link
                        echo '<span class="nav-link" style="text-shadow: 1px 1px rgb(0, 0, 0);">Hello ' . $_SESSION['name'] . '</span>';
                        echo '<a class="nav-link" style="text-shadow: 1px 1px rgb(241, 241, 241);" href="logout.php" id="logout">Log Out</a>';
                    } else {
                        // User is not logged in, display default message
                       // echo '<span class="nav-link" style="text-shadow: 1px 1px rgb(241, 241, 241);">Hello user</span>';
                    }
                    ?>
                </li>
            </ul>        </div>
    </header>
    <!--Home-->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> to <br>rent a car</h1>
            <!-- <p>Download our Application available for both ios and Android</p> -->
            <div class="app-stores">
                <img src="img/ios.png" alt="">
                <img src="img/512x512.png" alt="">
            </div>
        </div>
        <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form>
        </div>
    </section>
    <!--Ride-->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How It Works</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose a Location</h2>
                <p>Choose a location from where you want to start your journey with us</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick-Up Date</h2>
                <p>Choose the date when you'll begin your beautiful journey with us</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book A Car</h2>
                <p>Book Your Wheels for the beautiful journey and lets begin</p>
            </div>
        </div>
    </section>
    <!--Services-->
    <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Explore Out Top Deals<br>From Top Rated Dealers</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                <p>Diesel</p>
                <h3>2018 Honda Civic</h3>
                <h2>450000| 25000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car2.jpg" alt="">
                </div>
                <p>Petrol</p>
                <h3>2018 Honda Civic</h3>
                <h2>500000 | 35000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car3.jpg" alt="">
                </div>
                <p>Diesel</p>
                <h3>2018 Honda City</h3>
                <h2>350000 | 25000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car4.jpg" alt="">
                </div>
                <p>petrol</p>
                <h3>2018 Honda City</h3>
                <h2>320000| 35000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car5.jpg" alt="">
                </div>
                <p>Petrol</p>
                <h3>CRETA</h3>
                <h2>700000 | 50000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car6.jpg" alt="">
                </div>
                <p>Petrol</p>
                <h3>VERNA</h3>
                <h2> 650000| 32000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car7.jpg" alt="">
                </div>
                <p>Petrol</p>
                <h3>FORTUNER</h3>
                <h2>3500000 | 130000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car8.jpg" alt="">
                </div>
                <p>Petrol</p>
                <h3>JEEP</h3>
                <h2>1800000| 90000<span>/month</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="img/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>
                    Welcome to DriveEasy, your premier destination for seamless car purchase and rental solutions. At DriveEasy, we're dedicated to transforming the way you experience mobility. With a diverse selection of vehicles ranging from sleek sedans to spacious SUVs, we offer flexible rental plans tailored to your needs, whether it's for a weekend getaway or a long-term lease. Our commitment to quality assurance ensures that each vehicle undergoes rigorous inspections, guaranteeing optimal performance and reliability. With transparent pricing, exceptional customer service available 24/7, and a focus on environmental sustainability, DriveEasy is your trusted partner for all your automotive needs. Join the DriveEasy community today and experience the freedom of the open road like never before.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>
    <!-- Review -->
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>What Our Customers Say</h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <img src="img/rev1.jpg" alt="">
                </div>
                <h2>Saransh Gandhi</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                </div>
                <p>Such a cool website. Could easily pickup the car hassel free.</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="img/rev2.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum atque inventore officia quasi. Perspiciatis voluptatum ut enim repudiandae blanditiis in esse, commodi quisquam ab amet nam quidem fugiat excepturi natus</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="img/rev3.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex distinctio consectetur aut doloremque officiis repellat, tempore laudantium accusantium, sequi quis nihil sint suscipit adipisci soluta harum. Odit dolore molestiae distinctio</p>
            </div>
        </div>
    </section>
    <!-- Newsletter -->
    <section class="newsletter">
        <h2>Subscribe To Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter Your Email...">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>
    <div class="copyright">
        <p>&#169; CarRento All Rights Reserved</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>
    </div>


    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--Link to JS-->
    <script src="main.js"></script>
</body>

</html>