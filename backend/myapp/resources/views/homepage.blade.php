<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title> Surgery Departement </title>



    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('styling/css/surgery.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>



</head>



<body>

    <!-- loader screen =====================================================-->
    <div class="loader"></div>






    <!-- fixed navbar =======================================================-->
    <div class="fixed-navbar"></div>







    <!-- progress line ======================================================-->







    <!-- fixed Appointement button & arrow back ==============================-->
    <div class="floating-box">
        <div class="arrow">
            <a href="#" title="Back to Top">
                <div class="fas fa-angle-up"></div>
            </a>
        </div>
        <div class="label">Book appointment! <div class="right-button"></div>
        </div>
    </div>







    <!-- navbar with slider in the header =====================================-->
    <div id="home" class="Header">
        <div class="navbar">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <img src="{{ asset('styling/homeimg/logo.png') }}" class="logo">
            <ul>
                <li><a href="#home"><i class="fa fa-Home"></i> Home</a></li>
                <li><a href="#about"><i class="fa fa-university"></i> About us</a></li>
                <li><a href="#spec"><i class="fa fa-list"></i> specialties</a></li>
                <li><a href="#media"><i class="fa fa-photo"></i> Media center</a></li>
                <li><a href="#patient"><i class="fa fa-user"></i> Patient area </a></li>
                <li><a href="#popup"><i class="fa fa-envelope"></i> contact us</a></li>
                <div class="search-box">
                    <input type="text" placeholder="Type to search..">
                    <div class="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="cancel-icon">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="search-data">
                    </div>
                </div>
            </ul>
        </div>


        <!--start slider============================================================-->
        <div class="slider">
            <div class="slides">

                <!--radio buttons-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <input type="radio" name="radio-btn" id="radio6">

                <!--slides images-->
                <div class="slide first">
                    <img src="{{ asset('styling/homeimg/slide1.jpeg') }}" alt="">
                </div>

                <div class="slide">
                    <img src="{{ asset('styling/homeimg/slide2.jpeg') }}" alt="">

                </div>

                <div class="slide">
                    <img src="{{ asset('styling/homeimg/slide3.jpeg') }}" alt="">

                </div>

                <div class="slide">
                    <img src="{{ asset('styling/homeimg/slide4.jpeg') }}" alt="">

                </div>

                <div class="slide">
                    <img src="{{ asset('styling/homeimg/slide5.jpg') }}" alt="">

                </div>

                <div class="slide">
                    <img src="{{ asset('styling/homeimg/slide6.jpg') }}" alt="">

                </div>


                <!--automatic navigation-->
                <div class="autoNavigation">
                    <div class="autoBtn1"></div>
                    <div class="autoBtn2"></div>
                    <div class="autoBtn3"></div>
                    <div class="autoBtn4"></div>
                    <div class="autoBtn5"></div>
                    <div class="autoBtn6"></div>
                </div>

                <!--manual navigation-->
                <div class="manuNavigation">
                    <label for="radio1" class="manuBtn"></label>
                    <label for="radio2" class="manuBtn"></label>
                    <label for="radio3" class="manuBtn"></label>
                    <label for="radio4" class="manuBtn"></label>
                    <label for="radio5" class="manuBtn"></label>
                    <label for="radio6" class="manuBtn"></label>
                </div>


            </div>

            <!-- content over the slides -->

            <div class="content" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:330px;">
                <h1>SURGERY DEPARTMENT</h1>
                <P>We are here for you!</P>
                <div>
                    <form>
                        <button type="submit" formaction="/signin"> Sign In</button>
                        <button type="submit" formaction="register"> Sign Up</button>
                    </form>
                </div>
            </div>

        </div>
        <!--end slider==================================================================-->
    </div>








    <!-- Surgical Specialties slider ======================================================-->
    <h2 id="spec" class="section-title" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <b>Surgical Specialties</b>
    </h2>
    <div class="swiper mySwiper  media-scroller ">
        <div class="swiper-wrapper ">

            <div class="swiper-slide">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/cardiology.jpg') }}" alt="">

                    <p class="title"><b>Cardiothoracic Surgery</b></p>
                </div>
            </div>

            <div class="swiper-slide ">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/neurology.jpg') }}" alt="">
                    <p class="title"><b>Neurosurgery</b></p>
                </div>
            </div>

            <div class="swiper-slide ">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/orthopedic.jpg') }}" alt="">
                    <p class="title"><b>Orthopaedic Surgery</b></p>
                </div>
            </div>

            <div class="swiper-slide  ">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/urology.jpg') }}">
                    <p class="title"><b>Urology</b></p>
                </div>
            </div>

            <div class="swiper-slide ">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/cardiology.jpg') }}">

                    <p class="title"><b>Cardiothoracic Surgery</b></p>
                </div>
            </div>

            <div class="swiper-slide  ">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/neurology.jpg') }}">

                    <p class="title"><b>Neurosurgery</b></p>
                </div>
            </div>

            <div class="swiper-slide ">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/orthopedic.jpg') }}">

                    <p class="title"><b>Orthopedic Surgery</b></p>
                </div>
            </div>

            <div class="swiper-slide ">
                <div class="  media-element ">
                    <img src="{{ asset('styling/homeimg/urology.jpg') }}">

                    <p class="title"><b>Urology</b></p>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>




    <!-- cuboids section =================================================================-->

    <div id="about" class="wrapper">

        <div class="box">
            <div class="front-face">
                <div class="icon">
                    <img src="{{ asset('styling/homeimg/book-appointment.jpg') }}">
                </div>
            </div>
            <div class="back-face">
                <div class="main-title">book your appointment</div>
                <p>
                    Select your Doctor and Schedule an Appointment
                </p>
                <form method="get" action="register">
                    <button type="submit">go</button>
                </form>
            </div>
        </div>

        <div class="box">
            <div class="front-face">
                <div class="icon">
                    <img src="{{ asset('styling/homeimg/find-doctor.jpg') }}">
                </div>
            </div>
            <div class="back-face">
                <div class="main-title">find your doctor</div>
                <p>
                    Search Our Wide Index or Professional Doctors.
                </p>
                <form method="get" action="/finddoctor">
                    <button type="submit">go</button>
                </form>
            </div>
        </div>

        <div class="box">
            <div class="front-face">
                <div class="icon">
                    <img src="{{ asset('styling/homeimg/take-tour.jpg') }}">
                </div>
            </div>
            <div class="back-face">
                <div class="main-title">take a tour</div>
                <p>
                    See our Facilities before your visit to make sure that it’s the right place.
                </p>
                <button>go</button>
            </div>
        </div>

    </div>




    <!-- latest news section================================================================= -->

    <div id="media" class="last-news">
        <div class="news-title" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;"> <b>Our Latest
                News</b> </div>

        <div class="news-box">
            <div class="news-content">A</div>
            <div class="news-content1"><b>bout Conference</b></div>
            <div class="news-content2">Scientex Conference with incomparable hospitality and at the center for energy
                invites all the participants from across the world to attend our International Conference on Surgery and
                Anesthesia highlighting the following the theme "Pathbreaking Innovations in Surgery and Research”.
            </div>
            <div class="news-button"><button type="button"><span></span> Read more</button></div>
        </div>

        <div class="new-box-image">
            <div class="img-small-circle1"></div>
            <div class="img-small-circle2"></div>
            <div class="img-big-circle" data-center-center="opacity:1;left:0px;"
                data-0-bottom="opacity:0;left:-400px;"></div>
        </div>

    </div>


    <!--health hub swiper =================================================================== -->

    <div id="patient" class="health-hub">
        <div class="blog-card">
            <div class="health-title" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;"><b>
                    Health Hub</b> </div>
            <input type="radio" name="select" id="tap-1" checked>
            <input type="radio" name="select" id="tap-2">
            <input type="radio" name="select" id="tap-3">
            <input type="checkbox" id="imgTap">

            <div class="sliders">
                <label for="tap-1" class="tap tap-1"></label>
                <label for="tap-2" class="tap tap-2"></label>
                <label for="tap-3" class="tap tap-3"></label>
            </div>

            <div class="inner-part">
                <label for="imgTap" class="img">
                    <img class="img-1" src="{{ asset('styling/homeimg/immune-system.jpg') }}">
                </label>
                <div class="contentt contentt-1">
                    <div class="box-note">28 May 2022</div>
                    <div class="title">Immune System</div>
                    <div class="text">Attempting to enhance your immune system's cells is extremely difficult
                        since the immune system contains so many distinct types of cells that respond to germs in so
                        many different ways.</div>
                    <button>Read more</button>
                </div>
            </div>

            <div class="inner-part">
                <label for="imgTap" class="img">
                    <img class="img-2" src="{{ asset('styling/homeimg/medicine.jpg') }}">
                </label>
                <div class="contentt contentt-2">
                    <div class="box-note">28 May 2022</div>
                    <div class="title">Misuse of Medicines</div>
                    <div class="text">Taking a medicine in a way or dose different than recommended; taking
                        someone else's prescription, even if it's for a genuine medical reason like pain.</div>
                    <button>Read more</button>
                </div>
            </div>

            <div class="inner-part">
                <label for="imgTap" class="img">
                    <img class="img-3" src="{{ asset('styling/homeimg/cardiovascular.jpg') }}">
                </label>
                <div class="contentt contentt-3">
                    <div class="box-note">28 May 2022</div>
                    <div class="title">Cardiovascular Diseases</div>
                    <div class="text">We can reduce the risk of cardiovascular diseases through decrease the
                        3 white poisons consumption: Salt, Sugar, and Flour .</div>
                    <button>Read more</button>
                </div>
            </div>

        </div>
    </div>

    <!--contact us-->


    <div class="popup" id="popup">
        <div class="popup-inner">
            <div class="popup__photo">
                <img src="{{ asset('surgeryDepartement\slide1.jpeg') }}" alt="">
            </div>
            <div class="popup__text">

                <form name='myform' method="post" action="complain">
                    @csrf
                    <input name="name" type="text" class="feedback-input" placeholder="Name" />
                    <input name='myemail' type="text" id="display_email" class="feedback-input" placeholder="Email" />
                    <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
                    <input id="contactbtn" type="submit" value="SUBMIT" />
                </form>

            </div>
            <a class="popup__close" href="#">X</a>
        </div>
    </div>






    <!-- footer================================================================================== -->

    <div class="footer">
        <div class="row">


            <div class="col">
                <img src="{{ asset('styling/homeimg/logo.png') }}" alt="" class="foot-logo">
                <p> We are here to fill in the widening gap within the health care sector. Our facilities, equipment,
                    and physicians are of the highest standards.</p>
            </div>

            <div class="col">
                <h3> Office <div class="underline">
                        <div class="fill"></div>
                </h3>
                <p>Admin</p><br>
                <p>Doctors</p><br>
                <P class="email-id">Our-Email</P><br>
                <h4>Our-Number</h4>
            </div>


            <div class="col">
                <h3>Links <div class="underline">
                        <div class="fill"></div>
                </h3>
                </h3>
                <ul>

                    <li><a href="">Join us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact us</a></li>
                    <li><a href="">Our Location</a></li>

                </ul>
            </div>
            <div class="col">
                <h3>complaint<div class="underline">
                        <div class="fill"></div>
                </h3>
                <form onsubmit="callvalue()">
                    <i class="far fa-envelope"></i>
                    <input id="email" type="email" placeholder="Enter your email " required>
                    <div class="form"><button type="submit" formaction="#popup"><i
                                class="fas fa-arrow-right"></i></button></div>
                </form>
                <div class="social-icons">
                    <i class="fab fa-facebook-f" id="facebook"></i>
                    <i class="fab fa-twitter" id="twitter"></i>
                    <i class="fab fa-whatsapp" id="whatsapp"></i>
                    <i class="fab fa-linkedin" id="linkedin"></i>

                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Department of Surgery website by Team 4</p>
    </div>



    <!-- contact us===============================================================================-->

    <script type="text/javascript">
        function callvalue() {
            var myyemail = document.getElementById('email').value;
            document.myform.myemail.value = myyemail;
        }
    </script>











    <!-- header slider================================================================================== -->
    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 6) {
                counter = 1;
            }
        }, 5000);
    </script>


    <!-- search button JS -->

    <script>
        const searchBox = document.querySelector(".search-box");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const searchInput = document.querySelector("input");
        const searchData = document.querySelector(".search-data");
        searchBtn.onclick = () => {
            searchBox.classList.add("active");
            searchBtn.classList.add("active");
            searchInput.classList.add("active");
            cancelBtn.classList.add("active");
            searchInput.focus();
            if (searchInput.value != "") {
                var values = searchInput.value;
                searchData.classList.remove("active");
                // <!-- searchData.innerHTML = "You just typed " + "<span style='font-weight: 500;'>" + values + "</span>"; -->
            } else {
                searchData.textContent = "";
            }
        }
        cancelBtn.onclick = () => {
            searchBox.classList.remove("active");
            searchBtn.classList.remove("active");
            searchInput.classList.remove("active");
            cancelBtn.classList.remove("active");
            searchData.classList.toggle("active");
            searchInput.value = "";
        }
    </script>

    <!-- scroll line progress -->




    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>





    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>




    <!-- QR code -->
    <script type="text/javascript">
        function callvalue() {
            var myyemail = document.getElementById('email').value;
            document.myform.myemail.value = myyemail;
        }
    </script>





    <!-- loader screen -->
    <script>
        var loader = document.querySelector(".loader")
        window.addEventListener("load", vanish);

        function vanish() {
            loader.classList.add("disppear");
        }
    </script>





    <!-- animation scrolling -->
    <script src="{{ asset('Java Script/skrollr.js') }}"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>

</body>

</html>
