<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy and Sell Used Household Items</title>
    <style>
        /* body {
            margin: 0;
            font-family: Arial, sans-serif;
        } */
    html{
        scroll-behavior: smooth;
    }
  /* Hero Section Styles */
  .mainherosection {
            
            background-color: #3b5d50;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 157px;
            padding-bottom: 85px;
        }

        .hero-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 80%;
            max-width: 1200px;
            text-align: center;
        }

        .hero-text {
            max-width: 600px;
            color: white;
        }

        .hero-text h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }


        .hero-buttons .btn {
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1rem;
            display: inline-block;
        }

        .hero-buttons .shop-now {
            background-color: #f0b238;
            color: black;
        }

        .hero-buttons .explore {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .hero-image {
            position: relative;
            margin-top: 20px;
        }

        .hero-image img.couch {
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
        }

        .hero-image img.dots {
            position: absolute;
            /* bottom: ; */
            /* right: 0; */
            width: 50%;
            z-index: 0;
        }

        /* Media Queries */
        @media (min-width: 768px) {
            .hero-section {
                flex-direction: row;
                text-align: left;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                display: flex;
                flex-wrap: nowrap;
                justify-content: flex-start;
                margin-bottom: 15px;
            }

            .hero-image img.dots {
                right: -80px;
                max-width: 300px;
            }
        }
        @media (max-width: 767px){

        }


        @media (max-width: 767px) {
            .hero-image img.dots {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="mainherosection">
        <div class="hero-section">
            <div class="hero-text">
                <h1>Buy and sell used household items easily and securely online</h1>
                <p>We are happy to give you great offers</p>
                <div class="hero-buttons">
                    <a href="#" class="btn shop-now">Shop Now</a>
                    <a href="#" class="btn explore">Explore</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="./images/dots-green.svg" alt="Dots" class="dots">
                <img src="./images/couch.png" alt="Couch" class="couch">
            </div>
        </div>
    </div>
</body>
</html>
