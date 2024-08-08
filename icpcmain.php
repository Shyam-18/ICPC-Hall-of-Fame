<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Website in HTML CSS</title>
    <link rel="stylesheet" href="icpcmain.css" />
    <script src="../custom-scripts.js" defer></script>
  </head>
  <body>
    <main>
      <!-- Header Start -->
      <header>
        <nav class="nav container">
          <h2 class="nav_logo"></h2>
          <a href="#" class="nav_logo">
            <img src="logo.png" width="200" height="100"  >
          </a>
          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
           
            
          
        </nav>

      </header>
      
      <!-- Header End -->
      <!-- Hero Start -->
      <section class="hero">
        <div class="row container">
          <div class="column">
            <h2>About ICPC</h2>
            <p>The International Collegiate Programming Contest is an algorithmic programming contest for college students. Teams of three, representing their university, work to solve the most real-world problems, fostering collaboration, creativity, innovation, and the ability to perform under pressure. Through training and competition, teams challenge each other to raise the bar on the possible. Quite simply, it is the oldest, largest, and most prestigious programming contest in the world.</p>
            <div class="buttons">
              <a href="icpclogin.php"><button class="btn">Login</button></a>
              <a href="icpcregister.php"><button class="btn">Register</button></a>
            </div>
          </div>
          <div class="column">
            <img src="hero.jpg" alt="heroImg" class="hero_img" />
          </div>
        </div>
      </section>
      <!-- Hero End-->
    </main>
    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");
      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
  </body>
</html>