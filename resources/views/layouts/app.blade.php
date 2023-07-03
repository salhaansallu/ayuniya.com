<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Ayuniya, Online shopping, Medicine, Herbal medicine, Health, Ayuniya.com">
    <meta name="description" content="Ayuniya is the world&#039;s first fully automated herbal medicine market place.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Ayuniya, World&#039;s leading herbal medicine market place. | Ayuniya</title>
    <meta name="og:title" content="Ayuniya, World&#039;s leading herbal medicine market place. | Ayuniya">

    @vite(['resources/css/style.scss', 'resources/js/custom.js'])

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/7fb1c947c6.js" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <div class="nav_menu site-container">
        <div class="row row-cols-2">
            <div class="col">
                <img src="{{ asset('images/brand/logo.png') }}" alt="">
            </div>
            <div class="col">
                <i id="menu_open" class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>
    <div class="mobile_nav" id="mobile_menu">
        <div class="close"><i id="menu_close" class="fa-solid fa-times"></i></div>

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/#products">Projects</a></li>
            <li><a href="https://store.ayuniya.com">Shop</a></li>
            <li><a href="/contact-us">Contact us</a></li>
            <li><a href="https://store.ayuniya.com/register" class="primary-btn">Register Ayuniya ID</a></li>
        </ul>

        <div class="row row-cols-3" style="justify-content: space-between;">
            <div class="col"><a href="">Linkedin</a></div>
            <div class="col"><a href="">Twitter</a></div>
            <div class="col"><a href="">Facebook</a></div>
        </div>
    </div>
    <div class="navigation site-container d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
        <div class="row row-cols-2">
            <div class="col">
                <img src="{{ asset('images/brand/logo.png') }}" alt="">
            </div>
            <div class="col">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/#products">Projects</a></li>
                    <li><a href="https://store.ayuniya.com">Shop</a></li>
                    <li><a href="/contact-us">Contact us</a></li>
                    <li><a href="https://store.ayuniya.com/register" class="reg_btn primary-btn">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="site-container">
            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2">
                <div class="col">
                    <div class="brand">
                        <img src="{{ asset('images/brand/logo-light.png') }}" alt="Ayuniya Logo">
                    </div>
                    <div class="about">
                        <p class="subtext">Ayuniya is the world's first automated herbal product marketplace and automated ayurvedic and herbal medicine hospital booking service</p>
                    </div>
                    <div class="contact_d">
                        <div class="dtl"><i class="fa fa-phone"></i> <a href="tel:+947612345678">+94 81 242 1848</a></div>
                        <div class="dtl"><i class="fa fa-envelope"></i> <a href="mailto:info@ayuniya.com">info@ayuniya.com</a></div>
                        <div class="dtl"><i class="fa-solid fa-location-dot"></i> Kandy, Sri Lanka</div>
                    </div>
                </div>

                <div class="col">
                    <div class="head mt-lg-5 mt-md-5 mt-sm-3">Quick links</div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/#products">Projects</a></li>
                        <li><a href="https://store.ayuniya.com">Shop</a></li>
                        <li><a href="https://store.ayuniya.com/register">Register for Ayuniya ID</a></li>
                    </ul>
                </div>

                <div class="col">
                    <div class="head mt-lg-5 mt-md-5 mt-sm-3">Customer service</div>
                    <ul>
                        <li><a href="/contact-us">Contact Us</a></li>
                    </ul>
                    <div class="head">Social links</div>

                    <div class="icons">
                        <ul style="margin-left: 0;">
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright &copy; <?php echo date("Y") ?> DEF TESNO (PVT) LTD. All Rights Recieved
            </div>
        </div>
    </footer>
</body>

</html>
