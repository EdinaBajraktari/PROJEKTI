<?php
$servername = "127.0.0.1";  
$username = "root";  
$password = "";
$dbname = "aboutdatabase";

$conn = new mysqli($image, $link, $date, $views,$price);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_errno . " - " . $conn->connect_error);
}

class Course {
    public $image;
    public $link;
    public $date;
    public $views;
    public $price;

    public function __construct($image, $link, $date, $views, $price) {
        $this->image = $image;
        $this->link = $link;
        $this->date = $date;
        $this->views = $views;
        $this->price = $price;
    }

    public function displayCourse() {
        echo '<div class="rubrika">';
        echo '<img src="' . $this->image . '" alt="" class="img" onclick="openLink(\'' . $this->link . '\')">';
        echo '<div class="views_date">';
        echo '<p>' . $this->date . '</p>';
        echo '<p>' . $this->views . ' Views</p>';
        echo '<p>' . $this->price . '€</p>';
        echo '</div>';
        echo '</div>';
    }
}

$cPlusPlus = new Course('c++.png', 'https://www.youtube.com/watch?v=OXGznpKZ_sA', '24 Oct 2023', '10,460', '56.32');
$python = new Course('python.jpg', 'https://www.youtube.com/watch?v=rfscVS0vtbw', '27 Nov 2023', '14,502', '75.3');
$ruby = new Course('ruby.png', 'https://www.youtube.com/watch?v=t_ispmWmdjY', '06 Dec 2022', '11,906', '123');
$visualstudio= new Course('visualstudio_code-card.png', 'https://www.youtube.com/watch?v=REG-p_eFNIw', '07 Jan 2023', '8,460', '55');
$js = new Course('js.png', 'https://www.youtube.com/watch?v=PkZNo7MFNFg', '27 May 2023', '19,632', '202.35');
$php = new Course('php.jpg', 'https://www.youtube.com/watch?v=OK_JCtrrv-c', '06 Jun 2020', '16,777', '102');
$julia = new Course('Julia_Programming_Language_Logo.svg.png', 'https://www.youtube.com/watch?v=4igzy3bGVkQ&list=PLP8iPy9hna6SCcFv3FvY_qjAmtTsNYHQE', '24 Dec 2023', '12,555', '15.3');
$lisp = new Course('lisp.png', 'https://www.youtube.com/watch?v=ymSq4wHrqyU', '27 Sep 2023', '17,333', '95.2');
$haskell = new Course('Haskell-Programming-Language.jpg', 'https://www.youtube.com/watch?v=Vgu82wiiZ90&list=PLe7Ei6viL6jGp1Rfu0dil1JH1SHk9bgDV', '03 May 2022', '9,996', '60');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ED-Learn Courses</title>
        <link rel="stylesheet" href="courses.css">
        <script src="courses.js"></script>
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
                <div class="search">
               
                    <input type="text" placeholder="Search.." name="search">
              
                </div>
             </div>

              <!--course-->

   <section class="course">
    <h1>Courses We Offer</h1>
    <p>You have chosen your ideal course to become the best programmer!</p>
    <div class="row">
      <div class="course-col">
        <h3>OOP</h3>
        <p>Object-oriented programming (OOP) is defined as a programming paradigm (and not a specific language) built on the concept of objects, i.e., a set of data contained in fields, and code, indicating procedures – instead of the usual logic-based system
        </p>
      </div>
      <div class="course-col">
        <h3>WEB</h3>
        <p>Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security. The most common languages used for Web programming are XML, HTML, JavaScript, Perl 5 and PHP. Web programming is different from just programming, which requires interdisciplinary knowledge on the application area, client and server scripting, and database technology.
        </p>
      </div>
      <div class="course-col">
        <h3>AI</h3>
        <p>AI, which stands for artificial intelligence, is a branch of computer science that develops machine systems capable of demonstrating behaviors linked to human intelligence. AI programs use data collected from different interactions to improve the way they mimic humans in order to perform tasks such as learning, planning, knowledge representation, perception and problem-solving.
        </p>
      </div>
    </div>
  </section>
  <!--Pjesa llojeve te kurseve-->
  <div class="kurset">
    <h3>Kliko mbi foto,për të ndjekur kursin që dëshironi:</h3>
