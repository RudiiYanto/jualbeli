<!DOCTYPE html>
<html lang="en" id="Home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/homepage.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">



    <link rel="stylesheet" href="css/homepage.css">
    <title>COOMPLEX | Homepage</title>
</head>


<body>
    <header>
        <div class="navbar">
            <div class="container">
                <div class="box-navbar">
                    <div class="logo">
                        <h1>COOMPLEX.</h1>
                    </div>
                    <ul class="menu">
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#Information">Information</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">AboutUs</a></li>
                        <li><a href="{{ route('pembayaran')}}">Pembayaran</a></li>
                        <li class="active"><a href="{{ route('login') }}">LOGIN</a></li>
                    </ul>
                    <i class="fa-solid fa-bars menu-bar"></i>
                </div>
            </div>
        </div>

        <div class="hero">
            <div class="container">
                <div class="box-hero">
                    <div class="box">
                        <h1>Selamat Datang di COOMPLEX.</h1>
                        <p>Tempat untuk menemukan pengumuman dan Informasi yang terjadi di Komplek Perumahan
                            Tiban Bukit Asri</p>
                        <button>Selengkapnya</button>
                    </div>
                    <div class="box">
                        <img src="img/coomplex2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="information" id="Information">
        <div class="container">
            <h2>News and Information</h2>
            <br>
            <br>
            <div class="box-information">
                <div class="box" >
                    <img src="{{ asset('img/goro.png')}}" alt="" width="350px" height="200px">
                    <h3>Gotong Royong.</h3>
                    <p>Goton royong adalah bekerja bersama-sama, seperti tolong-menolong, batu-membantu.
                    </p>
                    <button>Selengkapnya</button>
                </div>
                <div class="box">
                    <img src="{{ asset('img/17 AN.jpg')}}" alt="" width="350px" height="200px">
                    <h3>Gotong Royong.</h3>
                    <p>Goton royong adalah bekerja bersama-sama, seperti tolong-menolong, batu-membantu.
                    </p>
                    <button>Selengkapnya</button>
                </div>
                <div class="box">
                    <img src="{{ asset('img/RAPAT 1.png')}}" alt="" width="350px" height="200px">
                    <h3>Logo COOMPLEX.</h3>
                    <p>Goton royong adalah bekerja bersama-sama, seperti tolong-menolong, batu-membantu.
                    </p>
                    <button>Selengkapnya</button>
                </div>
            </div>
            <br>
            <br>
            <div class="box-information">
                <div class="box" >
                    <img src="{{ asset('img/goro.png')}}" alt="" width="350px" height="200px">
                    <h3>Gotong Royong.</h3>
                    <p>Goton royong adalah bekerja bersama-sama, seperti tolong-menolong, batu-membantu.
                    </p>
                    <button>Selengkapnya</button>
                </div>
                <div class="box">
                    <img src="{{ asset('img/17 AN.jpg')}}" alt="" width="350px" height="200px">
                    <h3>Gotong Royong.</h3>
                    <p>Goton royong adalah bekerja bersama-sama, seperti tolong-menolong, batu-membantu.
                    </p>
                    <button>Selengkapnya</button>
                </div>
                <div class="box">
                    <img src="{{ asset('img/RAPAT 1.png')}}" alt="" width="350px" height="200px">
                    <h3>Logo COOMPLEX.</h3>
                    <p>Goton royong adalah bekerja bersama-sama, seperti tolong-menolong, batu-membantu.
                    </p>
                    <button>Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>


    <div class="documentation">
        <div class="container">
            <h2>Pembayaran</h2>
            <div class="box-information">
                <div class="box">
                    <img src="{{ asset('img/barcode .png')}}" alt="">
                    <h3>Gotong Royong.</h3>
                    <p>Goton royong adalah bekerja bersama-sama, seperti tolong-menolong, batu-membantu.
                    </p>
                    <button>Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/homepage.js"></script>
</body>
<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <div class="company__info">
                <h2 class="company__logo">Microsoft</h2>
                <p class="company__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, iure. Harum, animi dolores,
                    nam, ad magni expedita.
                </p>
                <!-- <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link">
                            <i class="ri-facebook-circle-line"></i>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                    </li> -->
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                          <p>@coomplex.web</p>
                    </li>
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link">
                            <i class="ri-gmail-line"></i>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                          </svg>
                          <p>webcomplex@gmail.com</p>
                    </li>
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link">
                            <i class="ri-whatsapp-line"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                              </svg>
                              <p>+62 812 3567 8910</p>
                        </a>
                    </li>
                </ul>
                <span class="copyright">&copy;2023 Coomplex. All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>

</html>
