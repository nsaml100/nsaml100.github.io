<?php
if (isset($_GET['username']) & isset($_GET['id'])) {
$Username = $_GET['username'];
$id = $_GET['id'];
}
else{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashcard App - SCOPE Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body id="body-main">
    <main id="main">
    <header id="header-main">
    <!-- Navigation Bar -->
        <nav class="nav-page">
            <img src="logo.jpg" alt="Website Logo" id="logo-main">
            <ul>
               <li><a href='main.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>Home</a></li>
                <li><a href='createSet.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>Create Flashcards</a></li>
                <li><a href='chooseSet.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>View Flashcard Sets</a></li>
                <li><a href='support.php?username=<?php echo $Username ?>&id=<?php echo $id ?>'>Customer Service</a></li>
                <li><a href='index.php'>Login / Sign up</a></li>
            </ul>
        </nav>
    </header>
    <!-- Hero Section -->
    <section class="hero"> 
        <h1>SCOPE: Study Cards for Optimal Performance and Engagment</h1>

        <p>Empower learning with customizable flashcards. Whether you’re a student or a teacher, 
            our platform makes it easy to create, organize, and study from any device.
             Make study sessions simpler and more engaging—start today!</p>
        <a href='createSet.php?username=<?php echo $Username ?>&id=<?php echo $id ?>' class="cta-button">Get Started</a>
    </section>

    <!-- Features Section -->
    <section class="intro-feature">
        <div class="feature">
            <i class="fa-solid fa-star"></i>
            <h2 class="feature-heading">Key Features: </h2>               
                <p>SCOPE offers a variety of features designed to enhance the study experience. With 
                 our intuitive flashcard creation tool, users can easily input questions and answers to build
                 personalized study materials. Additionally, SCOPE provides detailed progress tracking, so students 
                 can monitor their performance over time. Our feedback and rating system allows users to review their
                 flashcards and continuously improve their learning methods.
                </p>
        </div>
        <div class="feature">
            <i class="fa-solid fa-cart-shopping"></i>
            <h2 class="feature-heading"> Featured Products/Services: </h2>
                <p>
                    For students, the Student Dashboard provides a personalized space to access
                    study materials and track learning progress. Teachers can take advantage of the Teacher Tools to manage
                    classrooms, track student achievements, and create custom flashcard sets. These tools are designed to
                    help both students and educators make the most of their study time and enhance the learning experience.
                </p>
        </div>  
        <div class="feature">
            <i class="fa-solid fa-business-time"></i>
            <h2 class="feature-heading"> How It Works: </h2>
                <p>
                Getting started with SCOPE is simple! First, create an account as a student or teacher. Then,
                 start creating your flashcards by adding questions and answers. As you study, track your progress through 
                 detailed analytics, and review your performance to identify areas for improvement. Finally, share your flashcards
                 with others or collaborate on sets to maximize learning outcomes. SCOPE helps users study smarter, not harder.
                </p>
        </div>        
        <div class="feature">
            <i class="fa-solid fa-hand-point-up"></i>
             <h2 class="feature-heading"> Benefits: </h2>    
             <p>
                By using SCOPE, you can maximize your study time with an efficient, user-friendly platform. The customizable 
                 flashcard creator allows you to tailor your study materials to your needs, while progress tracking helps boost retention
                 and identify areas for improvement. With the ability to study from anywhere, at any time, SCOPE provides students and educators 
                 with the tools they need for optimal learning and engagement.
                </p>
        </div>
    </section>
    <section id="intro-info">
            <h3>Introduction</h3>
            <p>Welcome to SCOPE: Study Cards for Optimal Performance and Engagement, 
               where we’re redefining the way students and professionals approach studying. 
               In today’s educational landscape, many struggle with traditional study methods 
               that often feel ineffective and time-consuming. While flashcards have long been 
               celebrated for their simplicity and power in enhancing memory retention, managing time 
               for efficient studying remains a common challenge. As William Penn once said, "Time is 
               what we want most, but what we use worst," a sentiment that resonates with students who 
               aim to study more thoroughly but lack the tools to do so effectively.
               <br><br>
                Educators and professionals alike often face similar frustrations when it comes 
                to creating and organizing study materials. The process of compiling, formatting, 
                and managing resources can be exhausting and inefficient, leaving little time for 
                actual teaching or learning. This leads to mental fatigue, diminished motivation, 
                and difficulties in tracking progress.
                <br><br>
                At SCOPE, we understand these struggles, which is why we’ve designed a user-friendly 
                flashcard creator to help you maximize your study time. Our platform simplifies the process 
                of creating, organizing, and accessing flashcards, so you can focus on what matters most: 
                learning and teaching. With SCOPE, both students and educators will have the tools they need 
                to improve retention, track progress, and make the most of their study time. Let us help you 
                study smarter, not harder.</p>
            <img class="intro-pic" src="intro-pic.jpg">
    </section>
    <section id="team-info">
        <i class="fa-solid fa-handshake"></i>
            <p>Our team is led by Nathan Lynott, who assists both the front-end and back-end teams as needed, ensuring the team stays on track and 
                meets all project deadlines. Dana Nolaly works with the front-end team, focusing on the design, UI/UX, and testing stages with an 
                emphasis on user experience. Dallas Latham supports the back-end team, playing a key role in design, core features, and deployment, 
                with a focus on data entry, organization, and user profiles. Kerry O’Connor collaborates with the front-end team, specializing in design,
                UI/UX, and testing/quality assurance to enhance the overall user experience. Finally, Daniel Perez helps the back-end team, contributing 
                to the design, core features, and deployment stages, particularly around data entry, organization, and user profiles. Together, this dynamic 
                team ensures a balanced approach to both functionality and user experience.</p>
    </section>

    <!-- Footer -->
    <footer>
        <p class="rights">&copy; 2024 SCOPE. All rights reserved.</p>
    </footer>
    </main>
</body>
</html>