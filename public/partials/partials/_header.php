<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>कुशल Workers </title>
    
</head>
<body>
    <nav class="navbar">
        <div > <a href="/"><img class="logo" src="./dp.jpg" alt="Error"></a>कुशल Workers</div> 
        <ul class="nav-box" id = "navBox">
            <li ><a class="nav-link" href="/">Home </a></li>
            <li ><a class="nav-link" href="/about.php">About</a></li>
            <li ><a class="nav-link" href="/services.php">Services</a></li>
            <li ><a class="nav-link" href="/contact.php">Contact Us</a></li>
        </ul>
        <ul id="menu" onclick = "hamburger()" >
            <li class="menu-link"></li>
            <li class="menu-link"></li>
            <li class="menu-link"></li>
        </ul>
    </nav>
    <script>
        function hamburger(){
            var x = document.getElementById('navBox');
            if (x.style.display === "none") {
                x.style.display = "flex";

            } else {
                x.style.display = "none";
            }
        }
      
    </script>
</body>
</html>