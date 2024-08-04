<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="css/sections-styles.css?v=<?php echo time(); ?>">
    <title>Landing Page</title>
    <style>
        header {
            background-color: #3b5d50e0;
            padding: 20px;
            position: fixed;
            width: 100%;
            z-index: 100;
        }

        .logo img {
            width: 150px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .container {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav-links-container {
            display: flex;
            justify-content: flex-end;
            gap: 40px;
            padding: 15px 0 0 0;
            flex-wrap: wrap;
        }

        .nav-links-container a {
            text-decoration: none;
            color: white;
            transition: 300ms ease;
        }

        .nav-links-container a:hover {
            border-bottom: 3px solid #fff;
        }

        .icons-container {
            display: flex;
            padding: 15px 0 0 0;
            gap: 20px;
        }

        .icons-container img {
            width: 15px;
            transition: 300ms ease;
        }

        .icons-container img:hover {
            width: 20px;
            transition: 300ms ease;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-toggle {
            color: white;
            text-decoration: none;
            padding: 10px;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 300ms ease;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media (min-width: 769px) {
            .menu-toggle {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .nav-links-container {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #3b5d50;
                position: absolute;
                top: 60px;
                left: 0;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
                z-index: 2;
            }

            .nav-links-container.show {
                display: flex;
            }

            .icons-container {
                display: none;
            }

            .menu-toggle {
                display: block;
                padding: 10px;
                cursor: pointer;
                color: white;
                background-color: #3b5d50;
                border: none;
                font-size: 16px;
            }

            .dropdown-content {
                position: static;
                box-shadow: none;
                border-radius: 0;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="bg-green">
            <div class="logo">
                <img src="./images/logo.png" alt="Logo">
            </div>
            <div class="container">
                <div class="nav-links-container" id="navLinks">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="shop.php">Shop</a>
                    <a class="nav-link" href="#about">About us</a>
                    <a class="nav-link" href="#contacto">Contact us</a>
                    <a href="#" id="logout-link">Logout</a>
                </div>
                <div class="icons-container">
                    <a href="./cart.php"><img src="./images/cart.svg" alt="Shop"></a>
                </div>
                <button class="menu-toggle" id="menuToggle">Menu</button>
            </div>
        </nav>
    </header>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#logout-link').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, log me out!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php';
                    }
                });
            });

            $('#menuToggle').on('click', function() {
                $('#navLinks').toggleClass('show');
            });
        });
    </script>
</body>

</html>
