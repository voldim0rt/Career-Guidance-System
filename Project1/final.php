<?php
/*
$_SESSION['result'] = "one of the following";

Designer - designer
Legal Consultant - legal
Finance - finance   left right
Teacher/Professor - teacher
Data Analyst - analyst
Writer/Journalist - writer
Sales - sales
Digital Marketing - dmark
Entrepreneurship - entreprenuer
Computer Science Engineer - cs  (developer as per flowchart)

//we need to prepare result details for the following

Therapist - therapist
Podcaster - podcaster
Production Engineer - production

*/
session_start();
$res = $_SESSION['result'];
$uname = $_SESSION['uname'];
$conn = mysqli_connect('localhost','root','','careerguidance');
if(!$conn){
    die("<script>alert('Oops! Connection failed...Try again later')</script>");
} else {
      $sql = "UPDATE results SET result = '$res' WHERE id = (SELECT id FROM test_user WHERE name='$uname')";
      $result = mysqli_query($conn,$sql);
      if(!$result){
        echo "<script>alert('Something went wrong! Try again later...')</script>";
  }
}
mysqli_close($conn);
?>
<html>
<head>
<title>Result</title>
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
  transition: 0.3s;
  width: 60%;
  font-family: 'Courier';
  margin-top:150px;
  background-color:white;
}

.card:hover {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  }

.container {
  padding: 2px 16px;
}
.part2{
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin: 1em;
    padding: 1em;
    text-align: left;
}

p{
  padding-left: 2%;
  text-align: left;
  font-size: 20px;
}
b{
  text-align: center;
  font-size: 45px;
}
body{
  background-color:	 rgb(163, 168, 233);
}
.btn-group .button {
  background-color: rgb(22, 25, 59);
  
  border: none;
  color: white;
  font-weight: bold;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  
}

.btn-group .button:hover {
  background-color:rgb(140, 143, 187); /* Green */
  color:black;
}

</style>
</head>
<body>
  <!--NAVBAR--> 
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="careerguidance.php" class="w3-bar-item w3-button w3-wide"><i class="fa fa-solid fa-cube "></i></a> 
    <?php
      //session_start();
      if (session_id() == '' || !isset($_SESSION['uname'])) {
        echo "";
      } else {
        
        echo "<a href='#home' class='w3-bar-item w3-button w3-wide'> Hi, ".$_SESSION['uname']."! </a>";
      }
    ?>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="careerguidance.php#about" class="w3-bar-item w3-button">ABOUT</a>
      <!--a href="careerguidance.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i-->
        <?php
				//session_start();
				if (session_id() == '' || !isset($_SESSION['uname'])) {
					echo "<a href='login.php' class='w3-bar-item w3-button'><i class='fa fa-user'></i>  LOGIN</a>";
				} else {
					echo "<a href='logout.php' class='w3-bar-item w3-button'><i class='fa fa-user'></i>  LOGOUT</a>";
				}
			?>
      <!--/a-->
      <a href="careerguidance.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="careerguidance.php#contact" class="w3-bar-item w3-button"><i class="fa fa-star"></i> RATE US</a>
    </div>
  </div>
</div>
    <center>
<!--600px works good for pictures bro-->
  <div class="card" id='designer' style='display:none'>
    <img src="https://media.istockphoto.com/id/1290439360/vector/woman-with-mannequin-patterns-and-threads-fashion-designer-dressmaker-seamstress-sewing.jpg?s=612x612&w=0&k=20&c=LkJnqHiQjXXzIAdgLxGmHXr7CpoSn1JIsdPCQl7bopg=" alt="Designer" >
    <div class="container">
      <h4><b>Designer</b></h4> 
      <p>Certainly! Here are some platforms and resources for aspiring designers in India:
<br><br>
• Design Institutes in India:
<br><br>
1. National Institute of Design (NID):
<br>NID is one of the premier design institutes in India. They offer undergraduate and postgraduate programs in various design disciplines.
<br><br>
2. National Institute of Fashion Technology (NIFT):
<br>NIFT specializes in fashion and textile design. It is a leading institute for those interested in pursuing a career in fashion design.
<br><br>
3. Pearl Academy:
<br>Pearl Academy offers programs in design, fashion, and business. They have campuses in various cities in India.
<br><br>
4. MIT Institute of Design:
<br>MIT Institute of Design offers programs in industrial design, communication design, and fashion design.
<br><br>
5. IIT Bombay - IDC School of Design:
<br>The Industrial Design Centre (IDC) at IIT Bombay is known for its design programs at the undergraduate and postgraduate levels.
<p>
  • Design Learning Platforms:
