<!DOCTYPE html>
<html>
<head>
<title>Career Guidance Portal</title>
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}
.w3-container{
  background-color:rgb(166, 164, 191);
}
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("bgimage.png");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}


* {
  box-sizing: border-box;
}



label {
  cursor: pointer;
}

svg {
  width: 3rem;
  height: 3rem;
  padding: 0.15rem;
}


/* hide radio buttons */

input[name="star"] {
  display: inline-block;
  width: 0;
  opacity: 0;
  margin-left: -2px;
}

/* hide source svg */

.star-source {
  width: 0;
  height: 0;
  visibility: hidden;
}


/* set initial color to transparent so fill is empty*/

.star {
  color: transparent;
  transition: color 0.2s ease-in-out;
}


/* set direction to row-reverse so 5th star is at the end and ~ can be used to fill all sibling stars that precede last starred element*/

.star-container {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center;
}

label:hover ~ label .star,
svg.star:hover,
input[name="star"]:focus ~ label .star,
input[name="star"]:checked ~ label .star {
  color: #d62a9d;
}

input[name="star"]:checked + label .star {
  animation: starred 0.5s;
}

input[name="star"]:checked + label {
  animation: scaleup 1s;
}

@keyframes scaleup {
  from {
    transform: scale(1.2);
  }
  to {
    transform: scale(1);
  }
}

@keyframes starred {
  from {
    color: #600040;
  }
  to {
    color: #d62a9d;
  }
}
</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="careerguidance.php" class="w3-bar-item w3-button w3-wide"><i class="fa fa-solid fa-cube "></i></a> 
    <?php
      session_start();
      if (session_id() == '' || !isset($_SESSION['uname'])) {
        echo "";
      } else {
        echo "<a href='#home' class='w3-bar-item w3-button w3-wide'> Hi, ".$_SESSION['uname']."! </a>";
      }
    ?>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <?php
				//session_start();
				if (session_id() == '' || !isset($_SESSION['uname'])) {
					echo "<a href='index.php' class='w3-bar-item w3-button'><i class='fa fa-user'></i>  LOGIN</a>";
				} else {
					echo "<a href='logout.php' class='w3-bar-item w3-button'><i class='fa fa-user'></i>  LOGOUT</a>";
				}
			?>
      <!--/a-->
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-star"></i>RATE US</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:inline-block" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="index.php" onclick="w3.close()" class="w3-bar-item w3-button">LOGIN</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">RATE US</a>

</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Career Guidance</span><br><br>
    <!--<span class="w3-large">GET THE RIGHT GUIDANCE TO LEAP THROUGH YOUR CAREER</span>-->
    <span class="w3-large">Get the right guidance to leap through your career.</span><br>
    <p>
      <?php
				//session_start();
				if (session_id() == '' || !isset($_SESSION['uname'])) {
					echo "<a href='login.php' class='w3-button w3-black'><i class='fa fa-th'> </i> Take the test now</a>";
				} else if(isset($_SESSION['uname']) && !isset($_SESSION['result'])){
					echo "<a href='q1.php' class='w3-button w3-black'><i class='fa fa-th'> </i> Take the test now</a>";
				}
        else{
          if(isset($_SESSION['result'])){
            echo "<a href='final.php' class='w3-button w3-black'><i class='fa fa-th'> </i> View Result</a>";
            echo" ";
            echo "<a href='q1.php' class='w3-button w3-black'><i class='fa fa-th'> </i> Retest</a>";

          }
        }
			?>
    </p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
  <a href="https://www.facebook.com/" target="_blank" class="w3-hover-opacity">
    <i class="fa fa-facebook-official"></i>
</a>
<a href="https://www.instagram.com/" target="_blank" class="w3-hover-opacity">
    <i class="fa fa-instagram"></i>
</a>
<a href="https://www.snapchat.com/" target="_blank" class="w3-hover-opacity">
    <i class="fa fa-snapchat"></i>
