<!DOCTYPE html>
<html>
    <head>
        <title>ED-Learn Contact US</title>
        <link rel="stylesheet" href="Contact.css">
        <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    </head>
    <body>
<!--Navigation bar dhe search-->


            <div class="nav">
                <a class="active" href="Home.php">Home</a>
                <a href="about.php">About</a>
                <a href="Courses.php">All Courses</a>
                <a href="Contact.php">Contact</a>
                <a href="news.php">News</a>
                <a href="DashboarPage.php">Dashboard</a>
                <div class="search">
               
                    <input type="text" placeholder="Search.." name="search">
              
                </div>
              </div>

              <section class = "contact-section">
                <div class = "contact-bg">
                  <h3>Get in Touch with Us</h3>
                  <h2>Contact us</h2>
                  <div class = "line">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  <p class = "text">If you have questions for us, please feel free to ask.</p>
                </div>
          
          
                <div class = "contact-body">
                  <div class = "contact-info">
                    <div>
                      <span><i class = "fas fa-mobile-alt"></i></span>
                      <span>Phone No.</span>
                      <span class = "text">045-000-000</span>
                    </div>
                    <div>
                      <span><i class = "fas fa-envelope-open"></i></span>
                      <span>E-mail</span>
                      <span class = "text">EDlearn@gmail.com</span>
                    </div>
                    <div>
                      <span><i class = "fas fa-map-marker-alt"></i></span>
                      <span>Address</span>
                      <span class = "text">Kosove, Prishtine, 10000</span>
                    </div>
                    <div>
                      <span><i class = "fas fa-clock"></i></span>
                      <span>Opening Hours</span>
                      <span class = "text">Monday - Friday (8:00 to 16:30 )</span>
                    </div>
                  </div>

                  <div id="error_message"></div>
                  <div class = "contact-form">
                    <form   id="myform" onsubmit = "return validate();">
                      <div>
                        <input type = "text" class = "form-control" id="name" placeholder="First Name">
                        <input type = "text" class = "form-control" placeholder="Last Name" id="lastname">
                      </div>
                      <div>
                        <input type = "email" class = "form-control" placeholder="E-mail" id="email">
                        <input type = "text" class = "form-control" placeholder="Phone" id="phone">
                      </div>
                      <textarea rows = "5" placeholder="Message" class = "form-control" id="message"></textarea>
                      <input type = "submit" class = "send-btn" value = "send message">
                    </form>
                  

                    <div>
                      <img src = "contactus.jpg" alt = "">
                    </div>
                  </div>
                </div>
              </div>
          
                <div class = "map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5868.646943575393!2d21.1479326!3d42.6545002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ef1e1ab385f%3A0x4eeba7cc13123d32!2sBill%20Klinton%20Bulvar%C4%B1%2C%20Prishtina!5e0!3m2!1sen!2s!4v1701905207209!5m2!1sen!2s" width="1650" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
      
              </section>

              <footer>
                <div class="content">
                <div class="social-media">
                    <h4>Social</h4>
                    <p>
                      <a><i class="fab fa-twitter"></i>  Twitter</a> 
                    </p>
                    <p>
                    <a><i class="fab fa-youtube"></i>  YouTube</a>
                    </p>
                    <p>
                   <a><i class="fab fa-facebook-f"></i>  Facebook</a> 
                    </p>
                    <p>
                  <a>  <i class="fab fa-instagram"></i>   Instagram</a>
                    </p>
                  </div>
        
                  <div class="links">
                    <h4>Quick links</h4>
        
                    <p><a>Home</a></p>
                    <p><a>About</a></p>
                    <p><a>Blogs</a></p>
                    <p><a>Contact</a></p>
        
                  </div>
        
                  <div class="info">
                    <h4 class="address">Address</h4>
                    <p><a><!--<i class="fab fa-location"></i>-->
                        Kosove, Prishtine, 10000</a>
                    </p>
                    <h4 class="mobile">Mobile</h4>
                    <p><a><!--<i class="fab fa-phone"></i>-->+383 45-000-000</a></p>
                    <h4 class="mail">Email</h4>
                    <p><a><!--<i class="fab fa-envelope"></i>-->EDlearn@gmail.com</a></p>
                  </div>
                </div>
            </footer>
            <script src="contact.js"></script>
    </body>
</html>