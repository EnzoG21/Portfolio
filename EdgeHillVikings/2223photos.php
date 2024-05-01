<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHU Vikings</title>
    <link rel="icon" href="/image/ehuvik.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <script src="gallery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<style>
    /*Welcome Section*/
.welcome-section {
    background-color: transparent;
    padding: 50px;
}

.welcome-content {
    text-align: center;
    
}

.welcome-content h1 {
    font-size: 48px;
    color: white;
}


.welcome-content p {
    font-size: 18px;
    font-style: italic;
    color: white;
    margin-bottom: 30px;
}
.loading {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: black;
      margin: 0;
    }

    .status-bar {
      width: 200px;
      height: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
    }

    .status-fill {
      width: 0;
      height: 100%;
      background: linear-gradient(to right, limegreen, purple); /* Lime green to purple */
      transition: width 2s ease-in-out; /* Adjust the duration as needed */
    }
</style>
<body>


        <nav class="navbar">
            <!-- LOGO -->
            <div class="logo">
                <img src="image/ehuvik.png" alt="Logo of EHU Vikings">
            </div>
        
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
        
                <!-- USING CHECKBOX HACK -->
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        
                <!-- NAVIGATION MENUS -->
                <div class="menu">
        
                    <li><a href="index.html">Home</a></li>
                    <li><a href="profile.html">Coaches</a></li>
        
                    <li class="services">
                        <a href="#">Seasons</a>
        
                        <!-- DROPDOWN MENU -->
                        <ul class="dropdown">
                            <li><a href="2324seas.html">2023-2024</a></li>
                            <li><a href="2223seas.html">2022-2023</a></li>
                        </ul>
        
                    </li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="https://m.facebook.com/groups/625552246126284/?ref=sharehttps://m.facebook.com/groups/625552246126284/?ref=share&exp=9594">Join the Family
                    </a></li>
        

                    <li class="services">
          <a href="#">Gallery</a>

          <!-- DROPDOWN MENU -->
          <ul class="dropdown">
            <li><a href="2324photos.php">2023-2024</a></li>
            <li><a href="2223photos.php">2022-2023</a></li>
            
          </ul>

        </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://www.facebook.com/EHUVikings/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/ehuvikings/?hl=en"><i class="fab fa-instagram"></i></a></li>
                </div>
            </ul>
        </nav>
 <div class="loading">
    <div class="status-bar">
      <div class="status-fill"></div>
    </div>
  </div>
  <script>
     setTimeout(() => {
      var loadingAnimation = document.querySelector(".loading");
      var statusFill = document.querySelector(".status-fill");
      
      statusFill.style.width = "100%";
      setTimeout(() => {
        loadingAnimation.style.display = 'none';
      }, 2000); // Delay before hiding the loading animation
    }, 3000); // Replace this with your actual loading time
  </script>
  <div class="gallery">
<?php
  // (B) GET IMAGES IN GALLERY FOLDER
  $dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery/2022-2023" . DIRECTORY_SEPARATOR;
  $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp,JPG}", GLOB_BRACE);

  // (C) SORT IMAGES BY LANDSCAPE AND PORTRAIT
  $landscape = [];
  $portrait = [];
  
  foreach ($images as $image) {
    $size = getimagesize($image);
    $orientation = ($size[0] > $size[1]) ? 'landscape' : 'portrait';
    
    if ($orientation === 'landscape') {
      $landscape[] = $image;
    } else {
      $portrait[] = $image;
    }
  }

  // (D) OUTPUT PORTRAIT IMAGES
  foreach ($portrait as $image) {
    printf("<img src='gallery/2022-2023/%s'>", rawurlencode(basename($image)));
  }

  // (E) OUTPUT LANDSCAPE IMAGES
  foreach ($landscape as $image) {
    printf("<img src='gallery/2022-2023/%s'>", rawurlencode(basename($image)));
  }
?>
</div>


<footer>
	<p>&copy; 2023 Edge Hill Vikings. All rights reserved. <a href="privacy.html">Privacy Policy</a></p>
</footer>

<script>
    const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
</script>

</body>

</html>