</a>
<a href="https://www.pinterest.com/" target="_blank" class="w3-hover-opacity">
    <i class="fa fa-pinterest-p"></i>
</a>
<a href="https://twitter.com/" target="_blank" class="w3-hover-opacity">
    <i class="fa fa-twitter"></i>
</a>
<a href="https://www.linkedin.com/" target="_blank" class="w3-hover-opacity">
    <i class="fa fa-linkedin"></i>
</a>
 
  <!-- <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i> -->
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE PROCESS</h3>
  <p class="w3-center w3-large">The test helps to actively exploit your strongest forte</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter"> 
      <i class="fa fa-solid fa-check w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Communication</b></p>
      <p style="text-align:left">1.Corporate Communication Specialist:- 
      <br>Responsibilities: Developing and implementing communication strategies, managing internal and external communication, and ensuring consistent messaging.
      <br>2.Communication Skills Required: Strong written and verbal communication, ability to craft engaging content, and effective communication with diverse audiences.
<br><br>
   • Relevant Links:
   <p>     
<a href="https://www.iabc.com/"> International Association of Business Communicators (IABC)</a><br>
<a href="https://www.prsa.org/"> Public Relations Society of America (PRSA)</a></p>
</p> 


Strong communication skills are crucial in numerous professions, and these organizations provide resources, networking opportunities, and insights for professionals in the field of corporate communication and public relations</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-solid fa-check w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Creativity</b></p>
      <p style="text-align:left">Creativity is a valuable skill that is highly sought after in various industries. If you have a creative mindset, there are many career paths you can explore. Here are some jobs that specifically emphasize creativity:
<br><br>
• Creative Jobs:
<br><br>
1. Graphic Designer:
   <br>- Responsibilities: Creating visual concepts, developing layouts, and producing design solutions for various purposes, such as advertisements, websites, and branding.
   <br>- Skills Required: Proficiency in graphic design software, a strong sense of visual aesthetics, and creativity.
<br><br>
2. Art Director:
  <br> - Responsibilities: Leading the design and visual elements of projects, ensuring a cohesive and compelling visual style. Collaborating with creative teams.
  <br> - Skills Required: Strong artistic and design skills, leadership abilities, and project management skills.
  </p>

    </div>
    <div class="w3-quarter">
      <i class="fa fa-solid fa-check w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><B>Management</b></p>
      <p  style="text-align:left">Certainly! Management is a crucial aspect of organizations across industries, and various career paths emphasize management skills. Here are some jobs that require strong management abilities:
<br><br>
• Management Jobs:
<br><br>
1. Project Manager:
   <br>- Responsibilities: Planning, executing, and closing projects. Coordinating teams, managing budgets, and ensuring project goals are met.
   <br>- Skills Required: Project management, leadership, communication, and organizational skills.
<br><br>
2. Operations Manager:
   <br>- Responsibilities: Overseeing day-to-day operations, optimizing processes, and ensuring efficiency. Managing resources and teams to meet organizational objectives.
   <br>- Skills Required: Operations management, problem-solving, and strategic planning.
<br><br>
   </p>    
  </div>
    <div class="w3-quarter">
      <i class="fa fa-solid fa-check w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Leadership</b></p>
      <p style="text-align:left">Certainly! Leadership is a critical skill that is valued across various industries and professions. Here are some jobs and roles that specifically emphasize leadership skills:
<br><br>
• Leadership Roles:
<br><br>
1. CEO (Chief Executive Officer):
<br>- Responsibilities: Setting the overall vision and strategy for the organization, making high-level decisions, and representing the company to stakeholders.
  <br> 
  - Skills Required: Visionary leadership, strategic thinking, and strong decision-making.
<br><br>
2. Executive Director (Nonprofit Sector):
   <br>- Responsibilities: Leading nonprofit organizations, setting goals, fundraising, and ensuring the organization's mission is fulfilled.
   <br>- Skills Required: Leadership in a nonprofit context, fundraising, and community engagement.