<br><a href="https://www.udemy.com/courses/design/"> Udemy - Design Courses</a><br>
<a href="https://www.coursera.org/specializations"> Coursera - Design Specializations:</a>
  </p>
</p> 
    </div>
  </div>
</center>
<center>

  <div class="card" style="display:none" id="legal" >
    <img src="https://img.freepik.com/premium-vector/lawyer-attorney-justice-illustration-with-laws-scales-wooden-judge-hammer-consultant_2175-4659.jpg?w=2000" alt="Legal Consultant" width="600px" >
    <div class="container">
      <h4><b>Legal Consultant</b></h4> 
      <p>Corporations pay top buck for skilled lawyers willing to defend their interest.If you are really good in arguing ad persuading,it will pay off pretty fast.  </p> 
    </div>
  </div>
  </center>

  <center>
   
  <div class="card" style="display:none" id="finance">
  <img src="https://img.freepik.com/free-vector/business-innovation-based-alternative-financial-services-digital-currency-market-exchange-financial-technology-flat-vector-illustration-fintech-startup-economy-finances-concept-banner_74855-22404.jpg?w=2000" alt="Avatar" style="width:400px;">
    <div class="container">
    <h4><b>Finance</b></h4><br><p>
    • Finance Sector in India:
<br><br>1. Banking System:
<br>
India has a robust banking sector with both public and private banks. The Reserve Bank of India (RBI) is the central banking institution responsible for monetary policy and the regulation of the banking sector.
<br><br>
2. Stock Market:
<br>The Bombay Stock Exchange (BSE) and the National Stock Exchange (NSE) are the primary stock exchanges in India. They play a crucial role in facilitating the trading of equities, commodities, and derivatives.
<br><br>
3.Financial Regulations:
<br>The Securities and Exchange Board of India (SEBI) regulates the securities market in India. It ensures fair and transparent dealings and protects the interests of investors.
<br><br>
4. Insurance Industry:
<br>The insurance sector in India has witnessed significant growth, with various public and private insurance companies offering life and general insurance products.
<br><br>
5. Mutual Funds:
<br>Mutual funds are popular investment vehicles in India, allowing individuals to invest in a diversified portfolio managed by professional fund managers.
<br><br>
6. Fintech:
<br>The rise of financial technology (Fintech) has transformed the financial landscape, with digital payment platforms, mobile banking, and online investment services gaining prominence.</p> 
<p>
<a href="https://www.nism.ac.in/"> National Education Association</a><br>
<a href="https://www.icai.org/"> Institute of Chartered Accountants of India (ICAI)</a>
<br>
<a href="https://www.sebi.gov.in/sebiweb/other/OtherAction.do?doEducation=yes"> Securities and Exchange Board of India (SEBI) - Education</a></p>
    </div>
</div>
    </center>


    <center>
    <div class="card" style="display:none" id="teacher">
        <img src="https://img.freepik.com/free-vector/teacher-concept-profesor-standing-front-blackboard-school-college-workers-with-professional-discipline-tools-idea-education-knowledge-flat-vector-illustration_613284-1977.jpg?w=2000" alt="Teacher/Professor" width="600px" >
        <div class="container">
          <h4><b>Teacher/Professor</b></h4> 
          <p>•Teaching Roles:<br>
1. Elementary School Teacher:
<br>  
-Responsibilities: Teaching a variety of subjects to students in grades K-5, focusing on foundational skills and creating a positive learning environment.
<br>  
-Skills Required: Classroom management, communication with young learners, and lesson planning.
Middle School Teacher:
<br><br>
2. Middle School Teacher:
-Responsibilities: Educating students in grades 6-8, specializing in specific subjects. Nurturing academic and social development.
<br>
-Skills Required: Subject expertise, understanding of adolescent development, and effective communication.
<br>
</p> 
<p>
<a href="https://www.nea.org/"> National Education Association</a>
<br>
<a href="https://www.edutopia.org/"> Edutopia</a></p>

        </div>
      </div>
      </center>
        <center>
      <div class="card" style="display:none" id="analyst">
        <img src="https://img.freepik.com/free-vector/data-inform-illustration-concept_114360-864.jpg?w=2000" alt="Data Analyst" width="600px" >
        <div class="container">
          <h4><b>Data Analyst</b></h4> 
          <p>1. Definition: Data analysis involves examining data sets to identify trends, draw conclusions, and make informed decisions. It includes a range of techniques such as statistical analysis, data mining, and predictive modeling.
