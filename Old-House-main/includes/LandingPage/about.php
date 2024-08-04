<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Old House</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
        .aboutsection {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 80px;
            box-sizing: border-box;
            direction: rtl;
            text-align: left;
        }

        .old-house-vision-section {
            padding: 20px;
            /* background-color: #f9f9f9; */
        }

        .old-house-vision-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .old-house-vision-image {
            flex: 1;
            max-width: 500px;
            margin: 70px;
        }

        .old-house-vision-image img {
            width: 100%;
        }

        .old-house-vision-text {
            flex: 2;
            max-width: 600px;
            margin: 10px;
        }

        .old-house-vision-heading {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .old-house-vision-paragraph {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 10px;
        }
        @media (max-width: 767px){
        .old-house-vision-container{
            flex-direction: column;
        }
        }
    </style>
</head>
<body>
    <div class="aboutsection" id="about">
    <section class="old-house-vision-section">
        <div class="old-house-vision-container">
            <div class="old-house-vision-image">
                <img src="images/Team spirit-pana.svg" alt="Old House Image">
            </div>
            <div class="old-house-vision-text">
                <h2 class="old-house-vision-heading">About Us</h2>
                <p class="old-house-vision-paragraph">
                    Welcome to Old House, your trusted destination for quality used furniture.
                     At Old House, we believe in giving furniture a second life and offering our 
                     customers unique and affordable pieces that bring character and charm to any space.
                </p>
                <p class="old-house-vision-paragraph">
                    Our carefully curated selection of pre-owned furniture includes everything from
                     vintage classics to modern designs, ensuring that there is something for everyone.
                      Each item is thoroughly inspected and lovingly restored to meet our high standards of quality and aesthetics.
                </p>
                <p class="old-house-vision-paragraph">
                    We are committed to sustainability and reducing waste by promoting the reuse of furniture.
                     By choosing Old House, you are not only finding beautiful pieces for your home but also contributing
                      to a more sustainable future.
                </p>
                <p class="old-house-vision-paragraph">
                    Our dedicated team is passionate about helping you find the perfect pieces to fit your style and needs.
                     We strive to provide excellent customer service and make your shopping experience enjoyable and hassle-free.
                </p>
                <p class="old-house-vision-paragraph">
                    Thank you for choosing Old House. We look forward to helping you furnish your space with pieces that tell a story.
                </p>
            </div>
        </div>
    </section>
    </div>
</body>
</html>