<br><br>
</p>
    </div>
  </div>
</div>




<!-- Contact Section 
<div class='w3-row-padding w3-center' style="margin-top:64px">
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">-->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact" style="margin-left:64px;background-color:white;" >
    <div class="w3-row">
      <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
        <h3>Address</h3>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Pune</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 7796781038</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  Careerguidance@gmail.com</p>
      </div>


      <div class="w3-col m7">

        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="" method="post">
        <center><h3>Rate Us</h3></center>

<div class="star-source">
  <svg>
         <linearGradient x1="50%" y1="5.41294643%" x2="87.5527344%" y2="65.4921875%" id="grad">
            <stop stop-color="#bf209f" offset="0%"></stop>
            <stop stop-color="#d62a9d" offset="60%"></stop>
            <stop stop-color="#ED009E" offset="100%"></stop>
        </linearGradient>
    <symbol id="star" viewBox="153 89 106 108">   
      <polygon id="star-shape" stroke="url(#grad)" stroke-width="5" fill="currentColor" points="206 162.5 176.610737 185.45085 189.356511 150.407797 158.447174 129.54915 195.713758 130.842203 206 95 216.286242 130.842203 253.552826 129.54915 222.643489 150.407797 235.389263 185.45085"></polygon>
    </symbol>
</svg>

</div>
<div class="star-container">
  <input type="radio" name="star" value="5" id="five">
  <label for="five">
    <svg class="star">
      <use xlink:href="#star"/>
    </svg>
  </label>
  <input type="radio" name="star" value="4" id="four">
  <label for="four">
    <svg class="star">
      <use xlink:href="#star"/>
    </svg>
  </label>
  <input type="radio" name="star" value="3" id="three">
  <label for="three">
    <svg class="star">
      <use xlink:href="#star"/>
    </svg>
  </label>
  <input type="radio" name="star" value="2" id="two">
  <label for="two">
    <svg class="star">
      <use xlink:href="#star" />
    </svg>
  </label>
  <input type="radio" name="star" value="1" id="one">
  <label for="one">
   <svg class="star">
    <use xlink:href="#star" />
   </svg>
  </label>

</div>
        <div class="w3-section">      
          <label>Message</label>
          <input class="w3-input" type="text" name="Message" required>
        </div>  
        
        <input type="submit" class="w3-button w3-right w3-theme" value="Send" onclick="showConfirmation()">
        <script>
        function showConfirmation() {
            alert("Your feedback has been submitted!");
        }
    </script>
        </form>
        <?php
        if(isset($_POST['submit'])){
        if(!isset($_SESSION['uname'])){
          header("Location: login.php");
        }
        else{
          $uname = $_SESSION['uname'];
          $rate = $_POST['star'];
          $conn = mysqli_connect('localhost','root','','careerguidance');
          if(!$conn){
            die("<script>alert('Oops! Connection failed...Try again later')</script>");
          } else {
            $sql = "UPDATE test_user SET `rating` = '$rate' WHERE `name` = '$uname';";
            $result = mysqli_query($conn,$sql);
            if(!$result){
              echo "<script>alert('Something went wrong! Try again later...')</script>";
            }
          }
          mysqli_close($conn);
        }
      }
        ?>
      </div>

    </div>
  </div>
      


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
  <a href="https://facebook.com" target=" " class="w3-hover-opacity">
    <i class="fa fa-facebook-official"></i>
</a>
<a href="https://instagram.com" target=" " class="w3-hover-opacity">
    <i class="fa fa-instagram"></i>
</a>
<a href="https://twitter.com" target=" " class="w3-hover-opacity">
    <i class="fa fa-twitter"></i>
</a>
<a href="https://linkedin.com" target=" " class="w3-hover-opacity">
    <i class="fa fa-linkedin"></i>
</a>

    <!-- <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i> -->
  </div>
</footer>
 
<script>



// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
