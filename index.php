<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Mobarkar Samiksha's Portfolio</title>
</head>

<body>
     
    <!--===== HEADER =====-->
    <header class="l-header" style="background-color:black;">
        <nav class="nav bd-grid">

            <div>
                <a href="#" class="nav__logo">Samiksha</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        
        <section class="home bd-grid" id="home">
            
            <div class="home__data">
                <h1 class="home__title" style="color:white;">Hi,<br>I'am <span class="home__title-color">Samiksha</span><br> Computer Engineer</h1>

                <a href="mailto: mobarkarsamiksha@gmail.com" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="https://www.linkedin.com/in/samiksha-mobarkar-0356901b0/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                
                <a href="https://github.com/brainbotsector" class="home__social-icon"><i class='bx bxl-github' ></i></a>
            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="60" y="70" href="img/perfill1.png" style="
                            height: 433px;
                        "/>
                        </g>
                    </svg>
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="img/about.png" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle" style="color:white;">I'am Samiksha</h2>
                    <p class="about__text">A Computer Engineer Graduate hoping to get a opportunity to work in a challenging enviroment.
                        Multitasking professional with remarkable coding techniques.
                        Interested in Machine Learning and Artificial Intelligence,excellent in implementing new innovative ideas. </p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text"></p>
                    <div class="skills__data">
                        <div class="skills__names">

                            <span class="skills__name">Programming Languages:-
                            <font color="white">C | Python</font></span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">90%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">Databases: <font color="white">SQL</font></span>
                        </div>
                        <div class="skills__bar skills__css">

                        </div>
                        <div>
                            <span class="skills__percentage">90%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">

                            <span class="skills__name">Web Technologies:
                            <font color="white">HTML | CSS | Flask</font>
                                </span>
                        </div>
                        <div class="skills__bar skills__js">

                        </div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">

                            <span class="skills__name">Tools Used: <font color="white"> Visual Studio| Android Studio|
                                MySQL| Jupyter Notebook| Cisco
                                Packet Tracer</font></span>
                        </div>
                        <div class="skills__bar skills__ux">

                        </div>
                        <div>
                            <span class="skills__percentage">80%</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="img/work5.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
                <a href="p1.html" class="work__img">
                    <img src="img/work1.jpg" alt="">
                </a>
                <a href="p2.html" class="work__img">
                    <img src="img/work2.jpg" alt="">
                </a>
                <a href="p3.html" class="work__img">
                    <img src="img/work3.jpg" alt="">
                </a>

            </div>
        </section>

    

<!--=====  =====-->
<section class="about section " id="about">
            <h2 class="section-title">Paper Publication</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                <a href="http://troindia.in/journal/ijcesr/vol9iss1/7-11.pdf" class="work__img">
                    <img src="img/paper.jpg" alt="">
                </a>
                </div>

                <div>
                    <h2 class="about__subtitle" style="color:white;">Publisher</h2>
                    <h2 class="about__text">INTERNATIONAL JOURNAL OF CURRENT ENGINEERING
AND SCIENTIFIC RESEARCH (IJCESR)
</h2>
                </div>
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <form action="connect.php" method="post" class="contact__form">
                    <label>Full Name</label>
                    <input type="text" class="contact__input" id="" name="fullName" />
                    <label>E-Mail Id</label>
                    <input type="text" class="contact__input" id="" name="email" />
                    <label>Your Queries or Feedback</label>
                    <textarea id=" " name="feedback" placeholder=" Type Here... " cols="0 " rows="10 " class="contact__input ">
                    </textarea>
                    <button type="submit" class="contact__button-success button " style=" margin-left: 0px; margin-right: -10; border-right-width: 0px; padding-right: -20; padding-right: -10; width: 140px; margin-right: 0px; ">SUBMIT</button>
                </form>
            </div>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer ">
        <p class="footer__title ">Samiksha</p>
        <div class="footer__social ">
            <a href="# " class="footer__icon "><i class='bx bxl-facebook' ></i></a>
            <a href="# " class="footer__icon "><i class='bx bxl-instagram' ></i></a>
            <a href="# " class="footer__icon "><i class='bx bxl-twitter' ></i></a>
        </div>
        <p class="footer__copy ">&#169; Samiksha Mobarkar. All rigths reserved</p>
    </footer>
    


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal "></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js "></script>
    
</body>

</html>