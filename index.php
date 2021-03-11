<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <style>
        .skills .skills-content .right .cpp::before{
            background-color: rgb(11, 70, 109);
        }
        .skills .skills-content .right .c::before{
            background-color: crimson;
        }
        .skills .skills-content .right .python::before{
            background-color: rgb(11, 70, 109);
        }
        .skills .skills-content .left .css::before{
            background-color: crimson;
        }
        .skills .skills-content .left .php::before{
            background-color: crimson;
        }
        .teams{
            align-items: center;
            justify-content: center;
        }
        .service {
            height: fit-content;
            
        }
    
            </style>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
<a href="#">Roudr<span>ini</span></a></div>
<ul class="menu">
<li><a href="#home" class="menu-btn">Home</a></li>
<li><a href="#about" class="menu-btn">About</a></li>
<li><a href="#services" class="menu-btn">Services</a></li>
<li><a href="#skills" class="menu-btn">Skills</a></li>
<li><a href="#teams" class="menu-btn">Projects</a></li>
<li><a href="#contact" class="menu-btn">Contact</a></li>
</ul>
<div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
</div>
</nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">
Hello, my name is</div>
<div class="text-2">
Roudrini Mukherjee</div>
<div class="text-3">
And I'm a <span class="typing">Web Developer.</span></div>
<div class="social-links">
    <a
      href="https://www.facebook.com/roudrini.mukherjee.31"
      target="_blank"
    >
      <i class="fab fa-facebook"></i>
    </a>
    <a href="https://www.instagram.com/roudrini_mukherjee/" target="_blank">
      <i class="fab fa-instagram"></i>
    </a>

    

    <a href="https://twitter.com/RoudriniM?s=08/" target="_blank">
      <i class="fab fa-twitter"></i>
    </a>

    <a href="https://www.linkedin.com/in/roudrini-mukherjee-601a49195/" target="_blank">
      <i class="fab fa-linkedin"></i>
    </a>

    <a href="https://github.com/RoudriniMukherje" target="_blank">
      <i class="fab fa-github"></i>
    </a>
  </div>



            </div>
</div>
</section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">
About me</h2>
<div class="about-content">
                <div class="column left">
                    <img src="images/DP.JPG" alt="">
                </div>
<div class="column right">
                    <div class="text">
Hi, let me introduce myself<span class="typing-2"></span></div>
<p>
 I am <b><i>Roudrini Mukherjee</i></b>, currently pursuing Electronics and Telecommunication Engineering at Jadavpur University (2019-2023). I'm a tech enthusiast. Keenly interested in  Web Development and Coding. I build interactive websites that run across platforms and devices. I use HTML, CSS, Bootstrap, JavaScript, React to make responsive websites. I love to code and to solve various problems based on maths, data-structures and algorithms.</p>
 
 <p style="color: rgb(4, 16, 24); font-weight: 400;">Previously I worked at <b>Campus 24</b> as an <b>Web Development Intern</b> where I have to add new features to the existing websites and made changes according to the client's requirements.</p>
 
 <p>In my free time, I do digital artworks and read/write answers on quora.</p>
<a href="#">Download CV</a>
                </div>
</div>
</div>
</section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">
My services</h2>
<div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">
Web Design</div>
<p>
A website should be designed for the people who will use it, so that's exactly what I do. User focused design should be the primary goal of any website.
</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">
Web Development</div>
<p>
Main goal is to build an easy-to-use interface between the user and the product.Build user friendly websites that run across all platforms.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-laptop-code"></i>
                        <div class="text">
Programmer</div>
<p>
Able to learn concepts and apply them to other problems which is an essential skill for programmers.Can code in languages(C++,C,Python)</p>
</div>
</div>
</div>
</div>
</div>
</section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">
My skills</h2>
<div class="skills-content">
                
<div class="column left">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
<div class="line html">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
<div class="line css">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
<div class="line js">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
<div class="line php">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
<div class="line mysql">
</div>
</div>
</div>
<div class="column right">
    <div class="bars">
        <div class="info">
            <span>C++</span>
            <span>90%</span>
        </div>
<div class="line cpp">
</div>
</div>

<div class="bars">
    <div class="info">
        <span>C</span>
        <span>90%</span>
    </div>
<div class="line c">
</div>
</div>

<div class="bars">
    <div class="info">
        <span>PYTHON</span>
        <span>60%</span>
    </div>
<div class="line python">
</div>
</div>
    
        </div>

</div>
</div>
</section>

    <!-- Projects section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">
My Projects</h2>
<div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <a href="https://roudrinimukherje.github.io/Weather_App/" target="_blank"><img src="images/app.jpg" alt=""></a>
                        <div class="text">
Weather App</div>
<p>
A simple weather app built using HTML, CSS, Bootstrap and Javascript</p>
</div>
</div>




</div>
</div>
</section>

    <!-- contact section start -->
    <section class="service" id="contact">
        <div class="max-width">
            <h2 class="title">
Get In Touch</h2>
<div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-phone"></i>
                        <div class="text">
Phone</div>
<p class="t1">

7044599974
</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-envelope-square"></i>
                        <div class="text">
Email</div>
<p class="t1">
    roudrinimukherjee@gmail.com
</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="text">
Address</div>
<p class="t1">
    Dumdum, Kolkata, West-Bengal.
</p>
</div>
</div>
</div>
</div>
</div>
</section>

<!--contact part2 -->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">
            Message me</h2>
<div class="contact-content">
            
<div class="column right">
              
<form action="#">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
<div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
</div>
<div class="field">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
<div class="field textarea">
                        <!-- Due to more textarea, I got an error so I changed the tag name of this textarea into changeit. -->
                        <input type="text" name="message" placeholder="Message" required>
                        <changeit cols="30" rows="10" placeholder="Message.." required></changeit>
                    </div>
<div class="button">
                        <button type="submit" name="submit">Send message</button>
                    </div>
</form>
</div>
</div>
</div>
</section>











    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">CodingNepal</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

 
 <script src="javascript.js"></script> 
 <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>
