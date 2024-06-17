<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-perpus</title>
    @if ($homePage == true)
        <link rel="stylesheet" href="{{ asset('best-ebook-website-asset/css/style.css') }}" />
    @else
        <link rel="stylesheet" href="{{ asset('best-ebook-website-asset/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('best-ebook-website-asset/pages/book-filter.css') }}" />
    @endif
    <!--- google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<style>
    /* Dropdown Button */
    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .responsive-iframe {
        width: 100%;
        height: 500px;
        /* Tinggi default */
    }

    @media (max-width: 768px) {
        .responsive-iframe {
            height: 300px;
            /* Tinggi untuk layar lebih kecil */
        }
    }
</style>

<body>

    @if ($homePage == true)
        <header>
            <nav class="navbar">
                <div class="logo">
                    <div class="img">
                        <img src="{{ asset('best-ebook-website-asset/images/logo.png') }}" alt="" />
                    </div>
                    <div class="logo-header">
                        <h4><a href="#">E-Perpus</a></h4>
                        <small>Book Website</small>
                    </div>
                </div>
                <ul class="nav-list">
                    <div class="logo">
                        <div class="title">
                            <div class="img">
                                <img src="{{ asset('best-ebook-website-asset/images/logo.png') }}" alt="" />
                            </div>
                            <div class="logo-header">
                                <h4><a href="#">Bookoe</a></h4>
                                <small>Book Website</small>
                            </div>
                        </div>
                        <button class="close"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('home.bukuPage') }}">Books</a></li>
                    {{-- <li><a href="pages/service.html">E-Resources</a></li> --}}
                    <li class="dropdown" style="z-index: 99999;">
                        <a href="#" class="dropbtn">E-Resources <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a target="_blank" href="https://e-resources.perpusnas.go.id/">Perpustakaan Nasional</a>
                            <!-- Add more e-resources as needed -->
                        </div>
                    </li>
                    <li><a href="pages/contact.html">Contact</a></li>
                    @auth
                        <button class="signup"><a href="{{ route('dashboard') }}">Dashboard</a></button>
                    @else
                        <button class="signup"><a href="{{ route('login') }}">Log In</a></button>
                        <button class="signup">
                            <i class="fa-solid fa-user"></i><a href="{{ route('register') }}">Sign Up</a>
                        </button>
                    @endauth

                </ul>
                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </nav>
        </header>
    @else
        <header>
            <nav class="navbar-2">
                <div class="logo">
                    {{-- <div class="img">
                        <img src="{{ asset('best-ebook-website-asset/images/logo.png') }}" alt="" />
                    </div>
                    <div class="title">
                        <h4>Bookoe<i class="fa-solid fa-grid"></i></h4>
                        <small>Book Website</small>
                    </div> --}}
                </div>
                <div class="search-box">
                    <form action="{{ route('home.bukuPage') }}" method="get">
                        @csrf
                        <div class="search-field">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Search over 30 million Book titles" />
                            <button type="submit" class="search-icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>

                </div>
                <div class="nav-end">
                    {{-- <button class="likebtn">
                        <i class="fa-regular fa-heart"></i> <span>35</span>
                    </button>
                    <button class="cart">
                        <a href="cart-item.html"><i class="fa-solid fa-cart-shopping"></i> <span>4</span></a>
                    </button>
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiM0o_5tIn0DAmbB2wKS4GvurHctTwxD5om2vi4NOsj1ODDSGULrviZ-QV3ul8JYEMfO0&usqp=CAU"
                            alt="" />
                    </div> --}}
                </div>
            </nav>
        </header>
    @endif




    @yield('content')

    <footer>
        <div class="container">
            <div class="logo-description">
                <div class="logo">
                    <div class="img">
                        <img src="images/logo.png" alt="" />
                    </div>
                    <div class="title">
                        <h4>E-Perpus</h4>
                        <small>Book Website</small>
                    </div>
                </div>
                <div class="logo-body">
                    {{-- <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam
                        voluptates eius quasi reiciendis recusandae provident veritatis
                        sequi, dolores architecto dolor possimus quos
                    </p> --}}
                </div>
                <div class="social-links">
                    <h4>Follow Us</h4>
                    <ul class="links">
                        <li>
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="categories list">
                <h4>Book Categories</h4>
                <ul>
                    <li><a href="Pages/book-filter.html">Action</a></li>
                    <li><a href="Pages/book-filter.html">Adventure</a></li>
                    <li><a href="Pages/book-filter.html">Comedy</a></li>
                    <li><a href="Pages/book-filter.html">Crime</a></li>
                    <li><a href="Pages/book-filter.html">Drama</a></li>
                    <li><a href="Pages/book-filter.html">Fantasy</a></li>
                    <li><a href="Pages/book-filter.html">Horror</a></li>
                </ul>
            </div> --}}
            {{-- <div class="quick-links list">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">About Us</a></li>
                    <li><a href="pages/contact.html">Contact Us</a></li>
                    <li><a href="pages/book-filter.html">Products</a></li>
                    <li><a href="pages/login.html">Login</a></li>
                    <li><a href="pages/registration.html">Sign Up</a></li>
                    <li><a href="pages/cart-item.html">Cart</a></li>
                    <li><a href="pages/checkout.html">Checkout</a></li>
                </ul>
            </div> --}}
            <div class="our-store list">
                <h4>Lokasi</h4>
                <div class="map" style="margin-top: 1rem">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1280.408262723861!2d100.9968977501309!3d0.362167524563486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d515ab072d33cd%3A0x1f9ca5704ff4a6a1!2sSMAN%201%20Bangkinang%20Seberang!5e1!3m2!1sen!2sid!4v1718293147985!5m2!1sen!2sid"
                        height="70" style="width: 100%; border: none; border-radius: 5px" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul>
                    <li>
                        <a href=""><i class="fa-solid fa-location-dot"></i>9X6W+RJJ, Jl. Bend. Uwai, Pulau,
                            Kec. Bangkinang Kota, Kabupaten Kampar, Riau 28554</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-phone"></i>+62 xxxxxxxxxxxx</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-envelope"></i>support@bookoe.id</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <button class="back-to-top"><i class="fa-solid fa-chevron-up"></i></button>
    <script src="{{ asset('best-ebook-website-asset/js/back-to-top.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="{{ asset('best-ebook-website-asset/js/script.js') }}"></script>
    <script src="{{ asset('best-ebook-website-asset/js/repeat-js.js') }}"></script>
    <script src="{{ asset('best-ebook-website-asset/js/add-to-cart.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

    <script>
        const tabbtn = document.querySelectorAll(".tablink");
        for (let i = 0; i < tabbtn.length; i++) {
            tabbtn[i].addEventListener('click', () => {
                let tabName = tabbtn[i].dataset.btn;
                let tabContent = document.getElementById(tabName);
                let AllTabContent = document.querySelectorAll(".tabcontent");
                let tabbtns = document.querySelectorAll(".tablink");
                for (let j = 0; j < AllTabContent.length; j++) {
                    AllTabContent[j].style.display = "none";
                }
                tabContent.style.display = "block";

            })

        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src=".{{ asset('best-ebook-website-asset/js/increment-decrement.js') }}"></script>

    @yield('script')
</body>

</html>
