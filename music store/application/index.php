<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>

<body>
    <header>
        <div class="header-top">
            <p>Customer Support: +91 9999999999(Mon-Sat) | 10AM to 5PM</p>
        </div>
        <nav>
            <div class="logo">
                <h2>MUSIC STORE</h2>
            </div>
            <div class="search">
                <input type="search" name="search" id="" placeholder="Enter Here For Search">
            </div>
            <div class="menu">
                <a href="#">menu</a>
            </div>
            <div class="icons">
                <a href="#"><i class="bi bi-bag-check-fill"></i></a>
                <a href="#"><i class="bi bi-heart-fill"></i></a>
                <?php
                    if(isset($_SESSION['username'])){    
                           echo "<a href='logout.php'><span>Log Out </span><i class='bi bi-box-arrow-out-right'></i></a>";                  
                    }else{
                        echo "<a href='login.php' id='login'><span>Login </span><i class='bi bi-box-arrow-in-right'></i></a>";
                    }
                ?>
            </div>
        </nav>
        <div class="header-bottom">
            <div class="header-bottom-items">
                <a href="#" class="active">Musical Instruments</a>
                <a href="#">Music Books</a>
                <a href="#">Pro Audio</a>
                <a href="#" class="offer">Offer Zone</a>
                <a href="#">Blog</a>
            </div>
            <a href="#" class="loc"><i class="bi bi-geo-alt"></i> <span>Our Stores</span></a>
        </div>
    </header>

    

    <!-- img moving part -->
    <section class="img-moving">
        <img src="./images/img-rt-1.webp" alt="">
    </section>

    <!-- category selection -->
    <section class="category">
        <h1>Shop By Category</h1>
        <div class="rows">
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
        </div>  
        <div class="rows">
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
            <a href="#" class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>Deals</p>
            </a>
        </div>  
    </section>

    <!-- selling -->
    <section class="selling">
        <h1>Top Selling Product</h1>
        <div class="row">
            <div class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>$ 45.5</p>
                <p><b>Guitar</b></p>
                <p>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </p>
                <button type="submit">Add To Cart</button>
            </div>
            <div class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>$ 45.5</p>
                <p><b>Guitar</b></p>
                <p>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </p>
                <button type="submit">Add To Cart</button>
            </div>
            <div class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>$ 45.5</p>
                <p><b>Guitar</b></p>
                <p>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </p>
                <button type="submit">Add To Cart</button>
            </div>
            <div class="cards">
                <img src="./images/p1.jpg" alt="">
                <p>$ 45.5</p>
                <p><b>Guitar</b></p>
                <p>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </p>
                <button type="submit">Add To Cart</button>
            </div>
        </div>
    </section>

    <!-- form to get first -->
    <section class="fst">
        <div class="left">
            <h1>Get It First</h1>
            <h3>Sign up now for great deals</h3>
        </div>
        <div class="right">
            <input type="email" name="" placeholder="Enter Your Email">
            <div class="input-wrapper">
                <input type="checkbox" name="" id=""><span>Yes, I would like to receive emails with news and offers from Musician's Friend.</span>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="top">
            <div class="footer-items">
                <h2>OFFER</h2>
                <ul>
                    <li><a href="#">Offer Zone</a></li>
                </ul>
            </div>
            <div class="footer-items">
                <h2>Information</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Carrer</a></li>
                    <li><a href="#">Piano Enquiry</a></li>
                </ul>
            </div>
            <div class="footer-items">
                <h2>Other Portals</h2>
                <ul>
                    <li><a href="#">High Furtados</a></li>
                    <li><a href="#">Furtados School of Music</a></li>
                    <li><a href="#">Blogs</a></li>
                </ul>
            </div>
            <div class="footer-items">
                <h2>Policies</h2>
                <ul>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Assurance Program</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="bottom">
            <p>Stay Connected</p>
            <div class="socials">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
            </div>
            <p style="margin-bottom:1px">copyright © 2022 -- online music store</p>
        </div>
    </footer>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- manual script -->
    <script src="./js/main.js"></script>
</body>
</html>