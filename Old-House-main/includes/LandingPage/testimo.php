<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alltestimonials";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT description, name FROM testimonials";
$result = $conn->query($sql);

$testimonials = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $testimonials[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <!-- CSS -->
    <style>
        * {box-sizing: border-box}
        .Testimonials {
             margin-top:150px;
             margin-bottom:150px;

            }
        .mySlides {display: none; text-align: center;}

        .slideshow-container-Testimonials {
            width: 80%;
            position: relative;
            margin: auto;
            border-radius: 10px;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            background-color: #00000060;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 50px;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 50px;
        }

        .prev:hover, .next:hover {
            background-color: #3B5D50;
        }

        .text {
            color: #333;
            font-size: 18px;
            padding: 8px 12px;
            position: relative;
            width: 100%;
            text-align: center;
        }

        .author {
            color: #555;
            font-size: 16px;
            position: relative;
            width: 100%;
            text-align: center;
            margin-top: 10px;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #3B5D50;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        .thTestimonials{
            margin-top: 90px;
            margin-bottom: -20px;
            font-size: 26px;
            justify-content: center;
            text-align: center;
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    </style>
</head>
<body>
<div class="thTestimonials">
    <h2>Testimonials</h2>
</div>
<div class="Testimonials">
    <div class="slideshow-container-Testimonials">
        <?php foreach($testimonials as $index => $testimonial): ?>
        <div class="mySlides fade">
            <div class="numbertext"><?php echo $index + 1; ?> / <?php echo count($testimonials); ?></div>
            <div class="text">“<?php echo htmlspecialchars($testimonial['description'], ENT_QUOTES, 'UTF-8'); ?>”</div>
            <div class="author"><?php echo htmlspecialchars($testimonial['name'], ENT_QUOTES, 'UTF-8'); ?></div>
        </div>
        <?php endforeach; ?>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br>

    <div style="text-align:center">
        <?php for($i = 1; $i <= count($testimonials); $i++): ?>
        <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span> 
        <?php endfor; ?>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<!-- JavaScript -->
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>
