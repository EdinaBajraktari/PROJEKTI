<?php
  session_start();
  $hide="";
  if(!isset($_SESSION['username']))
    header("location:LoginForm.php");
  else{
    if($_SESSION['role'] == "admin")
      $hide = "";
    else
      $hide = "hide";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ED-Learn</title>
        <link rel="stylesheet" href="Homestyle.css">
        <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    
  
        <header>

<!--Navigation bar dhe search-->


            <div class="nav">
                <a class="active" href="Home.php">Home</a>
                <a href="about.php">About</a>
                <a href="Courses.php">All Courses</a>
                <a href="Contact.php">Contact</a>
                <a href="news.php">News</a>
                <a href="DashboardPage.php">Dashboard</a>
                <li><a href="logout.php">Logout</a></li>

                <div class="search">
               
                    <input type="text" placeholder="Search.." name="search">
              
                </div>
              </div>
        

        <!--Intruduction i webfaqes-->

        <div class="text-box">
            <h1>Learn Online</h1>
            <p>
                "Learn continually. 
        There's always 'one more thing' to learn!"
            </p>
            <a href="LoginForm.php" class="login-btn">LOG-IN</a>
    
        </div>
    </header>


        <!--Our courses-->
   <section  id="course">

    <h1>Courses we offer</h1>
    <div class="course-box">
     <div class="fotot">
        <img src="image11.jpg" alt="">
        <div class="description"> 
    <h4>Programming Languages</h4>
        </div>

     </div>
     <div class="fotot">
        <img src="image10.jpg" alt="">
        <div class="description"> 
    <h4>Web design and development</h4>
        </div>

     </div>
     <div class="fotot">
        <img src="image9.jpg" alt="">
        <div class="description"> 
    <h4>Machine learning</h4>
        </div>

     </div>
    </div>
   </section>

   <!--Beginner friendly-->

   <section id="Container">

   <div class="aphoto">
    <img src="image2.jpg" alt="foto">
        
   </div>
   <div class="More">
     <h2>Beginner friendly</h2>
     <p>Our absolute beginner tutorial will turn you from wannabe to master in very short time.
       Unlike many other tutorials, our course is a step-by-step guide  not a boring long-winded reference.<br>
       “Computers are incredibly fast, accurate, and stupid. 
       Human beings are incredibly slow, inaccurate, and brilliant.
     Together they are powerful beyond imagination.”- Albert Einstein, physicist
          </p>
          <div class="startbtn">
            <button class="startbtn "> <a href="courses.php" style="color: aliceblue;"><span>Get started</span></a> </button>
        </div>
   </div>

 </section>




 <!--Pjesa  e mendimeve te studenteve-->

      <div class="thoughts">
        <div class="thoughts-inner">
            <h1>What our students say about us</h1>
            <div class="thoughts-box">
                <div class="row">
                    <div class="col">
                <div class="thought">
                   <img src="student1.png" alt="studenti">
                   <div class="name"><b>Name Surname </b></div>
                   <div class="rating">
                    <div class="rating__star" title="order in DOM: 1">⭐</div>
                    <div class="rating__star" title="order in DOM: 2">⭐</div>
                    <div class="rating__star" title="order in DOM: 3">⭐</div>
                  </div>
                     <p>I really liked the course and I learned a lot in a very short time. 
                        Also, the teaching method is wonderful.</p>
                </div>
                    </div>
                    <div class="col">
                        <div class="thought">
                           <img src="student2.png" alt="studenti">
                           <div class="name"><b>Name Surname </b></div>
                           <div class="rating">
                            <div class="rating__star" title="order in DOM: 1">⭐</div>
                            <div class="rating__star" title="order in DOM: 2">⭐</div>
                            <div class="rating__star" title="order in DOM: 3">⭐</div>
                          </div>
                             <p>I really liked the course and I learned a lot in a very short time. 
                                Also, the teaching method is wonderful.</p>
                        </div>
                            </div>
                            <div class="col">
                                <div class="thought">
                                   <img src="student1.png" alt="studenti">
                                   <div class="name"><b>Name Surname </b></div>
                                   <div class="rating">
                                    <div class="rating__star" title="order in DOM: 1">⭐</div>
                                    <div class="rating__star" title="order in DOM: 2">⭐</div>
                                    <div class="rating__star" title="order in DOM: 3">⭐</div>
                                  </div>
                                     <p>I really liked the course and I learned a lot in a very short time. 
                                        Also, the teaching method is wonderful.</p>
                                </div>
                                    </div>

                </div>

            </div>

        </div>
      </div>
 
 <!--Pjesa e footer-it-->
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

    <h3><?php echo "Username: ".$_SESSION['username']."<br>" ?></h3>
    <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>
  
    </body>
</html>

<?php
  }
?>