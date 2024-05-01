<!DOCTYPE html>
<html>
<head>
    <title>Player Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/image/ehuvik.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .container5 {
            max-width: 800px;
            margin: 0 auto;
            color: white;
        }

        .dropdown-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .player-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: transparent;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-color: white;
        }

        .player-image {
            width: 250px;
            height: 250px;
            margin-right: 20px;
            object-fit: cover;
        }

        .player-details {
            flex: 1;
        }

        .player-details h2 {
            margin-top: 0;
            background-color: transparent;
            color: white;
        }

        .player-details p {
            margin: 5px 0;
            background-color: transparent;
            color: white;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        select, input[type="submit"] {
            color: white;
            background-color: #333;
            border: none;
            padding: 10px 20px;
            margin:10px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        
        select {
            margin-right: 10px;
        }

        input[type="submit"] {
            font-weight: bold;
        }
    </style>
</head>
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
                    <li><a href="profile.php">Coaches</a></li>
        
                    <li class="services">
                        <a href="#">Seasons</a>
        
                        <!-- DROPDOWN MENU -->
                        <ul class="dropdown">
                            <li><a href="2324seas.html">2023-2024</a></li>
                            <li><a href="2223seas.html">2022-2023</a></li>
                        </ul>
        
                    </li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="https://m.facebook.com/groups/625552246126284/?ref=sharehttps://m.facebook.com/groups/625552246126284/?ref=share&exp=9594">Recruitment</a></li>
        

                    <li class="services">
                        <a href="#">Photos</a>
                    
                        <!-- DROPDOWN MENU -->
                        <ul class="dropdown">
                          <li><a href="2223photos.php">2022-2023</a></li>
                            <li><a href="2324photos.php">2023-2024</a></li>
                        </ul>
                    
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://www.facebook.com/EHUVikings/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/ehuvikings/?hl=en"><i class="fab fa-instagram"></i></a></li>
                </div>
            </ul>
        </nav>




<footer>
	<p>&copy; 2023 Edge Hill Vikings. All rights reserved. <a href="privacy.html">Privacy Policy</a></p>
</footer>

</body>
</html>
