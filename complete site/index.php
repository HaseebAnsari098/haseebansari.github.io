<?php
include "connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $msg = $_POST['msg'];
    $query = "INSERT INTO site (name,email,phone,msg) VALUES ('$name','$email','$number','$msg')";
    if ($query) {
        echo "vlaues have been enterd";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haseeb Ansari</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<body>

    <!-- header ----------------------------------->
    
    <header>
        <nav>
            <div class="navbar">
                <div class="logo">Ha<span>$</span>eeb</div>
                <input type="checkbox" id = "chk">
                <label for="chk" id="chk_btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#work">Works</a></li>
                    <li><a href="#form">Contact</a></li>
                    <li><a href="https://sebography.blogspot.com/">Blog</a></li>
                </ul>
            </div>
        </nav>
        <main>
            <div class="containner">
                <h1>Hello,I am <br><span>Haseeb Ansari</span></h1>
                <p>I'm a full stack web developer</p>
                <div class="btn">
                    <button>
                        <span>Hire Me</span>
                        <div class="liquid"></div>
                      </button>
                </div>  
            </div>
        </main>
    </header>

    <!--about-------------------------------------->
    <sction id="about">
        <div class="title">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor s<br> amet consectetur adipisicing elit..</p>
        </div>
        <div class="about-box">
            <div class="sec-1">
                <h1>Welcome</h1>
                <p> <span>H</span>aseeb, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consequuntur doloremque, porro ullam placeat animi suscipit sint sit quibusdam dolore hic pariatur vel, possimus facilis odit voluptatibus accusamus, veritatis corrupti tempora cupiditate minus optio inventoreing elit. Voluptatem consequuntur doloremque, porro ullam placeat animi suscipit sint sit qolore hic pariatur vel, possimus facilis odit voluptatibus accusamus, veritatis corrupti tempoora cupiditate minus optio inventore earum perspiciatis? Quia debitis ab perspiciatis doloremque harum pariatur voluptatem? Molestias vel eius ratione repudiandae.</p>
                <div class="btn_1">
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="sec-1">
                <img src="side.jpg" alt="">
            </div>
        </div>
    </sction>
    
    <!-- skills ---------------------------------->

    <section id="skills">
        <div class="col-1">
        <div class="wrapper">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="container">
                <h2>Skills </h2>
                <div class="skills">
                    <div class="details">
                        <span>HTML</span>
                        <span>90%</span>
                    </div>
                    <div class="bar">
                        <div id="html-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>CSS</span>
                        <span>75%</span>
                    </div>
                    <div class="bar">
                        <div id="css-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>Javascript</span>
                        <span>72%</span>
                    </div>
                    <div class="bar">
                        <div id="js-bar"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>jQuery</span>
                        <span>68%</span>
                    </div>
                    <div class="bar">
                        <div id="jQuery-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- works -->

    <sectiopn id="work">
        <div class="title">
            <h1>Latest Work</h1>
        </div>
        <work-box>
            <div class="col-2">
                <img src="product1.jpg" alt="">
                <div class="overlay">
              </p>
                </div>
            </div>
            <div class="col-2">
                <img src="product2.jpg" alt="">
            </div>
            <div class="col-2">
                <img src="product3.jpg" alt="">
                
            </div>
            <div class="col-2">
                <img src="product4.jpg" alt="">
            </div>
        </work-box>
    </sectiopn>

    <!-- form-------------------------------------->

    <section id="form">
        <div class="title">
            <h1>Contact Us</h1>
        </div>
       
    </section>

    <!-- footer ----------------------------------->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="style.css">
 
</head>
 
 <body>
 <footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Haseeb<span>Ansari</span></h3>
 
 
 
 <p class="footer-company-name">The Empire &copy; 2019</p>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-map-marker"></i>
 <p><span>Lahore</span> Pakistan</p>
 </div>
 
 <div>
 <i class="fa fa-phone"></i>
 <p>03364057131</p>
 </div>
 
 <div>
 <i class="fa fa-envelope"></i>
 <p><a href="#">contact@Haseeb</a></p>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 <span>The Empire</span>
 Haseeb is a blog for web designers, graphic designers, web developers &amp; SEO Learner.
 </p>
 
 <div class="footer-icons">
 
 <a href="#"><i class="fa fa-facebook"></i></a>
 <a href="#"><i class="fa fa-twitter"></i></a>
 <a href="#"><i class="fa fa-linkedin"></i></a>
 <a href="#"><i class="fa fa-github"></i></a>
 
 </div>
 
 </div>
 </footer>

<script>
    window.addEventListener("scroll",function () {
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky",window.scrollY > 0);
    });
</script>
</body>
</html>