<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>
<body>
    <header>
        <div class="logo">
            St<span>eazy</span>
        </div>
        <div class="menu">
            <!--Home, Features, About, Contact, Signup, Login-->
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">Home</a>
                  <a href="loginpage.php">Join</a>
                  <a href="#About">About</a>
                  <a href="#Contact">Contact</a>
                  <a href="signuppage.php">Signup</a>
                </div>
              </div>
              <img src="images/Menu.png" onclick="openNav()">
              <script>
                function openNav() {
                  document.getElementById("myNav").style.height = "100%";
                }
                
                function closeNav() {
                  document.getElementById("myNav").style.height = "0%";
                }
                </script>
        </div>
    </header>
    <!--HERO_SECTION-->
    <div id="Hero-section">
        <div class="hero-cont">
            <h1>
                Study made easy with <span>Steazy...</span>
            </h1>
            <p>
                Start your Learning Adventure Today With Steazy! Whether you’re a student ,
                professional ,or  learner, Steazy Learning is here to support you every step of the way. Let’s learn, grow, and succeed together!
            </p>
            <a href="signuppage.php">EXPLORE</a>
        </div>
        <div class="hero-img">
            <img src="images/Group 2.png">
        </div>
    </div>
    <!--FEATURE_SECTION-->
    <div id="Features">
        <div class="topl">
            <div class="topl-t">
                FEATURES
            </div>
            <div class="topl-l">
                <hr>
            </div>
        </div>
        <div class="contl">
            <div class="contl-i">
                <img src="images/notes 1.png">
            </div>
            <div class="contl-t">
                <h1>Study Resources</h1>
                <p>Steazy, your go-to online learning platform, is committed to revolutionizing the educational experience with a suite of dynamic features. Our extensive study resources encompass a curated library of materials ranging from textbooks to interactive multimedia modules, ensuring a comprehensive and engaging learning journey. Tailoring personalized learning paths, Steazy evaluates individual strengths and weaknesses to offer adaptive study plans, fostering a more effective and efficient learning experience.</p>
            </div>
        </div>
        <div class="contl">
            <div class="contl-t">
                <h1>Productive Learning</h1>
                <p>Productive learning is at the core of Steazy's mission. Our platform integrates interactive study modules, encouraging active engagement through quizzes, hands-on activities, and collaborative learning tools. A user-friendly interface facilitates seamless navigation, while progress tracking and goal-setting features empower learners to monitor their advancements and stay motivated throughout their educational pursuits.</p>
            </div>
            <div class="contl-i">
                <img src="images/productive learning 1.png">
            </div>
        </div>
        <div class="contl">
            <div class="contl-i">
                <img src="images/updates 1.png">
            </div>
            <div class="contl-t">
                <h1>Regular Updates</h1>
                <p>At Steazy, we understand the importance of staying current in a rapidly evolving educational landscape. That's why we provide regular updates to our study resources, ensuring that users have access to the latest information and methodologies. From incorporating the newest research findings to adapting to changes in curriculum, Steazy is dedicated to keeping its users at the forefront of knowledge.</p>
            </div>
        </div>
    </div>
    <!--ABOUT_US-->
    <div id="About">
        <div class="topr">
            <div class="topr-l">
                <hr>
            </div>
            <div class="topr-t">
                ABOUT&nbsp;US
            </div>
        </div>
        <div class="abts">
            <h1>OUR MOTIVE IS TO MAKE STUDY RESOURCES ACESSIBLE</h1>
            <p>Welcome to Steazy, where education meets innovation! At Steazy, we are passionate about redefining the learning experience for students worldwide. Our mission is to make studying easy, enjoyable, and effective. With a team of  tech enthusiasts, and creative minds, we've crafted a platform that goes beyond traditional learning boundaries.                
                Our user-friendly interface ensures a seamless experience, making navigation intuitive and learning a pleasure. We believe in productive learning, and our interactive study modules, combined with progress tracking features, empower you to take charge of your academic goals. Set milestones, track your achievements
                At Steazy, we recognize that education is an ever-evolving field. That's why we are committed to providing regular updates to our study resources, keeping you in sync with the latest information and advancements in your chosen subjects. Join us on this transformative educational adventure, where innovation, customization, and a passion for learning converge. Steazy is not just a platform; it's your partner in the pursuit of knowledge and academic excellence.</p>
            <a href="signuppage.php">JOIN</a>
        </div>
    </div>
    <!--CONTACT_US-->
    <div id="Contact">
        <div class="topl">
            <div class="topl-t">
                CONTACT
            </div>
            <div class="topl-l">
                <hr>
            </div>
        </div>
        <div class="cont-container">
            <div class="cont-f">
                <form action="#" method="post">
                    <input type="text" id="name" name="name"  placeholder="Name" required />
                    <br>
                    <input type="email" id="email" name="email" placeholder="email@gmail.com" required />
                    <br>
                    <textarea id="message" name="message" rows="4" placeholder="Enter your message here..."required resiz="none"></textarea>
                    <br>
                    <button type="submit" style="color: white;">Submit</button>
                </form>
            </div>
            <div class="cont-i">
                <img src="images/contact 1.png">
            </div>
        </div>
    </div>
    <footer class="footer">
        <!--<div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
        </div>
        <ul class="menu">
          <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
          <li class="menu__item"><a class="menu__link" href="#">About</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
    
        </ul>
        <p>Created By- Aryan Solanki, Aditya Sharma, Pradeep Rattan.</p>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    -->
    <div class="wave" id="wave1"></div><div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
      </div>
        <div class="pl">
            <div>Steazy</div>
            <div>
            </div>
            <div>Made with 🩷 by team Archon</div>
        </div>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>