<br>
2. Process:
   - Data Collection: Gathering relevant data from various sources.
   - Data Cleaning: Ensuring data accuracy and removing errors.
   - Data Exploration: Analyzing and summarizing data to identify patterns.
   - Data Modeling: Building statistical models or algorithms.
   - Data Visualization: Presenting findings through charts, graphs, or dashboards.
<br>
Jobs in Data Analysis:
<br>
1. Data Analyst:
   - Responsibilities: Examining data sets, identifying trends, and providing actionable insights. Creating reports and visualizations to communicate findings.
   - Skills Required: Proficiency in data analysis tools (e.g., Excel, SQL), statistical knowledge, and data visualization skills.
   - Relevant Links:
     - [International Institute for Analytics (IIA)](https://www.iianalytics.com/)
     - [Kaggle - Data Science and Machine Learning Platform](https://www.kaggle.com/)
<br>
2. Business Intelligence Analyst:
<br>   
- Responsibilities: Developing and implementing BI solutions, analyzing business processes, and providing data-driven insights.
<br>   
- Skills Required: Proficiency in BI tools (e.g., Tableau, Power BI), SQL, and strong business acumen.
<br>
3. Data Scientist:
<br>   
- Responsibilities: Using advanced analytics and machine learning to extract insights and build predictive models.
<br>   
- Skills Required: Programming (e.g., Python, R), machine learning, statistical modeling, and data storytelling.
<br>   
- Relevant Links:
<br>
<p>     
<a href="https://www.datasciencecentral.com/"> Data Science Central</a><br>
<a href="https://towardsdatascience.com/"> Towards Data Science on Medium</a></p>
        </div>
      </div>
    </center>
    <center>

      <div class="card" style="display:none" id="writer">
        <img src="https://img.freepik.com/free-vector/diary-concept-illustration_114360-3755.jpg?w=2000" alt="Writer/Journalist" width="600px" >
        <div class="container">
          <h4><b>Writer/Journalist</b></h4> 
          <p>Certainly! Being a writer or journalist involves various roles, each requiring specific skills and responsibilities. Here's an overview:
<br>
• Writer:
<br><br>
1. Novelist/Author:
   - Responsibilities: Creating fictional stories or non-fiction books.
   <br>
   - Skills Required: Creative writing, storytelling, and research (for non-fiction).
<br><br>
2. Content Writer:
   - Responsibilities: Producing content for websites, blogs, or social media. <br>
   - Skills Required: Strong writing skills, creativity, and adaptability to different styles.
<br><br>
3. Technical Writer:
   - Responsibilities: Creating technical documentation, manuals, and guides.
   <br>
   - Skills Required: Clarity in writing, understanding complex concepts, and attention to detail.
<br><br>
• Journalist:
<br>
1. News Reporter:
   - Responsibilities: Gathering and reporting news stories for print, broadcast, or online media.
   <br>
   - Skills Required: Investigative skills, writing under tight deadlines, and staying informed about current events.
<br><br>
2. Feature Writer:
   - Responsibilities: Writing in-depth, human-interest stories or feature articles.
  <br>
   - Skills Required: Storytelling, research, and the ability to engage readers.
<br><br>
3. Broadcast Journalist (TV/Radio):
   - Responsibilities: Reporting news through television or radio broadcasts.
   <br>
   - Skills Required: On-air presence, clear communication, and the ability to work in a fast-paced environment.
<br><br>
• Writing and Journalism Resources:

<p>     
<a href="https://www.poynter.org/"> A resource for journalists providing training, research, and support.</a><br>
<a href="https://www.writersdigest.com/"> Offers writing tips, publishing advice, and resources for writers.</a></p>
<a href="https://www.journalism.org/"> Pew Research Center's Journalism Project, providing research and analysis on journalism.</a>
</p> 

Whether you choose a career as a writer or journalist, honing your writing skills, staying informed, and adapting to various styles and mediums are key to success in these fields.</p> 
        </div>
      </div>
    </center>
    <center>

      <div class="card" style="display:none" id="sales">
        <img src="https://img.freepik.com/free-vector/managers-generation-sales-by-marketing-funnel-tiny-people-working-conversion-digital-data-ideas-into-money-flat-vector-illustration-advertising-social-media-seo-service-concept_74855-21977.jpg?w=2000" alt="Sales" width="600px" >
        <div class="container">
          <h4><b>Sales</b></h4> 
          <p>Sales in India encompass a wide range of industries and sectors, reflecting the country's diverse and dynamic market. Here is an overview of sales in India, including key sectors, trends, and resources:
<br><br>
• Key Sectors for Sales in India:
<br><br>
1. E-commerce:
<br>With the rise of digitalization, e-commerce has seen significant growth in India. Major players like Amazon, Flipkart, and others have a substantial presence, offering a wide range of products.
<br><br>
2. Retail:
<br>Traditional brick-and-mortar retail is still prevalent in India, with a vast network of local markets and retail chains. The retail sector includes clothing, electronics, grocery, and more.
<br><br>
3. Automobiles:
<br>India has a thriving automotive market, with both domestic and international manufacturers. Car and two-wheeler sales are significant, driven by increasing consumer demand.
<br><br>
4. FMCG (Fast-Moving Consumer Goods):
<br>The FMCG sector includes products like food items, toiletries, and household goods. This sector is characterized by frequent and rapid sales.
<br><br>
5. Real Estate:
<br>Real estate sales involve residential, commercial, and industrial properties. The real estate market is influenced by factors like urbanization, infrastructure development, and economic growth.
<br><br>
6. Telecommunications:
<br>The telecom sector in India experiences consistent sales, driven by the high penetration of mobile phones and increasing demand for data services.
<br><br>
7. Pharmaceuticals:
<br>The pharmaceutical industry in India is a key player in global markets. Sales include a wide range of medications and healthcare products.
<br><br>
8. IT and Software Services:
<br>The IT and software services sector contributes significantly to the Indian economy. Sales involve software solutions, IT services, and digital products.</p> 
<p>  
• Here are some links:    
<br><a href="https://www.nationalsalesacademy.in/"> National Sales Academy (NSA):</a><br>
<a href="https://www.sellingpower.in/"> Selling Power India:</a>
<a href="http://www.iismm.co.in/"> Indian Institute of Sales and Marketing Management (IISMM):</a>
</p>       

</div>
      </div>

    </center>
    <center>

      <div class="card" style="display:none" id="dmark">
        <img src="https://img.freepik.com/free-vector/digital-marketing-team-with-laptops-light-bulb-marketing-team-metrics-marketing-team-lead-responsibilities-concept-white-background_335657-2022.jpg?w=2000" alt="Digital Marketing" width="600px" >
        <div class="container">
          <h4><b>Digital Marketing</b></h4> 
          <p>The job of digital marketing is one of India's highest-paying jobs, and it's also one of the fastest-paced. Starting in posts like social media marketing or email marketing, you will be able to advance quickly to higher positions in high-growth companies.</p> 
        </div>
      </div>

    </center>
    <center>

      <div class="card" style="display:none" id="entrepreneur">
        <img src="https://img.freepik.com/free-vector/businessman-working-flying-like-superhero-with-briefcase-start-up-launch-start-up-venture-entrepreneurship-concept-white-background_335657-1678.jpg?w=2000" alt="Entrepreneurship" width="600px" >
        <div class="container">
          <h4><b>Entrepreneurship</b></h4> 
          <p>Entrepreneurship is the creation or extraction of economic value. With this definition, entrepreneurship is viewed as change, generally entailing risk beyond what is normally encountered in starting a business, which may include other values than simply economic ones.If you have a good idea,starvingto take it to the market and earn You're an entrepreneur.</p> 
        </div>
      </div>

    </center>
    <center>

      <div class="card" style="display:none" id="cs">
        <img src="https://img.freepik.com/free-vector/pair-programming-concept-illustration_114360-3941.jpg?w=2000" alt="Computer Science Engineer" width="600px" >
        <div class="container">
          <h4><b>Computer Science Engineer</b></h4> 
          <p>Computer Science Engineering (CSE) in India is a popular and rapidly evolving field that encompasses the study of computer systems, programming languages, software development, and various other aspects of computing. Here's an overview of Computer Science Engineering education in India:
<br><br>
• Education and Degrees:
<br><br>
1. Bachelor's Degree (B.Tech/B.E.):
<br>Most students pursue a Bachelor's degree in Computer Science Engineering, typically a B.Tech (Bachelor of Technology) or B.E. (Bachelor of Engineering). The duration of the undergraduate program is usually four years.
<br><br>
2. Master's Degree (M.Tech/M.E.):
<br>After completing a Bachelor's degree, students can opt for a Master's degree in Computer Science Engineering (M.Tech or M.E.). This allows for specialization in specific areas of computer science.
<br><br>
3. Doctoral Programs (Ph.D.):
<br>For those interested in research and academia, Ph.D. programs in Computer Science Engineering are available in various universities and research institutions.
<br><br>
• Key Areas of Study:
<br><br>
1 . Computer Programming:
<br>Students learn programming languages such as C, C++, Java, Python, and others. Emphasis is placed on algorithmic thinking and problem-solving.
<br><br>
2. Data Structures and Algorithms:
<br>This area focuses on understanding and implementing fundamental data structures and algorithms, crucial for efficient software development.
<br><br>
3. Operating Systems:
<br>Students study the principles of operating systems, understanding how they manage hardware resources and provide an interface for user applications.
<br><br>
4. Database Management Systems (DBMS):
<br>DBMS is essential for handling large amounts of data. Students learn about database design, normalization, and SQL.
<br><br>
5. Computer Networks:
<br>This area covers the principles of computer networks, including protocols, network design, and communication technologies.
<br><br>
6. Software Engineering:
<br>Students learn software development methodologies, project management, and the entire software development life cycle.
<br><br>
7. Artificial Intelligence (AI) and Machine Learning (ML):
<br>With the increasing importance of AI and ML, students may study these areas, including topics like neural networks, natural language processing, and data analytics.
<br><br>
8. Cybersecurity:
<br>Given the rising concern for digital security, students may study cybersecurity, including ethical hacking, cryptography, and network security.
<br><br>
9. Cloud Computing:
<br>As cloud services become integral to computing, students may learn about cloud computing architectures, platforms, and services.
<br><br>
10. Internet of Things (IoT) and Embedded Systems:
<br>Students may study the integration of computing devices in the physical world, exploring IoT and embedded systems.
<br><br>
<p>  
• Here are some links:    
<br><a href="https://www.csi-india.org/">Computer Society of India (CSI)</a><br>
<a href="https://india.acm.org/"> Association for Computing Machinery (ACM) India</a>
<a href="https://www.computer.org/india/"> IEEE Computer Society - India</a>
</p>  

</p> 
        </div>
      </div>
    </center>

    <center>
      <div class="card" style="display:none" id="therapist">
        <img src="https://img.freepik.com/free-vector/psychologist-concept-illustration_114360-2141.jpg?w=2000" alt="Therapist" width="600px" >
        <div class="container">
          <h4><b>Therapist</b></h4> 
          <p>A therapist is a broad designation that refers to professionals who are trained to provide treatment and rehabilitation. The term is often applied to psychologists, but it can include others who provide a variety of services, including social workers, counselors, life coaches, and many others. 

The term therapist is not a protected occupational title, but there are many types of therapists who do need to be licensed in order to practice. This includes occupational therapists and marriage and family therapists.</p> 
        </div>
      </div>
    </center>

    <center>
      <div class="card" style="display:none" id="podcaster">
        <img src="https://img.freepik.com/free-vector/people-recording-podcast-together_23-2148777693.jpg?w=2000" alt="Podcaster" width="600px" >
        <div class="container">
          <h4><b>Podcaster</b></h4> 
          <p>Whether as a side hustle or a full-time job, podcasting can be a fun way to share your interests and expertise with an audience. It can also be a way to break into broadcasting and turn a passion project into something profitable, potentially joining the ranks of podcasters who earn decent money through ad revenue and creator funds.</p> 
        </div>
      </div>

    </center>

        <center>

      <div class="card" style="display:none" id="production">
        <img src="https://img.freepik.com/free-vector/factory-workers-robotic-arm-removing-packages-from-conveyor-line-engineer-using-computer-operating-process-vector-illustration-business-production-machine-technology-concepts_74855-9859.jpg" alt="Production Engineer" width="600px" >
        <div class="container">
          <h4><b>Production Engineer</b></h4> 
          <p>Production engineers are responsible for supervising and improving production at plants and factories. They support engineering teams, draw up safety protocols, report issues to the manager, and develop strategies to improve efficiency and profit.</p> 
        </div>
      </div>
<br>
    </center>
    <div class="btn-group">
         <center><button class='button'><a href="careerguidance.php" style='text-decoration:none'>GO TO HOME</a></button></center> <br><br>
         
        </div>
      <script type="text/javascript">
        var myvar = "<?php echo $res; ?>";
        document.getElementById(myvar).style.display = "block";
      </script>
  </body>
  </html>