</div>
<div class="fotografit">
  <div class="rubrika">
    <img src="c++.png" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=OXGznpKZ_sA')">
      <div class="views_date">
          <p>24 Oct 2023</p>
          <p>10,460 Views</p>
          <p>56.32€</p>
      </div>
    </div>
    <div class="rubrika">
      <img src="python.jpg" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=rfscVS0vtbw')">
        <div class="views_date">
            <p>27 Nov 2023</p>
            <p>14,502 Views</p>
            <p>75.3€</p>
  
        </div>
    </div>
    <div class="rubrika">
      <img src="ruby.png" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=t_ispmWmdjY')">
          <div class="views_date">
              <p>06 Dec 2022</p>
              <p>11,906 Views</p>
              <p>123€</p>
          </div>
        </div>  
      </div>
      <div class="WEB">
        <h3>WebCourses:</h3>
    </div>
    <div class="web">
      <div class="rubrika">
          <img src="visualstudio_code-card.png" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=REG-p_eFNIw')">
          <div class="views_date">
              <p>07 Jan 2023</p>
              <p>8,460 Views</p>
              <p>55€</p>
          </div>
        </div>
        <div class="rubrika">
            <img src="js.png" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=PkZNo7MFNFg')">
            <div class="views_date">
                <p>27 May 2023</p>
                <p>19,632 Views</p>
                <p>202.35€</p>
            </div>
        </div>
        <div class="rubrika">
              <img src="php.jpg" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=OK_JCtrrv-c')">
              <div class="views_date">
                  <p>06 Jun 2020</p>
                  <p>16,777 Views</p>
                  <p>102€</p>
              </div>
            </div>  
          </div>
          <div class="AI">
            <h3>AIcourses:</h3>
        </div>
        <div class="fotografit">
          <div class="rubrika">
            <img src="Julia_Programming_Language_Logo.svg.png" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=4igzy3bGVkQ&list=PLP8iPy9hna6SCcFv3FvY_qjAmtTsNYHQE')">
              <div class="views_date">
                  <p>24 Dec 2023</p>
                  <p>12,555 Views</p>
                  <p>15.3€</p>
              </div>
            </div>
            <div class="rubrika">
                <img src="lisp.png" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=ymSq4wHrqyU')">
                <div class="views_date">
                    <p>27 Sep 2023</p>
                    <p>17,333 Views</p>
                    <p>95.2€</p>
                </div>
            </div>
            <div class="rubrika">
                  <img src="Haskell-Programming-Language.jpg" alt="" class="img" onclick="openLink('https://www.youtube.com/watch?v=Vgu82wiiZ90&list=PLe7Ei6viL6jGp1Rfu0dil1JH1SHk9bgDV')">
                  <div class="views_date">
                      <p>03 May 2022</p>
                      <p>9,996 Views</p>
                      <p>60€</p>
                  </div>
                </div>  
              </div>
  <!--Paragrafet-->
               <div class="Paragrafet">
              <div class="paragrafi2">
              <h2>What is Web Programming?</h2>
              <p2>Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security. The most common languages used for Web programming are XML, HTML, JavaScript, Perl 5 and PHP. Web programming is different from just programming, which requires interdisciplinary knowledge on the application area, client and server scripting, and database technology.
                Web programming involves creating dynamic websites that are interactive and user-friendly. This includes the use of databases, server-side scripting, and client-side scripting to create applications that can process data, display content, and interact with users.
                The Internet is a vast network of computers, and servers, which communicate with each other. The internet connects the whole wide world together. The Internet is a vast network that connects billions of computers and other electronic devices all around the world. You can get nearly any information, communicate with anyone on the globe, and do a lot more with the Internet. All of this is possible by connecting a computer to the Internet, generally known as going online. 
              </p2>
              </div>

              <div class="paragrafi3">
              <h3>What is AI?</h3>
              <p3>AI technology is widely used throughout industry, government, and science. Some high-profile applications are: advanced web search engines (e.g., Google Search), recommendation systems (used by YouTube, Amazon, and Netflix), understanding human speech (such as Google Assistant, Siri, and Alexa), self-driving cars (e.g., Waymo), generative and creative tools (ChatGPT and AI art), and superhuman play and analysis in strategy games such as chess and Go.
                Artificial intelligence programming language, a computer language developed expressly for implementing artificial intelligence (AI) research. In the course of their work on the Logic Theorist and GPS, two early AI programs, Allen Newell and J. Clifford Shaw of the Rand Corporation and Herbert Simon of Carnegie Mellon University developed their Information Processing Language (IPL), a computer language tailored for AI programming. At the heart of IPL was a highly flexible data structure that they called a list. A list is simply an ordered sequence of items of data. Some or all of the items in a list may themselves be lists. This scheme leads to richly branching structures.</p3>
              </div>

              <div class="paragrafi1">
                <h1>What is OOP?</h1>
                <p1>Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.
                  It is a method for storing data and the operations required to process that data based on the mathematical field known as abstract data types. Programming could advance to a more abstract level thanks to OOP. Nearly all developers employ the core programming paradigm known as object-oriented programming at some point in their careers.
                  OOP focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. This approach to programming is well-suited for programs that are large, complex and actively updated or maintained. This includes programs for manufacturing and design, as well as mobile applications; for example, OOP can be used for manufacturing system simulation software.</p1>
                </div>
                </div>
  </header>
</body>
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
        <p><a><!--<i class="fab fa-phone"></i>-->+383 45200300</a></p>
        <h4 class="mail">Email</h4>
        <p><a><!--<i class="fab fa-envelope"></i>-->EDlearn@gmail.com</a></p>
      </div>
    </div>
</footer>


</html>